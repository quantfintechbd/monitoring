<?php

namespace App\Modules\BoAccount\Http\Requests;
 
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BoDocumentRequest extends FormRequest
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
            'id'      => 'nullable|exists:documents,id',
            'user_id' => 'required|exists:users,id',
            'title'   => 'required|max:100',
            'file'    => 'required|file|mimes:jpg,png'
        ];
    } 
    
}


