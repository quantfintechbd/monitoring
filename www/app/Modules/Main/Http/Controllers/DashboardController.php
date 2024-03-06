<?php

namespace App\Modules\Main\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Jobs\CredentialSendMailJob;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    private $pageName = "Dashboard";
    private $view = "Main::pages.dashboard.";

    public function __construct()
    {
        //
    }

    public function index(Request $request)
    {
        // auth()->user()->assignRole("Super Admin");

        /*
        * @todo 
        * 1. dashboard
        * 2. form input validation
        * 3. email live test
        * 4. sms live test
        * 5. log management
        */

        return view($this->view . "index", [
            'pageName' => $this->pageName
        ]);
    }



    public function testMail(Request $request)
    {
        $user = auth()->user();
        CredentialSendMailJob::dispatch($user, [
            "username"       => $user->username, 
            "password"       => getRandomString(8)
        ]);
 
        return view("Main::mails.credential", [
            "user" => $user,
            "username" => $user->username,
            "password" => getRandomString(8)
        ]);
    }

}