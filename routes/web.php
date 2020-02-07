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

<<<<<<< HEAD
Route::get('/user/cadastro', function() {
    return view('/user/cadastro');
=======
Route::get('/cadastro', function() {
    return view('user/cadastro');
>>>>>>> 3c05b939ad7ddf459bd4b0457db07eb141edb41e
});

Route::get('/classificacao', function() {
    return view('user/classificacao');
});

Route::get('/comunidadesEviagens', function() {
    $footer = 'true';
    return view('user/comunidadesEviagens', compact('footer'));
});

<<<<<<< HEAD
Route::get('/trip/criarGrupoDeViagem', function() {
    return view('/trip/criarGrupoDeViagem');
=======
Route::get('/criarGrupoDeViagem', function() {
    $footer = 'true';
    return view('/trip/criarGrupoDeViagem', compact('footer'));
>>>>>>> 3c05b939ad7ddf459bd4b0457db07eb141edb41e
});

Route::get('/definirStatus', function() {
    $footer = 'true';
    return view('trip/definirStatus', compact('footer'));
});

<<<<<<< HEAD
Route::get('/trip/detalhesDeViagem', function() {
    return view('/trip/detalhesDeViagem');
});

Route::get('/user/editarPerfil', function() {
    return view('/user/editarPerfil');
});

Route::get('/group/grupoComunidade', function() {
    return view('/group/grupoComunidade');
=======
Route::get('/detalhesDeViagem', function() {
    $footer = 'true';
    return view('trip/detalhesDeViagem', compact('footer'));
});

Route::get('/editarPerfil', function() {
    return view('user/editarPerfil');
});

Route::get('/grupoComunidade', function() {
    $footer = 'true';
    return view('/group/grupoComunidade', compact('footer'));
>>>>>>> 3c05b939ad7ddf459bd4b0457db07eb141edb41e
});

Route::get('/linhaDoTempo', function() {
    return view('user/linhaDoTempo');
});

<<<<<<< HEAD
Route::get('/user/login', function() {
    return view('/user/login');
});

Route::get('/user/messages/mensagens', function() {
=======
Route::get('/login', function() {
    return view('user/login');
});

Route::get('/mensagens', function() {
>>>>>>> 3c05b939ad7ddf459bd4b0457db07eb141edb41e
    return view('/user/messages/mensagens');
});

Route::get('/menu', function() {
    $footer = 'false';
    return view('menu', compact('footer'));
});

Route::get('/notificacoes', function() {
    return view('user/notificacoes');
});

<<<<<<< HEAD
Route::get('/user/messages/novoMensagem', function() {
    return view('/user/messages/novoMensagem');
});

Route::get('/user/perfil', function() {
=======
Route::get('/novaMensagem', function() {
    return view('user/messages/novaMensagem');
});

Route::get('/perfil', function() {
>>>>>>> 3c05b939ad7ddf459bd4b0457db07eb141edb41e
    return view('user/perfil');
});

Route::get('/topico', function() {
    return view('group/topico');
});

<<<<<<< HEAD
Route::get('/user/messages/verMensagem', function() {
    return view('/user/messages/verMensagem');
=======
Route::get('/verMensagem', function() {
    return view('user/messages/verMensagem');
>>>>>>> 3c05b939ad7ddf459bd4b0457db07eb141edb41e
});

Route::get('/criarComunidade', function () {
    $footer = 'true';
    return view('group/criarComunidade', compact('footer'));
});

