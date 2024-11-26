<?php

namespace Database\Factories;

use App\Models\Step;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class StepFactory extends Factory
{
    protected $model = Step::class;

    public function definition()
    {
        return [
            'recipe_id' => Recipe::factory(),
            'nomor_urut' => $this->faker->numberBetween(1, 10),
            'deskripsi_langkah' => $this->faker->sentence(),
        ];
    }
}
