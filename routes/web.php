<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => 'account' ,'namespace' => 'Auth'], function (){
    Route::get('login', 'LoginController@index')->name('get.login');
    Route::post('login', 'LoginController@postLogin')->name('get.login');

    Route::get('register', 'RegisterController@index')->name('get.register');
    Route::post('register', 'RegisterController@postRegister');

    Route::get('logout','LoginController@getLogout')->name('get.logout');
});

Route::get('', 'HomeController@index')->name('get.home');
Route::get('trang-chu', 'HomeController@index')->name('get.home');
Route::get('tim-kiem', 'SearchController@index')->name('get.search');
Route::get('nha-xe/{slug}-{id}', 'GarageController@getGarageDetail')
    ->name('get.garage.detail')
    ->where(['slug' => '[a-z-0-9]+','id' => '[0-9]+$']);

Route::get('tuyen-duong/{slug}-{id}', 'RouteController@index')
    ->name('get.route.detail')
    ->where(['slug' => '[a-z-0-9]+','id' => '[0-9]+$']);

Route::get('ticket/{id}', 'BookTicketController@ticket')
    ->name('get.ticket.process');
Route::post('ticket/{id}', 'BookTicketController@process');
Route::get('ticket/success/{idTransaction}', 'BookTicketController@preview')->name('get.ticket.success_preview');

Route::get('gioi-thieu', 'AboutController@index')
    ->name('get.about');
Route::get('lien-he', 'ContactController@index')
    ->name('get.contact');


Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::prefix('ajax')->group(function ()
{
    Route::get('project-info', 'SearchController@renderInfo')->name('ajax_get.project.show');
    Route::get('project-render-list', 'SearchController@renderListEstate')->name('ajax_get.estate_list');
});