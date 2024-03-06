<?php

namespace App\Modules\BoAccount\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Enums\UserStatusEnum;
use App\Modules\Main\Http\Requests\UserRequest;
use App\Modules\Main\Services\UserService;
use App\Modules\Main\Utilities\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BoUserController extends Controller
{
    private $view = "BoAccount::pages.user.";
    private $pageName = "Pending User List";
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        // default filter pending
        if ($request->has("status")) {
            $request['status'] = $request->status;
        } else if (auth()->user()->isSuperadmin()) {
            $request['status'] = UserStatusEnum::Verified;
        } else {
            $request['status'] = auth()->user()->status;
        }


        $status = UserStatusEnum::getAll(); 
        $result = $this->userService->getAll($request);

        return view($this->view . "index", [
            "pageName" => $this->pageName,
            "status"   => $status,
            "result"   => $result
        ]);
    }

    public function create()
    {
        $data = (object)[
            'page'   => 'User',
            'method' => 'Create',
            'action' => route('bo-account.user.store'), 
            'status' => UserStatusEnum::getAll(),
            "username" => getUserName(),
            'item'   => [],
        ]; 

        return view($this->view . 'form', compact('data'));
    }

    public function store(UserRequest $request)
    {
        try {
            
            $save = $this->userService->createOrUpdate($request);
            
            if ($save) {
                return JsonResponse::success('Save Successful!');
            } else {
                return JsonResponse::internalError('Please try again!');
            }
            
        } catch(\Exception $e) {
            Log::error('UserController::store - '. $e->getMessage());
            return JsonResponse::internalError('Something went wrong!');
        }
    }

    public function edit($id)
    {
        $data = (object)[
            'page'   => 'User',
            'method' => 'Update',
            'action' => route('bo-account.user.update', $id), 
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
            Log::error('UserController::update - '. $e->getMessage());
            return JsonResponse::internalError('Something went wrong!');
        }
    } 
}
