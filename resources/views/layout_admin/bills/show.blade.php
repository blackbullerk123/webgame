@extends('layout_admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bill
        <small>#{{ $id }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Hệ thống</a></li>
        <li><a href="#">Hóa đơn</a></li>
        <li class="active">#007612</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Webgame
            <small class="pull-right">Date: {{date('d/m/Y ', strtotime($bill->created_at))}}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>{{ $admin->name }}</strong><br>
            Phone: {{ $admin->phone }}<br>
            Email: {{ $admin->email }}
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong>{{ $user->name }}</strong><br>
            Phone: {{ $user->phone }}<br>
            Email: {{ isset($user->email) ? $user->email : ''}}
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #{{ $id }}</b><br>
          <br>
          <b>Order ID:</b> {{ $bill->order_id }}<br>
          <b>Payment Due:</b> {{date('d/m/Y ', strtotime($bill->created_at))}}<br>
          <b>Account:</b> {{$user->id}}
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Qty</th>
              <th>Product</th>
              <th>Order ID #</th> 
              <th>Description</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>{{ $bill->product_total }}</td>
              <td>{{ $bill->product->name }}</td>
              <td>{{ $bill->order_id }}</td>
              <td>{{ $bill->description }}</td>
              <td>{{ number_format($bill->point_total) }} Point</td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- /.col -->
        <div class="col-xs-6 pull-right">
          <p class="lead">Amount Due {{date('d/m/Y ', strtotime($bill->created_at))}}</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>{{ number_format($bill->point_total) }}</td>
              </tr>
              <tr>
                <th>Tax</th>
                <td>0</td>
              </tr>
              <tr>
                <th>Shipping:</th>
                <td>0</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>{{ number_format($bill->point_total) }}</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="#" class="btn btn-default"onclick="myFunction()"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('script')
<script type="text/javascript">
    function myFunction() {
        window.print();
    }
</script>
@stop