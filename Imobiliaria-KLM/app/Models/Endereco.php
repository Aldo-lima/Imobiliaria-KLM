<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public function imovel(){

        return $this->belongsTo('Imovel::class');
    }
}
