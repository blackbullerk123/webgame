<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassRequest extends FormRequest
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
            'password_old' => 'required',
            'new_password' => 'required|min:6|max:20',
            're_password' => 'required|same:new_password',
        ];
    }
    public function messages()
    {
        return [
            'password_old.required' => 'Vui lòng nhập mật khẩu',
            're_password.required' => 'Vui lòng nhập mật khẩu xác nhận',
            'new_password.required' => 'Vui lòng nhập mật khẩu mới',
            're_password.same' => 'Xác nhận mật khẩu không đúng',
            'new_password.min' => 'Mật khẩu ít nhất 6 ký tự',
            'new_password.max' => 'Mật khẩu không quá 20 ký tự',
        ];
    }
}
