<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            MealSeeder::class,
            CategorySeeder::class,
            IngredientSeeder::class,
            TagSeeder::class,
            LanguageSeeder::class,
            TranslationSeeder::class,
            MealIngredientSeeder::class,
            MealTagSeeder::class,
            IngredientTranslationSeeder::class,
            MealTranslationSeeder::class,
            TagTranslationSeeder::class,
        ]);
    }
}
