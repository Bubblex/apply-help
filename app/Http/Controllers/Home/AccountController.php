<?php

namespace App\Http\Controllers\Home;

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
     * 注册页面
     *
     * @return void
     */
    public function registerPage() {
        return view('home.register');
    }

    /**
     * 注册接口
     *
     * @param Request $request
     * @return void
     */
    public function register(Request $request) {
        if (count($this->user->findWhere(['telephone' => $request->telephone])) > 0) {
            return response()->json([
                'status' => 3,
                'message' => '该手机号已被注册'
            ]);
        }

        $attribute = $request->all();
        $attribute['password'] = md5($attribute['password']);

        if ($this->user->create($attribute)) {
            return response()->json([
                'status' => 1,
                'message' => '注册成功，请登录'
            ]);
        }
        else {
            return response()->json([
                'status' => 2,
                'message' => '注册失败，请稍后再试'
            ]);
        }
    }

    /**
     * 登录页
     *
     * @return void
     */
    public function loginPage() {
        return view('home.login');
    }

    /**
     * 登录接口
     *
     * @param Request $request
     * @return void
     */
    public function login(Request $request) {
        $user = $this->user->findWhereFirst(['telephone' => $request->telephone]);

        if (!$user) {
            return response()->json([
                'status' => 2,
                'message' => '用户不存在'
            ]);
        }

        if ($user->role_id != 1) {
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

        session(['user' => $user]);

        return response()->json([
            'status' => 1,
            'message' => '登录成功'
        ]);
    }
}
