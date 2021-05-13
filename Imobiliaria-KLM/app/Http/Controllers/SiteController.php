<?php

namespace App\Http\Controllers;
use App\Models\Imovel;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $imoveis = request('search');

        if($imoveis){
            $imoveis = Imovel::where([
                ['titulo','like', '%'.$imoveis]
            ])->get();
            return view('Admin.sistema.index', ['imoveis'=>$imoveis]);
        } else {

        $imoveis = Imovel::with(['municipio', 'endereco'])->orderBY('titulo', 'asc')->get();
        return view('Admin.sistema.index', ['imoveis'=>$imoveis]);
        }
    }
}
