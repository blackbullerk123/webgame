<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SharkerTopup | Best top-up games website</title>

    <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK">

    <link rel="icon" type="image/png" href="{{ asset('assets/images/logogun.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">
    {{-- Data table --}}
    <link rel="stylesheet" href="{{ asset('adminlte2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('table/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('table/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('table/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('table/css/style.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- FontAwesome -->
    <script defer src="{{ asset('assets/vendor/fontawesome-free/js/all.js') }}"></script>
    <script defer src="{{ asset('assets/vendor/fontawesome-free/js/v4-shims.js') }}"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/ionicons/css/ionicons.min.css') }}">

    {{-- <!-- Flickity -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/flflickity/dist/flickity.min.css') }}"> --}}

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/photoswipe/dist/photoswipe.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/photoswipe/dist/default-skin/default-skin.css') }}">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css') }}">
    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/summernote/dist/summernote-bs4.css') }}">
    <!-- GoodGames -->
    <link rel="stylesheet" href="{{ asset('assets/css/goodgames.css') }}">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!-- jQuery -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>



</head>


<!--
    Additional Classes:
        .nk-page-boxed
-->

<body>
    <!--
    Additional Classes:
        .nk-header-opaque
-->
    <div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Ưu đãi VIP
            </h1>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Hệ thống</a></li>
                <li><a href="#">VIP</a></li>
                <li class="active">Cập nhật</li>
            </ol>
        </section>
        <?php 
        use App\Models\Vip;
        $vip = Vip::find(1);
        ?> 
        <!-- Main content -->
        <section class="content">
            <div class="box-header">
            </div>
            <div class="box box-info">
                <form action="{{ route('updatevip', $vip->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if (session('information'))
                        <div class="alert alert-success">{{ session('information') }}</div>
                    @endif
                    <div class="box-body">
                        <h4><b> Ưu đãi point : </b></h4>
                        <div class="input-group" style="width: 150px;">
                            <span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
                            <input id="discount" name="discount" type="number" min="0" class="form-control" value="{{ $vip->discount }}"
                                style="width: 100px;">
                            <span class="input-group-addon">%</span>
                        </div>
                        <br>
                        <div>
                            <input style="border:none; background-color:#4a4235;" type="submit" name="submit"
                                value="Cập nhật" class="btn  btn-warning btnthem btn-lg">
                        </div>
                </form>
            </div>
        </section><!-- /.content -->
    </div>
@endsection
