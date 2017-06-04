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
    <div class="main-container">
        <div class="row header-account">
            <div class="col-6">
                <p>微助</p>
            </div>
            <div class="col-10">
                <input class="header-input" placeholder="搜索你想捐助的物品">
            </div>
            <div class="col-3">
                <a class="header-search" href="javascript:">搜索</a>
            </div>
            <div class="col-5">
                <!--  .has-login -->
                <!--    a(href="/home/myinfo") 我的信息 |-->
                <!--    a.header-exit(href="/home/login") 退出-->
                <div class="no-login">
                    <a href="/home/login">登录 |</a>
                    <a href="/home/register">注册</a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="main-container">
            <div class="row">
                <div class="col-4 offset-4">
                    <a class="active" href="/home/index">首页</a>
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
    <!-- BEGIN banner -->
    <div class="main-container">
        <div class="index-banner">
            <div class="row">
                <div class="col-8 offset-8">
                    <p>历史捐助物品数</p>
                    <div class="account">
                        <span class="account-thing"> {{ $help_num }} </span>件</div>
                </div>
                <div class="col-6">
                    <p>历史捐助人数</p>
                    <div class="account">
                        <span class="account-people"> {{ $people_num }} </span>人</div>
                </div>
            </div>
        </div>
    </div>
    <!-- END banner-->
    <!-- BEGIN 帮助列表-->
    <div class="main-container">
        <div class="need-help-list">
            @foreach ($helps as $item)
                <div class="need-help-item">
                    <div class="row">
                        <div class="col-8">
                            <img src="{{ $item->image }}">
                        </div>
                        <div class="col-16">
                            <p class="summary">
                                {{ $item->summary }}
                                <a href="/home/applydetail?id={{ $item->id }}">详情</a>
                            </p>
                            <p class="type">{{ $item->needed }}</p>
                            <div class="row">
                                <div class="col-4">
                                    <p>{{ count($item->donates) }}人帮助</p>
                                </div>
                                <div class="col-4 offset-16">
                                    <a class="help" href="javascript:">帮助</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {!! $helps->render() !!}
        <!--  分页-->
        {{-- <div class="pageContent">
            <div class="page">
                <input id="totalCount" type="hidden" value="2">
                <input id="page" type="hidden" value="2">
                <input id="pageCount" type="hidden" value="4">
                <ul id="webPagination"></ul>
            </div>
        </div> --}}
    </div>
    <!-- END 帮助列表-->
    <script src="/resource/vendor/jquery/jquery-3.1.1.min.js"></script>
    <script src="/resource/vendor/pagination/jquery.pagination.js"></script>
    <script src="/resource/script/app.babel.js"></script>
    <script src="/resource/script/index.babel.js"></script>
</body>
</html>