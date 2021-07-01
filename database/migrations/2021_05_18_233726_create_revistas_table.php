<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revistas', function (Blueprint $table) {
            $table->bigInteger('id')->usigned()->primary();
            $table->string('titulo');
            $table->bigInteger('tipo_id')->usigned();
            $table->string('fecha');
            $table->integer('num_paginas')->usigned();
            $table->integer('num_ejemplares')->usigned();
            //$table->foreign('tipo_id')->references('id')->on('tipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revistas');
    }
}
