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
        Schema::create('stores', function (Blueprint $table) {
            $table->integer('store_id')->unsigned()->nullable(false)->unique()->primary();
            $table->string('store_name')->nullable(false);
            $table->string('tel',20)->nullable(false);
            $table->string('address',50)->nullable(false);
            $table->string('store_url',50);
            $table->string('image',50);
            $table->string('entry_item',50);
            $table->string('entry_price',50);
            $table->string('entry_comment',300);
            $table->unsignedInteger('id');
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
};
