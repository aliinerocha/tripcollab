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

Route::group(['middleware' => ['auth']], function () {

    // Trips

    Route::get('trip/{id}', "Trip\TripController@show")->name('trip.show');

    Route::get('trip/create', "Trip\TripController@create")->name('trip.create');

    Route::post('trip/store', "Trip\TripController@store")->name('trip.store');

    Route::get('trip/{id}/edit', "Trip\TripController@edit")->name('trip.edit');

    Route::put('trip/{id}', "Trip\TripController@update")->name('trip.update');

    Route::delete('/trip/{id}', "Trip\TripController@destroy")->name('trip.destroy');

    // User

    Route::get ('/home', function() {
        $footer = 'true';
        return view ('User/show', compact('footer'));
    });

    Route::get('/profile/{id}/edit' , 'User\UserController@edit')->name('user.edit');

    Route::put('/profile/{id}' , 'User\UserController@update')->name('update');

    // Inicio das Rotas das Comunidades
    // Route::get('index/comunidadeEViagens', 'Group\GroupController@index', 'Trip\TripController@index')->name('index');

    Route::get('group/create', 'Group\GroupController@create')->name('group.create');

    Route::post('group/store', 'Group\GroupController@store')->name('group.store');

    Route::get('group/{id}/edit', 'Group\GroupController@edit')->name('group.edit');;

    Route::get('group/{id}', 'Group\GroupController@show')->name('group.show');;

    Route::put('group/{id}', 'Group\GroupController@update')->name('group.update');

    Route::delete('/group/{id}', "Group\GroupController@destroy")->name('group.destroy');

    // Fim das Rotas das Comunidades

    //Inicio das Rotas dos Topicos

    Route::get('topic/create', 'Group\TopicController@create')->name('topic.create');

    Route::post('topic/store', 'Group\TopicController@store')->name('topic.store');

    Route::get('topic/{id}/edit', 'Group\TopicController@edit')->name('topic.edit');

    Route::put('topic/{id}/update', 'Group\TopicController@update')->name('topic.update');

    Route::get('topic/{id}/show', 'Group\TopicController@show')->name('topic.show');;

    Route::delete('/topic/{id}', "Group\TopicController@destroy")->name('topic.destroy');

    //Fim das Rotas dos Topicos
});

/*
Route::get('/classificacao', function() {
    return view('Achievements/show');
});

Route::get('/linhaDoTempo', function() {
    $footer = 'true';
    return view('user/linhaDoTempo', compact('footer'));
});

Route::get('/mensagens', function() {
    $footer = 'true';
    return view('/user/messages/create', compact('footer'));
});

Route::get('/notificacoes', function() {
    return view('user/notificacoes');
});

Route::get('/novaMensagem', function() {
    return view('user/messages/create');
});

Route::get('/verMensagem', function() {
    return view('user/messages/verMensagem');
});
*/

Auth::routes();
