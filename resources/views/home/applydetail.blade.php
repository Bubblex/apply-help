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
    <!-- BEGIN 受助申请详情-->
    <div class="main-container apply-detail">
        <div class="col-12">
            <img src="{{ $help->image }}">
        </div>
        <div class="col-12">
            <p>{{ $help->name }}</p>
            <p>{{ $help->summary }}</p>
            <p class="type">{{ $help->needed }}</p>
            <div class="col-3">
                <p>{{ count($help->donates) }}人帮助</p>
            </div>
            <div class="col-3 offset-18">
                <a id="confirm-info" data-needed="{{ $help->needed }}" href="javascript:">帮助</a>
            </div>
        </div>
    </div>
    <!-- END 受助申请详情-->
    <!-- BEGIN 确认捐助弹框-->
    <input type="hidden" name="id" value="{{ $help->id }}">
    <div class="layer-container">
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
    <!-- END 确认捐助弹框-->
    <script src="/resource/vendor/jquery/jquery-3.1.1.min.js"></script>
    <script src="/resource/script/app.babel.js"></script>
    <script src="/resource/script/applydetail.babel.js"></script>
</body>
</html>