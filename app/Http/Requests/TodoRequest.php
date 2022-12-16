<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
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
            'content'=>'required|string|max:20',
        ];       
    }

    public function messages()
    {
        return[
            'content.required'=>'文字を入力してください',
            'content.max:20'=>'文字は20文字以内で入力してください'
        ];
    }
}

   