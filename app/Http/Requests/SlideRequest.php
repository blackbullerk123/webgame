<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideRequest extends FormRequest
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
            'name' =>'required|max:200',
            'avatar' => 'mimes:jpg,jpeg,png,gif|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'name.max' => 'Tên không vượt quá 200 ký tự',
            'avatar.mimes' => 'Chỉ những hình ảnh gắn thẻ có đuôi .jpg .jpeg .png .gif mới được chấp nhận',
            'avatar.max' => 'Giới hạn dung lượng không quá 2M',
        ];
    }
}
