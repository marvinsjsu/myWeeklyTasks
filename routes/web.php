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

Route::get('/', function () {
    return view('welcome');
});

Route::get('profile', 'UserController@profile');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/projects/store', 'ProjectsController@store');

Route::group(['middleware' => 'auth'], function() {
	/**
	 * Routes for Projects
	 */
	Route::resource('projects', 'ProjectsController', ['only' => [
    	'index', 'show', 'create', 'edit', 'update', 'destroy'
	]]);

	/**
	 * Routes for Tasks
	 */
	Route::resource('tasks', 'TasksController', ['only' => [
    	'index', 'show', 'create', 'store', 'edit', 'update', 'destroy'
	]]);	

	/**
	 * Routes for Comments
	 */
	Route::resource('comments', 'CommentsController', ['only' => [
    	'index', 'show', 'create', 'store', 'edit', 'update', 'destroy'
	]]);
});


