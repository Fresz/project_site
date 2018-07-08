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

//Homepage
Route::get('/', 'PagesController@getHome');
//Route::get('/', 'HomeController@index')->name('home');

//About us page
Route::get('/about', 'PagesController@getAbout');

//Contact page
Route::get('/contact', 'PagesController@getContact');

	Route::get('/messages', 'MessagesController@getMessages');
	Route::post('/contact/submit', 'MessagesController@submit');
	
//Registration page
//Route::get('/registration', 'PagesController@getAbout');

//Users page

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');
