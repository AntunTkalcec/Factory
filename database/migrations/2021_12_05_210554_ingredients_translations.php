<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IngredientsTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients_translations', function (Blueprint $table) {
            $table->integer('translation_id')->unsigned();
            $table->integer('ingredient_id')->unsigned();

            $table->unique(['translation_id', 'ingredient_id']);
            $table->foreign('translation_id')->references('id')->on('translations');
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
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
