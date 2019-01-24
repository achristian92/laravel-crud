<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = 'peliculas';
    public $timestamps = false;

    protected $fillable = [
        'titulo',
        'resumen',
        'ano',
        'pais',
        'protagonistas',

    ];

}
