<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChungchiSeeder extends Seeder
{
    public function run()
    {
        DB::table('chungchi')->insert([
            'machungchi' => 1,
            'tenchungchi' => 'Chứng chỉ lập trình viên PHP',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
