<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apoyo extends Model
{
    protected $table = 'apoyos';

    protected $fillable = [
    	'id_apoyo',
    	'nombreapoyo',
    ];
}
