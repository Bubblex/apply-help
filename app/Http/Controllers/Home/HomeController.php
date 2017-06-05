<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\HelpRepository as Help;
use App\Repositories\DonateRepository as donate;

class HomeController extends Controller
{
    protected $help;
    protected $donate;

    public function __construct(Help $help, Donate $donate) {
        $this->help = $help;
        $this->donate = $donate;
    }

    /**
     * 首页
     *
     * @return void
     */
    public function homePage() {
        return view('home.index')->with([
            'helps' => $this->help->paginate([['status', 1]]),
            'people_num' => $this->donate->getCountByUser(),
            'help_num' => $this->donate->getCountByHelp()
        ]);
    }

    /**
     * 帮助详情页
     *
     * @return void
     */
    public function applyDetailPage(Request $request) {
        return view('home.applydetail')->with([
            'help' => $this->help->find($request->id)
        ]);
    }

    public function myInfoPage() {
        return view('home.myinfo')->with([
            'user' => session('user')
        ]);
    }
}
