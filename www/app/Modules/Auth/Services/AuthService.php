<?php

namespace App\Modules\Auth\Services;

use App\Models\User;
use App\Modules\Main\Enums\UserStatusEnum;
use App\Modules\Main\Enums\UserTokenTypeEnum;
use Carbon\Carbon;

class AuthService
{
    public function saveUser($request)
    {
        $user = new User;
        $user->name   = $request->name;
        $user->email  = $request->email;
        $user->mobile = msisdn($request->mobile);
        $user->nid    = $request->nid;
        $user->date_of_birth = Carbon::parse($request->date_of_birth)->format("Y-m-d");
        $user->status = UserStatusEnum::Pending;
        $user->remember_token = getApiToken();
        $user->save();

        $user->createToken(UserTokenTypeEnum::API);
        $user->syncRoles("User");

        return $user;
    }

    public function getByUsername($username)
    {
        return User::where("username", trim($username))->first();
    }
}