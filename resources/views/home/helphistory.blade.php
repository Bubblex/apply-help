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
                    <a href="/">首页</a>
                </div>
                <div class="col-4">
                    <a href="/home/applyhelp">申请帮助</a>
                </div>
                <div class="col-4">
                    <a  class="active" href="/home/helphistory">捐助查询</a>
                </div>
                <div class="col-4">
                    <a href="javascript:">关于我们</a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="public-spilt">捐物查询</div>
        <div class="table">
            <div class="th">
                <div class="td">介绍</div>
                <div class="td">物品</div>
                <div class="td">状态</div>
                <div class="td">物流信息</div>
            </div>
            @foreach ($donates as $item)
            <div class="tr">
                <div class="td helpdetail-container">
                    <img src="{{ $item->help->image }}">
                    <p class="detail">{{ $item->help->summary }}</p>
                    <a href="{{ $item->help->id }}">查看详情</a>
                </div>
                <div class="td">{{ $item->help->needed }}</div>
                <div class="td">
                    @if ($item->status == 1)
                        待取货
                    @else
                        已取货
                    @endif
                </div>
                <div class="td logistics">
                    <p>{{ $item->message or '暂无' }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <!--  分页-->
        <div style="text-align: right">
            {!! $donates->render() !!}
        </div>
    </div>
    <script src="/resource/vendor/jquery/jquery-3.1.1.min.js"></script>
    <script src="/resource/vendor/pagination/jquery.pagination.js"></script>
    <script src="/resource/script/app.babel.js"></script>
    <script src="/resource/script/helphistory.babel.js"></script>
</body>
</html>