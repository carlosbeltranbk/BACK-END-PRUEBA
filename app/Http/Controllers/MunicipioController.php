<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Use App\Colonia;
Use App\Estado;
Use App\Municipio;

class MunicipioController extends Controller
{
    public function consultarMunicipios(Request $request)
    {
        try {
            $consulMun = DB::select('select * from municipio');
            return response()->json(['status'=>'Exito','data'=>$consulMun],201);
        } catch(Exception $e) {
            return $queryStatus = "No";
        }
    }

    
    public function insertarMunicipio(Request $request)
    {
            $NombreMunicipio = $request->input('NombreMunicipio');
            DB::select('call insertarMunicipio(?)',array($NombreMunicipio));
            $resultadoBusc = DB::select('select * from municipio');
            return response()->json(['status'=>'Exito','data'=>$resultadoBusc],201);
    }
}