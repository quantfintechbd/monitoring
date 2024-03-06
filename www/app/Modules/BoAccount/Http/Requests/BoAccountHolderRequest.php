<?php

namespace App\Modules\BoAccount\Http\Requests;

use App\Modules\BoAccount\Enums\BoTypeEnum;
use App\Modules\BoAccount\Enums\CourtesyTitleEnum;
use App\Modules\BoAccount\Enums\GenderTypeEnum;
use App\Modules\BoAccount\Enums\ResidentialStatusEnum;
use App\Modules\BoAccount\Enums\StockExchangeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BoAccountHolderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check(); // You may adjust the authorization logic as per your requirements
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id'          => 'required|exists:users,id',
            'parent_id'        => 'nullable|exists:bo_account_holder,id',
            'type_of_client'   => 'required|in:' . implode(',', BoTypeEnum::getValues()),
            'courtesy_title'   => 'required|in:' . implode(',', CourtesyTitleEnum::getValues()),
            'firstname'        => 'required|string|max:100',
            'lastname'         => 'required|string|max:30',
            'occupation'       => 'required|string|max:64',
            'date_of_birth'    => 'required|date',
            'father_name'      => 'required|string|max:30',
            'mother_name'      => 'required|string|max:30',
            'address'          => 'required|string|max:90',
            'city'             => 'required|string|max:25',
            'post_code'        => 'required|string|max:10',
            'division'         => 'required|string|max:25',
            'country'          => 'required|string|max:50',  
            'mobile'           => [
                    'required',
                    'string',
                    'regex:/^(\+88|88)?01[3-9]{1}\d{8}$/',
                    'max:20'
                ],
            'telephone'        => 'nullable|string|max:20',
            'fax'              => 'nullable|string|max:20',
            'email'            => 'required|email|max:80',
            'nationality'      => 'required|string|max:20',
            'nid'              => 'required|numeric|max:99999999999999999999',
            'tin'              => 'nullable|string|max:50',
            'gender'           => 'required|in:' . implode(',', GenderTypeEnum::getValues()),  
            'residency'        => 'nullable|in:' . implode(',', ResidentialStatusEnum::getValues()),  
            'branch'           => 'required|string|max:80', 
            'stock_exchange'   => 'nullable|in:' . implode(',', StockExchangeEnum::getValues()),  
            'is_director'      => 'nullable',
            'director_company' => 'required_if:is_director,1|max:255',

            // if joint then required all without fax & telephone 
            "joint_courtesy_title"  => ["required_if:type_of_client," . BoTypeEnum::Joint],
            "joint_firstname"       => ["required_if:type_of_client," . BoTypeEnum::Joint, 'max:100'],
            "joint_lastname"        => ["required_if:type_of_client," . BoTypeEnum::Joint, 'max:30'],
            "joint_occupation"      => ["required_if:type_of_client," . BoTypeEnum::Joint, 'max:64'],
            "joint_date_of_birth"   => ["required_if:type_of_client," . BoTypeEnum::Joint],
            "joint_father_name"     => ["required_if:type_of_client," . BoTypeEnum::Joint, 'max:30'],
            "joint_mother_name"     => ["required_if:type_of_client," . BoTypeEnum::Joint, 'max:30'],
            "joint_address"         => ["required_if:type_of_client," . BoTypeEnum::Joint, 'max:90'],
            "joint_city"            => ["required_if:type_of_client," . BoTypeEnum::Joint, 'max:25'],
            "joint_post_code"       => ["required_if:type_of_client," . BoTypeEnum::Joint, 'max:10'],
            "joint_division"        => ["required_if:type_of_client," . BoTypeEnum::Joint, 'max:25'],
            "joint_country"         => ["required_if:type_of_client," . BoTypeEnum::Joint, 'max:50'],
            "joint_mobile"          => ["required_if:type_of_client," . BoTypeEnum::Joint],
            "joint_email"           => ["required_if:type_of_client," . BoTypeEnum::Joint, 'max:80'],
            "joint_telephone"       => 'nullable',
            "joint_fax"             => 'nullable',
        ];
    }
}


