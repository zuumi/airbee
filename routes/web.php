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
    return view('user.welcome');
});
//河住圭紀 追加分 スタート0520
Route::get('/admin/login','AdminController@index');
Route::post('/admin','AdminController@login');
Route::get('/admin','AdminController@back');
Route::get('/admin/logout','AdminController@logout');
Route::get('/admin/userlist','UserController@show');
Route::get('/admin/innlist','AdminController@show');
Route::get('/admin/usershow','UserController@search');
//河住圭紀 追加分 エンド 0520
//河住圭紀 追加分 スタート 0521
Route::get('/inn/del/{id}','AdminController@del');
Route::post('/inn/delconfirm/{id}','AdminController@delconfirm');
Route::post('/inn/del','AdminController@remove');
Route::get('/inn/edit/{id}','AdminController@edit');
Route::post('/inn/edit','AdminController@update');

//河住圭紀 追加分 エンド 0521

//建部日向　追加分　スタート 0520
Route::get('/inn/show', 'AdminController@show');
Route::post('/inn/show', 'AdminController@search');
//建部日向　追加分　エンド 0520

//大内千夏 追加分 スタート 0520
Route::get('user/auth','UserController@index');
Route::post('user/auth','UserController@post');
//大内千夏 追加分 エンド 0520
