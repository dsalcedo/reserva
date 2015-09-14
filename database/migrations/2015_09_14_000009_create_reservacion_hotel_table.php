<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservacionHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacion_hotel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('folio')->nullable();
            $table->integer('hotel_id')->unsigned();
            $table->integer('habitacion_id')->unsigned();
            $table->integer('estatus_reservacion_id')->unsigned();
            $table->integer('promocion_id')->unsigned();
            $table->integer('precio')->unsigned();
            $table->integer('impuesto')->unsigned();
            $table->string('nombre')->nullable();
            $table->integer('tipo_contacto_id')->unsigned(); // email o telefono
            $table->string('contacto')->nullable(); // email o telefono
            $table->dateTime('reservation_starts_at')->nullableTimestamps();
            $table->dateTime('reservation_ends_at')->nullableTimestamps();
            $table->timestamps();

            $table->foreign('hotel_id')->references('id')->on('hotel')->onDelete('cascade');
            $table->foreign('habitacion_id')->references('id')->on('hotel_habitaciones')->onDelete('cascade');
            $table->foreign('estatus_reservacion_id')->references('id')->on('catalogo_estatus_reservacion')->onDelete('cascade');
            $table->foreign('tipo_contacto_id')->references('id')->on('catalogo_tipo_contacto')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservacion_hotel');
    }
}
