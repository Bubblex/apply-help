<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\DonateRepository as Donate;

class DonateController extends Controller
{
    protected $donate;

    public function __construct(Donate $donate) {
        $this->donate = $donate;
    }

    public function donateListPage() {
        return view('admin.donate')->with([
            'donates' => $this->donate->all()
        ]);
    }

    public function confirm(Request $request) {
        if ($this->donate->update($request->id, ['status' => $request->status])) {
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

    public function message(Request $request) {
        if ($this->donate->update($request->id, ['message' => $request->message])) {
            return response()->json([
                'status' => 1,
                'message' => '保存成功'
            ]);
        }
        else {
            return response()->json([
                'status' => 2,
                'message' => '保存失败'
            ]);
        }
    }
}
