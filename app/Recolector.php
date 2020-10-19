<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Recolector extends Model
{
    protected $table = "recolectores";
    protected $fillable =['nombre','diasRecoleccion'];

    public function getPuntos()
    {
        $direcciones = DB::table('detalles')
        ->join('puntos', 'puntos.id', '=', 'detalles.punto_id')
        ->join('recolectores', 'recolectores.id', '=', 'detalles.recolector_id')
        ->where('detalles.recolector_id',$this->id)
        ->select('puntos.direccion')
        ->get();
        return $direcciones;
    }
}
