<?php

use App\Http\Controllers\MascotaController;
use App\Http\Controllers\TipoController;
use App\Models\Tipo;
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

Route::apiResource('tipos', TipoController::class)->names('tipos'); //Rutas para los tipos de animales

Route::apiResource('mascotas', MascotaController::class)->names('mascotas'); //Rutas para las mascotas
