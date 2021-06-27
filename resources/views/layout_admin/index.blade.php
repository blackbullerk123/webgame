@extends('layout_admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Bảng điều khiển
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Hệ thống</a></li>
                <li class="active"> Bảng điều khiển</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{ $games }}</h3>
                            <p>Tổng games</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-gamepad"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{ $bill_games }}</sup></h3>
                            <p>Đơn games</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-inbox"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{ $user }}</h3>
                            <p>Tổng số user</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{ $bill_point }}</h3>
                            <p>Đơn nạp - rút</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-inbox"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
            </div><!-- /.row -->
            <div class="box">
              <div class="box-header">
                <center>
                <h2 class="box-title"><b>Thống kê doanh thu mỗi ngày</b></h2>
                </center>
              </div>
              <!-- /.box-header -->
              <div class="box-body">                               
                <div class="col-sm-3" style="padding-left: 0px;padding-right: 2px; margin-bottom: 3px">
                  <div class="input-group date" style=" margin-left: 0px">
                    <input type="text" class="form-control" id="datepicker" name="date">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>  
                  </div>  
                </div>
                <div class="col-sm-2" style="margin-top: 32px">
                  <button class="btn btn-primary bnt-sm; fa fa-search" id="btnsearch" style="float:left;margin-top:-30px;" type="submit">&ensp;Tìm kiếm</button>
                </div>
                  <table id="admin_table" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th style="text-align: center">Ngày</th>
                              <th style="text-align: center">Doanh thu</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>ád</td>
                              <td>ád</td>
                          </tr>
                          <tr>
                            <td>ád</td>
                            <td>ád</td>
                        </tr>
                      </tbody>
                  </table>
              </div>
              <!-- /.box-body -->
          </div>
            <div class="box">
              <div class="box-header">
                <center>
                <h2 class="box-title"><b>Thống kê doanh thu theo tháng</b></h2>
                </center>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <h4>Tổng doanh thu: </h4>
              </div>
              <!-- /.box-body -->
          </div>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection
@section('script')
<script>
   $(function() {
            $('#admin_table').DataTable({
                "sDom": '<"row view-filter"<"col-sm-12"<"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"pull-left"l><"pull-right"p><"text-center"i>>>',
                'paging': true,
                'searching': false,
                'info': true,
                'autoWidth': false,
                'lengthChange': false,
                'ordering': true,
                'aaSorting': [],
                'columnDefs': []
            })
        })
   $('#datepicker').daterangepicker()
</script>
@stop