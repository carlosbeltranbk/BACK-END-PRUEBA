<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Use App\Estado;
Use App\Municipio;
Use App\Colonia;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// ------------------------------ RUTAS DE COLONIAS------------------------------------------ //


Route::group(['middleware' => 'cors'], function () {

        Route::get('cors/listaColonias', 'ColoniaController@consultarColonias');
    Route::post('cors/consultarColoniaCP', 'ColoniaController@busquedaColoniaCP');
    // ------------------------------ RUTAS DE ESTADOS------------------------------------------ //
    Route::get('cors/listaEstados', 'EstadoController@consultarEstados');
    // ------------------------------ RUTAS DE MUNICIPIOS------------------------------------------ //
    Route::get('cors/listaMunicipios', 'MunicipioController@consultarMunicipios');
    Route::post('cors/registrarMunicipio', 'MunicipioController@insertarMunicipio');

});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
