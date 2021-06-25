<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerAddRequest extends FormRequest
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
            'PartnerName' => 'bail|required|unique:partners|max:255|min:5',
            'image_path' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'PartnerName.required' => 'Tên không được phép để trống',
            'PartnerName.unique' => 'Tên không được phép trùng',
            'PartnerName.max' => 'Tên không được phép quá 255 ký tự',
            'PartnerName.min' => 'Tên không được phép dưới 5 ký tự',
            'image_path.required' => 'Hình ảnh không được để trống'
        ];
    }
}
