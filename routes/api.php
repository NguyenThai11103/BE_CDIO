<?php

use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\QuanAnController;
use App\Http\Controllers\ShipperController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/admin/check-token', [NhanVienController::class, 'checkToken']);

Route::post('/admin/dang-nhap', [NhanVienController::class, 'Login']);

Route::get('/admin/nhan-vien/data',[NhanVienController::class,'getData']);
Route::post('/admin/nhan-vien/create',[NhanVienController::class,'create']);
Route::post('/admin/nhan-vien/update',[NhanVienController::class,'update']);
Route::post('/admin/nhan-vien/delete',[NhanVienController::class,'destroy']);

Route::get('/admin/quan-an/data',[QuanAnController::class,'getData']);
Route::post('/admin/quan-an/create',[QuanAnController::class,'create']);
Route::post('/admin/quan-an/update',[QuanAnController::class,'update']);
Route::post('/admin/quan-an/delete',[QuanAnController::class,'destroy']);

Route::get('/admin/shipper/data',[ShipperController::class,'getData']);
Route::post('/admin/shipper/create',[ShipperController::class,'create']);
Route::post('/admin/shipper/update',[ShipperController::class,'update']);
Route::post('/admin/shipper/delete',[ShipperController::class,'destroy']);



// Khách Hang
Route::post('/khach-hang/dang-nhap', [KhachHangController::class, 'Login']);
Route::get('/khach-hang/check-token', [KhachHangController::class, 'checkToken']);

