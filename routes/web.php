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

Route::get('/cadastro', function() {
    return view('cadastro');
});

Route::get('/classificacao', function() {
    return view('classificacao');
});

Route::get('/comunidade', function() {
    $footer = 'true';
    return view('comunidade', compact('footer'));
});

Route::get('/criarGrupoDeViagem', function() {
    $footer = 'true';
    return view('criarGrupoDeViagem', compact('footer'));
});

Route::get('/definirStatus', function() {
    $footer = 'true';
    return view('definirStatus', compact('footer'));
});

Route::get('/detalhesDeViagem', function() {
    $footer = 'true';
    return view('detalhesDeViagem', compact('footer'));
});

Route::get('/editarPerfil', function() {
    return view('editarPerfil');
});

Route::get('/grupoComunidade', function() {
    $footer = 'true';
    return view('grupoComunidade', compact('footer'));
});

Route::get('/linhaDoTempo', function() {
    return view('linhaDoTempo');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/mensagens', function() {
    return view('mensagens');
});

Route::get('/menu', function() {
    $footer = 'false';
    return view('menu', compact('footer'));
});

Route::get('/notificacoes', function() {
    return view('notificacoes');
});

Route::get('/novoMensagem', function() {
    return view('novoMensagem');
});

Route::get('/perfil', function() {
    return view('perfil');
});

Route::get('/topico', function() {
    return view('topico');
});

Route::get('/verMensagem', function() {
    return view('verMensagem');
});

Route::get('criarComunidade', function () {
    $footer = 'true';
    return view('criarComunidade', compact('footer'));
});

