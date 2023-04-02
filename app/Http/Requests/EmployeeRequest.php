<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use Validator;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:20|min:2',
            'affiliation' => 'required|string|max:20',
            'phone_num' => 'required||max:12|rege|:^[0-9]+$/',
            'email' => 'required|string|email|max:255',
        ];
    }
    public function messages()
    {
        return [
            'required' => '入力必須です',
            'string' => '文字列を入力してください',
            'max' => '20文字までです',
            'min' => '２文字以上入力してください',
            'email' => '正しいメールアドレスを入力してください',
            'rege' => '正しい電話番号を入力してください'
        ];
    }
}
