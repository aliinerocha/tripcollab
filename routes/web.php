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

Route::get('/', function() {
    $footer = 'false';
    return view('landing', compact('footer'));
});

Route::get('/home', function() {
    $footer = 'false';
    return view('home', compact('footer'));
});

Route::get('/cadastro', function() {
    return view('user/cadastro');
});

Route::get('/classificacao', function() {
    return view('user/classificacao');
});

Route::get('/comunidadesEViagens', function() {
    $footer = 'true';
    return view('Groups and Trips/index', compact('footer'));
});

Route::get('/criarGrupoDeViagem', function() {
    $footer = 'true';
    return view('/trip/criarGrupoDeViagem', compact('footer'));
});

Route::get('/definirStatus', function() {
    $footer = 'true';
    return view('trip/definirStatus', compact('footer'));
});

Route::get('/detalhesDeViagem', function() {
    $footer = 'true';
    return view('trip/detalhesDeViagem', compact('footer'));
});

Route::get('/editarPerfil', function() {
    $footer = 'true';
    return view('user/edit', compact('footer'));
});

Route::get('/grupoComunidade', function() {
    $footer = 'true';
    return view('/group/grupoComunidade', compact('footer'));
});

Route::get('/linhaDoTempo', function() {
    $footer = 'true';
    return view('user/linhaDoTempo', compact('footer'));
});

Route::get('/login', function() {
    return view('user/login');
});

Route::get('/mensagens', function() {
    $footer = 'true';
    return view('/user/messages/mensagens', compact('footer'));
});

Route::get('/menu', function() {
    $footer = 'false';
    return view('menu', compact('footer'));
});

Route::get('/notificacoes', function() {
    return view('user/notificacoes');
});

Route::get('/novaMensagem', function() {
    return view('user/messages/create');
});

Route::get('/perfil', function() {
    $footer = 'true';
    return view('user/perfil', compact('footer'));
});

Route::get('/topico', function() {
    return view('group/topico');
});

Route::get('/verMensagem', function() {
    return view('user/messages/verMensagem');
});

Route::get('/criarComunidade', function () {
    $footer = 'true';
    return view('/Groups and Trips/group/create', compact('footer'));
});
Route::get('/editarComunidade', function () {
    $footer = 'true';
    return view('/Groups and Trips/group/edit', compact('footer'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
