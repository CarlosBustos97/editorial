<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalRevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursal_revistas', function (Blueprint $table) {
            $table->bigInteger('sucursal_id');
            $table->bigInteger('revista_id');
            $table->primary(['sucursal_id','revista_id']);//->usigned()->primary();
            //$table->integer('revista_id');//->usigned()->primary();
            $table->foreign('sucursal_id')->references('id')->on('sucursals');
            $table->foreign('revista_id')->references('id')->on('revistas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sucursal_revistas');
    }
}
