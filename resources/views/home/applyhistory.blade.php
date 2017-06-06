<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>微助</title>
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
                    @foreach ($helps as $item)
                    <div class="tr">
                        <div class="td detail-container">
                            <img src="{{ $item->image }}">
                            <p class="detail">{{ $item->summary }}</p>
                            <a href="/home/applydetail?id={{ $item->id }}">查看详情</a>
                        </div>
                        <div class="td">{{ $item->needed }}</div>
                        <div class="td">
                            @if ($item->status == 1)
                                已发布
                            @elseif ($item->status == 2)
                                审核中
                            @elseif ($item->status == 3)
                                审核未通过
                            @elseif ($item->status == 4)
                                已取消申请
                            @endif
                        </div>
                        <div class="td">
                            @foreach ($item->donates as $donate)
                                <p>{{ $donate->name }}</p>
                            @endforeach
                        </div>
                        <div class="td">
                            @if ($item->status == 2 || $item->status == 3)
                                <a class="right-btn active" href="/home/applyhelp?id={{ $item->id }}">修改</a>
                            @endif
                            @if ($item->status == 4)
                                <a class="right-btn active cancel-apply" data-id="{{ $item->id }}" data-status="2" href="javascript:">重新申请</a>
                            @endif
                            @if ($item->status == 1)
                                <a class="right-btn active cancel-apply" data-id="{{ $item->id }}" data-status="4" href="javascript:">取消申请</a>
                            @endif
                            <a class="right-btn delete-apply" data-id="{{ $item->id }}" href="javascript:">删除</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div style="text-align: right">
            {!! $helps->render() !!}
        </div>
        <!--  分页-->
    </div>
    <script src="/resource/vendor/jquery/jquery-3.1.1.min.js"></script>
    <script src="/resource/vendor/pagination/jquery.pagination.js"></script>
    <script src="/resource/script/app.babel.js"></script>
    <script src="/resource/script/applyhistory.babel.js"></script>
</body>
</html>