<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-4 上午9:39
 * Description:
 */

namespace App\Requests;


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
            'username' => 'required | account_exists',
            'password' => 'required | between:6,20 | password_check',

        ];
    }

    public function messages()
    {
        return [
            'username.required' => '用户名不能为空',
            'username.account_exists' => '用户名不存在',
            'password.required' => '密码不能为空',
            'password.between' => '密码最少6位，最多20位',
            'password.password_check' => '密码错误',
        ];
    }
}