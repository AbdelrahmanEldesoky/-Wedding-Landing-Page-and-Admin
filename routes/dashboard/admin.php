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




    Route::prefix('admin')->name('dashboard.')->middleware(['auth'])->group(function () {

    Route::get('/','HomeController@index');
    Route::resource('type','TypeController');
    Route::resource('section','SectionController');
    Route::resource('product','ProductController');
    Route::resource('order','OrderController')->except(['edit']);
    Route::get('contact/{id?}','ContactController@index')->name('contacts');
    Route::post('contacts/update/{id?}','ContactController@update')->name('contacts.update');
    Route::resource('about','AboutController');
    Route::resource('home','HomepageController');

    Route::get('order/edit/{order_id?}/{id?}','OrderController@edit')->name('order.edit');
    Route::post('order/done/{id?}','OrderController@done')->name('order.done');
    Route::get('order/get/{id?}','OrderController@get')->name('order.get');


    Route::get('system_calendars', 'SystemCalendarController@index')->name('system_calendars.index');

});
