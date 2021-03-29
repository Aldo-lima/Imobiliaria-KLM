<?php

use Illuminate\Database\Seeder;
use App\Models\Finalidade;
class FinalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Finalidade::create(['nome'=>'Alugue']);
      Finalidade::create(['nome'=>'Venda']);

    }
}
