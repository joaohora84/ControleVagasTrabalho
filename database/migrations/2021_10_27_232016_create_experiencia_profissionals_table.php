<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciaProfissionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencia_profissionals', function (Blueprint $table) {
            $table->id();
            $table->string('empresa');
            $table->string('cargo');
            $table->string('formaContratacao');
            $table->date('dataInicio');
            $table->date('dataConclusao');
            $table->unsignedBigInteger('candidato_id');
            $table->foreign('candidato_id')
                ->unsigned()
                ->nullable()
                ->references('id')
                ->on('candidatos')
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
        Schema::dropIfExists('experiencia_profissionals');
    }
}
