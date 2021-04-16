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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Web\IndexController@index')->name('web.index');

Route::get('/services', 'Web\IndexController@services')->name('web.services');
Route::get('/consumer-lense', 'Web\IndexController@consumerLense')->name('web.consumerLense');

Route::get('/profile', 'Web\IndexController@profile')->name('web.profile');

Route::get('/sign-in', 'Web\IndexController@signIn')->name('web.signIn');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
