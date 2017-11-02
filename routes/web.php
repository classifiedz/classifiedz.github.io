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
use Illuminate\Http\Request;
/* Searchable Content*/
Route::get('/search/{searchKey}', 'searchController@search');
/*Route::get('/search', function (Request $request) {
    return App\Product::search($request->search)->get();
});*/
//Home Index
Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);

//Individual Ad Page
Route::get('/ads/{product}', 'ProductController@showAd');

//Post Ad Page
Route::get('/ad/create', ['as' => 'postAdForm', 'uses' => 'ProductController@showForm'])->middleware('auth');
Route::post('/postAd', ['as' => 'storeAd', 'uses' => 'ProductController@storeAd']);

//Categories Page
Route::get('/categories/{category}', 'ProductCategoryController@show');

// Profile Page
Route::get('/profile','ProfileController@showProfile')->middleware('auth');
Route::get('/profile/edit','ProfileController@showEditprofile')->middleware('auth');
Route::post('/editprofile', ['as' => 'updateProfile', 'uses' => 'ProfileController@updateProfile'])->middleware('auth');

// Wishlist Page
Route::get('/wishlist','WishlistController@showWishlist')->middleware('auth');
Route::post('/wishlist/create', 'WishlistController@storeUserWishlist')->middleware('auth');
Route::delete('/wishlist/{wishlist}', 'WishlistController@removeUserWishlist')->middleware('auth');

//Your Store page
Route::get('/store','StoreController@showYourStore')->middleware('auth');
Route::get('/store/{username}','StoreController@showStore');
Route::delete('/ad/{product}', 'ProductController@removeProduct')->middleware('auth');

// Legal Document Pages
Route::get('/privacy', 'PageController@privacyPage');
Route::get('/postingpolicy', 'PageController@postingpolicyPage');
Route::get('/refund', 'PageController@refundPage');
Route::get('/terms', 'PageController@termsPage');

Auth::routes();
