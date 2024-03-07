<?php

namespace App\Modules\BoAccount\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\BoAccount\Models\Bank;
use App\Modules\BoAccount\Models\BankBranch;
use App\Modules\Main\Enums\ActiveInactiveEnum;
use App\Modules\Main\Utilities\JsonResponse; 
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function bankDropdown(Request $request)
    {
        $banks = Bank::where('status', ActiveInactiveEnum::Active)->pluck("name", "id");
        return JsonResponse::success("Bank Data Found!", $banks);
    }

    public function bankBranchDropdown(Request $request)
    {
        $branches = BankBranch::dropdown($request->bank_id);
        return JsonResponse::success("Branch Data Found!", $branches);
    }

    public function bankRoutingDropdown(Request $request)
    {
        $branches = BankBranch::routingDropdown($request->branch_id);
        return JsonResponse::success("Branch Data Found!", $branches);
    }
}