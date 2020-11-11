<?php

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

Route::get('/home', function () {
    return view('profile');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/profile', 'StaffController@index');

Route::get('profile/edit/{id}', 'StaffController@edit');

Route::post('profile/update/{id}', 'StaffController@update');

Route::resource('permohonan','FormSubmit');

Route::post('permohonan/update/{id}', 'FormSubmit@update');