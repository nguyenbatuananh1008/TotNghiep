<?php

namespace Modules\Guest\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestRequestDrive extends FormRequest
{
    public function rules()
    {
        return [
            'phone'    => 'required|unique:users,phone,' . $this->id,
            'name'     => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'phone.unique'      => 'Số điện thoại đã tồn tại',
            'name.required'     => 'Dữ liệu không được để trống',
            'phone.required'    => 'Dữ liệu không được để trống',
            'password.required' => 'Dữ liệu không được để trống',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
