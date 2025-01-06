<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class NguoiDungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nguoidung')->insert([
            [
                'tendangnhap' => 'nguyenvanan',
                'matkhau' => Hash::make('password'),
                'hovaten' => 'Nguyễn Văn An',
                'email' => 'nguyenvanan@example.com',
                'sdt' => '0987654321',
                'diachi' => 'Hà Nội',
                'anhdaidien' => 'avatar1.jpg',
                'lienketgithub' => 'https://github.com/nguyenvanan',
                'tentruongdaihoc' => 'Đại học Quốc gia Hà Nội',
                'bangcap' => 'Cử nhân',
                'tennganhhoc' => 'Công nghệ thông tin',
                'motabanthan' => 'Tôi là một người yêu thích lập trình web.',
            ],
            [
                'tendangnhap' => 'tranthibinh',
                'matkhau' => Hash::make('password'),
                'hovaten' => 'Trần Thị Bình',
                'email' => 'tranthibinh@example.com',
                'sdt' => '0123456789',
                'diachi' => 'Hồ Chí Minh',
                'anhdaidien' => 'avatar2.jpg',
                'lienketgithub' => 'https://github.com/tranthibinh',
                'tentruongdaihoc' => 'Đại học Kinh tế TP.HCM',
                'bangcap' => 'Thạc sĩ',
                'tennganhhoc' => 'Quản trị kinh doanh',
                'motabanthan' => 'Tôi là một người năng động và sáng tạo.',
            ],
            [
                'tendangnhap' => 'lethicam',
                'matkhau' => Hash::make('password'),
                'hovaten' => 'Lê Thị Cẩm',
                'email' => 'lethicam@example.com',
                'sdt' => '0987654321',
                'diachi' => 'Đà Nẵng',
                'anhdaidien' => 'avatar3.jpg',
                'lienketgithub' => 'https://github.com/lethicam',
                'tentruongdaihoc' => 'Đại học Đà Nẵng',
                'bangcap' => 'Tiến sĩ',
                'tennganhhoc' => 'Ngôn ngữ Anh',
                'motabanthan' => 'Tôi là một người yêu thích giảng dạy.',
            ],
            [
                'tendangnhap' => 'phamvanduy',
                'matkhau' => Hash::make('password'),
                'hovaten' => 'Phạm Văn Duy',
                'email' => 'phamvanduy@example.com',
                'sdt' => '0123456789',
                'diachi' => 'Hải Phòng',
                'anhdaidien' => 'avatar4.jpg',
                'lienketgithub' => 'https://github.com/phamvanduy',
                'tentruongdaihoc' => 'Đại học Hàng hải Việt Nam',
                'bangcap' => 'Kỹ sư',
                'tennganhhoc' => 'Kỹ thuật tàu thủy',
                'motabanthan' => 'Tôi là một người đam mê công nghệ.',
            ],
            [
                'tendangnhap' => 'nghituanloc',
                'matkhau' => Hash::make('nghituanloc'),
                'hovaten' => 'Nghị Tuấn Lộc',
                'email' => 'nghituanloc@gmail.com',
                'sdt' => '0987654321',
                'diachi' => 'Tiểu Cần - Trà Vinh',
                'lienketgithub' => 'https://github.com/nghituanloc',
                'tentruongdaihoc' => 'Trường Đại học Trà Vinh',
                'bangcap' => 'Kỹ sư',
                'tennganhhoc' => 'Công nghệ thông tin',
                'motabanthan' => 'Tôi là một người đam mê công nghệ.',
            ],
        ]);
    }
}