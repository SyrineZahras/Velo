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
        Schema::dropIfExists('option_bikes');

        Schema::create('option_bikes', function (Blueprint $table) {
            $table->id();
            $table->string('imageUrl');
            $table->string('option');
            $table->string('couleur');
            $table->string('type');
            $table->string('prix');
            $table->bigInteger('bike_id')->unsigned()->index()->nullable();
            $table->foreign('bike_id')->references('id')->on('bikes');
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};