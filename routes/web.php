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

Route::get('/', 'AtividadeController@index');

Route::get('/get-departamento-projetos', 'DepartamentoController@getProjetos');

Route::get('/atividadesColaborador', 'AtividadeController@indexColaborador');

Route::post('/atividade', 'AtividadeController@store');