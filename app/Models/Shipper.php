<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    protected $table = 'shippers';
    protected $fillable = [
        'ho_va_ten',
        'so_dien_thoai',
        'email',
        'password',
        'cccd',
        'dia_chi_thuong_tru',
        'id_tinh_thanh',
        'id_quan_huyen',
        'is_active',
        'is_open'
    ];
}
