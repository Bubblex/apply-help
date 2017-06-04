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

Route::get('', 'Home\HomeController@homePage');

Route::group(['prefix' => 'home', 'namespace' => 'Home'], function() {
    /**
     * 注册页面
     */
    Route::get('register', 'AccountController@registerPage');

    /**
     * 注册接口
     */
    Route::post('register', 'AccountController@register');

    /**
     * 登录页面
     */
    Route::get('login', 'AccountController@loginPage');

    /**
     * 登录接口
     */
    Route::post('login', 'AccountController@login');
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

            /**
             * 添加 / 修改用户备注
             */
            Route::post('remarks', 'UserController@userRemarks');
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

        Route::group(['prefix' => 'donate'], function() {
            /**
             * 捐物列表页
             */
            Route::get('', 'DonateController@donateListPage');

            /**
             * 确认取件
             */
            Route::post('confirm', 'DonateController@confirm');

            /**
             * 填写物流信息
             */
            Route::post('message', 'DonateController@message');
        });
    });
});
