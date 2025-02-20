<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuanAn extends Model
{
    protected $table = 'quan_ans';
    protected $fillable = [
        'ten_quan_an',
        'password',
        'email',
        'ma_so_thue',
        'dia_chi',
        'so_dien_thoai',
        'gio_mo_cua',
        'gio_dong_cua',
        'tinh_trang',
        'is_active'
    ];
}
