<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\UserController;


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
    return view('auth.login');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');
}); 
/* 
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); */



/* Route::resource('carrera','App\Http\Controllers\CarreraController');
Route::resource('curso','App\Http\Controllers\CursoController'); */
/* Route::get('/estudiante', [EstudianteController::class, 'index'])->name('/estudiante'); */
Route::get('/estudiante/import', [EstudianteController::class, 'import'])->name('/estudiante/import');
/* Route::get('/estudiante/create', [EstudianteController::class, 'create'])->name('/estudiante/create'); */
Route::post('/estudiante/importdata', [EstudianteController::class, 'importdata'])->name('/estudiante/importdata');
Route::get('/docente/import', [DocenteController::class, 'import'])->name('/docente/import');
Route::post('/docente/importdata', [DocenteController::class, 'importdata'])->name('/docente/importdata');
Route::get('/user/import', [UserController::class, 'import'])->name('/user/import');
Route::post('/user/importdata', [UserController::class, 'importdata'])->name('/user/importdata');


Route::resource('docente','App\Http\Controllers\DocenteController');
Route::resource('estudiante','App\Http\Controllers\EstudianteController'); 
Route::resource('user','App\Http\Controllers\UserController'); 
/* Route::resource('materia','App\Http\Controllers\MateriaController');
Route::resource('paralelo','App\Http\Controllers\ParaleloController'); */
Route::resource('pregunta','App\Http\Controllers\PreguntaController');
