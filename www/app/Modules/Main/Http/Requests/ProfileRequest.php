<?php

namespace App\Modules\Main\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProfileRequest extends FormRequest
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
        return [
            'name'     => 'required|string|max:64',
            'email'    => 'required|string|email|unique:users,email,'.auth()->user()->id,
            'password' => 'required|string|confirmed|min:5',
        ];
    }
}
