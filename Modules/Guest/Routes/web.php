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

Route::prefix('guest')->middleware(['checkLoginUser'])->group(function() {
    Route::get('/', 'GuestController@index')->name('get_guest.index');
    Route::get('/info', 'GuestInfoController@index')->name('get_guest.info');
    Route::post('/info', 'GuestInfoController@store');
    Route::get('/about', 'GuestAboutController@index')->name('get_guest.about.index');
    Route::post('/about', 'GuestAboutController@store');

    Route::get('/album', 'GuestAlbumImageController@index')->name('get_guest.album.index');
    Route::post('/album', 'GuestAlbumImageController@store');

    Route::get('/album/delete/{id}', 'GuestAlbumImageController@delete')->name('get_guest.album.delete');

    Route::prefix('vehicle')->group(function() {
        Route::get('/', 'GuestVehicleController@index')->name('get_guest.vehicles.index');
        Route::get('/create', 'GuestVehicleController@create')->name('get_guest.vehicles.create');
        Route::post('/create', 'GuestVehicleController@store');

        Route::get('/update/{id}', 'GuestVehicleController@edit')->name('get_guest.vehicles.edit');
        Route::post('/update/{id}', 'GuestVehicleController@update');
    });
    Route::prefix('buses')->group(function() {
        Route::get('/', 'GuestBusesController@index')->name('get_guest.buses.index');
        Route::get('/create', 'GuestBusesController@create')->name('get_guest.buses.create');
        Route::post('/create', 'GuestBusesController@store');

        Route::get('/update/{id}', 'GuestBusesController@edit')->name('get_guest.buses.edit');
        Route::post('/update/{id}', 'GuestBusesController@update');
        Route::get('/delete/{id}', 'GuestBusesController@delete')->name('get_guest.buses.delete');
        Route::get('ajax/location/{type}/{id?}','GuestBusesController@getLocations')->name('ajax_get_guest.buses.location');
        Route::get('ajax/location-delete/{id}','GuestBusesController@deleteItemLocation')->name('ajax_get_guest.buses.delete_location');
    });

    Route::prefix('ticket')->group(function() {
        Route::get('/', 'GuestTicketController@index')->name('get_guest.ticket.index');
        Route::get('/ticket-pick-home', 'GuestTicketController@ticketHome')->name('get_guest.ticket.index_pick_home');
        Route::get('/ticket-pick-home/{transactionID}/cancel', 'GuestTicketController@processTicketHomeCancel')->name('get_guest.ticket.index_pick_home_cancel');
        Route::get('/ticket-pick-home/{transactionID}/success', 'GuestTicketController@processTicketHomeSuccess')->name('get_guest.ticket.index_pick_home_success');
        Route::get('/ticket-pick-home/{transactionID}/success-cart', 'GuestTicketController@processTicketHomeSuccessCar')->name('get_guest.ticket.index_pick_home_success_car');
        Route::get('/success/{id}', 'GuestTicketController@success')->name('get_guest.ticket.success');
        Route::get('/cancel/{id}', 'GuestTicketController@cancel')->name('get_guest.ticket.cancel');
    });

    Route::get('/statistical', 'GuestStatisticalController@index')->name('get_guest.statistical.index');

});

