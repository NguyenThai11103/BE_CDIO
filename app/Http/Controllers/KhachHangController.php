<?php

namespace App\Http\Controllers;

use App\Http\Requests\KhachHangDangKyRequest;
use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Google_Client;
use Illuminate\Support\Facades\DB;

class KhachHangController extends Controller
{

    public function login(Request $request)
    {
        $check = KhachHang::where('email', $request->email)
                ->where('password', $request->password)
                ->first();
        if ($check) {
            return response()->json([
                'status'    => 1,
                'message'   => "Bạn đã đăng nhập thành công.",
                'key'     => $check->createToken('key_khach_hang')->plainTextToken,
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
                'ho_ten'    => $user_login->ho_va_ten
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn cần đăng nhập hệ thống!'
            ]);
        }
    }
    public function Register(KhachHangDangKyRequest $request)
    {
        $check = KhachHang::where('email', $request->email)->first();
        if ($check) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Email đã tồn tại',
            ]);
        } else {
            $khachHang = KhachHang::create([
                'ho_va_ten'     => $request->ho_va_ten,
                'email'         => $request->email,
                'password'      => $request->password,
                'so_dien_thoai' => $request->so_dien_thoai,
                'ngay_sinh'     => $request->ngay_sinh,
                'is_active'     => 1,
            ]);
            return response()->json([
                'status'  => 1,
                'message' => 'Bạn Đăng Ký Tài Khoản  ' . $request->email . '  Thành Công',
                'key'       => $khachHang->createToKen('key_khach_hang')->plainTextToken,
            ]);
        }
    }
    public function loginGoogle(Request $request)
    {
        $client = new Google_Client(['client_id' => env('CLIENT_GG')]);
        $payload = $client->verifyIdToken($request->credential);
        if ($payload) {
            $email = $payload['email'];
            $ho_va_ten = $payload['name'];

            $user = KhachHang::where('email', $email)->first();
            if ($user) {
                return response()->json([
                    'status'    => 1,
                    'message'   => 'Đăng nhập thành công',
                    'key'       => $user->createToKen('key_khach_hang')->plainTextToken,
                ]);
            } else {
                $khachHang = KhachHang::create([
                    'ho_va_ten'     => $ho_va_ten,
                    'email'         => $email,
                    'password'      => '123456',
                    'so_dien_thoai' => '0123456789',
                    'ngay_sinh'     => '1990-01-01',
                    'is_active'     => 1,
                ]);
                return response()->json([
                    'status'  => 1,
                    'message' => 'Bạn Đăng Ký Tài Khoản  ' . $email . '  Thành Công',
                    'key'       => $khachHang->createToKen('key_khach_hang')->plainTextToken,

                ]);
            }
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Có lỗi xảy ra',
            ]);
        }
    }
    public function Logout()
    {
        $user = Auth::guard('sanctum')->user();
        if ($user && $user instanceof \App\Models\KhachHang) {
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
        if ($user && $user instanceof \App\Models\KhachHang) {
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
