<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'number'=>'required|min:2|max:3'
        ];
    }
    public function messages()
    {
        return [
            'number.required'=>'Số không được để trống',
            'number.min'=>'Số phải có ít nhất 2 kí tự',
            'number.max'=>'Số chỉ có tối đa 3 kí tự'
        ];
    }
}
