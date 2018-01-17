<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    protected $table = 'salidas';

    protected $fillable = [
    	//'id_salida',
    	'curp',
    	'id_estado',
    	'id_municipio',
    	'id_localidad',
    	'id_seccion',
    	'id_apoyo',
    	'observaciones',
    	'firmaciudadanos',
    ];
}
