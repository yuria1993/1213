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
         if($this->path()=='/'){
            return true;
         } else {
            return false;
         }
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
        return [
            'content|required|string|max:20' => '20文字以内で入力してください',
        ];
    }
}
