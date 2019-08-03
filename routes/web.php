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

Route::get('/', function () {
    return view('admin.auth.login');
});

Route::group(['middleware' => ['web']], function () {
    
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {    
    Route::resource('users', 'UsersController');
    Route::post('users/destroy','UsersController@destroy')->name('users/destroy');
});
 
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

    Route::get('admin/auth/login', [
        'uses'  => 'Auth\LoginController@showLoginForm',
        'as'    => 'admin.auth.login'
    ]);

    Route::post('admin/auth/login', [
        'uses'  => 'Auth\LoginController@login',
        'as'    => 'admin.auth.login'
    ]);

    Route::get('admin/auth/logout', [
        'uses'  => 'Auth\LoginController@logout',
        'as'    => 'admin.auth.logout'
    ]);
});