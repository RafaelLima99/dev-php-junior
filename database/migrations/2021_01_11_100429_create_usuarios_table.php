<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 200);
            $table->char('cpf', 14);
            $table->char('dataNasc', 10);
            $table->string('email', 200);
            $table->char('telefone', 13);
            $table->string('endereco', 200);
            $table->string('cidade', 100);
            $table->string('estado', 100);
            $table->char('cep', 8);
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
        Schema::dropIfExists('usuarios');
    }
}
