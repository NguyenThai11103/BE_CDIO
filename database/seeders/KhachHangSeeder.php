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
        DB::table('khach_hangs')->delete();  // Xoá tất cả dữ liệu
        DB::table('khach_hangs')->truncate(); // Đặt lại auto-increment về 0

        DB::table('khach_hangs')->insert([
            [
                'ho_va_ten'     => 'Nguyễn Văn Nhân',
                'email'         => 'vannhan130504@gmail.com',
                'so_dien_thoai' => '0394425076',
                'password'      => '123456',
                'ngay_sinh'     => '2004-01-01',
                'is_active'     => 1,
                'is_block'      => 0,
            ],
            [
                'ho_va_ten'     => 'Trần Minh Tuấn',
                'email'         => 'minhtuan123@gmail.com',
                'so_dien_thoai' => '0912345678',
                'password'      =>'123456',
                'ngay_sinh'     => '1995-02-15',
                'is_active'     => 1,
                'is_block'      => 0,
            ],
            [
                'ho_va_ten'     => 'Phạm Thanh Tùng',
                'email'         => 'thanhtung1994@gmail.com',
                'so_dien_thoai' => '0987654321',
                'password'      => '123456',
                'ngay_sinh'     => '1994-11-30',
                'is_active'     => 1,
                'is_block'      => 0,
            ],
            [
                'ho_va_ten'     => 'Lê Minh Hòa',
                'email'         => 'minhhoa99@gmail.com',
                'so_dien_thoai' => '0901234567',
                'password'      => '123456',
                'ngay_sinh'     => '1999-07-20',
                'is_active'     => 1,
                'is_block'      => 0,
            ]
        ]);
    }

}
