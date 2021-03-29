<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
protected $tabe = "imoveis";

    public function endereco(){
     return $this->hasOne(Endereco::class);
  }
    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }

    public function finalidade(){
        return $this->belongsTo(Finalidade::class);
    }

    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }

    public function proximidade(){
        return $this->belongsToMany(Proximidade::class)->withTimestamps();
    }
}
