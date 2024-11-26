<?php

namespace Database\Factories;

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientFactory extends Factory
{
    protected $model = Ingredient::class;

    public function definition()
    {
        return [
            'recipe_id' => Recipe::factory(),
            'nama_bahan' => $this->faker->word(),
            'jumlah' => $this->faker->randomFloat(2, 1, 1000),
            'satuan' => $this->faker->randomElement(['gram', 'kg', 'ml', 'butir', 'siung', 'sendok makan']),
        ];
    }
}