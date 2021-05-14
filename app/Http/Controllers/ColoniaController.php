<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Use App\Colonia;
Use App\Estado;
Use App\Municipio;

class ColoniaController extends Controller
{
    public function consultarColonias(Request $request)
    {
        try {
            $consulMun = DB::select('select * from colonia');
            return response()->json(['status'=>'Exito','data'=>$consulMun],201);
        } catch(Exception $e) {
            return $queryStatus = "No";
        }
        
    }

    public function busquedaColoniaCP(Request $request)
    {
        $CP = $request->input('CP');
        try {
            return DB::select('CALL obtenerColoniasCP(?)',array($CP));
            $queryStatus = "Si";
            return response()->json(['status'=>'Exito','data'=>$consulMun],201);
        } catch(Exception $e) {
            return $queryStatus = "No";
        }
    }
}