@extends('layout_admin.master')
@section('content')
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tất cả game
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Hệ thống</a></li>
                <li><a href="#">Games</a></li>
                <li class="active">Danh sách</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box-header">
                @if (session('information'))
                    <div class="alert alert-success">{{ session('information') }}</div>
                @endif
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="col-md-4 pull-right">
                                <a href="{{ route('product.create') }}">
                                    <button class="btn btn btn-warning"
                                        style="float: right;;margin-bottom:5px;margin-left:2px;border:none; background-color:#4a4235;">
                                        <i class="fa fa-plus"> Thêm game mới </i></button>
                                </a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="product_table" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">Ảnh</th>
                                        <th style="text-align: center">ID Order</th>
                                        <th style="text-align: center">Loại game</th>
                                        <th style="text-align: center">Tên game</th>
                                        <th style="text-align: center">Hệ điều hành hổ trợ nạp</th>
                                        <th style="text-align: center">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($product))
                                        @foreach ($product as $pro)
                                            <tr>
                                                <td><img width="150px" height="100" src="{{ asset($pro->image) }}"
                                                        class="thumbnail center"></td>
                                                <td>{{ $pro->id }}</td>
                                                <td>{{ $pro->product_type }}</td>
                                                <td>{{ $pro->name }}</td>
                                                <td>
                                                    <ul>
                                                        @for ($i = 0; $i < count(explode(',', $pro->os_supported)); $i++)
                                                            <li>{{ explode(',', $pro->os_supported)[$i] }}</li>
                                                        @endfor
                                                    </ul>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('product.edit', $pro->id) }}" edit_id=""
                                                        class="edit"><i class="glyphicon glyphicon-pencil"></i> Sửa</a>
                                                    <a href="javascript:;" style="margin-left: 10px"
                                                        delete_id="{{ $pro->id }}" class="simpleConfirm"><i
                                                            class="glyphicon glyphicon-trash"></i> Xóa</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            $('#product_table').DataTable({
                "sDom": '<"row view-filter"<"col-sm-12"<"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"pull-left"l><"pull-right"p><"text-center"i>>>',
                'paging': true,
                'searching': true,
                'info': true,
                'autoWidth': false,
                'lengthChange': false,
                'ordering': true,
                'aaSorting': [],
                'columnDefs': []
            })
        })

        $(document).on('click', '.simpleConfirm', function(e) {
            e.preventDefault();
            var id = $(this).attr('delete_id');
            var that = $(this);
            swal.fire({
                title: "Bạn có muốn xóa game này không?",
                text: "Hóa đơn đã thanh toán sẽ bị xóa theo!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Xóa ngay!',
                cancelButtonText: 'Hủy'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        method: 'get',
                        url: "{{ route('product.delete') }}",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            if (data.success == true) {
                                that.parent().parent().remove();
                                Swal.fire(
                                    'Xóa!',
                                    'Xóa thành công.',
                                    'success'
                                )
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Xóa thất bại!',
                                    text: 'Còn đơn hàng chưa thanh toán không thể xóa',
                                })
                            }
                        }
                    })
                }
            });
        });
    </script>
@stop
