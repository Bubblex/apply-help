<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\UserRepository as User;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    /**
     * 用户列表页
     *
     * @return void
     */
    public function userListPage() {
        return view('admin.user')->with([
            'users' => $this->user->all(['*'], ['role'])
        ]);
    }

    /**
     * 改变用户状态接口
     *
     * @param Request $request
     * @return void
     */
    public function userStatus(Request $request) {
        $this->user->update($request->id, [
            'status' => $request->status
        ]);

        return response()->json([
            'status' => 1,
            'message' => $request->status == 1 ? '启用用户成功' : '禁用用户成功'
        ]);
    }

    /**
     * 用户详情页
     *
     * @return void
     */
    public function userDetailPage(Request $request) {
        return view('admin.user-detail')->with([
            'user' => $this->user->find($request->id)
        ]);
    }

    public function userRemarks(Request $request) {
        if ($this->user->update($request->id, ['remarks' => $request->remarks])) {
            return response()->json([
                'status' => 1,
                'message' => '修改成功'
            ]);
        }
        else {
            return response()->json([
                'status' => 2,
                'message' => '修改失败'
            ]);
        }
    }
}
