<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevistaArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revista-articulos', function (Blueprint $table) {
            $table->bigInteger('articulo_id');
            $table->bigInteger('revista_id');
            $table->primary(['articulo_id','revista_id']);
            //$table->integer('revista_id')->usigned()->primary();
            $table->foreign('articulo_id')->references('id')->on('articulos');
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
        Schema::dropIfExists('revista-articulos');
    }
}
