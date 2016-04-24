<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('english_title')->nullable();
            $table->string('romanian_title');
            $table->text('authors');
            $table->text('institution');
            $table->longText('english_description')->nullable();
            $table->longText('romanian_description');
            $table->string('article_file_name');
            $table->string('article_file_mime');
            $table->text('article_resume');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
