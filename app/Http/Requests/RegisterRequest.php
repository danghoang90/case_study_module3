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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:user',
            'phone' => 'required|min:10',
            'address' => 'required',
            'password' => 'required',
            'role' => 'required'
        ];
    }

    function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Không đúng định dạng email',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.min:10' => 'Số điện thoại không được ít hơn 10 số',
            'address.required' => 'Địa chỉ không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            'role.required' => 'Role không được để trống'
        ];
    }
}
