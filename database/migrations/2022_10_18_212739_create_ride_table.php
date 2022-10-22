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
        Schema::create('rides', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('association_id')->unsigned()->index()->nullable();
            $table->foreign('association_id')->references('id')->on('associations')->onDelete('cascade');
            $table->string('location');
            $table->date('date');
            $table->time('time');
            $table->enum('status', ['Waiting', 'Started', 'Cancelled', 'Finished'])->default('Waiting');
            $table->time('duration');
            $table->float('distance');
            $table->float('lng');
            $table->float('lat');
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
        Schema::dropIfExists('rides');
    }
};
