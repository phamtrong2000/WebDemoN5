<?php

use Illuminate\Support\Facades\Route;

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
Route::get('test',function(){
    return view('Pages.layout.index');
});

Route::group(['prefix' => 'Pages','middleware'=>'auth'], function(){
    Route::group(['prefix'=>'Student'], function(){
        Route::get('Home', 'StudentController@getHome')->name('student-home');
        Route::get('Blog', 'StudentController@getBlog');
        Route::get('DS1', 'StudentController@getDS1');
        Route::get('DS2', 'StudentController@getDS2');
        Route::get('Help', 'StudentController@getHelp');
        Route::get('Profile', 'StudentController@getProfile');
        Route::get('Setting', 'StudentController@getSetting');
    });
    Route::group(['prefix'=>'Teacher'], function(){
        Route::get('Home', 'TeacherController@getHome')->name('teacher-home');
        Route::get('Blog', 'TeacherController@getBlog');
        Route::get('DS1', 'TeacherController@getDS1');
        Route::get('DS2', 'TeacherController@getDS2');
        Route::get('Help', 'TeacherController@getHelp');
        Route::get('Profile', 'TeacherController@getProfile');
        Route::get('Setting', 'TeacherController@getSetting');
    });
    Route::group(['prefix'=>'Company'], function(){
        Route::get('Home', 'CompanyController@getHome')->name('company-home');
        Route::get('Blog', 'CompanyController@getBlog');
        Route::get('DS1', 'CompanyController@getDS1');
        Route::get('DS2', 'CompanyController@getDS2');
        Route::get('Help', 'CompanyController@getHelp');
        Route::get('Profile', 'CompanyController@getProfile');
        Route::get('Setting', 'CompanyController@getSetting');
    });
});
Route::get('login', 'UserController@Login')->name('login');
Route::post('login', 'UserController@post_Login');

Route::get('registration', 'UserController@registration')->name('registration');
Route::post('registration', 'UserController@post_registration');