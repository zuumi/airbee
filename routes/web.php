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
//河住圭紀 追加分 スタート
Route::get('/admin/login','AdminController@index');
Route::post('/admin','AdminController@login');
Route::get('/admin','AdminController@back');
Route::get('/admin/logout','AdminController@logout');
Route::get('/admin/userlist','AdminController@usershow');
Route::get('/admin/innlist','AdminController@innshow');
//河住圭紀 追加分 エンド
