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

Route::prefix('drive')->group(function() {
    Route::get('/login', 'DriveLoginController@getLogin')->name('get_drive.login');
    Route::post('/login', 'DriveLoginController@postLogin');

    Route::middleware(['checkLoginDrive'])->group(function() {
        Route::get('/', 'DriveController@index')->name('get_drive.dashboard');
    });
});
