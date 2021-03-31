<?php

namespace App\Http\Controllers;
use App\Models\Municipio;
use Illuminate\Http\Request;
use App\Http\Requests\MunicipioReuest;

class CidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipios = Municipio::orderBy('nome', 'asc')->get();
    #   $municipios = Municipio::all();
        return view('Admin.sistema.municipio', ['municipios'=>$municipios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = route('municipio.store');
        return view('Admin.sistema.formCidade', ['action'=>$action]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MunicipioReuest $request)
    {
        Municipio::create($request->all());
        $request->session()->flash('sucesso', "Municipio $request->nome incluida com sucesso!");
        return redirect()->route('municipio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $municipio = Municipio::find($id);
        $action = route('municipio.update', $municipio->id);
        return view('Admin.sistema.formCidade',['action'=>$action, 'municipio'=>$municipio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MunicipioReuest $request, $id)
    {
        $municipio = Municipio::find($id);
        $municipio->update($request->all());
        $request->session()->flash('sucesso', "Municipio $request->nome alterada com sucesso!");
        return redirect()->route('municipio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Municipio::destroy($id);
        $request->session()->flash('sucesso', "Municipio $request->nome deletado com sucesso!");
        return redirect()->route('municipio.index');

    }
}
