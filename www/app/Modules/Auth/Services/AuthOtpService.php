<?php

namespace App\Modules\Auth\Services;

use App\Models\User;
use App\Modules\Auth\Models\Otp;
use App\Modules\Main\Enums\OtpStatusEnum;
use Carbon\Carbon;

class AuthOtpService
{
    public function otp($request)
    { 
        $count = Otp::where(function ($query) use ($request) {
                $query->whereIn("to", msisdns($request->mobile))
                    ->orWhere("to", $request->email);
            })
            ->where("status", OtpStatusEnum::Sent)
            ->whereDate("created_at", "=", Carbon::now()->format("Y-m-d"))
            ->count();

        if ($count >= config("common.otp.maximum_per_user")) {
            return [
                "status"      => false,
                "message"     => "Sorry, you have reached the maximum number of OTP requests for today.\r\nWe have already sent a total of {$count} OTP(s) to your account.\r\nFor security purposes, we limit the number of OTP requests to ensure the safety of your account.\r\nPlease try again tomorrow or contact our support team if you require immediate assistance.\r\nThank you for your understanding.",
                "expired_time" => Carbon::now()->format("Y-m-d H:i:s"),
                "mobile"       => msisdn($request->mobile),
                "email"        => $request->email
            ];
        }

        $services = config("common.otp.service_enable");
        $exists = Otp::where(function ($query) use ($request) {
                $query->whereIn("to", msisdns($request->mobile))
                    ->orWhere("to", $request->email);
            })
            ->whereIn("status", [OtpStatusEnum::Pending, OtpStatusEnum::Read])
            ->where("expired_time", ">=", Carbon::now()->format("Y-m-d H:i:s"))
            ->first();
         
        if ($exists) {  
            return [
                "status"       => true, 
                "message"      => "An One-Time Password (OTP) already sent to you via " . implode(" and ", $services),
                "expired_time" => $exists->expired_time,
                "mobile"       => msisdn($request->mobile),
                "email"        => $request->email
            ];
        }

        // COMMON VARIABLES 
        $expiredAt     = Carbon::now()->addMinutes(config("common.otp.expired_in_minutes"))->format("Y-m-d H:i:s");
        $to            = [
            "SMS"   => msisdn($request->mobile),
            "EMAIL" => $request->email,
        ];
        $otp           = mt_rand(111111, 999999);
        
        $message = [];
        foreach($services as $service) {
            $service = strtoupper($service);
            // insert into otps table
            $otpData = new Otp;
            $otpData->type         = $service;
            $otpData->to           = $to[$service] ?? "";
            $otpData->otp          = $otp;
            $otpData->status       = OtpStatusEnum::Pending;
            $otpData->expired_time = $expiredAt;
            $otpData->created_at   = Carbon::now()->format("Y-m-d H:i:s"); 
            $otpData->ip_address   = $request->ip() ?? null;
            $otpData->save();

            $message[] = "{$service}: " . mask($otpData->to);
        }
    
        // return response time 
        return [  
            "status"       => true,
            "vtoken"       => $request->input("vtoken"),
            "message"      => "We just sent you a secure One-Time Password (OTP) via " . implode(" and ", $message),
            "expired_time" => $expiredAt,
            "mobile"       => msisdn($request->mobile),
            "email"        => $request->email
        ]; 
    }

    public function getUserByRememberToken($token)
    {
        return User::where("remember_token", $token)->first();

    }

    public function checkValidOtp($data = [])
    {
        $expiredAt = Carbon::now()->format("Y-m-d H:i:s");
        $query = Otp::where(function ($query) use ($data) {
                $query->whereIn("to", msisdns($data['mobile']))
                    ->orWhere("to", $data['email']);
            })
            ->where("otp", $data["otp"])
            ->whereIn("status", [OtpStatusEnum::Pending, OtpStatusEnum::Read])
            ->where("expired_time", ">=", $expiredAt);

        $exists = $query->exists();
        
        if (!$exists) {
            return false;
        }

        $query->update([
            'status' => OtpStatusEnum::Read
        ]);

        return true;
    }

    public function getUserName($prefix = 'BOID', $lenth = 12)
    {
        $user = User::orderByDesc("id")->first();
        $sl = ($user->id ?? 1) + 1;
        return $prefix . str_pad($sl, $lenth, '0', STR_PAD_LEFT);
    }

}