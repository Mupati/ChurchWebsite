<?php


Route::get('/index', 'church\HomeController@index')->name('homePage');
Route::get('/blog','church\BlogController@index')->name('blogPage');
Route::get('/register-member','church\RegistrationController@sign_up')->name('registrationForm');
Route::post('/register-member','church\RegistrationController@add_member')->name('addMember');
Route::post('/login-member','church\LoginController@login')->name('memberLogin');
Route::post('/logout-member','church\LoginController@logout')->name('memberLogout');
Route::get('/profile','church\ProfileController@index');

Route::get('/reset','church\ResetController@index');



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