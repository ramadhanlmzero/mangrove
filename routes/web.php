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

Route::get('/', 'FrontController@index')->name('index');
Route::get('/map', 'FrontController@map')->name('map');
Route::get('/graphic', 'FrontController@graphic')->name('graphic');

Auth::routes(['reset' => false, 'verify' => false]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::group(['middleware' => ['role:Admin']], function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('user', 'UserController');
        Route::get('/user/{id}/reset', 'UserController@reset')->name('user.reset');
        Route::match(['put', 'patch'], '/user/resetpassword/{id}', 'UserController@resetpassword')->name('user.resetpassword');
        Route::resource('kecamatan', 'KecamatanController');
        Route::resource('mangrove', 'MangroveController');
        Route::resource('sampel', 'SampelController');
    });
});
