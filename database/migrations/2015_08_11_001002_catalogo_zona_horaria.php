<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatalogoZonaHoraria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_zona_horaria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pais')->unsigned();
            $table->string('zona_horaria')->nullable();
            $table->string('zona_vanidad')->nullable();

            $table->foreign('id_pais')->references('id')->on('catalogo_pais')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('catalogo_zona_horaria');
    }
}
