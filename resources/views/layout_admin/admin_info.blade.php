@extends('layout_admin.master')
@section('content')
    <style>
        .aa {
            margin-right: auto;
            margin-left: auto;
            width: 400px;


        }

    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thay đổi thông tin
                <small>Chuyển khoản</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Hệ thống</a></li>
                <li class="active">TT chuyển khoản</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center">
                        <div class="box">
                            <div class="box-header text-center">
                                <img style="width: 100px; height: 100px" src="{{ asset(Auth::user()->avatar) }}"
                                    class="img-circle" alt="User Image" />
                                <p>

                                </p>
                                <h1 class="box-title" style="font-size: 30px">Thông tin chuyển khoản</h1>
                            </div>

                            <form action="{{ route('admin.profile.transaction.update', $transaction->user_id) }}"
                                method="post" class="beta-form-checkout">
                                @csrf
                                <div class="box-body">
                                    <!-- Date range -->
                                    <h4> Momo </h4>
                                    <div class="input-group aa ">
                                        <span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
                                        <input required name="momo" type="number" class="form-control"
                                            placeholder="Momo. . . . . . . . ."
                                            value="{{ isset(explode(',', $transaction->transaction_info)[0]) ? explode(',', $transaction->transaction_info)[0] : '' }}">
                                    </div>
                                    <h4> STK ngân hàng:</h4>
                                    <div class="input-group aa ">
                                        <span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
                                        <input required name="bank" type="number" class="form-control"
                                            placeholder="STK. . . . . . . . ."
                                            value="{{ isset(explode(',', $transaction->transaction_info)[1]) ? explode(',', $transaction->transaction_info)[1] : '' }}">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"
                                            style="background-color: #4a4235;border: #4a4235">Cập nhật</button>
                                    </div>
                                    @if (Session::has('flag'))
                                        <div class="alert alert-{{ Session::get('flag') }}"
                                            style="width:350px; margin-left:auto; margin-right:auto; ">
                                            {{ Session::get('messege') }} </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
@section('script')
@stop
