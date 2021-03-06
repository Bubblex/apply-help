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
                <div class="login-content account-content">
                    <p>登录</p>
                    <input class="user" placeholder="手机号" name="username">
                    <input type="password" class="pwd" placeholder="密码" name="userpwd">
                    <a class="account-btn" id="login" href="javascript:">登录</a>
                    <a class="account-samll-btn" href="/home/register">注册</a>
                </div>
            </div>
        </div>
    </div>
    <script src="/resource/vendor/jquery/jquery-3.1.1.min.js"></script>
    <script src="/resource/script/app.babel.js"></script>
    <script src="/resource/script/login.babel.js"></script>
</body>
</html>