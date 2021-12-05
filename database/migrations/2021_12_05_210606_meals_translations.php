<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MealsTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals_translations', function (Blueprint $table) {
            $table->integer('translation_id')->unsigned();
            $table->integer('meal_id')->unsigned();

            $table->unique(['translation_id', 'meal_id']);
            $table->foreign('translation_id')->references('id')->on('translations');
            $table->foreign('meal_id')->references('id')->on('meals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
