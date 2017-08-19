<?php

//Home page routes
Route::get('/index', 'church\HomeController@index')->name('homePage');
Route::get('/register','church\RegistrationController@sign_up')->name('registrationForm');
Route::post('/register','church\RegistrationController@add_member')->name('addMember');
Route::post('/login','church\LoginController@login')->name('memberLogin');
Route::post('/logout','church\LoginController@logout')->name('memberLogout');
Route::get('/reset','church\ResetController@index')->name('resetPassword');


//Profile Page Routes
Route::get('/profile','church\ProfileController@index');

Route::get('/profile/blog','church\profile\PostController@index');
Route::post('/profile/blog','church\profile\PostController@store');
Route::post('/profile/blog/comment','church\profile\CommentsController@store');


Route::get('/profile/store','church\ProfileController@store');
Route::get('/profile/forum','church\ProfileController@forum');


//Blog page Routes
Route::get('/blog','church\BlogController@index')->name('blogPage');
Route::get('/blog/hymnspiration','church\BlogController@hymns');
Route::get('/blog/biographies','church\BlogController@bio');
Route::get('/blog/testimonies','church\BlogController@testimonies');







/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});







































































/*
//Routes Created during Tutorials

Route::get('/','PostsController@index');	
Route::get('/posts/create','PostsController@create');	

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');



Route::get('/otk','OtkController@index');
//Route::get('/blog', 'OtkController@blog')->name('otkBlog');
Route::post('/blog','OtkController@store_post');
//Route::post('/blog/comment','OtkController@store_comment');
Route::get('/blog/{post}', 'OtkController@show');

Route::post('/blog/{post}/comment','CommentsController@store');	

*/