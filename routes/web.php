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

// 用户注册
Route::post('register','UserController@register');
// 用户登录
Route::post('login','UserController@login');

// 用户收获地址的相关接口
Route::get('user/address/{addressId}','UserAddressController@profile');
// 获取用户收货地址列表
Route::get('user/address','UserAddressController@list');
// 对用户收货地址进行更改
Route::put('user/address','UserAddressController@update');
// 创建用户收货地址
Route::post('user/address','UserAddressController@create');

// 用户银行卡的相关接口
Route::get('user/card/{addressId}','UserCardController@profile');
// 获取用户银行卡列表
Route::get('user/card','UserCardController@list');
// 对用户银行卡进行更改
Route::put('user/card','UserCardController@update');
// 创建用户银行卡
Route::post('user/card','UserCardController@create');
