<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>firekeeper-simple</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <link rel="stylesheet" href="/resource/style/app.css">
</head>
<body>
    @include('home.master.header')
    <div class="header-nav">
        <div class="main-container">
            <div class="row">
                <div class="col-4 offset-4">
                    <a class="active" href="/">首页</a>
                </div>
                <div class="col-4">
                    <a href="/home/applyhelp">申请帮助</a>
                </div>
                <div class="col-4">
                    <a href="/home/helphistory">捐助查询</a>
                </div>
                <div class="col-4">
                    <a href="javascript:">关于我们</a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="public-spilt">历史申请</div>
        <div class="row">
            <!-- BEGIN 左侧菜单-->
            <div class="col-6">
                <a class="left-apply-btn" href="/home/applyhelp">填写申请</a>
                <a class="left-apply-btn active" href="javascript:">历史申请</a>
            </div>
            <!-- END 左侧菜单-->
            <div class="col-18">
                <div class="table">
                    <div class="th">
                        <div class="td">介绍</div>
                        <div class="td">物品</div>
                        <div class="td">状态</div>
                        <div class="td">资助人</div>
                        <div class="td">操作</div>
                    </div>
                    @foreach ($donates as $item)
                    <div class="tr">
                        <div class="td detail-container">
                            <img src="{{ $item->help->image }}">
                            <p class="detail">{{ $item->help->summary }}</p>
                            <a href="{{ $item->help->id }}">查看详情</a>
                        </div>
                        <div class="td">{{ $item->help->needed }}</div>
                        <div class="td"></div>
                        <div class="td">{{ $item->user->name }}</div>
                        <div class="td">
                            <a class="right-btn active" href="javascript:">修改</a>
                            <a class="right-btn" href="javascript:">删除</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--  分页-->
        <div class="pageContent">
            <div class="page">
                <input id="totalCount" type="hidden" value="2">
                <input id="page" type="hidden" value="2">
                <input id="pageCount" type="hidden" value="4">
                <ul id="webPagination"></ul>
            </div>
        </div>
    </div>
    <script src="/resource/vendor/jquery/jquery-3.1.1.min.js"></script>
    <script src="/resource/vendor/pagination/jquery.pagination.js"></script>
    <script src="/resource/script/app.babel.js"></script>
    <script src="/resource/script/applyhistory.babel.js"></script>
</body>
</html>