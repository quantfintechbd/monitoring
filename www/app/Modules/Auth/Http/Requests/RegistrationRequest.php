<?php

namespace App\Modules\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [ 
            'name'           => ['required', 'string', 'min:2', 'max:128', 'regex:/^[A-Za-z\s\']+$/'],
            'email'          => 'required|email|max:128', 
            'mobile'         => ['required', 'min:11', 'max:14', 'regex:/^(\+88|88)?01[3-9]{1}\d{8}$/'],
            'nid'            => ['required', 'max:50', 'regex:/^[0-9]{10}$/'],
            'date_of_birth'  => 'required|date_format:Y-m-d',
        ];
    }
} 
