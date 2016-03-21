<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::post('/login', 'AuthController@create');

    Route::get('uikit', function () {
        return view('uikit');
    });

    Route::get('CreateProject', function(){
        return view('createProject');
    });

    Route::resource('clients', 'ClientController');

    Route::get('UserGuide', function(){
        return view('userGuide');
    });

    Route::get('About', function(){
        return view('about');
    });

});

Route::group(['middleware' => 'web'], function () {

    Route::auth();

    Route::get('/', 'HomeController@index');

});
