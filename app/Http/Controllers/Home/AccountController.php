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

        if ($this->user->create($request->all())) {
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
}
