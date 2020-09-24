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



    Route::get('/admin/skill/skill', 'SkillController@index')->name("skill_view");
    Route::get('/admin/skill/edit/{skillid}', 'SkillController@edit')->name("skill_edit");
    Route::post('/admin/skill/add', 'SkillController@add')->name("skill_add");
    Route::get('/admin/skill/create', 'SkillController@create')->name("skill_create");
    Route::get('/admin/skill/delete/{skillid}', 'SkillController@delete')->name("skill_delete");


    Route::get('/admin/industry/industry', 'IndustryController@index')->name("industry_view");
    Route::get('/admin/industry/edit/{industryid}', 'IndustryController@edit')->name("industry_edit");
    Route::post('/admin/industry/add', 'IndustryController@add')->name("industry_add");
    Route::get('/admin/industry/create', 'IndustryController@create')->name("industry_create");
    Route::get('/admin/industry/delete/{industryid}', 'IndustryController@delete')->name("industry_delete");

    Route::get('/admin/major/major', 'MajorController@index')->name("major_view");
    Route::get('/admin/major/edit/{majorid}', 'MajorController@edit')->name("major_edit");
    Route::post('/admin/major/add', 'MajorController@add')->name("major_add");
    Route::get('/admin/major/create', 'MajorController@create')->name("major_create");
    Route::get('/admin/major/delete/{majorid}', 'MajorController@delete')->name("major_delete");



});


Route::group(['namespace' => 'location'], function () {
    Route::get('/getcountry','LocationController@getCountry')->name('getcountry');
    Route::get('/getstate','LocationController@getState')->name('getstate');
    Route::get('/getcity','LocationController@getCity')->name('getcity');

});




Route::get('user/job/t1', 'TestController@t1');
Route::get('user/job/t2', 'TestController@t2');
Route::get('user/job/t3', 'TestController@t3');






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
