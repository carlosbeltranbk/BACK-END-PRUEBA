<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colonia extends Model
{
    public $timestamps = false;
   
   protected $fillable = ['IdColonia', 'NombreColonia'];

}