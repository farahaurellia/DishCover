<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\StepsTableSeeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\HistoryTableSeeder;
use Database\Seeders\RecipesTableSeeder;
use Database\Seeders\CommentsTableSeeder;
use Database\Seeders\FavoritesTableSeeder;
use Database\Seeders\IngredientsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            RecipesTableSeeder::class,
            IngredientsTableSeeder::class,
            StepsTableSeeder::class,
            CommentsTableSeeder::class,
            HistoryTableSeeder::class,
            FavoritesTableSeeder::class,
        ]);
    }
    
}
