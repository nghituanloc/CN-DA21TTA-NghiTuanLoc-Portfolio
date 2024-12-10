<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThamgiaSeeder extends Seeder
{
    public function run()
    {
        DB::table('thamgia')->insert([
            'mathamgia' => 1,
            'manguoidung' => 1,  // ID người dùng tham gia
            'maduan' => 1
        ]);

   
    }
}
