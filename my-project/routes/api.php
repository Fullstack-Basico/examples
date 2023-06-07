<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::get("/saludo/abc",function (Request $request) {
    
    $message = ['mensaje' => "Hola Mundo !"];

    return response()->json($message);

});


Route::post("/libro",function (Request $request) {
    
    $message = ['book' => "Cien años de soledad!"];

    return response()->json($message);

});


Route::put("/carro",function (Request $request) {
    
    $message = [
        'carro' => "Renault",
        'diseño' => [
            "color" => "rojo",
            "tamaño" => "grande",
            "detalle" =>[ 1,2,3,4]
        ]];

    return response()->json($message);

});


Route::patch("/computador",function (Request $request) {
    
    $message = ['computador' => "Lenovo"];

    return response()->json($message);

});


Route::delete("/musica",function (Request $request) {
    
    $message = ['musica' => "Nirvana"];

    return response()->json($message);

});