<?php

namespace Database\Factories;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    protected $model = Recipe::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'judul' => $this->faker->sentence(3),
            'deskripsi' => $this->faker->paragraph(),
            'porsi' => $this->faker->numberBetween(1, 8),
            'waktu' => $this->faker->numberBetween(15, 180),
        ];
    }
}
