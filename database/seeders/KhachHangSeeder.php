<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khach_hangs')->delete();
        DB::table('khach_hangs')->truncate();
        DB::table('khach_hangs')->insert([
            'ho_va_ten'     =>  'Nguyễn Văn Nhân',
            'email'         =>  'vannhan130504@gmail.com',
            'so_dien_thoai' =>  '0394425076',
            'password'      =>  bcrypt('123456'),
            'ngay_sinh'     =>  '2004-01-01',
            'is_active'     =>  1,
            'is_block'      =>  0,
        ]);
    }
}
