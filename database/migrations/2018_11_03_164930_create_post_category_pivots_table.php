<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostCategoryPivotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_category_pivots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_category_id')->unsigned();
            $table->foreign('post_category_id')->references('id')->on('post_categories')->onDelete('cascade');
            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_category_pivots');
    }
}
