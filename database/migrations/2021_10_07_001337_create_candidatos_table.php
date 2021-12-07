<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->string('login');
            $table->string('senha');
            $table->string('nome');
            $table->string('rg');
            $table->string('orgaoExpeditor');
            $table->date('dataExpedicao')->format('d/m/Y');
            $table->string('ufExpedicao');
            $table->string('cpf');
            $table->date('dataNascimento')->format('d/m/Y');
            $table->string('sexo');
            $table->string('estadoCivil');
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
        Schema::dropIfExists('candidatos');
    }
}
