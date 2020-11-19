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

// Route::get('/', function () {
//     return view('welcome');
// });

// Backend_asset Admin Page (UI)
// CRUD Process (Item Management)
Route::middleware('role:admin')->group(function () {

Route::resource('category', 'CategoryController');

Route::resource('subcategory', 'SubcategoryController');

Route::resource('item', 'ItemController');

});

// Frontend_asset Main Page

Route::get('/', 'FrontendController@index')->name('mainpage');

Route::resource('user', 'UserController');

Route::resource('order', 'OrderController');

Route::get('signin', 'FrontendController@signin')->name('signinpage');

Route::get('signup', 'FrontendController@signup')->name('signuppage');

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('itemdetail/{id}', 'FrontendController@itemdetail')->name('itemdetail');

Route::get('itemsbysubcategory/{id}', 'FrontendController@itemsbysubcategory')->name('itemsbysubcategory');

Route::get('cart', 'FrontendController@cart')->name('cartpage');

Route::get('order/{id}/confirm','OrderController@confirm');

Route::get('order/{id}/cancle','OrderController@cancle');

Route::get('order_success', 'OrderController@success');