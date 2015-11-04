<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVictimordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('victimorders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('u_id');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->integer('pincode');
            $table->integer('number');
            $table->string('message');
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
        Schema::drop('victimorders');
    }
}
