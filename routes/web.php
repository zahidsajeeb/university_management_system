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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('student','StudentController');

Route::resource('teacher','TeacherController');

Route::resource('course','CourseController');

Route::get('api/get-state-list','AjaxController@getStateList');

Route::get('api/get-mobile','AjaxController@getMobileNumber');

Route::get('api/get-email','AjaxController@getEmail');

