<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel', function (Blueprint $table){
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('suscripcion_id')->unsigned();
            $table->string('nombre')->nullable();
            $table->string('vanidad')->unique();
            $table->text('direccion');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');
            $table->foreign('suscripcion_id')->references('id')->on('hotel_suscripcion')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hotel');
    }
}
