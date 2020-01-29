<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableViagens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viagens', function (Blueprint $table) {
            $table->bigIncrements('id');
            // Abaixo a foreign key com a tabela usuário para a relação administrador
            // Uma viagem belongsTo um administrador e um administrado hasMany viagens
            $table->unsignedBigInteger('administrador');
            $table->string('nome');
            $table->string('descricao');
            $table->string('foto');
            $table->dateTime('partida');
            $table->dateTime('retorno');
            $table->timestamps();
            // Definição da ligação 1 : n
            // $table->foreign('administrador')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_viagens');
    }
}
