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

use App\User;
use App\Project;

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

    // RESTFUL resource
    Route::resource('clients', 'ClientController');

    Route::resource('projects', 'ProjectController');

    Route::resource('projects.tasks', 'TaskController');
    Route::resource('tasks', 'TaskController');

//    Route::get('/tasks/create/{$id}', 'TaskController@create');

//    Route::get('/tasks/{id}', ['as' => 'tasks.create', 'uses' => 'TaskController@create']);

//    Route::get('AddUsers', ['as' => 'addusers', function($id){
//        $project = Project::find($id);
//        return view('AddUsers')->with('project', $project);
//    }]);

    Route::get('/user/{name}', [
        'as' => 'profile.index', 'uses' => 'ProfileController@getProfile'
    ]);

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
