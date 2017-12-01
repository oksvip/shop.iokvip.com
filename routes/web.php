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

Route::get('/', "Index\IndexController@index")->name('home');                               // 首页
Route::get('/introduction', "Index\IndexController@introduction")->name('introduction');    // 详情页
Route::get('/login', "Index\IndexController@login")->name('login');                         // 登录页
Route::get('/pay', "Index\IndexController@pay")->name('pay');                               // 支付页
Route::get('/register', "Index\IndexController@register")->name('register');                // 注册页
Route::get('/search', "Index\IndexController@search")->name('search');                      // 搜索页
Route::get('/shopcart', "Index\IndexController@shopcart")->name('shopcart');                // 购物车页
Route::get('/sort', "Index\IndexController@sort")->name('sort');                            // 分类页
Route::get('/success', "Index\IndexController@success")->name('success');                   // 付款成功页