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
    <div class="main-container">
        <div class="public-spilt">申请帮助</div>
        <div class="row">
            <!-- BEGIN 左侧菜单-->
            <div class="col-6">
                <a class="left-apply-btn active" href="javascript:">填写申请</a>
                <a class="left-apply-btn" href="/home/applyhistory">历史申请</a>
            </div>
            <!-- END 左侧菜单-->
            <div class="col-12">
                <!-- BEGIN 受助人信息-->
                <p class="public-title">受助人信息</p>
                <div class="row apply-row">
                    <div class="col-4">
                        <p>
                            <span>*</span>真实姓名</p>
                    </div>
                    <div class="col-20">
                        <input placeholder="请输入真实姓名" name="username" type="text">
                    </div>
                </div>
                <div class="row apply-row">
                    <div class="col-4">
                        <p>
                            <span>*</span>性别</p>
                    </div>
                    <div class="col-3">
                        <input class="apply-sex apply-femail" type="radio" checked="checked" name="sex" value="1">
                    </div>
                    <div class="col-17">
                        <input class="apply-sex apply-mail" type="radio" name="sex" value="2">
                    </div>
                </div>
                <div class="row apply-row">
                    <div class="col-4">
                        <p>
                            <span>*</span>身份证号</p>
                    </div>
                    <div class="col-20">
                        <input placeholder="请输入身份证号" name="idnumber" type="text">
                    </div>
                </div>
                <div class="row apply-row">
                    <div class="col-4">
                        <p>
                            <span>*</span>电话</p>
                    </div>
                    <div class="col-20">
                        <input placeholder="请输入电话" name="phone" type="text">
                    </div>
                </div>
                <!-- END 受助人信息-->
                <!-- BEGIN 需要物品-->
                <p class="public-title">需要物品</p>
                <div class="row apply-row">
                    <div class="col-4">
                        <p>
                            <span>*</span>物品</p>
                    </div>
                    <div class="col-6">
                        <select name="thingtype">
                            @foreach ($goodsType as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                            <option>其他</option>
                        </select>
                    </div>
                    <div class="col-6 offset-1">
                        <select name="thing">
                            <option>学习用品</option>
                        </select>
                    </div>
                    <div class="col-6 offset-1">
                        <input placeholder="填写其他" name="other" type="text">
                    </div>
                </div>
                <div class="row apply-row">
                    <div class="col-4">
                        <p>
                            <span>*</span>个数</p>
                    </div>
                    <div class="col-2">
                        <a class="apply-control-num js-plus-num">-</a>
                    </div>
                    <div class="col-3">
                        <input class="js-num" name="number" type="text" value="1" disabled="disabled">
                    </div>
                    <div class="col-2">
                        <a class="apply-control-num js-less-num">+</a>
                    </div>
                </div>
                <!-- END 需要物品-->
                <!-- BEGIN 情况简介-->
                <p class="public-title">情况简介
                    </p><div class="row apply-row">
                        <textarea placeholder="可填写家庭情况‘自己的梦想’为什么需要这个物品，不少于100字" name="summary" rows="3"></textarea>
                    </div>
                <p></p>
                <div class="row apply-row">
                    <div class="col-4">
                        <p>
                            <span>*</span>上传照片</p>
                    </div>
                    <div class="col-5">
                        <input type="file" name="photo">
                    </div>
                </div>
                <!-- END 情况简介-->
                <!-- BEGIN 收件地址-->
                <p class="public-title">收件地址</p>
                <div class="row apply-row">
                    <div class="col-4">
                        <p>
                            <span>*</span>省市</p>
                    </div>
                    <div class="col-20">
                        <input placeholder="请输入省市" name="city" type="text">
                    </div>
                </div>
                <div class="row apply-row">
                    <div class="col-4">
                        <p>
                            <span>*</span>街道</p>
                    </div>
                    <div class="col-20">
                        <input placeholder="请输入街道" name="route" type="text">
                    </div>
                </div>
                <div class="row apply-row">
                    <div class="col-4">
                        <p>
                            <span>*</span>详细地址</p>
                    </div>
                    <div class="col-20">
                        <textarea placeholder="请填写详细地址，不少于5个字" name="detailadr" rows="2"></textarea>
                    </div>
                </div>
                <!-- END 收件地址-->
                <a class="apply-btn" href="javascript:">确认申请</a>
            </div>
        </div>
    </div>
    <script src="/resource/vendor/jquery/jquery-3.1.1.min.js"></script>
    <script src="/resource/script/app.babel.js"></script>
    <script src="/resource/script/applyhelp.babel.js"></script>
</body>
</html>