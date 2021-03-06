@extends('layout_admin.master')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tất cả banner
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Hệ thống</a></li>
        <li><a href="#">Banner</a></li>
        <li class="active">Danh sách</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <div class="col-md-4 pull-right">
                    <a href="{{ route('slide.create') }}">
                        <button class="btn btn btn-warning" style="float: right;;margin-bottom:5px;margin-left:2px;border:none; background-color:#4a4235;">
                            <i class="fa fa-plus"> Thêm banner mới </i></button>
                    </a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @if (session('information'))
                <div class="alert alert-success">{{ session('information') }}</div>
              @endif
                <table id="slide_table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center">Tên banner</th>
                            <th style="text-align: center">Ảnh banner</th>
                            <th style="text-align: center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                      @if(isset($slides))
                      @foreach($slides as $slide )
                      <tr>
                        <td>{{ $slide->name }}</td>
                        <td><img width="150px" height="100" src="{{asset($slide->images)}}" class="thumbnail center"></td>
                        <td class="text-center">
                            <a href="{{ route('slide.edit', $slide->id) }}" class="edit"><i class="glyphicon glyphicon-pencil"></i> Sửa</a>
                            <a href="javascript:;" style="margin-left: 10px" delete_id="{{ $slide->id }}" class="simpleConfirm"><i class="glyphicon glyphicon-trash"></i> Xóa</a>
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
    $('#slide_table').DataTable({
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
                title: "Bạn có muốn xóa banner này không?",
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
                        url: "{{ route('slide.delete') }}",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            that.parent().parent().remove();
                            Swal.fire(
                                'Xóa!',
                                'Xóa thành công.',
                                'success'
                            )
                        }
                    })
                }
            });
        });
</script>
@stop