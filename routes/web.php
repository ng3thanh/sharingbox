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

Route::middleware('manager')->domain('manager.' . env('APP_DOMAIN'))->namespace('Admin')->group(function () {

    Route::get('/', 'DashboardController@index')->name('main');

    // Shop role
    Route::prefix('shop')->namespace('Shop')->group(function () {
        Route::resource('product', 'ProductController');
    });

    Route::prefix('users')->group(function () {
        Route::resource('users', 'UserController');
    });

    Route::prefix('role')->group(function () {
        Route::resource('role', 'RoleController');
    });

    Route::prefix('config')->group(function () {
        Route::resource('config', 'ConfigController');
    });
});

Route::middleware('guest')->domain('manager.' . env('APP_DOMAIN'))->group(function () {
    // Authorization
    Route::get('/login', [
        'as' => 'auth.login.form',
        'uses' => 'Auth\SessionController@getLogin'
    ]);
    Route::post('/login', [
        'as' => 'auth.login.attempt',
        'uses' => 'Auth\SessionController@postLogin'
    ]);
    Route::get('/logout', [
        'as' => 'auth.logout',
        'uses' => 'Auth\SessionController@getLogout'
    ]);
});

Route::domain(env('APP_DOMAIN'))->namespace('Web')->group(function () {
    Route::get('/', [
        'as' => 'home',
        'uses' => 'HomeController@index'
    ]);

    // Homepage
    Route::resource('home', 'HomeController');

    // Shop
    Route::resource('shop', 'ShopController');

    // Introduce
    Route::resource('introduce', 'IntroduceController');

    // Introduce
    Route::resource('introduce', 'IntroduceController');

    // Service
    Route::resource('service', 'ServiceController');

    // Event
    Route::resource('event', 'EventController');

    // Collection
    Route::resource('collection', 'CollectionController');

    // Contact
    Route::resource('contact', 'ContactController');
});