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

    public function userStatus(Request $request) {
        $this->user->update($request->id, [
            'status' => $request->status
        ]);

        return response()->json([
            'status' => 1,
            'message' => $request->status == 1 ? '启用用户成功' : '禁用用户成功'
        ]);
    }
}
