<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\Step;
use App\Models\Comment;
use App\Models\Like;
use App\Models\History;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create 10 users
        User::factory(10)->create()->each(function ($user) {
            // Create 5 recipes for each user
            Recipe::factory(5)->create(['user_id' => $user->id])->each(function ($recipe) {
                // Create 5-10 ingredients for each recipe
                Ingredient::factory(rand(5, 10))->create(['recipe_id' => $recipe->id]);
                
                // Create 3-7 steps for each recipe
                for ($i = 1; $i <= rand(3, 7); $i++) {
                    Step::factory()->create([
                        'recipe_id' => $recipe->id,
                        'nomor_urut' => $i,
                    ]);
                }
                
                // Create 0-5 comments for each recipe
                Comment::factory(rand(0, 5))->create([
                    'recipe_id' => $recipe->id,
                    'user_id' => User::inRandomOrder()->first()->id,
                ]);
                
                // Create 0-3 like for each recipe
                User::inRandomOrder()->limit(rand(0, 3))->get()->each(function ($user) use ($recipe) {
                    Like::create([
                        'user_id' => $user->id,
                        'recipe_id' => $recipe->id,
                    ]);
                });
                
                // Create 0-5 history records for each recipe
                User::inRandomOrder()->limit(rand(0, 5))->get()->each(function ($user) use ($recipe) {
                    History::create([
                        'user_id' => $user->id,
                        'recipe_id' => $recipe->id,
                    ]);
                });
            });
        });
    }
}
