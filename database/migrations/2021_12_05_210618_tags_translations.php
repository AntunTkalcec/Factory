<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TagsTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags_translations', function (Blueprint $table) {
            $table->integer('translation_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->unique(['translation_id', 'tag_id']);
            $table->foreign('translation_id')->references('id')->on('translations');
            $table->foreign('tag_is')->references('id')->on('tags');
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
