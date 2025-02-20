<?php

namespace App\Http\Controllers;

use App\Models\QuanAn;
use Illuminate\Http\Request;

class QuanAnController extends Controller
{
    public function getData()
    {
        $data = QuanAn::get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function create(Request $request)
    {
        QuanAn::create([
            'ten_quan_an' => $request->ten_quan_an,
            'password' => $request->password,
            'email' => $request->email,
            'ma_so_thue' => $request->ma_so_thue,
            'dia_chi' => $request->dia_chi,
            'so_dien_thoai' => $request->so_dien_thoai,
            'gio_mo_cua' => $request->gio_mo_cua,
            'gio_dong_cua' => $request->gio_dong_cua,
            'tinh_trang' => $request->tinh_trang,


        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã tạo mới quán ăn " . $request->ten_quan_an . " thành công.",
        ]);
    }
    public function update(Request $request)
    {
        QuanAn::where('id',$request->id)->update([
            'ten_quan_an' => $request->ten_quan_an,
            'password' => $request->password,
            'email' => $request->email,
            'ma_so_thue' => $request->ma_so_thue,
            'dia_chi' => $request->dia_chi,
            'so_dien_thoai' => $request->so_dien_thoai,
            'gio_mo_cua' => $request->gio_mo_cua,
            'gio_dong_cua' => $request->gio_dong_cua,
            'tinh_trang' => $request->tinh_trang,

        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã cập nhật quán ăn " . $request->ten_quan_an . " thành công.",
        ]);
    }
    public function destroy(Request $request)
    {
        QuanAn::where('id',$request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => "Đã xóa quán ăn " . $request->ten_quan_an .  " thành công.",
        ]);
    }
}
