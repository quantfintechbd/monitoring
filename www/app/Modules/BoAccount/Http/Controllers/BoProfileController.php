<?php

namespace App\Modules\BoAccount\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Modules\Main\Utilities\JsonResponse;
use App\Modules\Main\Services\UserService;
use App\Modules\BoAccount\Enums\CourtesyTitleEnum;
use App\Modules\BoAccount\Http\Requests\BoAccountHolderRequest;
use App\Modules\BoAccount\Http\Requests\BoAuthorizeInformationRequest;
use App\Modules\BoAccount\Http\Requests\BoBankInformationRequest;
use App\Modules\BoAccount\Http\Requests\BoDocumentRequest;
use App\Modules\BoAccount\Http\Requests\BoNomineeInformationRequest;
use App\Modules\BoAccount\Models\Bank;
use App\Modules\BoAccount\Models\BoBranch;
use App\Modules\BoAccount\Services\BoProfileService;
use App\Modules\Main\Enums\DocumentTypeEnum;
use App\Modules\Main\Enums\EkycProgressbarStatusEnum;
use App\Modules\Main\Enums\UserStatusEnum;
use App\Modules\Main\Models\Country;
use App\Modules\Main\Services\EkycProgressbarService;
use App\Modules\Main\Utilities\DocumentService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mpdf\Mpdf;
use Barryvdh\DomPDF\Facade\Pdf;


class BoProfileController extends Controller
{
    private $view = "BoAccount::pages.profile.";
    private $pageName = "BO Profile";
    private $userService;
    private $boProfileService;

    public function __construct(UserService $userService, BoProfileService $boProfileService)
    {
        $this->userService = $userService;
        $this->boProfileService = $boProfileService;
    }

    public function index(Request $request)
    {   
        if (!auth()->user()->isSuperadmin() && auth()->user()->can('access-only-own-data') && auth()->user()->id != $request->id) {
            abort(403);
        }
        
        $curtesy  = CourtesyTitleEnum::getAll();
        $country  = Country::nameOnlyList();
        $branches = BoBranch::list();  
        $banks    = Bank::dropdown();

        // check data in bo_account_holder table 
        $accHolder = $this->boProfileService->getAccountHolderByUserId($request->id);
        // if not exists then get from user table 
        if (empty($accHolder)) {
            $accHolder = $this->userService->getById($request->id); 
            $accHolder->firstname = !empty(explode(" ", $accHolder->name)[0]) ? explode(" ", $accHolder->name)[0] : $accHolder->name;
            $accHolder->lastname  = !empty(explode(" ", $accHolder->name)[1]) ? explode(" ", $accHolder->name)[1] : $accHolder->name;
        }

        // bank information
        $bankInfo = $this->boProfileService->getBankInfomationByUserId($request->id);

        // authorize information 
        $authInfo = $this->boProfileService->getAuthorizeInfomationByUserId($request->id);

        // nominee information 
        $nomineeInfo = $this->boProfileService->getNomineeInfomationByUserId($request->id);

        // documents
        $documents     = $this->boProfileService->getDocumentsByUserId($request->id);

        return view($this->view . "index", [
            "pageName"      => $this->pageName,
            "curtesy"       => $curtesy,
            "country"       => $country,
            "branches"      => $branches,
            "banks"         => $banks,
            "accHolder"     => $accHolder,
            "bankInfo"      => $bankInfo,
            "authInfo"      => $authInfo,
            "nomineeInfo"   => $nomineeInfo, 
            "documents"     => $documents
        ]);
    }

    public function view(Request $request)
    {
        $profile = $this->boProfileService->getUserProfile($request->id); // userid

        if ($request->get('pdf')) { 

            try {     

                ini_set('memory_limit', '1G');
                return  Pdf::loadView($this->view . "profile", [ 
                        "pageName" => $this->pageName,
                        "profile"  => $profile
                    ])
                    ->setOption(['dpi' => 100])
                    ->stream(env('APP_NAME') . '_' . time() . '.pdf');

            } catch (Exception $e) { 
                Log::error('BoProfileController@view - Erro: '. $e->getMessage());
                return redirect()->back()->with('success', 'Something went wrong!');
            }
        }
        
        return view($this->view . "profile", [
            "pageName" => $this->pageName,
            "profile"  => $profile
        ]);
    }

    public function downloadBoFile(Request $request)
    {
        try {       

            ini_set('memory_limit', '1G');
            return  Pdf::loadView("BoAccount::pages.bo_file.pdf", [ 
                    "pageName" => $this->pageName,
                ])
                ->setOption(['dpi' => 100])
                ->stream(env('APP_NAME') . '_' . time() . '.pdf');

        } catch (Exception $e) { 
            Log::error('BoProfileController@view - Erro: '. $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
 
    public function saveAccountHolder(BoAccountHolderRequest $request)
    {
        try {
            $save = $this->boProfileService->createOrUpdateAccountHolder($request);
            
            if ($save) {
                return JsonResponse::success('Save Successful!');
            } else {
                return JsonResponse::internalError('Please try again!');
            }
            
        } catch(\Exception $e) {
            Log::error('BoProfileController@saveAccountHolder - '. $e->getMessage());
            return JsonResponse::internalError('Something went wrong!');
        }
    }
 
    public function saveBankAccount(BoBankInformationRequest $request)
    {
        try {
            $save = $this->boProfileService->createOrUpdateBankInformation($request);
            
            if ($save) {
                return JsonResponse::success('Save Successful!', [
                    
                ]);
            } else {
                return JsonResponse::internalError('Please try again!');
            }
            
        } catch(\Exception $e) {
            Log::error('BoProfileController@saveAccountHolder - '. $e->getMessage());
            return JsonResponse::internalError('Something went wrong!');
        }
    }

    public function saveAuthorizeInformation(BoAuthorizeInformationRequest $request)
    {
        try {
            $save = $this->boProfileService->createOrUpdateAuthorizeInformation($request);
            
            if ($save) {
                return JsonResponse::success('Save Successful!');
            } else {
                return JsonResponse::internalError('Please try again!');
            }
            
        } catch(\Exception $e) {
            Log::error('BoProfileController@saveAccountHolder - '. $e->getMessage());
            return JsonResponse::internalError('Something went wrong!');
        }
    }

    public function saveNomineeInformation(BoNomineeInformationRequest $request)
    {
        try {
            $save = $this->boProfileService->createOrUpdateNomineeInformation($request);
            
            if ($save) {
                return JsonResponse::success('Save Successful!');
            } else {
                return JsonResponse::internalError('Please try again!');
            }
            
        } catch(\Exception $e) {
            Log::error('BoProfileController@saveAccountHolder - '. $e->getMessage());
            return JsonResponse::internalError('Something went wrong!');
        }
    }

    public function saveDocument(BoDocumentRequest $request)
    {
        try {

            $path = DocumentService::upload($request, "file");

            if (empty($path)) {
                return JsonResponse::internalError('Unable to upload file, please try again later!');
            }

            // include other inputs with request param
            $request['type']   = DocumentTypeEnum::BoAccount;
            $request['title']  = $request->title;
            $request['path']   = $path;

            // call saveOrUpload method
            $save = DocumentService::saveOrUpdate($request);
            
            if ($save) {
                // update progress bar
                EkycProgressbarService::save($request->user_id, "bo_documents", EkycProgressbarStatusEnum::Completed);
                // update user profile
                User::where("id", $request->user_id)->update([
                    "status" => UserStatusEnum::Completed
                ]);

                return JsonResponse::success('Update Successful!');
            } else {
                return JsonResponse::internalError('Please try again!');
            }
            
        } catch(\Exception $e) {
            Log::error('BoProfileController@saveAccountHolder - '. $e->getMessage());
            return JsonResponse::internalError('Something went wrong!');
        }
    }
}
