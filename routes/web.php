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
    Route::get('programs', 'HomeController@events');

    Route::get('getMessages', 'HomeController@getMessages');
    Route::get('getAllMessages', 'HomeController@getAllMessages');
    Route::get('checkMessage/{message}', 'HomeController@checkMessage');
    Route::get('deleteMessage/{message}', 'HomeController@deleteMessage');

    Route::post('message', 'MessageController@store');

    Route::get('getClients', 'HomeController@getClients');
    Route::get('deleteClient/{client}', 'ClientsController@deleteClient');
    Route::post('addClients', 'ClientsController@addClients');

    Route::get('getSocialProjects', 'HomeController@socialProjects');
    Route::post('addProject', 'SocialProjectsController@addProject');
    Route::get('editSocialProject/{project}', 'SocialProjectsController@editSocialProject');
    Route::get('deleteSocialProject/{project}', 'SocialProjectsController@deleteSocialProject');
    Route::post('socialProjectUpdate/{project}', 'SocialProjectsController@socialProjectUpdate');

    Route::post('socialProjectPhotoAdd', 'SocialProjectsContentController@socialProjectPhotoAdd');
    Route::post('socialProjectVideoAdd', 'SocialProjectsContentController@socialProjectVideoAdd');
    Route::get('socialProjectPhotoDelete/{photo}', 'SocialProjectsContentController@socialProjectPhotoDelete');
    Route::get('socialProjectVideoDelete/{video}', 'SocialProjectsContentController@socialProjectVideoDelete');

    Route::get('galleries', 'HomeController@galleries');
    Route::get('editGallery/{gallery}', 'GalleriesController@editGallery');
    Route::post('addGallery', 'GalleriesController@addGallery');
    Route::get('deleteGallery/{gallery}', 'GalleriesController@deleteGallery');
    Route::post('galleryUpdate/{gallery}', 'GalleriesController@galleryUpdate');

    Route::post('imgUpload', 'GalleriesContentController@imgUpload');
    Route::get('photoDelete/{photo}', 'GalleriesContentController@photoDelete');
    Route::post('videoUpload', 'GalleriesContentController@videoUpload');
    Route::get('videoDelete/{video}', 'GalleriesContentController@videoDelete');

    Route::get('getLocations', 'HomeController@getLocations');
    Route::post('addLocation', 'LocationController@addLocation');
    Route::get('deleteLocation/{location}', 'LocationController@deleteLocation');

    Route::get('getNews', 'HomeController@getNews');
    Route::post('addNews', 'NewsController@addNews');
    Route::get('deleteNews/{news}', 'NewsController@deleteNews');
    Route::get('changeStatusNews/{news}', 'NewsController@changeStatusNews');

    Route::get('getReviews', 'HomeController@getReviews');
    Route::post('addReview', 'ReviewController@addReview');
    Route::get('deleteReview/{review}', 'ReviewController@deleteReview');

    Route::post('addNewType', 'EventsTypeController@addNewType');
    Route::get('eventTypeEdit/{type}', 'EventsTypeController@edit');
    Route::post('eventTypeUpdate/{updated}', 'EventsTypeController@update');
    Route::get('eventTypeDelete/{type}', 'EventsTypeController@delete');

    Route::post('addProgram', 'EventController@addProgram');
    Route::get('editEvent/{event}', 'EventController@edit');
    Route::post('eventUpdate/{event}', 'EventController@update');
    Route::get('deleteEvent/{event}', 'EventController@delete');
    Route::post('eventPhotoAdd', 'EventController@eventPhotoAdd');
    Route::get('eventPhotoDelete/{event}', 'EventController@eventPhotoDelete');

    Route::post('addTypesPhoto', 'TypesPhotoController@addTypesPhoto');
    Route::get('typesPhotoDelete/{photo}', 'TypesPhotoController@photoDelete');

    Route::get('newYearPrograms', 'HomeController@getNewYearPrograms');
    Route::post('addNYProgram', 'NewYearsController@addNYProgram');
    Route::get('deleteNYProgram/{newYear}', 'NewYearsController@delete');

    Route::get('/', 'PagesController@index');
    Route::get('about', 'PagesController@about');
    Route::get('news', 'PagesController@news');
    Route::get('clients', 'PagesController@clients');
    Route::get('socialProjects', 'PagesController@socialProjects');
    Route::get('locations', 'PagesController@locations');
    Route::get('gallery', 'PagesController@gallery');
    Route::get('contacts', 'PagesController@contacts');
    Route::get('projectShow/{project}', 'PagesController@projectShow');
    Route::get('teambuildingShow/{type}', 'PagesController@teambuildingShow');
    Route::get('typeShow/{type}', 'PagesController@showType');
    Route::get('eventShow/{event}', 'PagesController@showEvent');
    Route::get('galleryShow/{gallery}', 'PagesController@galleryShow');
    Route::get('contactForm', 'PagesController@contactForm');
    Route::get('newYearProgramShow', 'PagesController@newYearProgramShow');
    Route::get('review', 'PagesController@review');

    //Static pages with custom styles

    Route::get('conferencesShow', function(){
        return view('pages.conferences');
    });

    //For registration

    Route::get('register', function(){
        return view('auth.register');
    });

});

