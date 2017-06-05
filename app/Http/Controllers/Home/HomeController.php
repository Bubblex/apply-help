<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Intervention\Image\ImageManagerStatic as Image;

use App\Repositories\HelpRepository as Help;
use App\Repositories\UserRepository as User;
use App\Repositories\DonateRepository as Donate;
use App\Repositories\GoodsTypeRepository as GoodsType;
use App\Repositories\GoodsRepository as Goods;

class HomeController extends Controller
{
    protected $user;
    protected $help;
    protected $donate;
    protected $goods;
    protected $goodsType;

    public function __construct(Help $help, Donate $donate, User $user, GoodsType $goodsType, Goods $goods) {
        $this->user = $user;
        $this->help = $help;
        $this->donate = $donate;
        $this->goods = $goods;
        $this->goodsType = $goodsType;
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

    /**
     * 我的信息页
     *
     * @return void
     */
    public function myInfoPage() {
        return view('home.myinfo')->with([
            'user' => session('user')
        ]);
    }

    /**
     * 修改我的信息接口
     *
     * @param Request $request
     * @return void
     */
    public function updateMyInfo(Request $request) {
        $user = $this->user->update($request->id, $request->all());

        if ($user) {
            session(['user' => $this->user->find($request->id)]);
            return response()->json([
                'status' => 1,
                'message' => '修改成功',
            ]);
        }
        else {
            return response()->json([
                'status' => 1,
                'message' => '修改失败',
            ]);
        }
    }

    /**
     * 商品列表接口
     *
     * @param Request $request
     * @return void
     */
    public function goodsList(Request $request) {
        return response()->json([
            'status' => 1,
            'message' => '请求成功',
            'goods' => $this->goods->findWhere([['goods_type_id', $request->id]])
        ]);
    }

    /**
     * 申请帮助页
     *
     * @return void
     */
    public function applyHelpPage() {
        return view('Home.applyhelp')->with([
            'goodsType' => $this->goodsType->all()
        ]);
    }

    /**
     * 申请帮助接口
     *
     * @param Request $request
     * @return void
     */
    public function addHelp(Request $request) {
        $attribute = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $request->file('image')->store('/uploads');
            // $filePath = 'uploads/'.time().'.'.$image->getClientOriginalExtension();
            // Image::make($image)->save($filePath);
            $attribute['image'] = '/'.$path;
        }

        if ($this->help->create($attribute)) {
            return response()->json([
                'status' => 1,
                'message' => '申请成功',
            ]);
        }
        else {
            return response()->json([
                'status' => 2,
                'message' => '申请失败',
            ]);
        }
    }
}
