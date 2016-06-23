<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    //添加自定义信息
 //    public function messages()
	// {
	//     return [
	//         'username.required' => '标题是必填的',
	//         'password.required'  => '消息是必填的',
	//     ];
	// }
}
