<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Use App\Colonia;
Use App\Estado;
Use App\Municipio;

class EstadoController extends Controller
{
    public function consultarEstados(Request $request)
    {
        try {
            $consulMun = DB::select('SELECT e.idEstado, e.d_codigo, c.NombreColonia as colonia, e.d_tipo_asenta, m.NombreMunicipio as municipio, CP FROM estado e JOIN colonia c ON e.id_Colonia = c.IdColonia JOIN municipio m ON e.id_Municipio = m.idMunicipio');
            return response()->json(['status'=>'Exito','data'=>$consulMun],201);
        } catch(Exception $e) {
            return $queryStatus = "No";
        }
        
    }
}