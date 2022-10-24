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
        Schema::dropIfExists('bikes');

        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->string('imageUrl');
            $table->string('marque');
            $table->string('vitesse');
            $table->string('type');
            $table->string('etat');
            $table->string('couleur');
            $table->string('taille');
            $table->string('prix');
            $table->string('quantite');
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