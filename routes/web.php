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

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'shop.index'
]);

    Route::get('/signup',[
        'uses' => 'UserController@getSignup',
        'as' => 'users.signup',
        'middleware' => 'guest'
    ]);

    Route::post('/signup',[
        'uses' => 'UserController@postSignup',
        'as' => 'users.signup',
        'middleware' => 'guest'
    ]);

    Route::get('/signin',[
        'uses' => 'UserController@getSignin',
        'as' => 'users.signin',
        'middleware' => 'guest'
    ]);

    Route::post('/signin',[
        'uses' => 'UserController@postSignin',
        'as' => 'users.signin',
        'middleware' => 'guest'
    ]);

    Route::get('/profile',[
        'uses' => 'UserController@getProfile',
        'as' => 'users.profile',
        'middleware' => 'auth'
    ]);

    Route::get('/logout',[
        'uses' => 'UserController@getLogout',
        'as' => 'users.logout',
        'middleware' => 'auth'
    ]);

    Route::get('login', function () {
        return redirect('user/signin');
    })->name('login');



