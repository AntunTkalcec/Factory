<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MealsTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MealTag::factory(30)->create();
    }
}
