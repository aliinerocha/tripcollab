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

Route::get('/home', function() {
    return view('home');
});

Route::get('/user/cadastro', function() {
    return view('/user/cadastro');
});

Route::get('/classificacao', function() {
    return view('classificacao');
});

Route::get('/comunidade', function() {
    return view('comunidade');
});

Route::get('/trip/criarGrupoDeViagem', function() {
    return view('/trip/criarGrupoDeViagem');
});

Route::get('/definirStatus', function() {
    return view('definirStatus');
});

Route::get('/trip/detalhesDeViagem', function() {
    return view('/trip/detalhesDeViagem');
});

Route::get('/user/editarPerfil', function() {
    return view('/user/editarPerfil');
});

Route::get('/group/grupoComunidade', function() {
    return view('/group/grupoComunidade');
});

Route::get('/linhaDoTempo', function() {
    return view('linhaDoTempo');
});

Route::get('/user/login', function() {
    return view('/user/login');
});

Route::get('/user/messages/mensagens', function() {
    return view('/user/messages/mensagens');
});

Route::get('/menu', function() {
    return view('menu');
});

Route::get('/notificacoes', function() {
    return view('notificacoes');
});

Route::get('/user/messages/novoMensagem', function() {
    return view('/user/messages/novoMensagem');
});

Route::get('/user/perfil', function() {
    return view('user/perfil');
});

Route::get('/topico', function() {
    return view('topico');
});

Route::get('/user/messages/verMensagem', function() {
    return view('/user/messages/verMensagem');
});

Route::get('criarComunidade', function () {
    return view('criarComunidade');
});

