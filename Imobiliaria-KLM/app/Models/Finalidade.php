<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Finalidade extends Model
{
    protected $fillable =['nome'];

    public function imovel(){
        return $this->hasMany(Imovel::class);
    }
}
