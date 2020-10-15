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
Route::group(['namespace'=> 'user'], function()
{
   Route::get('post','PostController@index');
   Route::get('post/{post}','PostController@post')->name('post');
   Route::get('vedio','PostdetailController@index');

   Route::get('post/tag/{tag}','PostController@tag')->name('tag');
   Route::get('post/category/{category}','PostController@category')->name('category');


   Route::get('job','JobController@index')->name('user_job');
   Route::get('job/detail','JobController@detail');
   // Route::get('info','InfoController@index');

   Route::get('profile', 'UserController@index')->middleware('auth');
   Route::resource('education', 'EducationController');
   Route::resource('experience', 'ExperienceController');
   Route::resource('showcase', 'ShowcaseController');

   //Route::get('/post/detail','PostdetailController@index');
  // Route::get('post/{slug}','PostdetailController@post')->name('post');
 //Route::get('/','PostdetailController@index')->name('post');

});




Route::group(['namespace' => 'admin'], function () {

    Route::get('/getmsg','JobController@ajaxtest')->name('ajax');


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

Route::group(['namespace' => 'Admin'], function () {
    Route::get('/admin/application/application','ApplicationController@index')->name('application_view');
    Route::get('/admin/application/delete/{applicationid}', 'ApplicationController@delete')->name("application_delete");
    Route::post('/admin/application/edit', 'ApplicationController@update')->name("application_update");

});



Route::get('user/job/t1', 'TestController@t1');
Route::get('user/job/t2', 'TestController@t2');
Route::get('user/job/t3', 'TestController@t3');


Route::resource('admin/home','admin\HomeController');

Route::resource('admin/category','admin\CategoryController');
Route::resource('admin/user', 'admin\UserController');
Route::get('admin/profile/{id?}', 'admin\ProfileController@index', function($id = null){
  return $id;
});

Route::post('/', 'Auth\LoginController@logout')->name('user.logout');


// Admin Auth Routes
Route::get('admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\Auth\LoginController@login');

Route::group(['namespace' => 'Admin', 'middleware' => ['auth:admin']],function(){

	Route::resource('admin/admin','AdminUserController');

	Route::post('admin-logout', 'Auth\LoginController@logout')->name('admin.logout');

     Route::resource('admin/post','PostController');
     Route::resource('admin/tag','TagController');



});




Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
