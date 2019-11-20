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

Route::GET('/test',function(){
	echo "string";
});

Route::get('/landing', function () {
    return view('landing_page');
});
Route::get('/', function () {
    return view('whish_page');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::GET('/feedback','FeedbackController@feedback');

Route::POST('/submit_feedback','FeedbackController@submit_feedback');

Route::POST('user_login', 'LoginController@login_n');

Route::POST('/user_register','LoginController@user_register');

Route::GET('/user_dashboard','UserController@user_dashboard');

Route::GET('/branches','UserController@branches');

Route::GET('/add_branch','UserController@add_branch');

Route::POST('/insert_branch','UserController@insert_branch');

Route::GET('/view_feedback/{id}','UserController@view_feedback');

Route::GET('/logout', 'LoginController@logout');
