<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Myrule;

class HelloRequest extends FormRequest
{
    public function authorize()
    {
        if($this->path() == 'hello') {
            return true;
        } else {
            return false;
        }
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => ['numeric', new Myrule(5)],
        ];
    }

    public function messages() 
    {
        return [
            'name.required' => '名前は必ず入力してください。',
            'mail.email' => 'メールアドレスが必要です。',
            'age.numeric' => '数字を入力してください。',
            'age.hello' => 'Hello!入力は偶数のみ受け付けます',
        ];
    }

}
