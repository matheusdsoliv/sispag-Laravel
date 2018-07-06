<?php

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

Route::get('/', 'FormularioPagamentoController@index')->name('index');
Route::post('/FormularioPagamentoView', 'FormularioPagamentoController@store')->name('rota_capta_form');
