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

// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Welcome Page Routes
Route::get('/', 'ResourceController@index');

    //Resources Routes
    Route::get('/resources', 'ResourceController@index');
    Route::get('/stories', 'ResourceController@showStories');
    Route::get('/showTags', 'ResourceController@showTags');
    Route::get('/resourcesByTags', 'ResourceController@getResourcesByTags');
    Route::put('/resource', 'ResourceController@update');
    Route::post('/tag', 'ResourceController@storeTag');
    Route::get('/contactus', function() {
        return view('contactus');
    });
    Route::get('/aboutus', function() {
        return view('aboutus');
    });

    //Tags Routes
    Route::get('/tags', 'ResourceController@index');

Auth::routes();
