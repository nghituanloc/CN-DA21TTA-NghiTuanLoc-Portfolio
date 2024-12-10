<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DuanSeeder extends Seeder
{
    public function run()
    {
        DB::table('duan')->insert([
            'maduan' => 1,
            'tenduan' => 'Dự án xây dựng khu đô thị mới',
            'ngaybatdau' => '2024-01-01',
            'ngayhoanthanh' => '2026-01-01',
            'mota' => 'Dự án khu đô thị mới tại TP.HCM...',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
