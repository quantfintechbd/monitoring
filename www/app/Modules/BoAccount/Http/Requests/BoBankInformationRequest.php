<?php

namespace App\Modules\BoAccount\Http\Requests;
 
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BoBankInformationRequest extends FormRequest
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
            'bank_id'          => 'required|exists:banks,id',
            'branch_id'        => 'required|exists:bank_branches,id',
            'account_number'   => [
                'required',
                'regex:/^\d{13}$/',
                'min:13'
            ] 
        ];
    }

    public function messages()
    {
        return [
            'bank_id.required'   => 'The bank name field is required!',
            'branch_id.required' => 'The branch name field is required!',
        ];
    }
    
}


