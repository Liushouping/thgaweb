<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // 'name' => 'required|between:2,25|regex:/^[A-Za-z0-9\-\_]+$/|unique:users,name,' . Auth::id(),
            'name' => 'required|between:2,25' . Auth::id(),
            'email' => 'required|email',
            'introduction' => 'max:255',
            'avatar' => 'mimes:png,jpg,gif,jpeg|dimensions:min_width=208,min_height=208',
        ];
    }

    public function messages()
    {
        return [
            'avatar.mimes' =>'相片必須是 png, jpg, gif, jpeg 葛飾的圖片',
            'avatar.dimensions' => '圖片的清晰度不夠，寬和高需要 208px 以上',
            // 'name.unique' => '姓名已被佔用，請重新填寫',
            // 'name.regex' => '姓名只支持英文、數字、橫槓和下划線',
            'name.between' => '姓名必須介於3 -25個字符之間',
            'name.required' => '姓名不能為空值',
        ];
    }

}