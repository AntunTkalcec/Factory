<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MealsIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MealIngredient::factory(45)->create();
    }
}
