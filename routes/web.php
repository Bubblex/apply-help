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


Route::group(['namespace' => 'Home'], function() {
    /**
     * 首页
     */
    Route::get('', 'HomeController@homePage');

    Route::group(['prefix' => 'home'], function() {
        /**
         * 搜索
         */
        Route::get('search', 'HomeController@search');

        /**
         * 帮助详情页
         */
        Route::get('applydetail', 'HomeController@applyDetailPage');

        /**
         * 申请帮助页
         */
        Route::get('applyhelp', 'HomeController@applyHelpPage');

        /**
         * 获取商品列表接口
         */
        Route::post('goods', 'HomeController@goodsList');

        /**
         * 必须登录
         */
        Route::group(['middleware' => 'auth'], function() {
            /**
             * 我的信息页
             */
            Route::get('myinfo', 'HomeController@myInfoPage');

            /**
             * 更新我的信息
             */
            Route::post('myinfo/update', 'HomeController@updateMyInfo');

            /**
             * 添加帮助
             */
            Route::post('help/add', 'HomeController@addHelp');

            /**
             * 修改帮助
             */
            Route::post('help/update', 'HomeController@updateHelp');

            /**
             * 确认捐助
             */
            Route::post('confirm/donate', 'HomeController@confirmDonate');

            /**
             * 捐物历史
             */
            Route::get('helphistory', 'HomeController@helpHistory');

            /**
             * 历史申请
             */
            Route::get('applyhistory', 'HomeController@applyHistory');

            /**
             * 取消申请
             */
            Route::post('cancel/apply', 'HomeController@cancelApply');

            /**
             * 删除帮助
             */
            Route::post('delete/apply', 'HomeController@deleteApply');
        });
    });
});

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

    /**
     * 退出登录
     */
    Route::get('logout', 'AccountController@logout');
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
