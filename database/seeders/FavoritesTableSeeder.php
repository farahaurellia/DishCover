<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FavoritesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('favorit_resep')->insert([
            ['user_id' => 1, 'resep_id' => 3],
            ['user_id' => 1, 'resep_id' => 4],
            ['user_id' => 2, 'resep_id' => 1],
            // Add the rest of the favorites entries here...
        ]);
    }
}
