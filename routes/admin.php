<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('admin.')->group(function () {
    Route::get('/', 'Admin\IndexController@index')->name('index');
    Route::get('/address', 'Admin\IndexController@address')->name('address');
    Route::get('/bill', 'Admin\IndexController@bill')->name('bill');
    Route::get('/billlist', 'Admin\IndexController@billlist')->name('billlist');
    Route::get('/bindphone', 'Admin\IndexController@bindphone')->name('bindphone');
    Route::get('/blog', 'Admin\IndexController@blog')->name('blog');
    Route::get('/bonus', 'Admin\IndexController@bonus')->name('bonus');
    Route::get('/change', 'Admin\IndexController@change')->name('change');
    Route::get('/collection', 'Admin\IndexController@collection')->name('collection');
    Route::get('/comment', 'Admin\IndexController@comment')->name('comment');
    Route::get('/commentlist', 'Admin\IndexController@commentlist')->name('commentlist');
    Route::get('/coupon', 'Admin\IndexController@coupon')->name('coupon');
    Route::get('/email', 'Admin\IndexController@email')->name('email');
    Route::get('/foot', 'Admin\IndexController@foot')->name('foot');
    Route::get('/idcard', 'Admin\IndexController@idcard')->name('idcard');
    Route::get('/information', 'Admin\IndexController@information')->name('information');
    Route::get('/logistics', 'Admin\IndexController@logistics')->name('logistics');
    Route::get('/news', 'Admin\IndexController@news')->name('news');
    Route::get('/order', 'Admin\IndexController@order')->name('order');
    Route::get('/orderinfo', 'Admin\IndexController@orderinfo')->name('orderinfo');
    Route::get('/password', 'Admin\IndexController@password')->name('password');
    Route::get('/question', 'Admin\IndexController@question')->name('question');
    Route::get('/record', 'Admin\IndexController@record')->name('record');
    Route::get('/refund', 'Admin\IndexController@refund')->name('refund');
    Route::get('/safety', 'Admin\IndexController@safety')->name('safety');
    Route::get('/setpay', 'Admin\IndexController@index')->name('setpay');
});