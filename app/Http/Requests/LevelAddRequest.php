<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LevelAddRequest extends FormRequest
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
            'LevelName' => 'bail|required|unique:levels|max:255|min:2',
        ];
    }
    public function messages()
    {
        return [
            'LevelName.required' => 'Tên không được phép để trống',
            'LevelName.unique' => 'Tên không được phép trùng',
            'LevelName.max' => 'Tên không được phép quá 255 ký tự',
            'LevelName.min' => 'Tên không được phép dưới 2 ký tự',
        ];
    }
}
