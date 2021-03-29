<?php

use Illuminate\Database\Seeder;
use App\Models\Tipo;
class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Tipo::create(['nome'=>'Apartamento']);
       Tipo::create(['nome'=>'Casa']);
       Tipo::create(['nome'=>'Ponto Comercial']);
    }
}
