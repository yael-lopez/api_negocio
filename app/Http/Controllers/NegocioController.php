<?php

namespace App\Http\Controllers;

use App\Models\Negocio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $negocios = DB::table('negocios')
            ->join('giros', 'negocios.giro', '=', 'giros.id')
            ->select('negocios.*', 'giros.nombre as nombreGiro', 'giros.descripcion as descripcionGiro')
            ->get();
        return $negocios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->id != 0){
            $negocio = Negocio::find($request->id);
        }else{
            $negocio = new Negocio();
        }
        $negocio->nombre = $request->nombre;
        $negocio->descripcion = $request->descripcion;

        if($request->file('img_negocio') != null){
            $path = $request->file('img_negocio')->store('public');
            $negocio->imagen = $path;
        }

        $negocio->giro = $request->giro;
        $negocio->latitud = $request->latitud;
        $negocio->longitud = $request->longitud;

        $negocio->save();
        return $negocio;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Negocio  $negocio
     * @return \Illuminate\Http\Response
     */
    public function show(Negocio $negocio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Negocio  $negocio
     * @return \Illuminate\Http\Response
     */
    public function edit(Negocio $negocio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Negocio  $negocio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Negocio $negocio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Negocio  $negocio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $negocio = Negocio::find($request->id);
        $negocio->delete();
        return $negocio;
    }
}
