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

Route::get('/welcome', function () {
    return view('welcome');
});

//访问数据库测试
Route::get('/get',function() {
   return DB::table('students') -> get();
});

Route::get('gets',function() {
    $student = new \App\Student();
    return $student -> getAll();
});

Route::get('/login',function() {
    return view('user-login');
});

Route::get('/register', 'CommonController@judgeType');

Route::any('/registerStudent','StudentController@register');
Route::any('/registerTeacher','TeacherController@register');


Route::get('/base',function() {
    return view('layouts.app');
});

Route::get('/home',function() {
    return view('home');
});

