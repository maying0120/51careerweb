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
Auth::routes();
// Home
Route::get('/', 'user\HomeController@index')->name('host');
// Admin Auth Routes
Route::get('admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\Auth\LoginController@login');
Route::post('admin-logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
// Auth Custom Logout
Route::post('/', 'Auth\LoginController@logout')->name('user.logout');






// Protected against Non-Users
Route::group(['namespace'=> 'user', 'middleware' => ['auth']], function() {
   Route::get('/home1', 'HomeController@index');


    Route::get('/home1', 'HomeController@home1');

   //about
    Route::get('/aboutus', 'HomeController@aboutus');
    //contact
    Route::get('/contactus', 'HomeController@contactus');

     //our story
        Route::get('/ourstory', 'HomeController@ourstory');
        //join us
        Route::get('/joinus', 'HomeController@joinus');
        //our service
        Route::get('/ourservice', 'HomeController@ourservice');

  Route::get('/jobreq', 'HomeController@jobreq');
   // Video
   Route::get('videos/{vcategory}','VideoController@searchbycat');
   Route::get('video','VideoController@index')->name('video');
   Route::get('video/search','VideoController@search');
   //
   Route::get('video/vcats/{vcategory}','VideoController@catsearch');
  // Route::get('video/vcat/test','VideoController@vcategory');
     Route::get('video/search','VideoController@search');
   Route::get('video/vcat/{vcategory}','VideoController@vcategory')->name('vcategory');

   // Post
   Route::get('post','PostController@index');

    Route::get('post/search','PostController@search');
   Route::get('post/{post}','PostController@post')->name('post');
   Route::get('post/tag/{tag}','PostController@tag')->name('tag');
   Route::get('post/category/{category}','PostController@category')->name('category');


   // Job
   Route::get('job/{id?}','JobController@index')->name('user_job');
   Route::get('job/detail','JobController@detail');
   // Profile
   Route::get('profile/{tab?}', 'ProfileController@index')->name('profile');
   Route::resource('education', 'EducationController');
   Route::resource('experience', 'ExperienceController');
   Route::resource('showcase', 'ShowcaseController');
   Route::post('profile/profile/avatar', 'ProfileController@uploadAvatar');
   Route::post('profile/profile/description', 'ProfileController@updateDescription');
   Route::post('profile/profile/expect', 'ProfileController@updateExpect');
   Route::post('profile/profile', 'ProfileController@updateSkill');
   Route::post('profile/profile/uploadResume', 'ProfileController@uploadResume')->name('upload_resume');
   Route::post('profile/profile/downloadResume', 'ProfileController@downloadResume')->name('download_resume');
   Route::post('profile/profile/uploadTranscript', 'ProfileController@uploadTranscript')->name('upload_transcript');
   Route::post('profile/profile/downloadTranscript', 'ProfileController@downloadTranscript')->name('download_transcript');
   // Notifications
   Route::get('/unreadNotificationsMarkAsRead', function () {
     auth()->user()->unreadNotifications->markAsRead();
   });
   // Appendix
   Route::get('/getmsg','JobController@ajaxtest')->name('ajax');
});


Route::group(['namespace'=> 'Admin' , 'middleware' => ['auth']],function() {
  Route::post('/admin/application/create', 'ApplicationController@create')->name("application_create");

});



// Protected against Non-Admins
Route::group(['namespace' => 'Admin', 'middleware' => ['auth:admin']], function() {
  Route::get('admin/home','HomeController@index');
  Route::resource('admin/admin','AdminUserController');
  Route::resource('admin/post','PostController');

  Route::resource('admin/tag','TagController');
  Route::resource('admin/category','CategoryController');
  Route::resource('admin/vcategory','VCategoryController');

  Route::resource('admin/video','videoController');

  // User Profile
  Route::get('admin/user/recommend/{id}', 'UserController@recommend')->name("admin_recommend");
  Route::get('admin/user/allrec', 'UserController@recommendall')->name("admin_recommendall");
  Route::resource('adminprofile', 'ProfileController');
  Route::get('admin/profile/{id}', 'ProfileController@index');
  Route::resource('admin/user', 'UserController');
  // Application
  Route::get('/admin/application/application','ApplicationController@index')->name('application_view');
  Route::get('/admin/application/delete/{applicationid}', 'ApplicationController@delete')->name("application_delete");
  Route::post('/admin/application/edit', 'ApplicationController@update')->name("application_update");

  // Job
  Route::get('/admin/job/job', 'JobController@index')->name("job_view");
  Route::get('/admin/job/edit/{jobid}', 'JobController@edit')->name("job_edit");
  Route::post('/admin/job/add', 'JobController@add')->name("job_add");
  Route::get('/admin/job/create', 'JobController@create')->name("job_create");
  Route::get('/admin/job/delete/{jobid}', 'JobController@delete')->name("job_delete");
  // Skill
  Route::get('/admin/skill/skill', 'SkillController@index')->name("skill_view");
  Route::get('/admin/skill/edit/{skillid}', 'SkillController@edit')->name("skill_edit");
  Route::post('/admin/skill/add', 'SkillController@add')->name("skill_add");
  Route::get('/admin/skill/create', 'SkillController@create')->name("skill_create");
  Route::get('/admin/skill/delete/{skillid}', 'SkillController@delete')->name("skill_delete");
  // Industry
  Route::get('/admin/industry/industry', 'IndustryController@index')->name("industry_view");
  Route::get('/admin/industry/edit/{industryid}', 'IndustryController@edit')->name("industry_edit");
  Route::post('/admin/industry/add', 'IndustryController@add')->name("industry_add");
  Route::get('/admin/industry/create', 'IndustryController@create')->name("industry_create");
  Route::get('/admin/industry/delete/{industryid}', 'IndustryController@delete')->name("industry_delete");
  // Major
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
