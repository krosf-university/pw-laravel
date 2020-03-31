<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    protected $table = 'articulos';
    protected $fillable = ['titulo', 'descripcion', 'cuerpo'];
}
