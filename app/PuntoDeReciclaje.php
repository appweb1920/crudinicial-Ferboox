<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuntoDeReciclaje extends Model
{
    protected $table = "puntos";
    protected $fillable =['horaApertura','horaSalida','direccion','tipoBasura'];
}
