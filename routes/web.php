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

Route::get('/', 'MainController@index');

Route::get('/about', 'MainController@about');
Route::get('/news', 'MainController@news');
Route::get('/photo', 'MainController@photo');
Route::get('/contact', 'MainController@contact');
Route::get('/infos', 'MainController@infos');

Route::get('/thenewsolo{solo}', 'MainController@thenewsolo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
