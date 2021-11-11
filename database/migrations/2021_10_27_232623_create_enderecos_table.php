<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('logradouro');
            $table->string('bairro');
            $table->string('uf');
            $table->string('cidade');
            $table->integer('cep');
            $table->string('email');
            $table->integer('telefoneResidencial');
            $table->integer('telefoneComercial');
            $table->integer('fax');
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedBigInteger('candidato_id'); 

            $table->foreign('empresa_id')
                ->unsigned()
                ->nullable()
                ->references('id')
                ->on('empresas')
                ->onDelete('cascade');
                
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
        Schema::dropIfExists('enderecos');
    }
}