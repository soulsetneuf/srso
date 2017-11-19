<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    var $table_name='menus';
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->increments('id');
            $table->string("nombre");
            $table->float('precio_unitario');
            $table->string("descripcion");
            $table->integer("id_imagen")->unsigned();
            $table->foreign('id_imagen')->references('id')->on('imagenes') ->onDelete('cascade');
            $table->integer("id_servicio")->unsigned();
            $table->foreign('id_servicio')->references('id')->on('servicios') ->onDelete('cascade');
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
        Schema::dropIfExists($this->table_name);
    }
}
