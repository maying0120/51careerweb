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
/*
Route::get('/', function () {
    return view('app');
});
*/

Route::get('/','User\HomeController@index');

Route::get('/','User\PostController@index')->name('post');


/*Route::get('post', function () {
    return view('post');
})->name('post');


Route::get('admin/home', function () {
    return view('admin/layouts/app');
})->name('home');
*/

/*
Route::get('admin/post', function () {
    return view('admin/post/post');
});


Route::get('admin/tag', function () {
    return view('admin/tag/tag');
});


Route::get('admin/category', function () {
    return view('admin/category/category');
});
*/

Route::resource('admin/home','admin\HomeController');
Route::resource('admin/post','admin\PostController');
Route::resource('admin/tag','admin\TagController');
Route::resource('admin/category','admin\CategoryController');
















