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
    return view('index');
});

Route::get('flight-results', function () {
    return view('flight-results');
});

Route::get('hotel-results', function () {
    return view('hotel-results');
});


// admin pages

Route::get('admin', function () {
    return view('admin/index');
});

// admin - flights

Route::get('admin/flights/list-flight', function () {
    return view('admin/flights/list-flight');
});

Route::get('admin/flights/create-flight', function () {
    return view('admin/flights/create-flight');
});

Route::get('admin/flights/edit-flight', function () {
    return view('admin/flights/edit-flight');
});

Route::get('admin/flights/view-flight', function () {
    return view('admin/flights/view-flight');
});

// admin - hotels

Route::get('admin/hotels/list-hotel', function () {
    return view('admin/hotels/list-hotel');
});

Route::get('admin/hotels/create-hotel', function () {
    return view('admin/hotels/create-hotel');
});

Route::get('admin/hotels/edit-hotel', function () {
    return view('admin/hotels/edit-hotel');
});

Route::get('admin/hotels/view-hotel', function () {
    return view('admin/hotels/view-hotel');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
