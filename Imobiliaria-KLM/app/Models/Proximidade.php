<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proximidade extends Model
{
    public function imoveis(){
        return $this-> belongsTo(Imovel::class)->withTimestamps();
    }
}
