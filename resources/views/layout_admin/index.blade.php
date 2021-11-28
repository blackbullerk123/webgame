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
                            <p>Đơn nạp</p>
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
                        <h2 class="box-title"><b>Thống kê tổng doanh thu theo tháng đã chọn</b></h2>
                    </center>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <center>
                        <h2>Tổng doanh thu: <b> {{ $totalRevenueFromToDate }} $ </b></h2>
                    </center>
                </div>
                <!-- /.box-body -->
            </div>
            <div class="box">
                <div class="box-header">
                    <center>
                        <h3><b>Thống kê doanh thu theo ngày trong tháng</b></h3>
                    </center>
                </div>
                <form action="{{ route('admin.search') }}" id="" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="col-xs-12">
                    <div class="col-sm-3" style="padding-left: 0px;padding-right: 2px; margin-bottom: 3px">
                        <div class="input-group date" id="daterangepicker"
                            style="margin-left: 0px; padding-left: 0px;padding-right: 2px; margin-bottom: 3px">
                            <input class="form-control" name="dates" id="date" data-date-format="yyyy-mm-dd" name="dates"
                                type="text"
                                value="{{ date('d/m/Y', strtotime($first_day)) . ' - ' . date('d/m/Y', strtotime($last_day)) }}">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                    </div>
                    <div class="col-sm-2" style="margin-top: 4px">
                        <button class="btn btn-primary bnt-sm; fa fa-search" id="btnsearch" type="submit">&ensp;Tìm
                            kiếm</button>
                    </div>
                    </div>
                    <div style="margin-top: 5px;">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box-body">
                                    <table id="revenue" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr role="row">
                                                <th style="text-align: center; ">Ngày</th>
                                                <th style="text-align: center; ">Doanh thu</th>
                                            </tr>
                                        </thead>
                                        </thead>
                                        <tbody id="pannel">
                                            @for ($i = 0; $i < count($arrRevenueMonthDone); $i++)
                                                <tr role="row">
                                                    <td style="text-align: center; font-weight: normal;">
                                                        <h5>{{ date('d/m/Y', strtotime($dates[$i])) }}</h5>
                                                    </td>
                                                    <td style="text-align: center; font-weight: normal;">
                                                        <h5>{{ $arrRevenueMonthDone[$i] }} $ </h5>
                                                    </td>
                                                </tr>
                                            @endfor
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- /.box-body -->
                </form>
            </div><!-- /.box -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection
@section('script')
    <script>
        $(function() {
            $('#revenue').DataTable({
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
        $('input[name="dates"]').daterangepicker({
            locale: {
                format: 'DD/MM/YYYY'
            }
        });
    </script>
@stop
