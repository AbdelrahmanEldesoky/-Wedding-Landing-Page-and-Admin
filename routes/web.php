<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return 'sitexwcwccwbcccjbwc';
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/test', function () {
    return  view('website/test');
});
Route::get('/', function () {
    return  redirect()->route('farah.index');
});

Route::group(['prefix'=>'farah','as'=>'farah.'], function(){
    Route::get('/homepage', 'HomePageController@index')->name('index');
    Route::get('about', 'AboutController@index')->name('about');
    Route::get('contact', 'ContactController@index')->name('contacts');
    Route::post('contact/store', 'ContactController@store')->name('contacts.store');
    Route::get('reservation', 'ReservationController@index')->name('reservation');
    Route::get('/Booking details', 'TestController@booking_details')->name('booking_details');


Route::group(['prefix'=>'booking','as'=>'booking.'], function(){
    Route::get('/', 'BookingController@index')->name('reservation');
    Route::get('section/{type_id?}/{orderBy_id?}/{id?}', 'BookingController@section')->name('section');
    Route::post('book/{type_id?}/{orderBy_id?}/{id?}', 'BookingController@book')->name('book');
    Route::post('payment/{id?}','BookingController@payment')->name('payment');
});

Route::group(['prefix'=>'service','as'=>'service.'], function(){
    Route::get('/', 'ServiceController@index')->name('index');
    Route::get('section/{id?}', 'ServiceController@section')->name('section');
    Route::get('product/{id?}', 'ServiceController@product')->name('product');
});
Route::group(['prefix'=>'reservation','as'=>'reservation.'], function(){

    Route::group(['prefix'=>'wedding','as'=>'wedding.'], function(){

        Route::get('/photography', 'TestController@photography_index')->name('photography_index');
        Route::get('/Suit', 'TestController@Suit_index')->name('Suit_index');
        Route::get('/shopping', 'TestController@shopping')->name('shopping');
        });
    });


    Route::group(['prefix'=>'browse','as'=>'browse.'], function(){

        Route::group(['prefix'=>'wedding','as'=>'wedding.'], function(){

            Route::get('/index', 'TestController@browse_index')->name('browse_index');
            Route::get('/photography', 'TestController@browse_photography')->name('browse_photography');
            Route::get('/Suit', 'TestController@browse_Suit')->name('browse_Suit');
            Route::get('/decorations', 'TestController@browse_decorations')->name('browse_decorations');
            Route::get('/chair', 'TestController@browse_chair')->name('browse_chair');
            Route::get('/food', 'TestController@browse_food')->name('browse_food');
            Route::get('/guests', 'TestController@browse_guests')->name('browse_guests');
            Route::get('/dj', 'TestController@browse_dj')->name('browse_dj');


        });


    });

    Route::get('/test', 'TestController@test')->name('test');

});
