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
            $table->text('description');
            $table->boolean('sake_flag');
            $table->text('comment');
            $table->integer('star_up');
            $table->integer('ranking')->default(0);
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
