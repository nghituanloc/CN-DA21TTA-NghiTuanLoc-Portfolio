<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DadatSeeder extends Seeder
{
    public function run()
    {
        DB::table('dadat')->insert([
            'madadat' => 1,
            'manguoidung' => 1,
            'diachi' => 'Khu đất A, Thành phố Hồ Chí Minh',
            'gia' => 500000000,
            'dientich' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
