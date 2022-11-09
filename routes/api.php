<?php

use App\Http\Controllers\GiroController;
use App\Http\Controllers\NegocioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', function(Request $request){

    if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        $user = Auth::user();
        //$success['token'] =  $user->createToken('MyApp')-> accessToken;
        //$success['name'] =  $user->name;

        $arr = array('acceso' => "Ok", 'error' => "", 'token' => $user->createToken('MyApp')-> accessToken);

        return json_encode($arr);
    }
    else{

        $arr = array('acceso' => "", 'error' => "No existe el usuario o contraseña", 'token' => "");

        return json_encode($arr);
    }
   
});

//Ruta para los negocios
Route::get('negocio', [NegocioController::class, 'index']);
Route::post('negocio', [NegocioController::class, 'store'])->middleware('auth:api');
Route::post('negocio/delete', [NegocioController::class, 'destroy'])->middleware('auth:api');

//Ruta para los giros
Route::get('giro', [GiroController::class, 'index']);
Route::post('giro', [GiroController::class, 'store'])->middleware('auth:api');
Route::post('giro/delete', [GiroController::class, 'destroy'])->middleware('auth:api');