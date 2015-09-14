<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatalogoPais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_pais', function (Blueprint $table) {
            $table->increments('id');
            $table->char('country_code',2)->nulleable();
            $table->string('country_name',100)->nulleable();
            $table->integer('id_moneda')->unsigned();

            $table->foreign('id_moneda')->references('id')->on('catalogo_moneda')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('catalogo_pais');
    }
}
