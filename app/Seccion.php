<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $table = 'seccions';

    protected $fillable = [
    	'id_seccion',
    	'nombreseccion',
    ];
}
