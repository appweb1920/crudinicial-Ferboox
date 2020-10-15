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

Route::get('/',function () {return view('index');});

//Puntos de Reciclaje
Route::get('/puntosReciclaje',"PuntosDeReciclajeController@index");
Route::post('/registroPunto',"PuntosDeReciclajeController@store");
Route::get('/actualizaPunto/{id}','PuntosDeReciclajeController@show');
Route::post('/actualizaPunto/guardaPunto','PuntosDeReciclajeController@guardaEdicion');

//Recolectores
Route::get('/recolectores',"RecolectoresController@index");
Route::post('/registroRecolector',"RecolectoresController@store");
Route::get('/actualizaRecolector/{id}','RecolectoresController@show');
Route::post('/actualizaRecolector/guardaPunto','RecolectoresController@guardaEdicion');