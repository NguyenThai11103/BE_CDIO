<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nhan_viens')->delete();
        DB::table('nhan_viens')->truncate();
        DB::table('nhan_viens')->insert([
            'ho_va_ten'         => 'Nguyen Thai',
            'email'             => 'kkdn011@gmail.com',
            'password'          => 123456,
            'so_dien_thoai'     => '0909111222',
            'dia_chi'           => 'Quan 1, TP.HCM',
            'tinh_trang'        =>1,
            'is_master'         =>1,
            'id_quyen'          =>1
        ]);

    }
}
