<?php

namespace App\Modules\Main\Services;

use App\Modules\Main\Enums\ActiveInactiveEnum;
use App\Models\User;
use App\Modules\Main\Enums\UserStatusEnum;
use App\Modules\Main\Enums\UserTokenTypeEnum;
use App\Modules\Main\Models\UserSession;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserService
{
    public function getAll($request)
    {
        return User::where(function($query) use ($request) {
                if ($request->filled("username")) {
                    $query->where("username", $request->username);
                }
                if ($request->filled("name")) {
                    $query->where("name", "like", "%{$request->name}%");
                }
                if ($request->filled("email")) {
                    $query->where("email", $request->email);
                }
                if ($request->filled("mobile")) {
                    $query->whereIn("mobile", msisdns($request->mobile));
                }
                if ($request->filled("nid")) {
                    $query->where("nid", $request->nid);
                } 
                if ($request->filled("status")) {
                    $query->where("status", $request->status);
                } 

                if ($request->filled("role")) {
                    $query->orWhereHas("roles", function($query) use($request) {
                        $query->where("name", $request->role);
                    });
                } 
            })  
            ->orderBy("id", "desc")
            ->paginate($request->per_page ?? 10);
    }

    public function getById($id)
    {
        return User::find($id);
    }

    public function createOrUpdate($request)
    {
        if (!empty($request->id)) {
            $user = User::find($request->id);
        } else {
            $user = new User;
            // unchangeable username
            $user->username = $request->username;
            $user->api_token = getApiToken(); 
            $user->status    = UserStatusEnum::Pending;
        }

        $user->name     = $request->name;
        $user->email    = $request->email; 

        if ($request->filled('password')) {
            $user->password  = Hash::make($request->password);
        }
        
        $user->mobile        = msisdn($request->mobile);
        $user->nid           = $request->nid;
        $user->date_of_birth = Carbon::parse($request->date_of_birth)->format("Y-m-d");
        $user->remember_token = getApiToken(); 

        if ($request->filled('refresh_token')) {
            $user->api_token = getApiToken(); 
        }

        if ($request->filled('status')) {
            $user->status    = $request->status;
        }

        $user->save();

        if ($request->filled('roles')) {
            $user->syncRoles($request->roles);
        }

        // refresh snactum token
        if ($request->filled('refresh_token')) {
            $user->createToken(UserTokenTypeEnum::API);
        }
 
        return $user;
    }
 
    public function getUsersWithNameAndMobile()
    {
        return User::selectRaw("id, CONCAT(name, ' <',  mobile, '>') as name")
            ->where("status", ActiveInactiveEnum::Active)
            ->pluck("name", "id");
    }

    public function changePassword($request)
    {
        $user = User::find($request->id ?? auth()->user()->id);
        $user->password = Hash::make($request->password);
        $user->updated_by        = auth()->user()->id;
        $user->updated_at        = Carbon::now()->format("Y-m-d H:i:s"); 
        return $user->save();
    }

    public function getUserSession($request)
    {
        $users = UserSession::with(['user', 'pretend_user']);
        if ($request->filled('username')) {
            $users->whereHas('user', function ($q) use ($request) {
                $q->where('username', $request->username);
            });
        }
        if ($request->filled('pretend_user_name')) {
            $users->whereHas('pretend_user', function ($q) use ($request) {
                $q->where('username', $request->pretend_user_name);
            });
        }
        if ($request->filled('is_pretend')) {
            $users->where('is_pretend', $request->is_pretend);
        }
        if ($request->filled('guard')) {
            $users->where('guard', $request->guard);
        }
        if ($request->filled('start_date')) {
            $users->whereDate('created_at', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $users->whereDate('created_at', '<=', $request->end_date);
        }
        if ($request->filled('status')) {
            $users->where('status', $request->status);
        }

        return $users->orderBy('id', 'desc')
            ->paginate($request->per_page ?? 10);
    }

    public function saveUserSession($type, $pretendId = null, $guard = 'web')
    {
        try {
            $sessionId = session()->getId();
            if ($type === 'login') { 
                UserSession::insert([
                    'session_id'   => $sessionId,
                    'ip_address'   => request()->ip(),
                    'guard'        => $guard,
                    'user_id'      => auth()->id(),
                    'is_pretend'   => !empty($pretendId) ? "Yes" : "No",
                    'pretend_user_id' => $pretendId,
                    'user_agent'   => request()->userAgent(),
                    'logged_in_at' => now(),
                ]);
            } elseif ($type === 'logout') {
                UserSession::where('session_id', $sessionId)->update(['logged_out_at' => now()]);
            }
        } catch (Exception $e) {
            Log::error("UserService@saveUserSession - Error: " . $e->getMessage());
        }
    }


    public function dropdown()
    {
        return User::whereNotIn('status', [UserStatusEnum::Pending])
            ->pluck(DB::raw("CONCAT(name, ' (', username, ')' ) AS name"), 'id');
    }

}