<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommonRequest extends FormRequest
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
            'name' => 'required',
            'username' => 'required | unique:students,student_username | unique:teachers,teacher_username',
            'password' => 'required | between:6,20',
            'email' => 'required | email',
            'protocol' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '姓名不能为空',
            'username.required' => '用户名不能为空',
            'username.unique' => '用户名重复',
            'password.required' => '密码不能为空',
            'password.between' => '密码最少6位，最多20位',
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱格式不正确',
            'protocol.required' => '必须同意协议'
        ];
    }
}
