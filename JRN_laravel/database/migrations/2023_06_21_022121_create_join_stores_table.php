<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('join_stores', function (Blueprint $table) {
            $table->increments('join_id')->unsigned()->nullable(false);
            $table->string('battle_name',50)->nullable(false);
            $table->string('battle_term',20)->nullable(false);
            $table->string('ramen_name',20)->nullable(false);
            $table->integer('ramen_price');
            $table->unsignedInteger('store_id');
            $table->foreign('store_id')->references('store_id')->on('stores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('join_stores');
    }
};
