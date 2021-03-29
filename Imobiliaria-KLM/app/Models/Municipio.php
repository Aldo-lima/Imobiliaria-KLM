<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factory;

class Municipio extends Model
{
    protected $fillable =['nome'];

    public function imoveis(){
    return $this->hasMany(Municipio::class);
    }
}
