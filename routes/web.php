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


Route::group(['middleware' => 'localization'], function() {

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::post('/lang', [
        'as' => 'switchLang',
        'uses' => 'LangController@postLang',
    ]);

    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
    Route::get('signin', function() {
        return view('auth.login');
    });
    Route::post('signin', [
        'as' => 'signin',
        'uses' => 'AuthUserController@postSignin',
    ]);
});
