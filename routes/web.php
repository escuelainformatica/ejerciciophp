<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::any('/clima/listar',[\App\Http\Controllers\ClimaController::class,'listar']);

Route::controller(ProductoController::class)->group(function () {
    Route::get('/producto', 'listar');
    Route::get('/producto/insertar', 'insertarGet');
    Route::post('/producto/insertar', 'insertarPost');
    Route::get('/producto/actualizar/{idProducto}', 'actualizar');
    Route::post('/producto/actualizar/{idProducto}', 'actualizar');
    Route::get('/producto/borrar/{idProducto}', 'borrar');
    Route::post('/producto/borrar/{idProducto}', 'borrar');
});

Route::controller(EstudianteController::class)->group(function () {
    Route::get('/estudiante', 'listar');
    Route::get('/estudiante/insertar', 'insertarGet');
    Route::post('/estudiante/insertar', 'insertarPost');
    Route::get('/estudiante/actualizar/{idEstudiante}', 'actualizar');
    Route::post('/estudiante/actualizar/{idEstudiante}', 'actualizar');
    Route::get('/estudiante/borrar/{idEstudiante}', 'borrar');
    Route::post('/estudiante/borrar/{idEstudiante}', 'borrar');
});

Route::controller(CarreraController::class)->group(function () {
    Route::get('/carrera', 'listar');
    Route::get('/carrera/insertar', 'insertarGet');
    Route::post('/carrera/insertar', 'insertarPost');
    Route::get('/carrera/actualizar/{idCarrera}', 'actualizar');
    Route::post('/carrera/actualizar/{idCarrera}', 'actualizar');
    Route::get('/carrera/borrar/{idCarrera}', 'borrar');
    Route::post('/carrera/borrar/{idCarrera}', 'borrar');
});
