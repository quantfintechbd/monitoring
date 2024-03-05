<?php

namespace App\Modules\Main\Http\Requests;

use App\Modules\Main\Enums\UserStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'username'    => 'sometimes|string|max:64|unique:users,username,'.$this->id,
            'name'        => 'required|string|max:64',
            'email'       => 'required|email|max:128',
            'password'    => 'sometimes|string|confirmed|min:5',
            'mobile' => [
                'required',
                'min:11',
                'max:14',
                'regex:/^(\+88|88)?01[3-9]{1}\d{8}$/',
                // function ($attr, $val, $fail) {
                //     $exists = User::where(function($query) use($val) {
                //         if (!empty($this->id)) {
                //             $query->where("id", "!=", $this->id);
                //         }
                //         return $query->whereIn('mobile', msisdns($val));
                //     })
                //     ->exists();

                //     if ($exists) {
                //         return $fail("The {$attr} field must be unique!");
                //     }
                // }
            ],
            'nid'           => ['required', 'regex:/^[0-9]{10}$/'],
            'date_of_birth' => 'required|date_format:Y-m-d',
            'roles'         => 'sometimes',
            'status'        => 'sometimes|in:'. implode(",", UserStatusEnum::getValues()),
        ]; 
    }
}
