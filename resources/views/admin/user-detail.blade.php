<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>微助后台管理系统</title>

    <!-- Bootstrap Core CSS -->
    <link href="/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="/admin/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/admin/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        @include('admin.master.header')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">申请帮助管理</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            用户详情
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">姓名</label>
                                    <p class="col-sm-9 form-control-static">{{ $user->name }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">联系方式</label>
                                    <p class="col-sm-9 form-control-static">{{ $user->telephone }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">性别</label>
                                    <p class="col-sm-9 form-control-static">
                                        @if ($user->gender == 1)
                                            男
                                        @elseif ($user->gender == 2)
                                            女
                                        @else
                                            其他
                                        @endif
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">角色</label>
                                    <p class="col-sm-9 form-control-static">{{ $user->role->name }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">所在学校</label>
                                    <p class="col-sm-9 form-control-static">{{ $user->school or '-' }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">所在宿舍楼</label>
                                    <p class="col-sm-9 form-control-static">{{ $user->norm or '-' }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">详细地址</label>
                                    <p class="col-sm-9 form-control-static">{{ $user->address or '-' }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">备注</label>
                                    <p class="col-sm-9 form-control-static">{{ $user->remarks or '-' }}</p>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">注册时间</label>
                                    <p class="col-sm-9 form-control-static">{{ $user->created_at }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">状态</label>
                                    <p class="col-sm-9 form-control-static">
                                        @if ($user->status == 1)
                                            正常
                                        @elseif ($user->status == 2)
                                            已禁用
                                        @endif
                                    </p>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <a class="btn btn-primary" href="/admin/user">返回列表</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="/admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/admin/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    </script>
</body>
</html>
