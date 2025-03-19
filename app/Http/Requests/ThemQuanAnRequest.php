<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemQuanAnRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'ten_quan_an' => 'required',
            'email' => 'required|email',
            'ma_so_thue' => 'required|numeric',
            'dia_chi' => 'required|max:255',
            'so_dien_thoai' => 'required|numeric|digits_between:10,11',
            'gio_mo_cua' => 'required',
            'gio_dong_cua' => 'required',
            'tinh_trang' => 'required|boolean',
        ];
    }
    public function messages()
    {
        return [
            'ten_quan_an.required' => 'Tên quán ăn không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'ma_so_thue.required' => 'Mã số thuế không được để trống',
            'ma_so_thue.numeric' => 'Mã số thuế phải là số',
            'dia_chi.required' => 'Địa chỉ không được để trống',
            'dia_chi.max' => 'Địa chỉ không được quá 255 ký tự',
            'so_dien_thoai.required' => 'Số điện thoại không được để trống',
            'so_dien_thoai.numeric' => 'Số điện thoại phải là số',
            'so_dien_thoai.digits_between' => 'Số điện thoại phải từ 10 đến 11 số',
            'gio_mo_cua.required' => 'Giờ mở cửa không được để trống',
            'gio_dong_cua.required' => 'Giờ đóng cửa không được để trống',
            'tinh_trang.required' => 'Tình trạng không được để trống',
            'tinh_trang.boolean' => 'Tình trạng phải là true hoặc false',
        ];  
    }
}
