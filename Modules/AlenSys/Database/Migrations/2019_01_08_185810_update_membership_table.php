<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMembershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alensys-members', function (Blueprint $table) {
            $table->string('citizenship')->default('ethiopian');
            // $table->string('type')->default('ordinary');
            // $table->dropColumn('type');
            $table->integer('upline_id')->unsigned()->nullable();
            $table->foreign('upline_id')
                  ->references('id')->on('alensys-members');


            // $table->renameColumn('phone', 'phone_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('', function (Blueprint $table) {

        });
    }
}
