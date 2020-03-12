<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/',['as'=>'site.home','uses'=>'HomeController@index']);

//rota para login
Route::get('/login',['as'=>'site.login','uses'=>'LoginController@index']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'LoginController@entrar']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'LoginController@sair']);

//rota para cadastro
Route::get('/cadastro', ['uses'=>'CadastroController@index'])->name('site.cadastro');
Route::post('/cadastro/cadastrar', ['uses'=>'CadastroController@store'])->name('site.cadastro.cadastrar');

//Criando um grupo para proteger as rotas. 
Route::group(['middleware'=>'auth'],function(){
    //rotas dos cursos
    //as para dar apelido para as rotas
    Route::get('/admin/cursos',['as'=>'admin.cursos','uses'=>'CursoController@index']);
    Route::get('/admin/cursos/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'CursoController@adicionar']);
    Route::post('/admin/cursos/salvar',['as'=>'admin.cursos.salvar','uses'=>'CursoController@salvar']);
    Route::get('/admin/cursos/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'CursoController@editar']);
    Route::put('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'CursoController@atualizar']);
    Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'CursoController@deletar']);
});


