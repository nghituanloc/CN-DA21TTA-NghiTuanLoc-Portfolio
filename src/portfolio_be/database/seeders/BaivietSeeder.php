<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaivietSeeder extends Seeder
{
    public function run()
    {
        DB::table('baiviet')->insert([
            'mabaiviet' => 1,
            'manguoidung' => 1,
            'tenbaiviet' => 'Hướng dẫn học Laravel cơ bản',
            'noidungbaiviet' => 'Laravel là một framework PHP mạnh mẽ...',
            'ngaydang' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
