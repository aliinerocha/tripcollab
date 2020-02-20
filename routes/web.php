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

<<<<<<< HEAD
Route::group(['middleware' => ['auth']], function () {

    // Trips

    Route::get('trip/create', "Trip\TripController@create")->name('trip.create');

    Route::get('trip/{id}', "Trip\TripController@show")->name('trip.show');

    Route::post('trip/store', "Trip\TripController@store")->name('trip.store');

    Route::get('trip/{id}/edit', "Trip\TripController@edit")->name('trip.edit');

    Route::put('trip/{id}', "Trip\TripController@update")->name('trip.update');

    Route::delete('/trip/{id}', "Trip\TripController@destroy")->name('trip.destroy');

    // User

    Route::get ('/home/{id}', 'User\UserController@index')->name('user.index');

    Route::get('/profile/{id}/edit' , 'User\UserController@edit')->name('user.edit');

    Route::put('/profile/{id}' , 'User\UserController@update')->name('user.update');

    // Groups

    Route::get('group/create', 'Group\GroupController@create')->name('group.create');

    Route::post('group/store', 'Group\GroupController@store')->name('group.store');

    Route::get('group/{id}/edit', 'Group\GroupController@edit')->name('group.edit');;
=======
Route::get('/home', function() {
    $footer = 'false';
    return view('home', compact('footer'));
});
>>>>>>> parent of 4ab21e2... Merge branch 'master' of https://github.com/aliinerocha/TripCollab

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

Route::get('trip/{id}/edit', "Trip\TripController@edit")->name('trip.edit');

Route::get('trip/{id}', "Trip\TripController@show")->name('trip.show');

Route::put('trip/{id}', "Trip\TripController@update")->name('trip.update');

Route::get('/trip/create', "Trip\TripController@create")->name('trip.create');

Route::delete('/trip/{id}', "Trip\TripController@destroy")->name('trip.destroy');

Route::get('/profile/{id}/edit' , "User\UserController@edit")->name('user.edit');


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
