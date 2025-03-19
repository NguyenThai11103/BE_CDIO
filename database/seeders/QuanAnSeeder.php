<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuanAnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('quan_ans')->delete();
    DB::table('quan_ans')->truncate();
    DB::table('quan_ans')->insert([
        [
            'ten_quan_an' => 'Quán ăn 1',
            'password' => bcrypt('123456'),
            'email' => 'nguyenvannhan9a04@gmail.com',
            'ma_so_thue' => '123456789',
            'dia_chi' => 'Quận 1, TP.HCM',
            'so_dien_thoai' => '0909111222',
            'gio_mo_cua' => '08:00',
            'gio_dong_cua' => '22:00',
            'tinh_trang' => 1,
            'is_active' => 1
        ],
        [
            'ten_quan_an' => 'Quán ăn 2',
            'password' => bcrypt('123456'),
            'email' => 'quanan2@gmail.com',
            'ma_so_thue' => '234567890',
            'dia_chi' => 'Quận 2, TP.HCM',
            'so_dien_thoai' => '0909222333',
            'gio_mo_cua' => '07:30',
            'gio_dong_cua' => '21:30',
            'tinh_trang' => 1,
            'is_active' => 1
        ],
        [
            'ten_quan_an' => 'Quán ăn 3',
            'password' => bcrypt('123456'),
            'email' => 'quanan3@gmail.com',
            'ma_so_thue' => '345678901',
            'dia_chi' => 'Quận 3, TP.HCM',
            'so_dien_thoai' => '0909333444',
            'gio_mo_cua' => '08:00',
            'gio_dong_cua' => '22:00',
            'tinh_trang' => 1,
            'is_active' => 1
        ],
        [
            'ten_quan_an' => 'Quán ăn 4',
            'password' => bcrypt('123456'),
            'email' => 'quanan4@gmail.com',
            'ma_so_thue' => '456789012',
            'dia_chi' => 'Quận 4, TP.HCM',
            'so_dien_thoai' => '0909444555',
            'gio_mo_cua' => '09:00',
            'gio_dong_cua' => '23:00',
            'tinh_trang' => 1,
            'is_active' => 1
        ],
        [
            'ten_quan_an' => 'Quán ăn 5',
            'password' => bcrypt('123456'),
            'email' => 'quanan5@gmail.com',
            'ma_so_thue' => '567890123',
            'dia_chi' => 'Quận 5, TP.HCM',
            'so_dien_thoai' => '0909555666',
            'gio_mo_cua' => '08:00',
            'gio_dong_cua' => '21:30',
            'tinh_trang' => 1,
            'is_active' => 1
        ]
    ]);
}

}
