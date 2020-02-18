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
    return view('Achievements/show');
});

Route::get('/comunidadesEViagens', function() {
    $footer = 'true';
    return view('Groups and Trips/index', compact('footer'));
});

Route::get('/criarGrupoDeViagem', function() {
    $footer = 'true';
    return view('/Groups and Trips/Trip/create', compact('footer'));
});

Route::get('edit/{id}/viagem', ['as' => 'edit.trip', 'uses' => "Trip\TripController@edit"] );

Route::get('show/viagem/{id}', ['as' => 'show.trip', 'uses' => "Trip\TripController@show"]);

Route::put('update/{id}/viagem', ['as' => 'update.trip', 'uses' => "Trip\TripController@update"]);

Route::get('/profile/{id}/edit' , 'User\UserController@edit');

// Inicio das Rotas das Comunidades
// Route::get('index/comunidadeEViagens', 'Group\GroupController@index', 'Trip\TripController@index')->name('index');

Route::get('create/comunidade', 'Group\GroupController@create')->name('create');

Route::post('store/comunidade', 'Group\GroupController@store')->name('store');

Route::get('edit/{id}/comunidade', ['as' => 'edit.group', 'uses' => "Group\GroupController@edit"] );

Route::get('show/comunidade/{id}', ['as' => 'show.group', 'uses' => "Group\GroupController@show"]);

Route::put('update/{id}/comunidade', ['as' => 'update.group', 'uses' => "Group\GroupController@update"]);

// Fim das Rotas das Comunidades

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
