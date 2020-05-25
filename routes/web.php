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
Route::get('/admin/innlist','AdminController@show');
Route::get('/admin/userlist','AdminController@usershow');
Route::get('/admin/usershow','AdminController@usersearch');
//河住圭紀 追加分 エンド 0520
//河住圭紀 追加分 スタート 0521
Route::get('/inn/del/{id}','AdminController@del');
Route::post('/inn/delconfirm/{id}','AdminController@delconfirm');
Route::post('/inn/del','AdminController@remove');
Route::get('/inn/edit/{id}','AdminController@edit');
Route::post('/inn/edit','AdminController@update');
//河住圭紀 追加分 エンド 0521
// 河住圭紀 start 0522
Route::get('/admin/user/edit/{id}','AdminController@useredit');
Route::post('/admin/user/edit/','AdminController@userupdate');
Route::get('/admin/user/del/{id}','AdminController@userdel');
Route::post('/admin/user/del/{id}','AdminController@userdel_confirm');
Route::post('/admin/user/del/','AdminController@userremove');
//河住圭紀 end 0522

//建部日向　追加分　スタート 0520
Route::get('/inn/show', 'AdminController@show');
Route::post('/inn/show', 'AdminController@search');
//建部日向　追加分　エンド 0520

//建部日向　追加分　スタート　0521
Route::get('inn/add', 'AdminController@add');
Route::post('inn/add_confirm', 'AdminController@add_confirm');
Route::post('inn/add', 'AdminController@create');
Route::get('inn/add_done', 'AdminController@add_done');
//建部日向　追加分　エンド　0521

//大内千夏 追加分 スタート 0520
Route::get('user/auth','UserController@index');
Route::post('user/auth','UserController@post');
//大内千夏 追加分 エンド 0520
// 大内 0521 start
Route::get('/user/inn/show','UserController@shows');
Route::post('/user/inn/show','UserController@searches');
Route::get('/user/inn/detail/{id}','UserController@detail');
//大内 0521 end

//大内千夏 追加分 スタート 0522
Route::get('/admin/register', 'AdminController@useradd');
Route::post('/admin/register_confirm', 'AdminController@register_confirm');
Route::post('/admin/register', 'AdminController@register_create');
Route::get('/admin/register_done', 'AdminController@register_done');

Route::get('/user/del/{id}','UserController@del');
Route::post('/user/delconfirm/{id}','UserController@delconfirm');
Route::post('/user/del','UserController@remove');
//大内千夏 追加分 エンド　0522

//河住 0522 start
Route::get('user/auth','UserController@home');
Route::get('user/logout','UserController@logout');
Route::get('user/edit/{id}','UserController@edit');
Route::post('user/edit/{id}','UserController@edit_confirm');
Route::post('user/edit','UserController@update');

Route::get('user/inn/reservation','ReservationController@index');
Route::post('user/inn/reservation','ReservationController@add');
Route::post('user/inn/reservation_done','ReservationController@create');
//河住 0522 end

//チョウさん start
Route::get('toroku', 'TorokuController@register');
Route::post('toroku', 'TorokuController@create');
//チョウさん end
