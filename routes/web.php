<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('respuestas',RespuestaController::class);

Route::resource('usuarios', UserController::class);

Route::resource('lugares', LugarController::class);

Route::resource('carreras',CarreraController::class);

Route::resource('conferencias',ConferenciaController::class);

Route::resource('encuestas',EncuestaController::class);

Route::resource('feedback',FeedbackController::class);

Route::resource('participacion',ParticipacionController::class);

Route::resource('estudiantes',EstudianteController::class);

Route::resource('respuestas',RespuestaController::class);

Route::get('/Contaduria', function () {
    return view('Contaduria.index');
});


Route::get('/registrate',function(){
    return view('registrate.index');
});

Route::resource('lugares','LugarController');