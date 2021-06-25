<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CertificateAddRequest extends FormRequest
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
            'CertificateName' => 'bail|required|unique:certificates|max:255|min:2',
        ];
    }
    public function messages()
    {
        return [
            'CertificateName.required' => 'Tên không được phép để trống',
            'CertificateName.unique' => 'Tên không được phép trùng',
            'CertificateName.max' => 'Tên không được phép quá 255 ký tự',
            'CertificateName.min' => 'Tên không được phép dưới 2 ký tự',
        ];
    }
}
