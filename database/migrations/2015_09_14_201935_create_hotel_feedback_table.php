<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_ranking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id')->unsigned();
            $table->integer('reservacion_id')->unsigned();
            $table->integer('rank_atencion')->unsigned();
            $table->integer('rank_habitacion')->unsigned();
            $table->integer('rank_hotel')->unsigned();
            $table->enum('recomendable', ['si', 'no']);
            $table->text('comentarios');
            $table->timestamps();

            $table->foreign('hotel_id')->references('id')->on('hotel')->onDelete('cascade');
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
        Schema::drop('hotel_feedback');
    }
}
