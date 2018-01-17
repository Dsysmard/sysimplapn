<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salidas', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('id_salida')->unique();
            $table->string('curp');
            $table->integer('id_estado');
            $table->integer('id_municipio');
            $table->integer('id_localidad');
            $table->integer('id_seccion');
            $table->integer('id_apoyo');
            $table->string('observaciones');
            $table->string('firmaciudadano');
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
        Schema::dropIfExists('salidas');
    }
}
