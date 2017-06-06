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
    <div class="login-container">
        <div class="row">
            <div class="col-12">
                <img class="login-img" src="/resource/image/loginimg.png">
            </div>
            <div class="col-12">
                <div class="register-content account-content">
                    <p>注册</p>
                    <div class="account-spilt">账户信息</div>
                    <div class="row account-row">
                        <div class="col-5">
                            <p>
                                <span>*</span>手机号</p>
                        </div>
                        <div class="col-19">
                            <input class="user" placeholder="请输入手机号" name="username">
                        </div>
                    </div>
                    <div class="row account-row">
                        <div class="col-5">
                            <p>
                                <span>*</span>姓名</p>
                        </div>
                        <div class="col-19">
                            <input class="user" placeholder="请输入姓名" name="name">
                        </div>
                    </div>
                    <div class="row account-row">
                        <div class="col-5">
                            <p>
                                <span>*</span>密码</p>
                        </div>
                        <div class="col-19">
                            <input type="password" class="pwd" placeholder="请输入密码" name="userpwd">
                        </div>
                    </div>
                    <div class="row account-row">
                        <div class="col-5">
                            <p>
                                <span>*</span>确认密码</p>
                        </div>
                        <div class="col-19">
                            <input type="password" class="pwd" placeholder="请确认密码" name="confirm-userpwd">
                        </div>
                    </div>
                    <div class="row account-row">
                        <div class="col-5">
                            <p>
                                <span>*</span>验证码</p>
                        </div>
                        <div class="col-10">
                            <input type="text" class="pwd" placeholder="请输入验证码" name="code">
                        </div>
                        <div class="col-9">
                            <a class="get-code" href="javascript:">获取验证码</a>
                        </div>
                    </div>
                    <div class="account-spilt">个人信息（便于捐助时，工作人员取件）</div>
                    <div class="row account-row">
                        <div class="col-5">
                            <p>
                                <span>*</span>学校</p>
                        </div>
                        <div class="col-19">
                            <input class="pwd" placeholder="请输入学校" name="school">
                        </div>
                    </div>
                    <div class="row account-row">
                        <div class="col-5">
                            <p>
                                <span>*</span>宿舍楼</p>
                        </div>
                        <div class="col-19">
                            <input class="pwd" placeholder="请输入宿舍楼" name="room">
                        </div>
                    </div>
                    <div class="row account-row">
                        <div class="col-5">
                            <p>
                                <span>*</span>详细地址</p>
                        </div>
                        <div class="col-19">
                            <input class="pwd" placeholder="请输入详细地址(最少5个字)" name="detailaddr">
                        </div>
                    </div>
                    <a class="account-btn" id="register" href="javascript:">注册</a>
                    <a class="account-samll-btn" href="/home/login">登录</a>
                </div>
            </div>
        </div>
    </div>
    <script src="/resource/vendor/jquery/jquery-3.1.1.min.js"></script>
    <script src="/resource/script/app.babel.js"></script>
    <script src="/resource/script/register.babel.js"></script>
</body>
</html>