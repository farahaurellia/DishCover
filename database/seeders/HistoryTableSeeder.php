<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HistoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('history')->insert([
            ['user_id' => 1, 'resep_id' => 2],
            ['user_id' => 1, 'resep_id' => 3],
            ['user_id' => 2, 'resep_id' => 1],
            // Add the rest of the history entries here...
        ]);
    }
}
