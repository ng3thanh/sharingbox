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

Route::middleware('secret')->domain('admin.' . env('APP_DOMAIN'))->namespace('Admin')->group(function () {

    Route::get('/', 'DashboardController@index')->name('main');

    Route::prefix('personal')->namespace('Personal')->group(function () {
        Route::prefix('health')->namespace('Health')->group(function () {
            Route::resource('health_check', 'HealthCheckController');
            Route::resource('healthy_diet', 'HealthyDietController');
            Route::resource('gym', 'GymController');
        });
        Route::prefix('economy')->namespace('Economy')->group(function () {
            Route::resource('money', 'MoneyController');
            Route::resource('invest', 'InvestController');
        });
        Route::prefix('education')->namespace('Education')->group(function () {
            Route::resource('books', 'BooksController');
            Route::resource('learning', 'LearningController');
            Route::resource('orientation', 'OrientationController');
        });
        Route::prefix('culture')->namespace('Culture')->group(function () {
            Route::resource('note', 'NoteController');
            Route::resource('diary', 'DiaryController');
        });
    });

    Route::prefix('coin')->group(function () {
        Route::resource('ncoin', 'CoinNormalController');
    });

    Route::prefix('invest')->group(function () {
        Route::resource('invest', 'InvestmentController');
    });

    Route::prefix('schedule')->group(function () {
        Route::resource('schedule', 'ScheduleController');
    });

    Route::prefix('users')->group(function () {
        Route::resource('users', 'UserController');
    });

    Route::prefix('role')->group(function () {
        Route::resource('role', 'RoleController');
    });

    Route::prefix('static')->group(function () {
        Route::resource('static', 'StaticController');
    });

    Route::prefix('config')->group(function () {
        Route::resource('config', 'ConfigController');
    });

    Route::prefix('profile')->group(function () {
        Route::resource('profile', 'ProfileController');
    });

    Route::prefix('mailbox')->group(function () {
        Route::resource('mailbox', 'MailboxController');
    });
});

Route::middleware('guest')->domain('admin.' . env('APP_DOMAIN'))->group(function () {
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