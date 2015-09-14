<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioSaldoTransacciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_saldo_transacciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('metodo_pago_id')->unsigned();
            $table->integer('suscripcion_id')->unsigned();
            $table->integer('impuesto')->unsigned();
            $table->integer('monto_impesto')->unsigned();
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');
            $table->foreign('metodo_pago_id')->references('id')->on('catalogo_metodo_pago')->onDelete('cascade');
            $table->foreign('suscripcion_id')->references('id')->on('catalogo_suscripciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario_saldo_transacciones');
    }
}
