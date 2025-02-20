<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonAn extends Model
{
    protected $table = 'mon_ans';
    protected $fillable = [
        'ten_mon_an',
        'slug_mon_an',
        'gia_ban',
        'gia_khuyen_mai',
        'mo_ta',
        'hinh_anh',
        'tinh_trang'
    ];
}
