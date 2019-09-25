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


//Route::get('/home', function () {
//    return view('welcome');
////    return view('home');
//});
Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'WelcomController@index')->name('welcome');
Route::get('/deletefoto/{id}', 'WelcomController@delete')->name('deletefoto');

Auth::routes();

Route::post('/add', 'AddController@index')->name('page');;




//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/about', 'AboutController@hr')->name('about');
