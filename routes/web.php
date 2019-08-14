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

// Routes to Index and Search Results pages

Route::get('/', 'SearchController@index');

Route::get('flight-results', 'SearchController@flightResults');

Route::get('hotel-results', 'SearchController@hotelResults');

Auth::routes();

// Admin panel pages with auth

Route::group(['middleware' => ['web', 'auth']], function () {

    //Dashboard Route
    Route::get('admin', function () {
        return view('admin.index');
    });

    // admin - flights

    Route::get('admin/flights/list-flight', 'Admin\FlightsController@index');

    Route::get('admin/flights/create-flight', 'Admin\FlightsController@create');

    Route::post('admin/flights/list-flight', 'Admin\FlightsController@store');

    Route::get('admin/flights/view-flight/{id}', 'Admin\FlightsController@show');

    Route::get('admin/flights/edit-flight/{id}', 'Admin\FlightsController@edit');

    Route::put('admin/flights/list-flight/{id}', 'Admin\FlightsController@update');

    Route::delete('admin/flights/list-flight/{id}', 'Admin\FlightsController@destroy');

    // admin - hotels

    Route::get('admin/hotels/list-hotel', 'Admin\HotelsController@index');

    Route::get('admin/hotels/create-hotel', 'Admin\HotelsController@create');

    Route::post('admin/hotels/list-hotel', 'Admin\HotelsController@store');

    Route::get('admin/hotels/view-hotel/{id}', 'Admin\HotelsController@show');

    Route::get('admin/hotels/edit-hotel/{id}', 'Admin\HotelsController@edit');

    Route::put('admin/hotels/list-hotel/{id}', 'Admin\HotelsController@update');

    Route::delete('admin/hotels/list-hotel/{id}', 'Admin\HotelsController@destroy');
});

Route::get('/home', 'HomeController@index')->name('home');

