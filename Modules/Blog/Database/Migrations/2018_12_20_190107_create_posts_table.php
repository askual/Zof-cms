<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog-posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug'); 
            $table->longText('excerpt');
            $table->longText('body');   
            $table->string('picture')->nullable();
            $table->enum('status',['draft','publish'])->default('publish');
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
        Schema::dropIfExists('posts');
    }
}
