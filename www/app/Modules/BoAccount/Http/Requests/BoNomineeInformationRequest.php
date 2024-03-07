<?php

namespace App\Modules\BoAccount\Http\Requests;

use App\Modules\BoAccount\Enums\CourtesyTitleEnum; 
use App\Modules\BoAccount\Enums\ResidentialStatusEnum;
use App\Modules\Main\Enums\ActiveInactiveEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BoNomineeInformationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check(); 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $nominee = [];
        $guardian = [];
        $nominee2 = [];
        $nominee2Guardian = [];

        $nominee = [
            // nominee 1
            'user_id'          => 'required|exists:users,id',
            'courtesy_title'   => 'required|in:' . implode(',', CourtesyTitleEnum::getValues()),
            'firstname'        => 'required|string|max:100',
            'lastname'         => 'required|string|max:30',
            'relationship'     => 'required|string|max:20',
            'percentage'       => 'required|min:1|max:10',
            'residency'        => 'nullable|in:' . implode(',', ResidentialStatusEnum::getValues()),  
            'date_of_birth'    => 'required|date',
            'nid'              => 'required|numeric|max:99999999999999999999',
            'address'          => 'required|string|max:90',
            'city'             => 'required|string|max:25',
            'post_code'        => 'required|string|max:10',
            'division'         => 'required|string|max:25',
            'country'          => 'required|string|max:50',  
            'email'            => 'required|email|max:80',
            'mobile'           => [
                'required',
                'string',
                'regex:/^(\+88|88)?01[3-9]{1}\d{8}$/',
                'max:20'
            ],
            'telephone'        => 'nullable|string|max:20',
            'fax'              => 'nullable|string|max:20',
        ];
        
        // nominee 1's guardian
        if ($this->is_guardian == ActiveInactiveEnum::Active) {
            $guardian = [
                'is_guardian'             => 'sometimes|in:'. implode(',', ActiveInactiveEnum::getValues()), 
                'guardian_courtesy_title' => 'required_if:is_guardian,1|in:' . implode(',', CourtesyTitleEnum::getValues()), 
                'guardian_firstname'      => 'required_if:is_guardian,1|max:100', 
                'guardian_lastname'       => 'required_if:is_guardian,1|max:30', 
                'guardian_relationship'   => 'required_if:is_guardian,1|max:20', 
                'guardian_maturity_date_of_minor' => 'required_if:is_guardian,1|max:100', 
                'guardian_residency'      => 'required_if:is_guardian,1|in:' . implode(',', ResidentialStatusEnum::getValues()), 
                'guardian_date_of_birth'  => 'required_if:is_guardian,1|date', 
                'guardian_nid'            => 'required|numeric|max:99999999999999999999',
                'guardian_address'        => 'required_if:is_guardian,1|max:90', 
                'guardian_city'           => 'required_if:is_guardian,1|max:25', 
                'guardian_post_code'      => 'required_if:is_guardian,1|max:10', 
                'guardian_division'       => 'required_if:is_guardian,1|max:25', 
                'guardian_country'        => 'required_if:is_guardian,1|max:50', 
                'guardian_email'          => 'required_if:is_guardian,1|email|max:80', 
                'guardian_mobile'         => [
                        'required_if:is_guardian,1',
                        'string',
                        'regex:/^(\+88|88)?01[3-9]{1}\d{8}$/',
                        'max:20'
                    ],
                'guardian_telephone'      => 'nullable|string|max:20', 
                'guardian_fax'            => 'nullable|string|max:20',
            ];
        }

        if ($this->nominee_2 == ActiveInactiveEnum::Active) {
            $nominee2 = [
                // nominee 2
                'nominee_2'                => 'sometimes|in:'. implode(',', ActiveInactiveEnum::getValues()), 
                'nominee_2_courtesy_title' => 'required_if:nominee_2,1|in:' . implode(',', CourtesyTitleEnum::getValues()), 
                'nominee_2_firstname'      => 'required_if:nominee_2,1|max:100', 
                'nominee_2_lastname'       => 'required_if:nominee_2,1|max:30', 
                'nominee_2_relationship'   => 'required_if:nominee_2,1|max:20', 
                'nominee_2_percentage'     => 'required|min:1|max:10',
                'nominee_2_residency'      => 'required_if:nominee_2,1|in:' . implode(',', ResidentialStatusEnum::getValues()), 
                'nominee_2_date_of_birth'  => 'required_if:nominee_2,1|date', 
                'nominee_2_nid'            => 'required|numeric|max:99999999999999999999',
                'nominee_2_address'        => 'required_if:nominee_2,1|max:90', 
                'nominee_2_city'           => 'required_if:nominee_2,1|max:25', 
                'nominee_2_post_code'      => 'required_if:nominee_2,1|max:10', 
                'nominee_2_division'       => 'required_if:nominee_2,1|max:25', 
                'nominee_2_country'        => 'required_if:nominee_2,1|max:50', 
                'nominee_2_email'          => 'required_if:nominee_2,1|email|max:80', 
                'nominee_2_mobile'         => [
                        'required_if:is_guardian,1',
                        'string',
                        'regex:/^(\+88|88)?01[3-9]{1}\d{8}$/',
                        'max:20'
                    ],
                'nominee_2_telephone'      => 'nullable|string|max:20', 
                'nominee_2_fax'            => 'nullable|string|max:20',
            ];
        }

        
        if ($this->nominee_2_is_guardian == ActiveInactiveEnum::Active) {
            // nominee 2's guardian
            $nominee2Guardian = [
                'nominee_2_is_guardian'             => 'sometimes|in:'. implode(',', ActiveInactiveEnum::getValues()), 
                'nominee_2_guardian_courtesy_title' => 'required_if:nominee_2_is_guardian,1|in:' . implode(',', CourtesyTitleEnum::getValues()), 
                'nominee_2_guardian_firstname'      => 'required_if:nominee_2_is_guardian,1|max:100', 
                'nominee_2_guardian_lastname'       => 'required_if:nominee_2_is_guardian,1|max:30', 
                'nominee_2_guardian_relationship'   => 'required_if:nominee_2_is_guardian,1|max:20', 
                'nominee_2_guardian_maturity_date_of_minor' => 'required_if:nominee_2_is_guardian,1|max:100', 
                'nominee_2_guardian_residency'      => 'required_if:nominee_2_is_guardian,1|in:' . implode(',', ResidentialStatusEnum::getValues()), 
                'nominee_2_guardian_date_of_birth'  => 'required_if:nominee_2_is_guardian,1|date', 
                'nominee_2_guardian_nid'            => 'required|numeric|max:99999999999999999999',
                'nominee_2_guardian_address'        => 'required_if:nominee_2_is_guardian,1|max:90', 
                'nominee_2_guardian_city'           => 'required_if:nominee_2_is_guardian,1|max:25', 
                'nominee_2_guardian_post_code'      => 'required_if:nominee_2_is_guardian,1|max:10', 
                'nominee_2_guardian_division'       => 'required_if:nominee_2_is_guardian,1|max:25', 
                'nominee_2_guardian_country'        => 'required_if:nominee_2_is_guardian,1|max:50', 
                'nominee_2_guardian_email'          => 'required_if:nominee_2_is_guardian,1|email|max:80', 
                'nominee_2_guardian_mobile'         => [
                        'required_if:nominee_2_is_guardian,1',
                        'string',
                        'regex:/^(\+88|88)?01[3-9]{1}\d{8}$/',
                        'max:20'
                    ],
                'nominee_2_guardian_telephone'      => 'nullable|string|max:20', 
                'nominee_2_guardian_fax'            => 'nullable|string|max:20',
            ];
        }

        return array_merge(
            $nominee,
            $guardian, 
            $nominee2,
            $nominee2Guardian
        );
 
    }

    public function messages(): array
    {
        return [
            // nominee 1's guardian
            'guardian_courtesy_title.required_if' => 'The guardian courtesy title field is required when is guardian is enabled.',
            'guardian_firstname.required_if'      => 'The firstname field is required when is guardian is enabled.',
            'guardian_lastname.required_if'       => 'The lastname field is required when is guardian is enabled.',
            'guardian_relationship.required_if'   => 'The relationship with nominee 1 field is required when is guardian is enabled.', 
            'guardian_maturity_date_of_minor.required_if' => 'The maturity date of minor field is required when is guardian is enabled.', 
            'guardian_residency.required_if'      => 'The residency field is required when is guardian is enabled.', 
            'guardian_date_of_birth.required_if'  => 'The date of birth field is required when is guardian is enabled.', 
            'guardian_nid.required_if'            => 'The NID field is required when is guardian is enabled.', 
            'guardian_address.required_if'        => 'The address field is required when is guardian is enabled.', 
            'guardian_city.required_if'           => 'The city field is required when is guardian is enabled.', 
            'guardian_post_code.required_if'      => 'The post code field is required when is guardian is enabled.', 
            'guardian_division.required_if'       => 'The division field is required when is guardian is enabled.', 
            'guardian_country.required_if'        => 'The country field is required when is guardian is enabled.', 
            'guardian_email.required_if'          => 'The email field is required when is guardian is enabled.', 
            'guardian_mobile.required_if'         => 'The mobile field is required when is guardian is enabled.', 


            // nominee 2
            'nominee_2_courtesy_title.required_if' => 'The nominee_2 courtesy title field is required when is nominee 2 is enabled.',
            'nominee_2_firstname.required_if'      => 'The firstname field is required when is nominee 2 is enabled.',
            'nominee_2_lastname.required_if'       => 'The lastname field is required when is nominee 2 is enabled.',
            'nominee_2_relationship.required_if'   => 'The relationship with a/c holder field is required when is nominee 2 is enabled.', 
            'nominee_2_percentage.required_if'     => 'The percentage field is required when is nominee 2 is enabled.', 
            'nominee_2_residency.required_if'      => 'The residency field is required when is nominee 2 is enabled.', 
            'nominee_2_date_of_birth.required_if'  => 'The date of birth field is required when is nominee 2 is enabled.', 
            'nominee_2_nid.required_if'            => 'The NID field is required when is nominee 2 is enabled.', 
            'nominee_2_address.required_if'        => 'The address field is required when is nominee 2 is enabled.', 
            'nominee_2_city.required_if'           => 'The city field is required when is nominee 2 is enabled.', 
            'nominee_2_post_code.required_if'      => 'The post code field is required when is nominee 2 is enabled.', 
            'nominee_2_division.required_if'       => 'The division field is required when is nominee 2 is enabled.', 
            'nominee_2_country.required_if'        => 'The country field is required when is nominee 2 is enabled.', 
            'nominee_2_email.required_if'          => 'The email field is required when is nominee 2 is enabled.', 
            'nominee_2_mobile.required_if'         => 'The mobile field is required when is nominee 2 is enabled.', 


            // nominee 1's guardian
            'nominee_2_guardian_courtesy_title.required_if' => 'The guardian courtesy title field is required when is guardian is enabled.',
            'nominee_2_guardian_firstname.required_if'      => 'The firstname field is required when is guardian is enabled.',
            'nominee_2_guardian_lastname.required_if'       => 'The lastname field is required when is guardian is enabled.',
            'nominee_2_guardian_relationship.required_if'   => 'The relationship with nominee 1 field is required when is guardian is enabled.', 
            'nominee_2_guardian_maturity_date_of_minor.required_if' => 'The maturity date of minor field is required when is guardian is enabled.', 
            'nominee_2_guardian_residency.required_if'      => 'The residency field is required when is guardian is enabled.', 
            'nominee_2_guardian_date_of_birth.required_if'  => 'The date of birth field is required when is guardian is enabled.', 
            'nominee_2_guardian_nid.required_if'            => 'The NID field is required when is guardian is enabled.', 
            'nominee_2_guardian_address.required_if'        => 'The address field is required when is guardian is enabled.', 
            'nominee_2_guardian_city.required_if'           => 'The city field is required when is guardian is enabled.', 
            'nominee_2_guardian_post_code.required_if'      => 'The post code field is required when is guardian is enabled.', 
            'nominee_2_guardian_division.required_if'       => 'The division field is required when is guardian is enabled.', 
            'nominee_2_guardian_country.required_if'        => 'The country field is required when is guardian is enabled.', 
            'nominee_2_guardian_email.required_if'          => 'The email field is required when is guardian is enabled.', 
            'nominee_2_guardian_mobile.required_if'         => 'The mobile field is required when is guardian is enabled.', 
        ];
    }

}


