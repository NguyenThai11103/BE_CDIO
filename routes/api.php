<?php

use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\QuanAnController;
use App\Http\Controllers\ShipperController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/admin/check-token', [NhanVienController::class, 'checkToken']);

Route::post('/admin/dang-nhap', [NhanVienController::class, 'Login']);

Route::get('/admin/nhan-vien/data',[NhanVienController::class,'getData'])->middleware('AdminMiddleware');
Route::post('/admin/nhan-vien/create',[NhanVienController::class,'create'])->middleware('AdminMiddleware');
Route::post('/admin/nhan-vien/update',[NhanVienController::class,'update'])->middleware('AdminMiddleware');
Route::post('/admin/nhan-vien/delete',[NhanVienController::class,'destroy'])->middleware('AdminMiddleware');


Route::get('/admin/khach-hang/data',[NhanVienController::class,'getDataKhachHang'])->middleware('AdminMiddleware');


Route::get('/admin/quan-an/data',[QuanAnController::class,'getData'])->middleware('AdminMiddleware');
Route::post('/admin/quan-an/create',[QuanAnController::class,'create'])->middleware('AdminMiddleware');
Route::post('/admin/quan-an/update',[QuanAnController::class,'update'])->middleware('AdminMiddleware');
Route::post('/admin/quan-an/delete',[QuanAnController::class,'destroy'])->middleware('AdminMiddleware');

Route::get('/admin/shipper/data',[ShipperController::class,'getData'])->middleware('AdminMiddleware');
Route::post('/admin/shipper/create',[ShipperController::class,'create'])->middleware('AdminMiddleware');
Route::post('/admin/shipper/update',[ShipperController::class,'update'])->middleware('AdminMiddleware');
Route::post('/admin/shipper/delete',[ShipperController::class,'destroy'])->middleware('AdminMiddleware');



// Khách Hang
Route::post('/khach-hang/dang-nhap', [KhachHangController::class, 'Login']);
Route::post('/khach-hang/dang-nhap-google', [KhachHangController::class, 'loginGoogle']);
Route::post('/khach-hang/dang-ky', [KhachHangController::class, 'Register']);
Route::get('/khach-hang/check-token', [KhachHangController::class, 'checkToken']);
Route::get('/khach-hang/dang-xuat', [KhachHangController::class, 'Logout']);
Route::get('/khach-hang/dang-xuat-all', [KhachHangController::class, 'logOutAll']);



// quán ăn
Route::post('/quan-an/dang-nhap', [QuanAnController::class, 'Login']);
Route::post('/quan-an/dang-ky', [QuanAnController::class, 'Register']);
Route::get('/quan-an/check-token', [QuanAnController::class, 'checkToken']);    
