<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAddRequest extends FormRequest
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
            'FullName' => 'bail|required|unique:users|max:255|min:10',
            'Certificate' => 'required',
            'email' => 'required',
            'Address' => 'required',
            'Phone' => 'required',
            'Org' => 'required',
            'Office' => 'required',
            'password' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
          'FullName.required' => 'Tên không được phép để trống',
            'FullName.unique' => 'Tên không được phép trùng',
            'FullName.max' => 'Tên không được phép quá 255 ký tự',
            'FullName.min' => 'Tên không được phép dưới 10 ký tự',
            'Certificate.required' => 'Học vị không được phép để trống',
            'email.required' => 'Email không được phép để trống',
            'Address.required' => 'Địa chỉ không được phép để trống',
            'Phone.required' => 'Số điện thoại không được phép để trống',
            'Org.required' => 'Cơ quan tổ chức không được phép để trống',
            'Office.required' => 'Phòng ban không được phép để trống',
            'password.required' => 'Mật khẩu không được phép để trống',
            'password.min' => 'Mật khẩu không được phép dưới 6 ký tự'
//            'password' => 'required|min:6|required_with:password_confirmation|same:password_confirmation',
//            'password_confirmation' => 'required|min:6'
        ];
    }
}
