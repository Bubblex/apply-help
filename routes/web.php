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
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    /**
     * 登录页
     */
    Route::get('login', 'AccountController@loginPage');

    /**
     * 登录接口
     */
    Route::post('login', 'AccountController@login');

    /**
     * 必须登录的路由组
     */
    Route::group(['middleware' => 'admin'], function() {
        /**
         * 用户列表页
         */
        Route::get('user', 'UserController@userListPage');

        /**
         * 退出登录
         */
        Route::get('logout', 'AccountController@logout');

        Route::group(['prefix' => 'user'], function() {
        });
    });
});
