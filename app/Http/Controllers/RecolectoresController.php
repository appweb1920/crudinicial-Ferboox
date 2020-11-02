<?php

namespace App\Http\Controllers;

use App\Recolector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecolectoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $recolectores = Recolector::all();
        if(is_null($user))
            return view('auth/login');
        else
            return view('vistasRecolector/inicioRecolector')->with('recolectores',$recolectores)->with('usuario',$user);;
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
        $recolector = new Recolector;
        $recolector->nombre=$request->nombre;
        $recolector->diasRecoleccion=$request->diasRecoleccion;
        $recolector->save();

        return redirect('/recolectores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recolector  $recolector
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recolector = Recolector::find($id);
        return view('vistasRecolector/detalleRecolector')->with('recolector',$recolector);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recolector  $recolector
     * @return \Illuminate\Http\Response
     */
    public function edit(Recolector $recolector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recolector  $recolector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recolector $recolector)
    {
        //
    }

    public function guardaEdicion(Request $request)
    {
        $recolector = Recolector::find($request->id);
        
        $recolector->nombre = $request->nombre;
        $recolector->diasRecoleccion = $request->diasRecoleccion;


        $recolector->save();
    
        return redirect('/recolectores');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recolector  $recolector
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recolector $recolector)
    {
        //
    }
}
