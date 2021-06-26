<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Show Bill</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
  <link rel="stylesheet" href="{{ asset('adminlte2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte2/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('adminlte2/bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel=”stylesheet” href=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte2/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('adminlte2/dist/css/skins/_all-skins.min.css') }}">
  {{-- Data table --}}
  <link rel="stylesheet" href="{{ asset('adminlte2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('adminlte2/bower_components/morris.js/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('adminlte2/bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('adminlte2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('adminlte2/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('adminlte2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('adminlte2/plugins/summernote/summernote-bs4.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('adminlte2/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte2/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
  
  .invoice{
    max-width: 1200px;
    margin: auto;
    padding: 30px;
    border: 1px solid #eee;
    box-shadow: 0 0 10px rgb(0 0 0 / 15%);
    font-size: 16px;
    line-height: 24px;
    font-family: helvetica neue,helvetica,Helvetica,Arial,sans-serif;
    color: #555;
  }
  
  </style>
</head>
  <body class="skin-blue">    
      <!-- Left side column. contains the logo and sidebar -->
      <!-- Right side column. Contains the navbar and content of the page -->
    <!-- Content Header (Page header) -->
    <div>
    <section class="content-header">
     
    </section>
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <h1>
        Bill
        <small>#{{ $id }}</small>
      </h1>
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Webgame
            <small class="pull-right">Date: {{date('d/m/Y ', strtotime($bill->created_at))}}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div class="invoice">
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
              <th>Game</th>
              <th>OS type</th>
              <th>Order ID #</th> 
              <th>Description</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>{{ $bill->product_total }}</td>
              <td>{{ $bill->product->name }}</td>
              <td>{{ $bill->os_type }}</td>
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


    <!-- Jquery validation -->
    <script src="{{ asset('js/jquery-validation/lib/jquery.js')}}"></script>
	  <script src="{{ asset('js/jquery-validation/dist/jquery.validate.js')}}"></script>
    
    
    <script src="{{ asset('adminlte2/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('adminlte2/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('adminlte2/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    
    
    <!-- Sparkline -->
    <script src="{{ asset('adminlte2/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ asset('adminlte2/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('adminlte2/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('adminlte2/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('adminlte2/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('adminlte2/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset('adminlte2/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('adminlte2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('adminlte2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('adminlte2/bower_components/fastclick/lib/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte2/dist/js/adminlte.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('adminlte2/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('adminlte2/plugins/select2/js/select2.full.min.js') }}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Morris.js charts -->
    <script src="{{ asset('adminlte2/bower_components/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('adminlte2/bower_components/morris.js/morris.min.js') }}"></script>
    
    <script src="{{ asset('adminlte2/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('adminlte2/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('adminlte2/dist/js/demo.js') }}"></script>
    
    <script>
    
     
  $(document).ready(function() {
    $('#example').DataTable();
    $('#datetimepicker').datepicker({
      autoclose: true,
      endDate: new Date(),
      format: "dd/mm/yyyy",
    });

    $('#datetimepicker').datepicker('setDate', 'today');
  });
  $(function() {
      // Summernote
      $('#summernote').summernote()
      // Select2
      $('.select2').select2()

      $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
</script>
<script>
  function changeImg(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
              $('#img').attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
      }
  }
  $('#img').click(function() {
      $('#fImages').click();
  });

  $("div.alert").delay(2000).slideUp();
</script>
@yield('script')
</body>
</html>