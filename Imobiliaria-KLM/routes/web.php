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
Route::resource('municipio', 'CidadesController');
Route::resource('imovel', 'ImovelController');
Route::get('index','SiteController@index');
Route::get('imovel-busca','SiteController@index');
Route::get('/', function () {
    return view('Admin.sistema.index');
});
