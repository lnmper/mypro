<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminUserAddPostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
     public function authorize()
     {     return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ['username'=>'required|unique:users','password'=>'required|same:repassword|regex:/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{5,13}$/','email'=>'required|E-mail'];
    }
    public function messages()
{
    return [
        'username.required' => '用户名是必填的',
        'username.unique'=>'用户名重复',
        'password.required'  => '密码是必填的',
        'password.same'=>'两次密码不一致',
        'password.regex'=>'请输入5-13位字母数字组合的密码',
        'email.required'=>'请输入邮箱地址',
        'email.E-mail'=>'请输入正确的邮箱格式',
    ];
}
}
