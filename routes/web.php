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

// Route::get('/login' , 'Auth\LoginController@index')->name('login');
// Route::get('/register' , 'Auth\RegisterController@index')->name('register');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');

Route::get('/classes', 'ClassController@classes')->name('classes');
Route::get('/class_detail/{id}' , 'ClassController@class_detail')->name('class_detail');
Route::get('/show_class_register' , 'ClassController@show_class_register')->name('show_class_register');
Route::get('/showSubjectInClass', 'ClassController@showSubjectInClass')->name('showSubjectInClass');

Route::get('/fee', 'HomeController@fee')->name('fee');

Route::get('/support', 'HomeController@support')->name('support');

Route::get('/teacher', 'TeacherController@teacher')->name('teacher');
Route::get('/teacher_detail/{id}' , 'TeacherController@teacher_detail')->name('teacher_detail');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/student', 'StudentController@index');
Route::get('/admin/teacher', 'TeacherController@index');
Route::get('/admin/class', 'ClassController@index');
Route::get('/admin/booking', 'BookingController@index');
Route::get('/admin/vote', 'VoteController@index');
