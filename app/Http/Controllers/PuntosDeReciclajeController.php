<?php

namespace App\Http\Controllers;

use App\PuntoDeReciclaje;
use Illuminate\Http\Request;

class PuntosDeReciclajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puntos = PuntoDeReciclaje::all();
        return view('vistasReciclaje/inicioReciclaje')->with('puntos',$puntos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $punto = new PuntoDeReciclaje;
        $punto->horaApertura=$request->horaApertura;
        $punto->horaSalida=$request->horaSalida;
        $punto->direccion=$request->direccion;
        $punto->tipoBasura=$request->tipoBasura;
        $punto->save();

        return redirect('/puntosReciclaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PuntoDeReciclaje  $puntoDeReciclaje
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $punto = PuntoDeReciclaje::find($id);
        return view('vistasReciclaje/detallePunto')->with('punto',$punto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PuntoDeReciclaje  $puntoDeReciclaje
     * @return \Illuminate\Http\Response
     */
    public function edit(PuntoDeReciclaje $puntoDeReciclaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PuntoDeReciclaje  $puntoDeReciclaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PuntoDeReciclaje $puntoDeReciclaje)
    {
       

    }

    public function guardaEdicion(Request $request)
    {
        $punto = PuntoDeReciclaje::find($request->id);
        
        $punto->direccion = $request->direccion;
        $punto->tipoBasura = $request->tipoBasura;
        $punto->horaApertura = $request->horaApertura;
        $punto->horaSalida = $request->horaSalida;

        $punto->save();
    
        return redirect('/puntosReciclaje');

    }

   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PuntoDeReciclaje  $puntoDeReciclaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(PuntoDeReciclaje $puntoDeReciclaje)
    {
        //
    }
}
