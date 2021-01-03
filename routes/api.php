<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    // 用户注册
    $api->post('register','UserController@register');
    // 用户登录
    $api->post('login','UserController@login');

    // 用户收获地址的相关接口
    $api->get('user/address/{addressId}','UserAddressController@profile');
    // 获取用户收货地址列表
    $api->get('user/address','UserAddressController@list');
    // 对用户收货地址进行更改
    $api->put('user/address','UserAddressController@update');
    // 创建用户收货地址
    $api->post('user/address','UserAddressController@create');

    // 用户银行卡的相关接口
    $api->get('user/card/{addressId}','UserCardController@profile');
    // 获取用户银行卡列表
    $api->get('user/card','UserCardController@list');
    // 对用户银行卡进行更改
    $api->put('user/card','UserCardController@update');
    // 创建用户银行卡
    $api->post('user/card','UserCardController@create');
});