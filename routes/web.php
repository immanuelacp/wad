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

Route::get('/','PageController@index');
Route::get('/services', function () {
    return view('services');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/show', function () {
    return view('show');
});

Route::get('/villa/trash', 'VillaController@trash') -> name('villa.trash');
Route::delete('/villa/{id}/delete','VillaController@deletePermanent')->name('villa.delete-permanent');
Route::get('/villa/trash','VillaController@trash')->name('villa.trash');
Route::get('/villa/{id}/restore','VillaController@restore')->name('villa.restore');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('villa', 'VillaController');
Route::resource('book', 'BookController');
