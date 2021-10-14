<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->string('cargo');
            $table->string('especificacoes');
            $table->double('remuneracao');
            $table->boolean('valeTransporte');
            $table->boolean('valeRefeicao');
            $table->string('observacoes');
            $table->string('turno');
            $table->string('formaContratacao');
            $table->string('uf');
            $table->foreign('empresa_id')
               ->references('id')
               ->on('empresas')
               ->onDelete('cascade');
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
        Schema::dropIfExists('vagas');
    }
}
