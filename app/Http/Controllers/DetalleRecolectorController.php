<?php

namespace App\Http\Controllers;

use App\DeatalleRecolector;
use App\Recolector;
use App\PuntoDeReciclaje;

use Illuminate\Http\Request;

class DetalleRecolectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function storeRecolector(Request $request)
    {
        $detalles = new DeatalleRecolector;
        $detalles->punto_id=$request->id_punto;
        $detalles->recolector_id=$request->id_recolector;

        $detalles->save();

        return redirect('/puntosReciclaje');
    }

    public function storePunto(Request $request)
    {
        $detalles = new DeatalleRecolector;
        $detalles->punto_id=$request->id_punto;
        $detalles->recolector_id=$request->id_recolector;

        $detalles->save();

        return redirect('/recolectores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DeatalleRecolector  $deatalleRecolector
     * @return \Illuminate\Http\Response
     */

    public function showRecolectores($id)
    {
        $recolectores = Recolector::all();
        $punto = PuntoDeReciclaje::find($id);
        return view('vistasDetalles/detalles')->with('recolectores',$recolectores)->with('punto',$punto);
    }

    
    public function showPuntos($id)
    {
        $puntos = PuntoDeReciclaje::all();
        $recolector = Recolector::find($id);
        return view('vistasDetalles/detallesRecolector')->with('puntos',$puntos)->with('recolector',$recolector);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DeatalleRecolector  $deatalleRecolector
     * @return \Illuminate\Http\Response
     */
    public function edit(DeatalleRecolector $deatalleRecolector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DeatalleRecolector  $deatalleRecolector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeatalleRecolector $deatalleRecolector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DeatalleRecolector  $deatalleRecolector
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeatalleRecolector $deatalleRecolector)
    {
        //
    }
}
