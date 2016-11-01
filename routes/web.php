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


Route::group(['middleware' => 'localization', 'prefix' => Session::get('locale')], function() {

    Auth::routes();

    Route::get('/home', 'HomeController@index');

    Route::post('/lang', [
        'as' => 'switchLang',
        'uses' => 'LangController@postLang',
    ]);

    Route::get('/', function () {
        return view('welcome');
    });
});
