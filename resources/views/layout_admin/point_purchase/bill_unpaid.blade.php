@extends('layout_admin.master')
@section('content')
<style>
    p.a{
        width: 210px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

</style>
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
                            <th>Hoá đơn</th>
                            <th>Mã đơn hàng</th>
                            <th>Tên User</th>
                            <th>Phương thức</th>
                            <th>Nội dung</th>
                            <th>Số point</th>
                            <th>Trạng thái</th>
                            <th>Ngày nhận đơn</th>
                            <th>Thao Tác</th>  
                        </tr>
                    </thead>
                    <tbody>
                      @if(isset($points))
                        @foreach($points as $p)
                        <tr>
                            <td><a href="{{ route('waiting.bill.show', $p->id) }}" target="_blank" class="btn btn-primary">Hoá đơn</a></td>
                            <td>{{ $p->order_id }}</td>
                            <td>{{ $p->user->name }}</td>
                            <td>{{ $p->method }}</td>
                            <td><p class="a">{{ $p->description }}</p></td>
                            <td>{{ number_format($p->point_purchase) }}</td>
                            <td>
                              @if($p->status == 0)
                              <label class="label label-warning" style="padding:5px;">Chưa thanh toán</label>
                              @elseif($p->status == 1)
                              <label class="label label-success" style="padding:5px;" >Đã thanh toán</label>
                              @else
                              <label class="label label-danger" style="padding:5px;" >Đơn đã huỷ</label>
                              @endif
                            </td> 
                            <td>{{date('d/m/Y ', strtotime($p->created_at))}}</td>        
                            <td>
                              @if($p->status == 0)
                              <a href="{{ route('point.purchase', [$p->id, '1', $p->point_purchase, $p->user_id, $p->method]) }}" class="btn btn-primary btn-sign fa fa-check"> Thanh toán</a> 
                              @endif
                              @if($p->status != 2)
                              <a href="{{ route('point.purchase', [$p->id, '2', $p->point_purchase, $p->user_id, $p->method]) }}" class="btn btn-danger btn-sign fa fa-close"> Huỷ đơn</a></td> 
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