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
            @if (session()->has('user'))
                <div class="has-login">
                    <a href="/home/myinfo">我的信息</a>
                    <a href="/home/logout">退出</a>
                </div>
            @else
                <div class="no-login">
                    <a href="/home/login">登录 |</a>
                    <a href="/home/register">注册</a>
                </div>
            @endif
        </div>
    </div>
</div>