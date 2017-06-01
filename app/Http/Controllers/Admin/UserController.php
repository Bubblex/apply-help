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

    public function userListPage() {
        return view('admin.user');
    }
}
