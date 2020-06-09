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

Route::get('/','WebController@index')->name('index');
Route::get('/about-us','WebController@aboutus')->name('about-us');
Route::get('/gallery','WebController@gallery')->name('gallery');
Route::get('/contact-form','ContactFormController@index')->name('contact-form');

Auth::routes();

Route::group(['middleware' => ['auth']],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/book-now','WebController@book_now')->name('book-now');
});



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout','AdminController@logout');
Route::group(['middleware'=> ['admin']],function(){
    Route::get('/admin/dashboard', 'AdminController@index')->name('admin');
    Route::get('/schedule','AdminController@availability')->name('availability');
    Route::get('/create-schedule','AdminController@createAvailabilty')->name('createAvailabilty');
});
