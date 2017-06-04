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
                    <h1 class="page-header">捐物管理</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            捐物列表
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>资助人</th>
                                        <th>资助人电话</th>
                                        <th>资助人地址</th>
                                        <th>受助人</th>
                                        <th>受助人电话</th>
                                        <th>受助人地址</th>
                                        <th>发货状态</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($donates as $item)
                                        <tr class="odd gradeX">
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->user->telephone }}</td>
                                            <td>{{ $item->user->address }}</td>
                                            <td>{{ $item->help->name }}</td>
                                            <td>{{ $item->help->telephone }}</td>
                                            <td>{{ $item->help->address }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                    待取货
                                                @elseif ($item->status == 2)
                                                    已发货
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <a href="#" class="btn-remarks" data-id="{{ $item->id }}" data-toggle="modal" data-target="#myModal" data-content="{{ $item->message }}">填写物流信息</a>
                                                    <a href="#" class="confirm-btn" data-status="2" data-id="{{ $item->id }}">确认取件</a>
                                                @else
                                                    -
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

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">填写物流信息</h4>
            </div>
            <div class="modal-body">
                <textarea id="remarks-textarea" class="form-control"></textarea>
                <input type="hidden" id="user-id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary save-remarks">保存</button>
            </div>
            </div>
        </div>
    </div>

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
                $('.btn-remarks').on('click', function () {
                    $('#remarks-textarea').val($(this).attr('data-content'))
                    $('#user-id').val($(this).attr('data-id'));
                })

                $('.confirm-btn').on('click', function() {
                    $.ajax({
                        url: '/admin/donate/confirm',
                        type: 'post',
                        data: $(this).data(),
                        success: function(data) {
                            if (data.status === 1) {
                                window.location.reload()
                            }
                        }
                    })
                })

                $('.save-remarks').on('click', function() {
                    $.ajax({
                        url: '/admin/donate/message',
                        type: 'post',
                        data: {
                            id: $('#user-id').val(),
                            message: $('#remarks-textarea').val()
                        },
                        success: function(data) {
                            alert(data.message)

                            if (data.status === 1) {
                                window.location.reload()
                            }
                        }
                    })
                })
            },
        })
    </script>
</body>
</html>
