<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IngredientTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\IngredientTranslation::factory(45)->create();
    }
}
