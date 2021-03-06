@extends('layout_admin.master')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tất cả user
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Hệ thống</a></li>
        <li><a href="#">User</a></li>
        <li class="active">Danh sách</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
               
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @if (session('information'))
                <div class="alert alert-success">{{ session('information') }}</div>
              @endif
                <table id="user_table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center">Tên user</th>
                            <th style="text-align: center">Avatar</th>
                            <th style="text-align: center">Email</th>
                            <th style="text-align: center">Phone</th>
                            <th style="text-align: center">Point</th>
                            <th style="text-align: center">VIP</th>
                            <th style="text-align: center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                      @if(isset($users))
                      @foreach($users as $user )
                      <tr>
                        <td>{{ $user->name }}</td>
                        @if($user->avatar_orginal)
                        <td><img width="150px" height="100" src="{{ $user->avatar_orginal }}" class="thumbnail center"></td>
                        @else
                        <td><img width="150px" height="100" src="{{ asset($user->avatar ? $user->avatar : 'images/no_img.jpg') }}" class="thumbnail center"></td>
                        @endif
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td style="text-align: center">{{ $user->point ? $user->point : 0 }}</td>
                        <td class="text-center">
                          @if($user->vip == 1)
                          <a href="{{ route('users.unvip', $user->id) }}" class="btn btn-danger btn-sign ban"> Hủy</a> 
                          @else
                          <a href="{{ route('users.vip', $user->id) }}" class="btn btn-success btn-sign ban"> Kích hoạt</a> 
                          @endif
                        </td>
                        <td class="text-center">
                          @if($user->banned_status == 0)
                          <a href="{{ route('users.banned', $user->id) }}" class="btn btn-danger btn-sign ban"> Khóa</a> 
                          @else
                          <a href="{{ route('users.unbanned', $user->id) }}" class="btn btn-success btn-sign ban"> Mở khóa</a> 
                          @endif
                          <a href="{{ route('users.edit', $user->id) }}" style="margin-left: 10px" class="btn btn-primary btn-sign ban"> Update point</a>       
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
    $('#user_table').DataTable({
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
</script>
@stop