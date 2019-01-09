<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alensys-payments', function (Blueprint $table) {
            // $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->integer('month');
            $table->timestamps();

            $table->foreign('member_id')->references('id')->on('alensys-members');
            $table->primary(['member_id','month']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alensys-payments');
    }
}
