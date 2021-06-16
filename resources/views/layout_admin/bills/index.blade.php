@extends('layout_admin.master')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tất cả hóa đơn
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Hệ thống</a></li>
        <li><a href="#">Hóa đơn</a></li>
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
                <table id="bill_table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td class="text-center">
                                <a href="#" edit_id="" class="edit"><i class="fa fa-eye"></i> Xem</a>
                                <a href="#" style="margin-left: 10px" delete_id="#" class="simpleConfirm"><i class="glyphicon glyphicon-trash"></i> Xóa</a>
                            </td>
                        </tr>
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
    $('#bill_table').DataTable({
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