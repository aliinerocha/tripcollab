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

    Route::get('trip/create', "Trip\TripController@create")->name('trip.create');

    Route::get('trip/{id}', "Trip\TripController@show")->name('trip.show');

    Route::post('trip/store', "Trip\TripController@store")->name('trip.store');

    Route::get('trip/{id}/edit', "Trip\TripController@edit")->middleware('checkTrip')->name('trip.edit');

    Route::put('trip/{id}', "Trip\TripController@update")->name('trip.update');

    Route::delete('/trip/{id}', "Trip\TripController@destroy")->name('trip.destroy');

    Route::get('trip/{tripId}/confirm/{userId}', 'Trip\TripController@confirmPresence')->name('trip.confirmPresence');

    Route::get('trip/{tripId}/cancel/{userId}', 'Trip\TripController@cancelPresence')->name('trip.cancelPresence');

    Route::get ('/groupsandtrips', 'User\UserController@listGroupsAndTrips')->name('user.listGroupsAndTrips');

    // User

    Route::get ('/home', 'User\UserController@home')->name('home');

    Route::get ('/profile/{id}', 'User\UserController@show')->name('user.show');

    Route::get('/profile/{id}/edit' , 'User\UserController@edit')->middleware('checkUser')->name('user.edit');

    Route::put('/profile/{id}' , 'User\UserController@update')->name('user.update');

    Route::delete('/profile/{id}/del', 'User\UserController@destroy')->name('user.delete');

    Route::get('/profile/friendship/add/{requestedUserID}', 'User\UserController@friendshipAdd')->name('friendship.add');

    Route::get('/profile/friendship/accept/{requestedUserID}', 'User\UserController@friendshipAccept')->name('friendship.accept');

    Route::get('/profile/friendship/cancel/{requestedUserID}', 'User\UserController@friendshipCancel')->name('friendship.cancel');

    Route::get('/profile/friendship/delete/{requestedUserID}', 'User\UserController@friendshipDelete')->name('friendship.delete');


    // Groups

    Route::get('group/create', 'Group\GroupController@create')->name('group.create');

    Route::post('group/store', 'Group\GroupController@store')->name('group.store');

    Route::get('group/{id}/edit', 'Group\GroupController@edit')->name('group.edit');;

    Route::get('group/{id}', 'Group\GroupController@show')->name('group.show');;

    Route::put('group/{id}', 'Group\GroupController@update')->name('group.update');

    Route::delete('group/{id}', "Group\GroupController@destroy")->name('group.destroy');

    // Topics

    Route::get('topic/index', 'Group\TopicController@index')->name('topic.index');

    Route::get('topic/create', 'Group\TopicController@create')->name('topic.create');

    Route::post('topic/store', 'Group\TopicController@store')->name('topic.store');

    Route::get('topic/{id}/edit', 'Group\TopicController@edit')->name('topic.edit');

    Route::get('topic/{id}', 'Group\TopicController@show')->name('topic.show');;

    Route::put('topic/{id}', 'Group\TopicController@update')->name('topic.update');

    Route::delete('topic/{id}', 'Group\TopicController@destroy')->name('topic.destroy');

    // Topic Messages

    Route::post('topicMessage/store', 'Group\TopicMessageController@store')->name('topicMessage.store');

    Route::get('topicMessage/{id}/edit', 'Group\TopicMessageController@edit')->name('topicMessage.edit');

    Route::put('topicMessage/{id}', 'Group\TopicMessageController@update')->name('topicMessage.update');

    Route::delete('topicMessage/{id}', 'Group\TopicMessageController@destroy')->name('topicMessage.destroy');
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
