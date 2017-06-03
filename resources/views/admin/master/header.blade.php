<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">微助管理系统</a>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {{ session('admin')->name }} <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                {{-- <li>
                    <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li> --}}
                {{-- <li class="divider"></li> --}}
                <li>
                    <a href="/admin/logout"><i class="fa fa-sign-out fa-fw"></i> 退出登录</a>
                </li>
            </ul>
        </li>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="/"><i class="fa fa-dashboard fa-fw"></i> 前往首页</a>
                </li>
                <li>
                    <a href="/admin/user"><i class="fa fa-table fa-fw"></i> 用户管理</a>
                </li>
                <li>
                    <a href="/admin/help"><i class="fa fa-table fa-fw"></i> 申请帮助管理</a>
                </li>
            </ul>
        </div>
    </div>
</nav>