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
    return view('home');
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


/*
 * 注册
 */
Route::get('/register','\App\Controllers\CommonController@register');

Route::any('/registerStudent','\App\Controllers\StudentController@register');
Route::any('/registerTeacher','\App\Controllers\TeacherController@register');

/*
 * 登录
 */


Route::any('/users/login','\App\Controllers\CommonController@userLogin');
Route::any('/users/unLogin','\App\Controllers\CommonController@userUnLogin');



Route::get('/base',function() {
    return view('layouts.app');
});

Route::get('/home',function() {
    return view('home');
});


/**
 * 邮件激活实现
 */

Route::get('/active','\App\Controllers\MailController@activeMail');


