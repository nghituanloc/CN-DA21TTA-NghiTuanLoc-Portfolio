<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KynangSeeder extends Seeder
{
    public function run()
    {
        DB::table('kynang')->insert([
            'makynang' => 1,
            'tenkynang' => 'Lập trình Python',
            'motakynang' => 'Kỹ năng lập trình Python cơ bản đến nâng cao...',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
