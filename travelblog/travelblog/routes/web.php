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


Route::get('/', 'PagesController@getIndex');

Route::get('about','PagesController@getAbout');

Route::get('destinations','PagesController@getDestinations');

Route::get('ukraine','PagesController@getUkraine');

Route::get('uae','PagesController@getUae');

Route::get('turkey','PagesController@getTurkey');
