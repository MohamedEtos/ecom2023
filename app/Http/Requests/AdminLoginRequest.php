<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email'=>'required|email',
            'password'=>'required|min:8'
        ];
    }

    public function messages()
    {
        return[
            'email.required'=>'يرجي ادخال بريد ',
            'email.email'=>'يرجي ادخال بريد صحيح',
            'password.required'=>'يرجي ادخال كلمه المرور',
            'password.min'=>'يرجي ادخال 8 احرف ورموز او اكثر'
        ];
    }
}
