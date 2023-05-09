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
    return "teste";
    //return view('welcome');
});

//Route::get('/clientes', 'ClienteController@index');
//Route::get('/clientes/{nome}/{idade}', 'ClienteController@index');

//Route::redirect('/', '/clientes', 301);
//Route::resource('clientes', 'ClienteController');

Route::redirect('/', '/cidades', 301);
Route::resource('cidades', 'CidadeController');