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

Route::get('/', 'FuncionarioController@index');
Route::get('/showall', 'FuncionarioController@showAll');
Route::get('/search', 'FuncionarioController@search');

Route::resource('funcionario', 'FuncionarioController');
Route::resource('funcionariofilho', 'FuncionarioFilhoController');
