<?php

// use \App\Http\Controllers\TestController;
use App\Http\Controllers\ProductsController;

  


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', ProductController::class);


// amit testing start here 

// Route::get('about', 'TestController@index');
// Route::get('adminprofile', 'TestController@adminprofile');