<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'salidas';

    protected $fillable = [
    	'id_salida',
    	'curp',
    	'id_estado',
    	'id_municipio',
    	'id_localidad',
    	'id_seccion',
    	'id_apoyo',
    	'firmaciudadano',
    ];
}
