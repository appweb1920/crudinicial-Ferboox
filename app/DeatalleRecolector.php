<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeatalleRecolector extends Model
{
    protected $table = "detalles";
    protected $fillable =['punto_id','recolector_id'];
}
