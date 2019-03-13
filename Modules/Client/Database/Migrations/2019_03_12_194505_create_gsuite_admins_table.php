<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGsuiteAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client-gsuite_admins', function (Blueprint $table) {
            $table->increments('id');  
            $table->string('tg_id')->unique()->nullable();  
            $table->string('tg_name')->nullable();  
            $table->string('tg_username')->unique()->nullable();  
            $table->string('role');  
            $table->string('university');  
            $table->string('department')->nullable();  
            $table->integer('section')->nullable();    
            $table->string('passcode')->nullable()->unique();  
            $table->boolean('active')->default(false);
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
        Schema::dropIfExists('client-gsuite_admins');
    }
}
