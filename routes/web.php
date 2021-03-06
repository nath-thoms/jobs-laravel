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

// Original homepage Route
// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/', 'JobController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'TaskController@index');

Route::get('/jobs/{id}/{job}', 'JobController@show')->name('jobs.show');
