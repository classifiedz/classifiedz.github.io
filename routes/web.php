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

Route::get('/', 'HomeController@index');
Route::get('/postAd', ['as' => 'postAdForm', 'uses' => 'ProductController@showForm'])->middleware('auth');
Route::post('/postAd', ['as' => 'storeAd', 'uses' => 'ProductController@storeAd']);
Auth::routes();
