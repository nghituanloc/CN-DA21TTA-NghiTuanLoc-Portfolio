<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NguoidungSeeder extends Seeder
{
    public function run()
    {
        DB::table('nguoidung')->insert([
            'manguoidung' => 1,
            'tendangnhap' => 'nghituanloc',
            'matkhau' => bcrypt('password123'),
            'hovaten' => 'Nghị Tuấn Lộc',
            'email' => 'nghituanloc@gmail.com',
            'sdt' => '0123456789',
            'diachi' => 'Trà Vinh',
            'anhdaidien' => 'https://example.com/avatar.jpg',
            'lienketgithub' => 'https://github.com/nghituanloc',
            'tentruongdaihoc' => 'Đại học Trà Vinh',
            'bangcap' => 'Kỹ sư CNTT',
            'tennganhhoc' => 'Công nghệ thông tin',
            'motabanthan' => 'Tôi là một lập trình viên yêu thích công nghệ mới.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
