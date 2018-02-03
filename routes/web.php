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

Route::get('/', function () {
    return view('welcome');
});

//Restful API
// /cursos get -> listagem CursoController@index
// /cursos/create get -> formulario CursoController@create
// /cursos post -> salva os dados do formulario CursoController
// /cursos/1/edit get -> form de edicao
// /cursos/1 PUT -> tualiza o curso com os dados do form
// /cusos/1 DELETE -> remove o curso

//Route::get('/', )
Route::get('/editoras', 'EditoraController@index');
Route::get('/editoras/{editora}', 'EditoraController@show');
Route::get('/editoras/{editora}/edit', 'EditoraController@edit');
Route::put('/editoras/{editora}', 'EditoraController@update');

Route::get('/editoras/cria', 'EditoraController@cria');

Route::post('/editoras', 'EditoraController@armazena');
