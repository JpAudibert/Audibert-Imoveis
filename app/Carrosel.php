<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrosel extends Model
{
    protected $fillable = [
        'img', 'titulo', 'subtitulo'
    ];
}
