<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\EstudianteController;
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

Route::controller(EstudianteController::class)->group(function () {
    Route::get('/estudiante', 'listarAPI');
    Route::get('/estudiante/{id}', 'obtenerAPI');
    Route::get('/estudiante/rut/{rut}', 'obtenerPorRutAPI');
    Route::post('/estudiante/insertar', 'insertarAPI');
});

Route::controller(CarreraController::class)->group(function () {
    Route::get('/carrera', 'listarAPI');
    Route::post('/carrera/insertar', 'insertarAPI');
});
