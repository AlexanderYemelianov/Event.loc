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

Route::group(['middleware' => ['web']], function(){

    Auth::routes();
    Route::get('/home', 'HomeController@home');
    Route::get('eventsTypes', 'HomeController@eventsTypes');
    Route::get('events', 'HomeController@events');

    Route::get('getMessages', 'HomeController@getMessages');
    Route::get('getAllMessages', 'HomeController@getAllMessages');
    Route::get('checkMessage/{message}', 'HomeController@checkMessage');

    Route::get('getAllPhoto', 'HomeController@getAllPhoto');
    Route::post('getPhotoForEvent', 'HomeController@getPhotoForEvent');


    Route::post('addNewType', 'EventsTypeController@addNewType');
    Route::get('eventTypeEdit/{type}', 'EventsTypeController@edit');
    Route::post('eventTypeUpdate/{updated}', 'EventsTypeController@update');
    Route::get('eventTypeDelete/{type}', 'EventsTypeController@delete');

    Route::post('addEvent', 'EventController@addEvent');
    Route::get('editEvent/{event}', 'EventController@edit');
    Route::post('eventUpdate/{event}', 'EventController@update');
    Route::get('deleteEvent/{event}', 'EventController@delete');

    Route::post('message', 'MessageController@store');

    Route::get('/', 'PagesController@index');
    Route::get('about', 'PagesController@about');
    Route::get('events', 'PagesController@events');
    Route::get('clients', 'PagesController@clients');
    Route::get('socialprojects', 'PagesController@socialProjects');
    Route::get('locations', 'PagesController@locations');
    Route::get('gallery', 'PagesController@gallery');
    Route::get('contacts', 'PagesController@contacts');

    Route::get('teambuildingShow/{type}', 'PagesController@teambuildingShow');
    Route::get('TypeShow/{type}', 'PagesController@showType');
    Route::get('eventShow/{event}', 'PagesController@showEvent');

    Route::post('imgUpload', 'PhotoController@imgUpload');
    Route::get('photoDelete/{photo}', 'PhotoController@photoDelete');

    //For registration

    /*Route::get('register', function(){
        return view('auth.register');
    });*/

});

