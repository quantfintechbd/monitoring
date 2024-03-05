<?php

namespace App\Modules\Main\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Enums\UserStatusEnum;
use App\Modules\Main\Http\Requests\PasswordChangeRequest;
use App\Modules\Main\Http\Requests\PasswordResetRequest;
use App\Modules\Main\Utilities\JsonResponse;
use App\Modules\Main\Http\Requests\UserRequest;
use App\Modules\Main\Models\Role;
use App\Modules\Main\Models\UserSession;
use App\Modules\Main\Services\EkycProgressbarService;
use App\Modules\Main\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    private $view = "Main::pages.user.";
    private $pageName = "Users";
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        $status = UserStatusEnum::getAll();
        $roles  = Role::pluck('name', 'name')
                    ->toArray();
        $result = $this->userService->getAll($request);

        return view($this->view . "index", [
            "pageName" => $this->pageName,
            "roles"    => $roles,
            "status"   => $status,
            "result"   => $result
        ]);
    }

    public function create()
    {
        $data = (object)[
            'page'   => 'User',
            'method' => 'Create',
            'action' => route('dashboard.user.store'),
            'roles'  => Role::pluck('name', 'name')
                        ->toArray(), 
            'status' => UserStatusEnum::getAll(),
            "username" => getUserName(),
            'item'   => [],
        ]; 

        return view($this->view . 'form', compact('data'));
    }

    public function store(UserRequest $request)
    {
        try {
            
            $user = $this->userService->createOrUpdate($request);

            // save form progress
            EkycProgressbarService::save($user->id, 'basic_registration');
            EkycProgressbarService::save($user->id, 'otp_verification');
            
            if ($user) {
                return JsonResponse::success('Save Successful!');
            } else {
                return JsonResponse::internalError('Please try again!');
            }
            
        } catch(\Exception $e) {
            Log::error('UserController@store - Error: '. $e->getMessage() . ', File: '. $e->getFile() .', Line:'. $e->getLine());
            return JsonResponse::internalError('Something went wrong!');
        }
    }


    public function edit($id)
    {
        $data = (object)[
            'page'   => 'User',
            'method' => 'Update',
            'action' => route('dashboard.user.update', $id),
            'roles'  => Role::pluck('name', 'name')
                        ->toArray(), 
            'status' => UserStatusEnum::getAll(),
            'item'   => $this->userService->getById($id),
        ]; 
        
        return view($this->view . 'form', compact('data'));
    }


    public function update(UserRequest $request, $id)
    {
        try {
            $update = $this->userService->createOrUpdate($request);
            
            if ($update) {
                return JsonResponse::success('Update Successful!');
            } else {
                return JsonResponse::internalError('Please try again!');
            }
            
        } catch(\Exception $e) {
            Log::error('UserController@update - Error: '. $e->getMessage() . ', File: '. $e->getFile() .', Line:'. $e->getLine());
            return JsonResponse::internalError('Something went wrong!');
        }
    }

    // profile view
    public function profile()
    {
        $item = $this->userService->getById(auth()->user()->id);
        $roles = Role::pluck('name', 'name');

        return view($this->view.'profile', compact(
            'item',
            'roles'
        ));
    }

    // profile edit
    public function profileEdit()
    {
        $data = (object)[
            'page'   => 'Profile',
            'method' => 'Update',
            'action' => route('dashboard.user.profile.update', auth()->user()->id),
            'item'   => $this->userService->getById(auth()->user()->id),
        ]; 
        
        return view($this->view . 'profile-form', compact('data'));
    }

    // password reset
    public function resetPassword(Request $request)
    {
        $data = (object)[
            'page'   => '',
            'method' => 'Reset Password',
            'action' => route('dashboard.user.reset-password', $request->id),
        ]; 
        
        return view($this->view . 'reset-password', compact('data'));
    }

    public function restPasswordUpdate(PasswordResetRequest $request)
    {
        try {
            $update = $this->userService->changePassword($request);
            
            if ($update) {
                return JsonResponse::success('Password Reset Successful!');
            } else {
                return JsonResponse::internalError('Please try again!');
            }
            
        } catch(\Exception $e) {
            Log::error('UserController@restPasswordUpdate - Error: '. $e->getMessage() . ', File: '. $e->getFile() .', Line:'. $e->getLine());
            return JsonResponse::internalError('Something went wrong!');
        }
    }
    

    // password change
    public function changePassword(Request $request)
    {
        $data = (object)[
            'page'   => '',
            'method' => 'Change Password',
            'action' => route('dashboard.user.profile.password-update'),
        ]; 
        
        return view($this->view . 'change-password', compact('data'));
    }

    public function passwordUpdate(PasswordChangeRequest $request)
    {
        try {
            $update = $this->userService->changePassword($request);
            
            if ($update) {
                return JsonResponse::success('Update Successful!');
            } else {
                return JsonResponse::internalError('Please try again!');
            }
            
        } catch(\Exception $e) {
            Log::error('UserController@passwordUpdate - Error: '. $e->getMessage() . ', File: '. $e->getFile() .', Line:'. $e->getLine());
            return JsonResponse::internalError('Something went wrong!');
        }
    }

    public function pretendLogin(Request $request, $id)
    {
        try {
            // Delete all user sessions except the current one
            session()->getHandler()->destroy(
                session()->getId()
            );

            createOrUpdateUserSession('login', $id);

            if (Auth::loginUsingId($id)) { 
                return redirect()->route('dashboard.home')->with('success', 'Pretend login successful!');
            } else {
                return redirect()->back()->with('error', 'Please try again!');
            }
            
        } catch(\Exception $e) {
            Log::error('UserController@pretendLogin - Error: '. $e->getMessage() . ', File: '. $e->getFile() .', Line:'. $e->getLine());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }



}
