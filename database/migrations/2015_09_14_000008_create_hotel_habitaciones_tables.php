<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelHabitacionesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_habitaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id')->unsigned();
            $table->string('titulo')->nullable();
            $table->text('descripcion');
            $table->integer('estatus_id')->unsigned();
            $table->integer('tipo_habitacion_id')->unsigned();
            $table->integer('adultos')->unsigned();
            $table->integer('infantes')->unsigned();
            $table->integer('max_ocupantes')->unsigned(); // adultos + infantes
            $table->integer('precio')->unsigned();
            $table->integer('impuesto')->unsigned();
            $table->timestamps();

            $table->foreign('hotel_id')->references('id')->on('hotel')->onDelete('cascade');
            $table->foreign('estatus_id')->references('id')->on('catalogo_habitacion_estatus')->onDelete('cascade');
            $table->foreign('tipo_habitacion_id')->references('id')->on('catalogo_tipo_habitacion')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hotel_habitaciones');
    }
}
