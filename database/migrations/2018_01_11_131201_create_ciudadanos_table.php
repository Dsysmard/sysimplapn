<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudadanos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('edad');
            $table->string('sexo');
            $table->string('calle');
            $table->string('numero');
            $table->string('colonia');
            $table->string('codigopostal');
            $table->string('folio');
            $table->string('clavedeelector');
            $table->string('curp')->unique();
            $table->string('emision');
            $table->string('vigencia');
            $table->string('fotoine')->default('default.jpg');
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
        Schema::dropIfExists('ciudadanos');
    }
}
