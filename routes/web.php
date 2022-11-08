<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajadoresController;

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
    return view('index');
});


Route::get('/trabajadores/login', function () {
    return view('trabajadores.index');
});

Route::get('/trabajadores/panel', function () {
    return view('trabajadores.panel');
});

Route::get('/trabajadores/panel/optrabajadores', function () {
    return view('trabajadores.trabajadores');
});

Route::get('/trabajadores/panel/optrabajadores/verlista', function () {
    return view('trabajadores.vertrabajadores');
});

Route::get('/trabajadores/panel/optrabajadores/crear', function () {
    return view('trabajadores.agregarTrabajador');
});

Route::get('/aprende', function () {
    return view('aprende');
});

Route::resource('trabajadores', TrabajadoresController::class);
