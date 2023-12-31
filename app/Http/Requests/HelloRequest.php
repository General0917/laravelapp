<?php

namespace App\Http\Requests;

use App\Rules\Myrule;
use Illuminate\Foundation\Http\FormRequest;

// class HelloRequest extends FormRequest {
//     /**
//      * Determine if the user is authorized to make this request.
//      */
//     public function authorize(): bool {
//         if ($this->path() == 'hello') {
//             return true;
//         } else {
//             return false;
//         }
//     }

//     /**
//      * Get the validation rules that apply to the request.
//      *
//      * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
//      */
//     public function rules(): array {
//         return [
//             'name' => 'required',
//             'mail' => 'email',
//             'age' => 'numeric|between:0,150'
//         ];
//     }

//     public function messages() {
//         return [
//             'name.required' => '名前は必ず入力してください。',
//             'mail.email' => 'メールアドレスが必要です。',
//             'age.numeric' => '年齢を整数で記入ください。',
//             'age.between' => '年齢は0~150の間を入力ください。'
//         ];
//     }
// }

// class HelloRequest extends FormRequest {
//     public function authorize() {
//         if ($this->path() == 'hello') {
//             return true;
//         } else {
//             return false;
//         }
//     }

//     public function rules() {
//         return [
//             'name' => 'required',
//             'mail' => 'email',
//             'age' => 'numeric|hello'
//         ];
//     }

//     public function messages() {
//         return [
//             'name.required' => '名前は必ず入力してください。',
//             'mail.email' => 'メールアドレスが必要です。',
//             'age.numeric' => '年齢を整数で入力してください。',
//             'age.hello' => 'Hello!! 入力は偶数のみ受け付けます。'
//         ];
//     }
// }

class HelloRequest extends FormRequest {
    public function rules() {
        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => ['numeric', new Myrule(5)],
        ];
    }
}
