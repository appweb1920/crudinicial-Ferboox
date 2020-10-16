<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;




class PuntoDeReciclaje extends Model
{
    protected $table = "puntos";
    protected $fillable =['horaApertura','horaSalida','direccion','tipoBasura'];

    public function getRecolectores()
    {
        $trabajadores = DB::table('detalles')
        ->join('puntos', 'puntos.id', '=', 'detalles.punto_id')
        ->join('recolectores', 'recolectores.id', '=', 'detalles.recolector_id')
        ->where('detalles.punto_id',$this->id)
        ->select('recolectores.nombre')
        ->get();
        return $trabajadores;
    }
}
