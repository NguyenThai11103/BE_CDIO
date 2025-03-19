<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThemQuanAnRequest;
use App\Models\QuanAn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class QuanAnController extends Controller
{
    public function getData()
    {
        $data = QuanAn::get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function create(ThemQuanAnRequest $request)
    {
        $login = Auth::guard('sanctum')->user();

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
        $login = Auth::guard('sanctum')->user();

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
        $login = Auth::guard('sanctum')->user();

        QuanAn::where('id',$request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => "Đã xóa quán ăn " . $request->ten_quan_an .  " thành công.",
        ]);
    }
    public function Login(Request $request)
    {
        $check = QuanAn::where('email', $request->email)->first();
        if ($check && Hash::check($request->password, $check->password)) {
            return response()->json([
                'status'    => 1,
                'message'   => "Bạn đã đăng nhập thành công.",
                'token'     => $check->createToken('token_quan_an')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'message' => "Tài khoản hoặc mật khẩu không đúng.",
            ]);
        }
    }
    public function checkToken()
    {
        $user_login = Auth::guard('sanctum')->user();
        if ($user_login) {
            return response()->json([
                'status'    => 1,
                'ho_ten'    => $user_login->ten_quan_an
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn cần đăng nhập hệ thống!'
            ]);
        }
    }
    public function Register(Request $request){
        $data = request()->validate([
            'ten_quan_an' => 'required',
            'email' => 'required|email|unique:quan_ans,email',
            'password' => 'required|min:6',
            'ma_so_thue' => 'required',
            'dia_chi' => 'required',
            'so_dien_thoai' => 'required',
            'gio_mo_cua' => 'required',
            'gio_dong_cua' => 'required',
            'tinh_trang' => 'required',
        ]);
        $data['password'] = Hash::make($data['password']);
        $quan_an = QuanAn::create($data);
        return response()->json([
            'status' => 1,
            'message' => 'Đăng ký tài khoản thành công!',
            'token' => $quan_an->createToken('token_quan_an')->plainTextToken,
        ]);
    }
    public function Logout()
    {
        $user = Auth::guard('sanctum')->user();
        if ($user && $user instanceof \App\Models\QuanAn) {
            DB::table('personal_access_tokens')
                    ->where('id', $user->currentAccessToken()->id)
                    ->delete();
            return response()->json([
                'status'  => 1,
                'message' => "Đăng xuất thành công",
            ]);
        } else {
            return response()->json([
                'status'  => 0,
                'message' => "Có lỗi xảy ra",
            ]);
        }
    }
    public function logOutAll()
    {
        $user = Auth::guard('sanctum')->user();
        if ($user && $user instanceof \App\Models\QuanAn) {
            $ds_token = $user->tokens;
            foreach ($ds_token as $key => $value) {
                $value->delete();
            }
            return response()->json([
                'status'  => 1,
                'message' => "Đăng xuất thành công",
            ]);
        } else {
            return response()->json([
                'status'  => 0,
                'message' => "Có lỗi xảy ra",
            ]);
        }
    }
}
