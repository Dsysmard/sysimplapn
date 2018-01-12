<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudadano extends Model
{
    protected $table = 'ciudadanos';

    protected $fillable = [
    	'nombre',
    	'apellido',
    	'edad',
    	'sexo',
    	'calle',
    	'numero',
    	'colonia',
    	'codigopostal',
    	'folio',
    	'clavedeelector',
    	'curp',
    	'emision',
    	'vigencia',
    	'fotoine',
    ];
}
