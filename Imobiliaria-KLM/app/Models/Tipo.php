<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $fillable =['nome'];

    public function imoveis(){
        return $this-> hasMany(Imovel::class);
    }
}
