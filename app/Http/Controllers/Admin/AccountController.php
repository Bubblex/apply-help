<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\UserRepository as User;

class AccountController extends Controller
{
    protected $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

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
    public function login(Request $request) {
        $user = $this->user->findWhereFirst([
            ['telephone', '=', $request->telephone],
        ]);

        if (!$user) {
            return response()->json([
                'status' => 2,
                'message' => '用户不存在'
            ]);
        }

        if ($user->role_id != 2) {
            return response()->json([
                'status' => 3,
                'message' => '您无权登录该系统'
            ]);
        }

        if ($user->status != 1) {
            return response()->json([
                'status' => 4,
                'message' => '该账号已被禁用'
            ]);
        }

        if ($user->password != md5($request->password)) {
            return response()->json([
                'status' => 6,
                'message' => '用户名或密码不正确'
            ]);
        }

        session(['admin' => $user]);

        return response()->json([
            'status' => 1,
            'message' => '登录成功'
        ]);
    }

    /**
     * 退出登录
     *
     * @return void
     */
    public function logout() {
        session()->forget('admin');

        return redirect('/admin/login');
    }
}
