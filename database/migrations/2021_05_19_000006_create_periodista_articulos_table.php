<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodistaArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodista_articulos', function (Blueprint $table) {
            $table->bigInteger('articulo_id');
            $table->bigInteger('periodista_id');
            $table->primary(['articulo_id','periodista_id']);
            //$table->integer('periodista_id')->usigned()->primary();
            $table->foreign('articulo_id')->references('id')->on('articulos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('periodista_id')->references('id')->on('periodistas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periodista_articulos');
    }
}
