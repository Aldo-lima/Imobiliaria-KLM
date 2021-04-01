<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImovelReuest;
use App\Models\Finalidade;
use App\Models\Imovel;
use App\Models\Municipio;
use App\Models\Proximidade;
use App\Models\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Polyfill\Iconv\Iconv;

class ImovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imoveis = Imovel::with(['municipio', 'endereco'])->orderBY('titulo', 'asc')->get();
        return view('Admin.sistema.listaImovel', ['imoveis'=>$imoveis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::all();
        $municipios = Municipio::all();
        $finalidades = Finalidade::all();
        $proximidades = Proximidade::all();
        $action = route('imovel.store');
        return view('Admin.sistema.formImovel', ['action'=>$action, 'municipios'=>$municipios, 'tipos'=>$tipos, 'finalidades'=>$finalidades, 'proximidades'=>$proximidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImovelReuest $request)
    {
       DB::beginTransaction();
       $imovel = Imovel::create($request->all());
       $imovel->endereco()->create($request->all());

       if($request->has('proximidade')){
           $imovel->proximidade()->attach($request->proximidade);
       }

       DB::commit();
       $request->session()->flash('sucesso', " I movel inserido sucesso!");
       return redirect()->route('imovel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imovel = Imovel::with(['municipio','finalidade', 'tipo', 'proximidade', 'endereco'])->find($id);
        $tipos = Tipo::all();
        $municipios = Municipio::all();
        $finalidades = Finalidade::all();
        $proximidades = Proximidade::all();
        $action = route('imovel.update', $imovel->id);
        return view('Admin.sistema.formImovel', [ 'imovel'=>$imovel, 'action'=>$action, 'municipios'=>$municipios, 'tipos'=>$tipos, 'finalidades'=>$finalidades, 'proximidades'=>$proximidades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImovelReuest $request, $id)
    {
        DB::beginTransaction();
        $imovel = Imovel::find($id);
        $imovel->update($request->all());
        $imovel->endereco->update($request->all());

        if($request->has('proximidade')){
            $imovel->proximidade()->sync($request->proximidade);
        }
        DB::commit();
        $request->session()->flash('sucesso', " Imovel atualizado com  sucesso!");
        return redirect()->route('imovel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
         $imovel = Imovel::find($id);

         DB::beginTransaction();
         $imovel->endereco->delete();
         $imovel->delete();
         DB::commit();
         $request->session()->flash('sucesso', " I movel excluido sucesso!");
         return redirect()->route('imovel.index');
        }
}
