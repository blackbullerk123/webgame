<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' =>'required|max:50|unique:users,email',
            'password' =>'required|max:25',
            'confirm_password' => 'required|same:password',
        ];
    }
    public function messages()
    {
        return [
            'email.max' => 'Email no more than 50 characters',
            'email.unique' => 'Email already exists',
            'password.max' => 'Password must not exceed 25 characters',
            'confirm_password.same' => 'Confirm password is incorrect',
        ];
    }
}
