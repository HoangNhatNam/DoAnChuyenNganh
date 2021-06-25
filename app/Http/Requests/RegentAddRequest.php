<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegentAddRequest extends FormRequest
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
            'RegentName' => 'bail|required|unique:regents|max:255|min:5',
        ];
    }
    public function messages()
    {
        return [
            'RegentName.required' => 'Tên không được phép để trống',
            'RegentName.unique' => 'Tên không được phép trùng',
            'RegentName.max' => 'Tên không được phép quá 255 ký tự',
            'RegentName.min' => 'Tên không được phép dưới 5 ký tự',
        ];
    }
}
