<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_cliente")->unsigned();
            $table->foreign('id_cliente')->references('id')->on('clientes') ->onDelete('cascade');
            $table->date("fecha");
            $table->string("hora");
            $table->integer("cantidad");
            $table->string("descripcion");
            $table->string("estado");
            $table->float("anticipo");
            $table->float("saldo");
            $table->float("total");
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
        Schema::dropIfExists('reservas');
    }
}
