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
                            申请帮助列表
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>姓名</th>
                                        <th>性别</th>
                                        <th>身份证号</th>
                                        <th>联系方式</th>
                                        <th>所需物品</th>
                                        <th>所需物品数量</th>
                                        <th>状态</th>
                                        <th>申请日期</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($helps as $item)
                                        <tr class="odd gradeX">
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                @if ($item->gender == 1)
                                                    男
                                                @elseif ($item->gender == 2)
                                                    女
                                                @else
                                                    其他
                                                @endif
                                            </td>
                                            <td>{{ $item->id_number }}</td>
                                            <td>{{ $item->telephone }}</td>
                                            <td>{{ $item->needed }}</td>
                                            <td>{{ $item->needed_num }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                    已发布
                                                @elseif ($item->status == 2)
                                                    待审核
                                                @elseif ($item->status == 3)
                                                    被驳回
                                                @elseif ($item->status == 4)
                                                    已取消申请
                                                @endif
                                            </td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                <a href="/admin/help/detail?id={{ $item->id }}">查看详情</a>
                                                @if ($item->status == 2)
                                                    <a href="javascript:" class="review-btn" data-status="1" data-id="{{ $item->id }}">通过</a>
                                                    <a href="javascript:" class="review-btn" data-status="3" data-id="{{ $item->id }}">驳回</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
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
        $('#datatable').DataTable({
            stateSave: true,
            language: {
                search: '搜索：',
                searchPlaceholder: '请输入要搜索的内容',
                paginate: {
                    first: '第一页',
                    last: '最后一页',
                    next: '下一页',
                    previous: '上一页'
                },
                zeroRecords: '没有数据',
                lengthMenu: '展示 _MENU_ 条数据',
                info: '当前展示第 _START_ 到第 _END_ 条，共计 _TOTAL_ 条'
            },
            drawCallback: function() {
                $('.btn-status').on('click', function() {
                    $.ajax({
                        url: '/admin/user/status',
                        type: 'post',
                        data: $(this).data(),
                        success: function(data) {
                            alert(data.message)

                            if (data.status === 1) {
                                window.location.reload()
                            }
                        }
                    })
                })

                $('.review-btn').on('click', function() {
                    $.ajax({
                        url: '/admin/help/status',
                        type: 'post',
                        data: {
                            id: $(this).attr('data-id'),
                            status: $(this).attr('data-status')
                        },
                        success: function(data) {
                            if (data.status === 1) {
                                window.location.reload();
                            }
                        }
                    })
                })
            },
        })
    </script>
</body>
</html>
