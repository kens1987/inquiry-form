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
            'name' => ['required','string'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','string'],
        ];
    }
    public function messages(){
        return [
            'name.required' => 'お名前を入力してください',
            // 'name.string' => 'お名前を文字列で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスは「ユーザー＠ドメイン」形式で入力してください',
            'password.required' => 'パスワードを入力してください'
        ];
    }
}
