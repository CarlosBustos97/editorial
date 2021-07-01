<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodistas', function (Blueprint $table) {
            $table->bigInteger('id')->usigned()->primary();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('especialidad');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periodistas');
    }
}
