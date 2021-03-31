<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome/{name}', 'WelcomeController:@index');

Route::get('/users', 'UserController@index');

Route::get('/users/{id}', 'UserController@show');

Route::get('/users/create', 'UserController@create');

Route::post('/users', 'UserController@store');