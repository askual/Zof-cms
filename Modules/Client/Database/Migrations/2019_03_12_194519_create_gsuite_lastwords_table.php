<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGsuiteLastwordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client-gsuite_lastwords', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number');
            $table->string('university');  
            $table->string('department');  
            $table->integer('section');    
            $table->string('name');    
            $table->string('sex');    
            $table->string('lastword');    
            $table->string('phone_number');    
            $table->boolean('active')->default(true);    

            $table->string('tg_id')->unique()->nullable();  
            $table->string('tg_username')->nullable();  
            $table->string('tg_name');  


            $table->timestamps();
        });
    }
    // name, sex, lastword, phonenumber, 
    // university, department, id_number, section,
    // tg_name. tg_username, date
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client-gsuite_lastwords');
    }
}
