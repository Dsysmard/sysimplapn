<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = 'localidads';

    protected $fillable = [
    	'id_localidad',
    	'nombrelocalidad',
    ];
}
