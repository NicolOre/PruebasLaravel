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
    return view('pruebas');
});

Route::get('fotos', function(){
	return view('fotos');
})->name('foto');

Route::get('nosotros/{nombre?}', function($nombre = null){
	$equipo = ['Luis','Nicol','Rodrigo'];
	//return view('nosotros',['equipo'=>$equipo]);
	return view('nosotros', compact('equipo','nombre'));
})->name('nosotro');