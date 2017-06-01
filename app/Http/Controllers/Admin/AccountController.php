<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    /**
     * 后台登录页
     *
     * @return void
     */
    public function loginPage() {
        return view('admin.login');
    }

    /**
     * 登录接口
     *
     * @return void
     */
    public function login() {

    }
}
