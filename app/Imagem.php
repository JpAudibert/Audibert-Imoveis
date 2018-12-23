<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    public function Imovel()
    {
        return $this->belongsTo('App\Imovel');
    }
}
