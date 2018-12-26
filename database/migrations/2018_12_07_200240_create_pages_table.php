<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');    
            $table->string('slug');     
            $table->text('body');     
            $table->unsignedInteger('page_type_id');
            $table->enum('status',['publish','draft'])->default('publish');   
            $table->timestamps();

            $table->foreign('page_type_id')->references('id')->on('page_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
