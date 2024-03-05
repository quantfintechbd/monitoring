<?php

namespace App\Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\Http\Requests\AuthRequest;
use App\Modules\Auth\Http\Requests\RegistrationRequest;
use App\Modules\Auth\Services\AuthOtpService;
use App\Modules\Auth\Services\AuthService;
use App\Modules\Main\Enums\ActiveInactiveEnum;
use App\Modules\Main\Enums\UserStatusEnum;
use App\Modules\Main\Models\UserSession;
use App\Modules\Main\Services\EkycProgressbarService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Exception;

class AuthController extends Controller
{
    private $view = "Auth::pages.auth.";
    private $authService;
    private $authOtpService;

    public function __construct(AuthService $authService, AuthOtpService $authOtpService)
    {
        $this->authService = $authService;
        $this->authOtpService = $authOtpService;
    }


    /**
     * Display the module login screen
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route("dashboard.home");
        }

        return view($this->view . "login", [
            "pageName" => "Log In"
        ]);
    }

    public function auth(AuthRequest $request)
    {
        try {   
            if (Auth::check()) {
                return redirect()->route("dashboard.home");
            }

            $credentials   = $request->only(['username', 'password']);
            $user = $this->authService->getByUsername($request->username);

            if (!$user) {
                return redirect()->back()->withInput()->with("error", "Invalid user, Please try again later!");
            }

            if (in_array($user->status, [UserStatusEnum::Pending])) {
                return redirect()->back()->withInput()->with("error", "Invalid user, Please contact with author.");
            }

            if (Auth::attempt($credentials)) {
                createOrUpdateUserSession('login');
                Log::info("AuthOtpController@auth - user login info - username: " . auth()->user()->username ."(" . (auth()->user()->getRoleNames()->implode("|") ?? null) . ") mobile: " . auth()->user()->mobile . " ip: ". $request->ip());
                return redirect()->route("dashboard.home")->with("success", "Login Successful!");
            }

            return redirect()->back()->withInput()->with("error", "Login failed, Please try again!");

        } catch(Exception $e) {
            Log::error("AuthController@auth - Error - " . $e->getMessage() . ", Line - " . $e->getLine());
            return redirect()->back()->withInput()->with("error", "Someting went wrong!");
        } 
    }

    public function register(Request $request)
    {
        return view($this->view . "register", [
            "pageName" => "Register Account",
            "subTitle" => "Get your free UFTCL account now."
        ]);
    }

    public function saveUser(RegistrationRequest $request)
    {
        try { 
            $user = $this->authService->saveUser($request);
            $otp  = $this->authOtpService->otp($request);
            
            // save form progress
            EkycProgressbarService::save($user->id, 'basic_registration');
            
            if (!$otp["status"]) {
                return redirect()->route("login")->withInput()->with("error", $otp["message"]);
            } 

            $params = [
                "remember_token" => $user->remember_token,
                "mobile" => msisdn($request->mobile),
                "email"  => $request->email
            ];
            return redirect()->route("otp.verify", $params)->with("success", $otp["message"]);
      
        } catch(Exception $e) {
            Log::error("AuthController@saveUser - Error - " . $e->getMessage() . ", Line - " . $e->getLine());
            return redirect()->back()->withInput()->with("error", "Someting went wrong!");
        } 
    }
 

    public function logout(Request $request)
    {
        createOrUpdateUserSession('logout');

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with("success", "Logout Successful!");
    }

}