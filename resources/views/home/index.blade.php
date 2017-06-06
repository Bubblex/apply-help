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
                                    <a class="help help-btn" data-id="{{ $item->id }}" data-needed="{{ $item->needed }}" href="javascript:">帮助</a>
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
    <div class="layer-container">
        <input type="hidden" name="id">
        <div class="layer-confirm-help">
            <h2>确认信息</h2>
            <div class="row confirm-row">
                <div class="col-7">
                    <p class="title">捐助的物品：</p>
                </div>
                <div class="col-17">
                    <p class="explain-needed"></p>
                </div>
            </div>
            <div class="row confirm-row">
                <div class="col-7">
                    <p class="title"> 您的姓名：</p>
                </div>
                <div class="col-17">
                    <p>{{ session('user') ? session('user')->name : '-' }}</p>
                </div>
            </div>
            <div class="row confirm-row">
                <div class="col-7">
                    <p class="title"> 您的联系方式：</p>
                </div>
                <div class="col-17">
                    <p>{{ session('user') ? session('user')->telephone : '-' }}</p>
                </div>
            </div>
            <div class="row confirm-row">
                <div class="col-7">
                    <p class="title"> 您的地址：</p>
                </div>
                <div class="col-17">
                    <p>{{ session('user') ? session('user')->address : '-' }}</p>
                </div>
            </div>
            <p class="confirm-thanks">感谢您的爱心，工作人员讲在2个工作日内去上述地址取件，请耐心等候~</p>
            <div class="row">
                <div class="col-12">
                    <a id="confirm-help" href="javascript:">确认帮助</a>
                </div>
                <div class="col-12">
                    <a id="cancle-help" href="javascript:">取消</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END 帮助列表-->
    <script src="/resource/vendor/jquery/jquery-3.1.1.min.js"></script>
    <script src="/resource/vendor/pagination/jquery.pagination.js"></script>
    <script src="/resource/script/app.babel.js"></script>
    <script src="/resource/script/index.babel.js"></script>
</body>
</html>