<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteressesViagens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interesses_viagens', function (Blueprint $table) {
            $table->unsignedBigInteger('id_interesse');
            $table->unsignedBigInteger('id_viagem');
            $table->foreign('id_interesse')->references('id')->on('interesses');
            $table->foreign('id_viagem')->references('id')->on('viagens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interesses_viagens');
    }
}
