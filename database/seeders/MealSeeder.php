<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Meal::factory(25)->create();
    }
}
