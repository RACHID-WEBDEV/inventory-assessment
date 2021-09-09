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

Route::get('/', 'App\Http\Controllers\ProductController@index');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact');
Route::get('product/personalproduct', 'App\Http\Controllers\ProductController@personalpost')->name("peronal.product");


Route::resource('/product', 'App\Http\Controllers\ProductController');

Route::get('/product/create', function() {
    return view('product.create');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::group(['middleware' => ['admin']], function () {
//     Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//    })->name('dashboard');

// });


Route::resource('/categories', 'App\Http\Controllers\CategoryController');

route::get('product/category/{category?}', 'App\Http\Controllers\ProductController@cat_posts')->name('blog.index');

Route::post('ckeditor/image_upload', 'App\Http\Controllers\PostController@upload')->name('upload');

Route::get('/search','App\Http\Controllers\productController@search'); 

