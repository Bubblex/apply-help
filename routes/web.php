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
         * 退出登录
         */
        Route::get('logout', 'AccountController@logout');

        Route::group(['prefix' => 'user'], function() {
            /**
             * 用户列表页
             */
            Route::get('', 'UserController@userListPage');

            /**
             * 禁用 / 启用用户
             */
            Route::post('status', 'UserController@userStatus');

            /**
             * 用户详情页
             */
            Route::get('detail', 'UserController@userDetailPage');
        });

        Route::group(['prefix' => 'help'], function() {
            /**
             * 申请帮助页
             */
            Route::get('', 'HelpController@helpListPage');

            /**
             * 修改申请状态
             */
            Route::post('status', 'HelpController@helpStatus');

            /**
             * 申请帮助详情页
             */
            Route::get('detail', 'HelpController@helpDetailPage');
        });
    });
});
