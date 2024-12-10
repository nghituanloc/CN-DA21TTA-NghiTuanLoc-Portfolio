<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaitroSeeder extends Seeder
{
    public function run()
    {
        DB::table('vaitro')->insert([
            'mavaitro' => 1,
            'tenvaitro' => 'Admin',
            'mota' => 'Quản trị viên hệ thống, có quyền điều hành toàn bộ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
