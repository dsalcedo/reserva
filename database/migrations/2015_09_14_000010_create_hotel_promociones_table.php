<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelPromocionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_promociones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id')->unsigned();
            $table->string('titulo')->nullable();
            $table->text('descripcion');
            $table->enum('tipo', ['porcentaje','cantidad']);
            $table->integer('valor')->unsigned();
            $table->dateTime('promotion_starts_at');
            $table->dateTime('promotion_ends_at');
            $table->timestamps();

            $table->foreign('hotel_id')->references('id')->on('hotel')->onDelete('cascade');
        });

        Schema::table('reservacion_hotel', function (Blueprint $table) {
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
        Schema::drop('hotel_promociones');
    }
}
