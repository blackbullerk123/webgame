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
            'name' =>'required|max:50|regex:/(^[\pL0-9 ]+$)/u',
            'email' =>'required|email|max:50|unique:users,email',
            'phone' => 'required|numeric',
            'password' =>'required|max:25|min:6',
            'confirm_password' => 'required|same:password',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please enter name',
            'name.max' => 'Name no more than 50 characters',
            'name.regex' => 'Name cannot contain special characters',
            'email.required' => 'Please enter email',
            'email.max' => 'Email no more than 50 characters',
            'email.email' => 'Incorrect email format',
            'email.unique' => 'Email already exists',
            'phone.required' => 'Please enter the phone number',    
            'phone.numeric' => 'Phones can only enter numbers', 
            'password.required' => 'Please enter password',
            'password.max' => 'Password must not exceed 25 characters',
            'password.min' => 'Minimum password 6 characters',
            'confirm_password.required' => 'Please enter confirm password',
            'confirm_password.same' => 'Confirm password is incorrect',
        ];
    }
}
