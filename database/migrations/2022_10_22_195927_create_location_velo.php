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
        Schema::dropIfExists('location_velo');

        Schema::create('location_velos', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('usermail');
            $table->string('userphone');
            $table->dateTime('startDate');
            $table->integer('duration');
            $table->bigInteger('bike_id')->unsigned()->index()->nullable();
            $table->foreign('bike_id')->references('id')->on('bikes')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('location_velo');
    }
};