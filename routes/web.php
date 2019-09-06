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
    return view('admin/index');
});

//十月第一测
Route::prefix('/admin')->group(function () {
    route::any('index','AdminController@index');//首页展示
   
});

//登录加上中间件
Route::group(['prefix'=>'admin','middleware'=>'login'],function(){
    Route::get('index','AdminController@index');
});
//登录注册
Route::prefix('/login')->group(function(){
    Route::get('reg','LoginController@reg');#注册
    Route::post('regdo','LoginController@regdo');#注册执行
    Route::get('login','LoginController@login');#登录
    Route::post('logindo','LoginController@logindo');#执行登录
    Route::post('forgotpwd','LoginController@forgotpwd');//执行忘记密码
    Route::get('forgot','LoginController@forgot');//忘记密码
    Route::post('send','LoginController@send');//获取验证码
});

//十月第一测
Route::prefix('teacher')->group(function () {
    route::any('add','Teacher\\TeacherController@add');//讲师添加
    route::any('index','Teacher\\TeacherController@index');//讲师列表展示
    route::any('add_do','Teacher\\TeacherController@add_do');//添加执行

});

//Route::any('/teachar','TeacherController@add');

#专栏管理
Route::prefix('/fenlan')->group(function(){
    Route::get('add','FenlanController@add');//添加视图
    Route::any('doadd','FenlanController@doadd');//执行添加
    Route::any('lists','FenlanController@lists');//展示
    Route::any('del','FenlanController@del');//删除
    Route::any('update','FenlanController@update');//修改
    Route::any('doupdate','FenlanController@doupdate');//执行修改
});



