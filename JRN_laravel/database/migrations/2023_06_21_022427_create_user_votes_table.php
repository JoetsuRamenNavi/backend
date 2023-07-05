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
        Schema::create('user_votes', function (Blueprint $table) {
            $table->increments('votes_id')->unsigned()->nullable(false);
            $table->string('battle_name',50)->nullable(false);
            $table->string('battle_term',20)->nullable(false);
            $table->timestamps();
            $table->unsignedInteger('id');
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('join_id');
            $table->foreign('join_id')->references('join_id')->on('join_stores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_votes');
    }
};
