<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogoSuscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_suscripciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cve')->nullable();
            $table->string('titulo')->nullable();
            $table->text('descripcion');
            $table->integer('monto')->unsigned();
            $table->integer('duracion')->unsigned();
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
        Schema::drop('catalogo_suscripciones');
    }
}
