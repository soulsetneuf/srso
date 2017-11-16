<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    var $table_name='clientes';
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->increments('id');
            $table->string("nombres");
            $table->string("apellido_paterno");
            $table->string("apellido_materno");
            $table->string("email");
            $table->string("telefono");
            $table->string("pais");
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