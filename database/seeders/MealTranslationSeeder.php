<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MealTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MealTranslation::factory(25)->create();
    }
}
