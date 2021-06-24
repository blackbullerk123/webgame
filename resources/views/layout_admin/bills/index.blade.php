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
            
            <div class="box-body" style="margin-top:10px">   
              <div class="table-responsive">
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="status" name="status">
                </div>
                <div class="input-group date col-sm-3">  
                  <input type="text" class="form-control" id="datetimepicker" name="date">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>
                <div class="col-sm-2 pull-right" style="margin-right: 80px">
                  <button class="btn btn-primary bnt-sm; fa fa-search" id="btnsearch" style="float:left;margin-top:-30px;" type="button">&ensp;Tìm kiếm</button>
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
                            <th>Thao Tác</th>  
                        </tr>
                    </thead>
                    <tbody>
                      @if(isset($bills))
                        @foreach($bills as $b)
                        <tr>
                            <td><a href="{{ route('bill.show', $b->id) }}" target="_blank" class="btn btn-primary">Hoá đơn</a></td>
                            <td>{{ $b->order_id }}</td>
                            <td>{{ $b->product->name }}</td>
                            <td>{{ $b->product_total }}</td>
                            <td>{{ number_format($b->point_total) }}</td>
                            <td>
                              @if($b->status == 0)
                              <label class="label label-warning" style="padding:5px;">Chưa thanh toán</label>
                              @else
                              <button class="label label-success" style="padding:5px;" >Đã thanh toán</button>
                              @endif
                            </td> 
                            <td>{{date('d/m/Y ', strtotime($b->created_at))}}</td>        
                            <td>
                              @if($b->status == 0)
                              <a href="{{ route('bill.purchase', [$b->id, '1']) }}" class="btn btn-primary btn-sign fa fa-check"> Thanh toán</a> 
                              @endif
                              <a href="{{ route('bill.purchase', [$b->id, '2']) }}" class="btn btn-danger btn-sign fa fa-close"> Huỷ đơn</a></td>                                                    
                        </tr>
                        @endforeach
                      @endif
                    </tbody>
                </table>
              </div>
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
      'searching': false,
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