<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public $timestamps = false;
   
   protected $fillable = ['idEstado', 'd_codigo', 'id_Colonia', 'd_tipo_asenta', 'id_Municipio', 'CP'];
}