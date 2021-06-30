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
            <div class="box-header">
                @if (session('information'))
                    <div class="alert alert-success">{{ session('information') }}</div>
                @endif
            </div>
               
            </div>
            <!-- /.box-header -->
            
            <div class="box-body" style="margin-top:10px">   
              <div class="table-responsive">                
                <table id="bill_table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center">Hoá đơn</th>
                            <th style="text-align: center">Mã đơn hàng</th>
                            <th style="text-align: center">Tên đơn hàng</th>
                            <th style="text-align: center">Tên người mua</th>
                            <th style="text-align: center">Loại hệ điều hành</th>
                            <th style="text-align: center">Số lượng đơn hàng</th>
                            <th style="text-align: center">Tổng số point</th>
                            <th style="text-align: center">Tài khoản</th>
                            <th style="text-align: center">Trạng thái</th>
                            <th style="text-align: center">Ngày nhận đơn</th>
                            <th style="text-align: center">Thao Tác</th>  
                        </tr>
                    </thead>
                    <tbody>
                      @if(isset($bills))
                        @foreach($bills as $b)
                        <tr>
                            <td><a href="{{ route('bill.show', $b->id) }}" target="_blank" class="btn btn-primary">Hoá đơn</a></td>
                            <td>{{ $b->order_id }}</td>
                            <td>{{ $b->product->name }}</td>
                            <td>{{ $b->user->name }}</td>
                            <td>{{ $b->os_type }}</td>
                            <td>{{ $b->product_total }}</td>
                            <td>{{ number_format($b->point_total) }}</td>
                            <td>{{ $b->account }}</td>
                            <td>
                              @if($b->status == 0)
                              <label class="label label-warning" style="padding:5px;">Chưa thanh toán</label>
                              @elseif($b->status == 1)
                              <label class="label label-success" style="padding:5px;" >Đã thanh toán</label>
                              @else
                              <label class="label label-danger" style="padding:5px;" >Đơn đã huỷ</label>
                              @endif
                            </td> 
                            <td>{{date('d/m/Y ', strtotime($b->created_at))}}</td>        
                            <td>
                              @if($b->status == 0)
                              <a href="{{ route('bill.purchase', [$b->id, '1', $b->point_total, $b->user->id]) }}" class="btn btn-primary btn-sign fa fa-check"> Thanh toán</a> 
                              @endif
                              @if($b->status != 2)
                              <a href="{{ route('bill.purchase', [$b->id, '2', $b->point_total, $b->user->id]) }}" class="btn btn-danger btn-sign fa fa-close"> Huỷ đơn</a></td> 
                              @endif 
                              
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