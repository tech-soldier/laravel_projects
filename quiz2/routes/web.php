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

Route::get('/', function () {
    $title = "Web Development Diploma 2020";
    return view('home')->withTitle($title);
});

Route::get('/list', 'StudentsController@index');

Route::get('/list/{id}/show', 'StudentsController@show');

