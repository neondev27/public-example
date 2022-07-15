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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
=======
Route::get('/', 'App\Http\Controllers\product_categoryController@getproduct_category');
Route::get('/{product}','App\Http\Controllers\product_categoryController@getproduct')
->name('category-detail');
>>>>>>> 313820f (Değişiklik)
