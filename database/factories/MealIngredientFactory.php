<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MealIngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'meal_id' => $this->faker->numberBetween($min = 1, $max = 25),
            'ingredient_id' => $this->faker->unique()->numberBetween($min = 1, $max = 45),
        ];
    }
}
