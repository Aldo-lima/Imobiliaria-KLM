<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'rua',
        'numero',
        'complemento',
        'bairro',
    ];

    public function imovel(){

        return $this->belongsTo('Imovel::class');
    }
}
