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

    public function helpListPage() {
        return view('admin.help')->with([
            'helps' => $this->help->all()
        ]);
    }
}
