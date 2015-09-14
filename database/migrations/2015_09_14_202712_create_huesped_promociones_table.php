<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHuespedPromocionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huesped_promociones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('huesped_id')->unsigned();
            $table->integer('promocion_id')->unsigned();
            $table->enum('estatus', ['utilizado', 'asignado']);
            $table->timestamps();

            $table->foreign('huesped_id')->references('id')->on('huesped')->onDelete('cascade');
            $table->foreign('promocion_id')->references('id')->on('hotel_promociones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('huesped_promociones');
    }
}
