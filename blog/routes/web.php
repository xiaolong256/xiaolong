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
//用户家目录
Route::get('/', 'HomeController@index')->name('home');
//话题详情页
Route::get('detail','ArticleController@detail')->name('detail');
//后台登录页面
Route::get('/admin/login','Admin\LoginController@login')->name('admin.login');
//后台首页
Route::get('/admin','Admin\LoginController@index')->name('admin.index')->middleware('adminLogin');
//退出登录
Route::get('/admin/logout','Admin\LoginController@logout')->name('admin.logout');
Route::post('/admin/validate','Admin\LoginController@validated')->name('admin.validate');
//修改话题页面
Route::get('/admin/update/{id}','Admin\ArticleController@update')->name('admin.update');
//删除话题
Route::get('/admin/delete/{id}','Admin\ArticleController@delete')->name('admin.delete');
//新建话题页面
Route::get('/admin/create','Admin\ArticleController@create')->name('admin.create');
//更新话题
Route::post('/admin/edit/{id}','Admin\ArticleController@edit')->name('admin.edit');
//新建话题
Route::post('admin/store/{id}','Admin\ArticleController@store')->name('admin.store');
