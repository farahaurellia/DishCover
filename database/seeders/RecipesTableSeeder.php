<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecipesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('recipes')->insert([
            ['user_id' => 1, 'judul' => 'Nasi Goreng Spesial', 'deskripsi' => 'Nasi goreng dengan bumbu rahasia', 'porsi' => 2, 'waktu' => 30],
            ['user_id' => 1, 'judul' => 'Ayam Bakar Madu', 'deskripsi' => 'Ayam bakar dengan olesan madu', 'porsi' => 4, 'waktu' => 60],
            ['user_id' => 2, 'judul' => 'Soto Ayam', 'deskripsi' => 'Soto ayam khas Jawa', 'porsi' => 6, 'waktu' => 90],
            // Add the rest of the recipe entries here...
        ]);
    }
}
