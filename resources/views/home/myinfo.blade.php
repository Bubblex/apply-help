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
        <div class="public-spilt">我的信息</div>
        <div class="myinfo-container">
            <div class="account-spilt">个人信息</div>
            <div class="row account-row">
                <div class="col-5">
                    <p>手机号</p>
                </div>
                <div class="col-19">
                    <input type="hidden" name="apply_id" value="{{ $user->id }}">
                    <input class="user" value="{{ $user->telephone }}" disabled style="border: none; font-size: 14px" placeholder="请输入手机号" name="username">
                    <p class="show">{{ $user->telephone }}</p>
                </div>
            </div>
            <div class="row account-row">
                <div class="col-5">
                    <p>姓名</p>
                </div>
                <div class="col-19">
                    <input class="pwd" value="{{ $user->name }}" placeholder="请输入姓名" name="userpwd">
                    <p class="show">{{ $user->name }}</p>
                </div>
            </div>
            <div class="account-spilt">取件地址（便于捐助时，工作人员取件）</div>
            <div class="row account-row">
                <div class="col-5">
                    <p>学校</p>
                </div>
                <div class="col-19">
                    <input class="pwd" value="{{ $user->school }}" placeholder="请输入学校" name="school">
                    <p class="show">{{ $user->school }}</p>
                </div>
            </div>
            <div class="row account-row">
                <div class="col-5">
                    <p>宿舍楼</p>
                </div>
                <div class="col-19">
                    <input class="pwd" value="{{ $user->dorm }}" placeholder="请输入宿舍楼" name="room">
                    <p class="show">{{ $user->dorm }}</p>
                </div>
            </div>
            <div class="row account-row">
                <div class="col-5">
                    <p>详细地址</p>
                </div>
                <div class="col-19">
                    <input class="pwd" value="{{ $user->address }}" placeholder="请输入详细地址(最少5个字)" name="detailaddr">
                    <p class="show">{{ $user->address }}</p>
                </div>
            </div>
            <a class="account-btn" id="change-myinfo" href="javascript:">修改</a>
            <a class="account-btn" id="confirm-change" href="javascript:">确认</a>
        </div>
    </div>
    <script src="/resource/vendor/jquery/jquery-3.1.1.min.js"></script>
    <script src="/resource/script/app.babel.js"></script>
    <script src="/resource/script/myinfo.babel.js"></script>
</body>
</html>