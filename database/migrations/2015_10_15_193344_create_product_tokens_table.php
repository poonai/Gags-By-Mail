<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tokens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('u_id');
            $table->string('product_id');
            $table->string('order_token');
            $table->boolean('order_info');
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
        Schema::drop('product_tokens');
    }
}
