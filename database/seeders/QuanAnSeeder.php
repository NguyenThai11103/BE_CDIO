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
        ]);
    }
}
