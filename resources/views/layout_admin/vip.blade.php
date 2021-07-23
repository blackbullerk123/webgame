@extends('layout_admin.master')
@section('content')
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
                        <h4><b> Giảm giá : </b></h4>
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
