<?php

namespace App\Modules\BoAccount\Http\Requests;

use App\Modules\BoAccount\Enums\ClientTypeEnum;
use App\Modules\BoAccount\Enums\CourtesyTitleEnum;
use App\Modules\BoAccount\Enums\ResidentialStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BoAuthorizeInformationRequest extends FormRequest
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
            'nid'              => 'required|numeric|max:99999999999999999999',
        ];
    }
}


