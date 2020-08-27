<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now `create` something great!
|
*/
/*
Route::get('/', function () {
    return view('app');
});
*/

Route::group(['namespace' => 'User'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('post', 'PostController@index');
    Route::get('post/{post}', 'PostController@post')->name('post');
    Route::get('vedio', 'PostdetailController@index');

    Route::get('post/tag/{tag}', 'PostController@tag')->name('tag');
    Route::get('post/category/{category}', 'PostController@category')->name('category');


    Route::get('job', 'JobController@index');
    Route::get('job/detail', 'JobController@detail');
    Route::get('/info', 'InfoController@index');

    Route::get('/getmsg','JobController@ajaxtest')->name('ajax');

    //Route::get('/post/detail','PostdetailController@index');
    // Route::get('post/{slug}','PostdetailController@post')->name('post');
    //Route::get('/','PostdetailController@index')->name('post');

});

Route::group(['namespace' => 'Admin'], function () {

    Route::get('/admin/job/job', 'JobController@index')->name("job_view");
    Route::get('/admin/job/edit/{jobid}', 'JobController@edit')->name("job_edit");
    Route::post('/admin/job/add', 'JobController@add')->name("job_add");

    Route::get('/admin/job/create', 'JobController@create')->name("job_create");
    Route::get('/admin/job/delete/{jobid}', 'JobController@delete')->name("job_delete");

});



//Route::get('/','User\HomeController@index');

//Route::get('/','User\PostController@index')->name('post');

//Route::get('/','User\PostController@index');

/*Route::get('post', function () {
    return view('post');
})->name('post');


Route::get('admin/post', function () {
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

Route::resource('admin/home', 'admin\HomeController');
Route::resource('admin/post', 'admin\PostController');
Route::resource('admin/tag', 'admin\TagController');
Route::resource('admin/category', 'admin\CategoryController');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
