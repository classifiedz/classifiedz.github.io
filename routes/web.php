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
//Home Index
Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);

//Individual Ad Page
Route::get('/ads/{product}', 'ProductController@showAd');

//Post Ad Page
Route::get('/postAd', ['as' => 'postAdForm', 'uses' => 'ProductController@showForm'])->middleware('auth');
Route::post('/postAd', ['as' => 'storeAd', 'uses' => 'ProductController@storeAd']);
//Categories Page
Route::get('/categories/{category}', 'ProductCategoryController@show');
// Profile Page
Route::get('/profile','ProfileController@showProfile')->middleware('auth');
Route::get('/editprofile','EditprofileController@showEditprofile')->middleware('auth');
// Legal Document Pages
Route::get('/privacy', 'PageController@privacyPage');
Route::get('/postingpolicy', 'PageController@postingpolicyPage');
Route::get('/refund', 'PageController@refundPage');
Route::get('/terms', 'PageController@termsPage');

Auth::routes();
