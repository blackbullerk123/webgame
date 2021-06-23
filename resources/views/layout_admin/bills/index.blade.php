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
            <form id="form_data"> 
              <div class="table-responsive">
              <div class="col-sm-3" style="padding-left: 0px;padding-right: 10%; margin-bottom: -50px; margin-left: 70%;">
                <div class="input-group date"  width="">
                  <input type="text" name="datepicker" id="datetimepicker"class="form-control">
                  <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                  </div>
                </div>
            </div>
                <table id="bill_table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Hoá đơn</th>
                            <th>Mã đơn hàng</th>
                            <th>Tên đơn hàng</th>
                            <th>Số lượng đơn hàng</th>
                            <th>Tổng số point</th>
                            
                            <th>Trạng thái</th>
                            <th>Ngày nhận đơn</th>
                        </tr>
                    </thead>
                    <tbody>
                      @if(isset($bills))
                        @foreach($bills as $b)
                        <tr>
                            <td><a href="#" class="btn btn-primary">Hoá đơn</a></td>
                            <td>{{ $b->order_id }}</td>
                            <td>{{ $b->product->name }}</td>
                            <td>{{ $b->product_total }}</td>
                            <td>{{ number_format($b->point_total) }}</td>
                            <td>
                            @if($b->status == 0)
                            <button class="btn btn-warning form-control">Chưa thanh toán</button>
                            @else
                            <button class="btn btn-success form-control">Đã thanh toán</button>
                            @endif
                            </td> 
                            <td>{{date('d/m/Y ', strtotime($b->created_at))}}</td>                                                   
                        </tr>
                        @endforeach
                      @endif
                    </tbody>
                </table>
              </div>
              </form>  
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