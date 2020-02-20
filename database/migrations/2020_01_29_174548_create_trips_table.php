<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->string('photo');
            $table->date('departure');
            $table->date('return_date');
            $table->unsignedBigInteger('admin');
            //$table->unsignedBigInteger('group');  Adicionado posteriormente
            $table->boolean('visibility'); // Adicionado posteriormente
            $table->bigInteger('foreseen_budget'); // Adicionado posteriormente
            $table->foreign('admin')->references('id')->on('users');
            //$table->foreign('group')->references('id')->on('groups');
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
        Schema::dropIfExists('trips');
    }
}
