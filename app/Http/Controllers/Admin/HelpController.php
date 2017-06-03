<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\HelpRepository as Help;

class HelpController extends Controller
{
    protected $help;

    public function __construct(Help $help) {
        $this->help = $help;
    }

    /**
     * 帮助列表页
     *
     * @return void
     */
    public function helpListPage() {
        return view('admin.help')->with([
            'helps' => $this->help->all()
        ]);
    }

    /**
     * 更新帮助状态
     *
     * @param Request $request
     * @return void
     */
    public function helpStatus(Request $request) {
        return $this->help->update($request->id, [
            'status' => $request->status
        ]);
    }
}
