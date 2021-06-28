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
                <h2 class="box-title"><b>Thống kê doanh thu theo tháng</b></h2>
                </center>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <h4>Tổng doanh thu: </h4>
              </div>
              <!-- /.box-body -->
          </div>
          <div class="box">
            <div class="box-header">
                <center>
                    <h3 class="box-title"><b>Thống kê doanh thu theo ngày trong tháng</b></h3>
                </center>
            </div>

            <canvas id="buyers" width="1000px" height="300" data-list-day="{{$listDay}}" data-money-done="{{$arrRevenueMonthDone}}" data-money-pending="{{$arrRevenueMonthPending}}"></canvas>

        </div><!-- /.box -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection
@section('script')
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script>
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
   $('#datepicker').daterangepicker();

   let listDay = $("#buyers").attr('data-list-day');
    listDay = JSON.parse(listDay);
    let dataMoneyDone = $("#buyers").attr('data-money-done');
    dataMoneyDone = JSON.parse(dataMoneyDone);
    let dataMoneyPending = $("#buyers").attr('data-money-pending');
    dataMoneyPending = JSON.parse(dataMoneyPending);
    // line chart data
    var buyerData = {
        labels: listDay,
        datasets: [{
            fillColor: "rgb(255, 206, 153)",
            strokeColor: "#cc6600",
            pointColor: "#fff",
            pointStrokeColor: "#9DB86D",
            data: dataMoneyDone
        }]
    }
    // get line chart canvas
    var buyers = document.getElementById('buyers').getContext('2d');
    // draw line chart
    new Chart(buyers).Line(buyerData);
</script>
@stop