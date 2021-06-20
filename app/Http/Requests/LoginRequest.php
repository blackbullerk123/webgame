<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'email_login' =>'required|email|max:50',
            'password_login' =>'required|max:25',
        ];
    }
    public function messages()
    {
        return [
            'email_login.max' => 'Email no more than 50 characters',
            'email_login.email' => 'Incorrect email format',
            'password_login.required' => 'Please enter password',
            'password_login.max' => 'Password must not exceed 25 characters',
        ];
    }
}
