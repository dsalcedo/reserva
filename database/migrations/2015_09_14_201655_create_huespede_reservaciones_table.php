<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHuespedeReservacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huesped_reservaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('huesped_id')->unsigned();
            $table->integer('reservacion_id')->unsigned();
            $table->timestamps();

            $table->foreign('huesped_id')->references('id')->on('huesped')->onDelete('cascade');
            $table->foreign('reservacion_id')->references('id')->on('reservacion_hotel')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('huesped_reservaciones');
    }
}
