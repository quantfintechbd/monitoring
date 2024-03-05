<?php

namespace App\Modules\BoAccount\Services;

use App\Models\User;
use App\Modules\BoAccount\Enums\BoDocumentTypeEnum;
use App\Modules\BoAccount\Enums\BoTypeEnum;
use App\Modules\BoAccount\Enums\NomineeTypeEnum;
use App\Modules\BoAccount\Enums\StockExchangeEnum;
use App\Modules\BoAccount\Models\BoAccountHolder;
use App\Modules\BoAccount\Models\BoAuthorizeInformation;
use App\Modules\BoAccount\Models\BoBankInformation;
use App\Modules\BoAccount\Models\BoNomineeInformation;
use App\Modules\Main\Enums\ActiveInactiveEnum;
use App\Modules\Main\Enums\DocumentTypeEnum; 
use App\Modules\Main\Services\EkycProgressbarService;
use App\Modules\Main\Utilities\DocumentService;
use Carbon\Carbon; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BoProfileService
{

    public function getUserProfile($userId)
    {
        return User::with(["boAccount", "boBankInfo", "boAuthorizeInfo", "boNomineeInfo", "boDocuments"])
            ->where("id", $userId)
            ->first();
    }

    public function getAccountHolderByUserId($userId)
    {
        // parent acc holder 
        $acc = BoAccountHolder::where("user_id", $userId)
            ->whereNull("parent_id")
            ->first();
            
        if (!empty($acc)) {
            // get existsing joint a/c holder
            $joint = BoAccountHolder::where("user_id", $acc->user_id)
                ->where("parent_id", $acc->id)
                ->where("type_of_client", BoTypeEnum::Joint)
                ->first();

            if (!empty($joint)) { 
                $data = $joint->toArray();
                foreach($data as $key => $value) {
                    $acc->{"joint_{$key}"} = $value;
                }
            }
        }

        return $acc;
    }

    public function createOrUpdateAccountHolder($request)
    {
        try {

            DB::beginTransaction();

            // parent acc holder  
            $acc = BoAccountHolder::firstOrNew([
                "user_id"   => $request->user_id,
                "parent_id" => null
            ]);  

            $acc->user_id        = $request->user_id;
            $acc->parent_id      = null; // null for first a/c holder
            $acc->type_of_client = $request->type_of_client;
            $acc->courtesy_title = $request->courtesy_title;
            $acc->firstname      = $request->firstname;
            $acc->lastname       = $request->lastname;
            $acc->occupation     = $request->occupation;
            $acc->date_of_birth  = Carbon::parse($request->date_of_birth)->format("Y-m-d");;
            $acc->father_name    = $request->father_name;
            $acc->mother_name    = $request->mother_name;
            $acc->address        = $request->address;
            $acc->city           = $request->city;
            $acc->post_code      = $request->post_code;
            $acc->division       = $request->division;
            $acc->country        = $request->country;
            $acc->mobile         = $request->mobile;
            $acc->email          = $request->email;
            $acc->telephone      = $request->telephone;
            $acc->fax            = $request->fax;
            $acc->nationality    = $request->nationality;
            $acc->nid            = $request->nid;
            $acc->tin            = $request->tin;
            $acc->branch         = $request->branch;
            $acc->stock_exchange = StockExchangeEnum::DSE;
            $acc->residency      = $request->residency;
            $acc->gender         = $request->gender;
            $acc->is_director    = $request->is_director == 'on' ? 1 : 0;
            if (!empty($acc->is_director)) {
                $acc->director_company     = $request->director_company;
            }
            $acc->save();

            // joint account holder
            if ($request->type_of_client == BoTypeEnum::Joint) {
        
                // get existsing joint a/c holder
                $joint = BoAccountHolder::firstOrNew([
                    "user_id"        => $acc->user_id,
                    "type_of_client" => BoTypeEnum::Joint,
                    "parent_id"      => $acc->id
                ]); 

                $joint->user_id        = $acc->user_id;
                $joint->parent_id      = $acc->id; // first a/c id
                $joint->type_of_client = BoTypeEnum::Joint;
                $joint->courtesy_title = $request->joint_courtesy_title;
                $joint->firstname      = $request->joint_firstname;
                $joint->lastname       = $request->joint_lastname;
                $joint->occupation     = $request->joint_occupation;
                $joint->date_of_birth  = Carbon::parse($request->joint_date_of_birth)->format("Y-m-d");
                $joint->father_name    = $request->joint_father_name;
                $joint->mother_name    = $request->joint_mother_name;
                $joint->address        = $request->joint_address;
                $joint->city           = $request->joint_city;
                $joint->post_code      = $request->joint_post_code;
                $joint->division       = $request->joint_division;
                $joint->country        = $request->joint_country;
                $joint->email          = $request->joint_email;
                $joint->mobile         = $request->joint_mobile;
                $joint->telephone      = $request->joint_telephone;
                $joint->fax            = $request->joint_fax;
                $joint->save();
            }

            // update progress bar status
            EkycProgressbarService::save($acc->user_id, "bo_account_holder");

            DB::commit();

            return true;

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('BoProfileService@createOrUpdateAccountHolder - Error: '. $e->getMessage(). 'File:'. $e->getFile(). ' Line: ' . $e->getLine());
            return false;
        } 

    }
    public function getBankInfomationByUserId($userId)
    {
        return BoBankInformation::where("user_id", $userId) 
            ->first();
    }

    public function createOrUpdateBankInformation($request)
    {
        try {

            DB::beginTransaction();

            $bank = BoBankInformation::firstOrNew([
                "user_id"   => $request->user_id
            ]);

            $bank->user_id        = $request->user_id;
            $bank->bank_id        = $request->bank_id;
            $bank->branch_id      = $request->branch_id;
            $bank->account_number = $request->account_number;
            $bank->save();

            // update progress bar status
            EkycProgressbarService::save($bank->user_id, "bo_bank_information");

            DB::commit();
            return true;

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('BoProfileService::createOrUpdateBankInformation - Error: '. $e->getMessage(). 'File:'. $e->getFile(). ' Line: ' . $e->getLine());
            return false;
        } 
    }


    public function getAuthorizeInfomationByUserId($userId)
    {
        return BoAuthorizeInformation::where("user_id", $userId)->first();
    }

    public function createOrUpdateAuthorizeInformation($request)
    {
        try {

            DB::beginTransaction();

            // get existsing joint a/c holder
            $authorize = BoAuthorizeInformation::firstOrNew([
                "user_id"  => $request->user_id,
            ]); 

            $authorize->user_id        = $request->user_id;
            $authorize->courtesy_title = $request->courtesy_title;
            $authorize->firstname      = $request->firstname;
            $authorize->lastname       = $request->lastname;
            $authorize->occupation     = $request->occupation;
            $authorize->date_of_birth  = $request->date_of_birth;
            $authorize->nid            = $request->nid;
            $authorize->father_name    = $request->father_name;
            $authorize->mother_name    = $request->mother_name;
            $authorize->address        = $request->address;
            $authorize->city           = $request->city;
            $authorize->post_code      = $request->post_code;
            $authorize->division       = $request->division;
            $authorize->country        = $request->country;
            $authorize->email          = $request->email;
            $authorize->mobile         = $request->mobile;
            $authorize->telephone      = $request->telephone;
            
            $authorize->save();
            // update progress bar status
            EkycProgressbarService::save($authorize->user_id, "bo_authorize_information");

            DB::commit();

            return true;

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('BoProfileService::createOrUpdateAuthorizeInformation - Error: '. $e->getMessage(). 'File:'. $e->getFile(). ' Line: ' . $e->getLine());
            return false;
        } 
    }

    public function getNomineeInfomationByUserId($userId)
    {
        try {
            $data = BoNomineeInformation::where("user_id", $userId)->get();
            $result = [];
            foreach ($data as $value) {
                if (in_array($value->type, [NomineeTypeEnum::Guardian_Of_Nominee_1, NomineeTypeEnum::Nominee_2_Of_Acc_Holder, NomineeTypeEnum::Guardian_Of_Nominee_2])) {
                    foreach($value->toArray() as $field => $val ) {
                        $name = str_replace(' ', '_', $value->type);
                        $name = strtolower($name) . "_" . $field;
                        $result[$name] = $val;
                    } 
                } else {
                    $result = $value;
                }
            }
            return $result;

        } catch (\Exception $e) {
            Log::error('BoProfileService::getNomineeInfomationByUserId - Error: '. $e->getMessage(). 'File:'. $e->getFile(). ' Line: ' . $e->getLine());
            return [];
        } 
    }

    public function createOrUpdateNomineeInformation($request)
    {
        try {

            DB::beginTransaction();

            // nominee
            $nominee1 = BoNomineeInformation::firstOrNew([
                "user_id"  => $request->user_id,
                "type"     => NomineeTypeEnum::Nominee_1_Of_Acc_Holder
            ]);
            $nominee1->user_id        = $request->user_id;
            $nominee1->parent_id      = null;
            $nominee1->type           = NomineeTypeEnum::Nominee_1_Of_Acc_Holder;
            $nominee1->courtesy_title = $request->courtesy_title;
            $nominee1->firstname      = $request->firstname;
            $nominee1->lastname       = $request->lastname;
            $nominee1->relationship   = $request->relationship;
            $nominee1->percentage     = $request->percentage;
            $nominee1->residency      = $request->residency;
            $nominee1->date_of_birth  = Carbon::parse($request->date_of_birth)->format("Y-m-d");
            $nominee1->nid            = $request->nid;
            $nominee1->address        = $request->address;
            $nominee1->city           = $request->city;
            $nominee1->post_code      = $request->post_code;
            $nominee1->division       = $request->division;
            $nominee1->country        = $request->country;
            $nominee1->email          = $request->email;
            $nominee1->mobile         = $request->mobile;
            $nominee1->telephone      = $request->telephone;
            $nominee1->fax            = $request->fax; 
            $nominee1->save();

            // nominee 1's guardian
            if ($request->filled('is_guardian') && $request->is_guardian == ActiveInactiveEnum::Active)
            {
                $nom1Guardian = BoNomineeInformation::firstOrNew([ 
                    "user_id"   => $nominee1->user_id, 
                    "parent_id" => $nominee1->id,
                    "type"      => NomineeTypeEnum::Guardian_Of_Nominee_1
                ]);

                $nom1Guardian->user_id        = $nominee1->user_id;
                $nom1Guardian->parent_id      = $nominee1->id;
                $nom1Guardian->type           = NomineeTypeEnum::Guardian_Of_Nominee_1;
                $nom1Guardian->courtesy_title = $request->guardian_courtesy_title;
                $nom1Guardian->firstname      = $request->guardian_firstname;
                $nom1Guardian->lastname       = $request->guardian_lastname;
                $nom1Guardian->relationship   = $request->guardian_relationship;
                $nom1Guardian->maturity_date_of_minor  = Carbon::parse($request->maturity_date_of_minor)->format("Y-m-d");
                $nom1Guardian->residency      = $request->guardian_residency;
                $nom1Guardian->date_of_birth  = Carbon::parse($request->guardian_date_of_birth)->format("Y-m-d");
                $nom1Guardian->nid            = $request->guardian_nid;
                $nom1Guardian->address        = $request->guardian_address;
                $nom1Guardian->city           = $request->guardian_city;
                $nom1Guardian->post_code      = $request->guardian_post_code;
                $nom1Guardian->division       = $request->guardian_division;
                $nom1Guardian->country        = $request->guardian_country;
                $nom1Guardian->email          = $request->guardian_email;
                $nom1Guardian->mobile         = $request->guardian_mobile;
                $nom1Guardian->telephone      = $request->guardian_telephone;
                $nom1Guardian->fax            = $request->guardian_fax; 
                $nom1Guardian->status         = ActiveInactiveEnum::Active;
                $nom1Guardian->save(); 
            } else {
                $nom1Guardian = BoNomineeInformation::where([ 
                    "user_id"   => $nominee1->user_id, 
                    "parent_id" => $nominee1->id,
                    "type"      => NomineeTypeEnum::Guardian_Of_Nominee_1
                ])
                ->first();

                if (!empty($nom1Guardian)) {
                    $nom1Guardian->status = ActiveInactiveEnum::Inactive;
                    $nom1Guardian->save();
                }
            }

            // nominee 2
            if ($request->filled('nominee_2') && $request->nominee_2 == ActiveInactiveEnum::Active)
            { 
                $nominee2 = BoNomineeInformation::firstOrNew([ 
                    "user_id"   => $nominee1->user_id, 
                    "parent_id" => $nominee1->id,
                    "type"      => NomineeTypeEnum::Guardian_Of_Nominee_2
                ]); 

                $nominee2->user_id        = $nominee1->user_id;
                $nominee2->parent_id      = $nominee1->id;
                $nominee2->type           = NomineeTypeEnum::Guardian_Of_Nominee_2;
                $nominee2->courtesy_title = $request->nominee_2_courtesy_title;
                $nominee2->firstname      = $request->nominee_2_firstname;
                $nominee2->lastname       = $request->nominee_2_lastname;
                $nominee2->relationship   = $request->nominee_2_relationship;
                $nominee2->percentage     = $request->nominee_2_percentage;
                $nominee2->residency      = $request->nominee_2_residency;
                $nominee2->date_of_birth  = Carbon::parse($request->nominee_2_date_of_birth)->format("Y-m-d");
                $nominee2->nid            = $request->nominee_2_nid;
                $nominee2->address        = $request->nominee_2_address;
                $nominee2->city           = $request->nominee_2_city;
                $nominee2->post_code      = $request->nominee_2_post_code;
                $nominee2->division       = $request->nominee_2_division;
                $nominee2->country        = $request->nominee_2_country;
                $nominee2->email          = $request->nominee_2_email;
                $nominee2->mobile         = $request->nominee_2_mobile;
                $nominee2->telephone      = $request->nominee_2_telephone;
                $nominee2->fax            = $request->nominee_2_fax; 
                $nominee2->status         = ActiveInactiveEnum::Active;
                $nominee2->save();
            } else {
                $nominee2 = BoNomineeInformation::where([ 
                    "user_id"   => $nominee1->user_id, 
                    "type"      => NomineeTypeEnum::Guardian_Of_Nominee_2
                ])
                ->first();

                if (!empty($nominee2)) {
                    $nominee2->status = ActiveInactiveEnum::Inactive;
                    $nominee2->save();
                }
            }

            // nominee 2's guardian
            if ($request->filled('nominee_2_is_guardian') && $request->nominee_2_is_guardian == ActiveInactiveEnum::Active)
            {
                $nom2Guardian = BoNomineeInformation::firstOrNew([ 
                    "user_id"   => $nominee1->user_id, 
                    "parent_id" => $nominee1->id,
                    "type"      => NomineeTypeEnum::Guardian_Of_Nominee_2
                ]);

                $nom2Guardian->user_id        = $nominee1->user_id;
                $nom2Guardian->parent_id      = $nominee2->id; // child of nominee 2
                $nom2Guardian->type           = NomineeTypeEnum::Guardian_Of_Nominee_2;
                $nom2Guardian->courtesy_title = $request->nominee_2_guardian_courtesy_title;
                $nom2Guardian->firstname      = $request->nominee_2_guardian_firstname;
                $nom2Guardian->lastname       = $request->nominee_2_guardian_lastname;
                $nom2Guardian->relationship   = $request->nominee_2_guardian_relationship;
                $nom2Guardian->maturity_date_of_minor  = Carbon::parse($request->maturity_date_of_minor)->format("Y-m-d");
                $nom2Guardian->residency      = $request->nominee_2_guardian_residency;
                $nom2Guardian->date_of_birth  = Carbon::parse($request->nominee_2_guardian_date_of_birth)->format("Y-m-d");
                $nom2Guardian->nid            = $request->nominee_2_guardian_nid;
                $nom2Guardian->address        = $request->nominee_2_guardian_address;
                $nom2Guardian->city           = $request->nominee_2_guardian_city;
                $nom2Guardian->post_code      = $request->nominee_2_guardian_post_code;
                $nom2Guardian->division       = $request->nominee_2_guardian_division;
                $nom2Guardian->country        = $request->nominee_2_guardian_country;
                $nom2Guardian->email          = $request->nominee_2_guardian_email;
                $nom2Guardian->mobile         = $request->nominee_2_guardian_mobile;
                $nom2Guardian->telephone      = $request->nominee_2_guardian_telephone;
                $nom2Guardian->fax            = $request->nominee_2_guardian_fax; 
                $nom2Guardian->status         = ActiveInactiveEnum::Active;
                $nom2Guardian->save(); 
            } else {
                $nom2Guardian = BoNomineeInformation::where([
                    "user_id"   => $nominee1->user_id, 
                    "type"      => NomineeTypeEnum::Guardian_Of_Nominee_2
                ])
                ->first();
                if (!empty($nom2Guardian)) {
                    $nom2Guardian->status = ActiveInactiveEnum::Inactive;
                    $nom2Guardian->save();
                }
            }


            // update progress bar status
            EkycProgressbarService::save($request->user_id, "bo_nominee_information");

            DB::commit();

            return true;

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('BoProfileService::createOrUpdateNomineeInformation - Error: '. $e->getMessage(). 'File:'. $e->getFile(). ' Line: ' . $e->getLine());
            return false;
        } 
    }
    
    public function getDocumentsByUserId($userId)
    {
        try {
            $requestData = [
                'user_id' => $userId,
                'type'    => DocumentTypeEnum::BoAccount,
            ];
            
            // Get all documents
            $documents = DocumentService::getAll((object) $requestData, false);
            
            // Create an associative array from document titles
            $pData = $documents->keyBy('title')->toArray();
            
            // Create an array of fields
            $fields = array_combine(BoDocumentTypeEnum::getValues(), BoDocumentTypeEnum::getValues());
            
            // Merge field information with document data
            $result = array_map(function ($field) use ($pData) {
                return $pData[$field] ?? ['id' => null, 'title' => $field, 'path' => ''];
            }, $fields);
            
            return $result; 

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('BoProfileService@getDocumentsByUserId - Error: '. $e->getMessage(). 'File:'. $e->getFile(). ' Line: ' . $e->getLine());
            return array_combine(BoDocumentTypeEnum::getValues(), BoDocumentTypeEnum::getValues());
        } 
    }
 

}