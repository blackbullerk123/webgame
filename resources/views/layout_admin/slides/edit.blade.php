@extends('layout_admin.master')
@section('content')
    <div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sửa banner
            </h1>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Hệ thống</a></li>
                <li><a href="#">Banner</a></li>
                <li class="active">Sửa</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box-header">
            </div>
            <div class="box box-info">
                <form action="{{ route('slide.update',$slides->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if (session('information'))
                        <div class="alert alert-success">{{ session('information') }}</div>
                    @endif
                    @include('layout_admin.slides.template')
                    <div class="text-center">
                        <input style="border:none; background-color:#4a4235;" type="submit" name="submit" value="Thêm"
                            class="btn  btn-warning btnthem btn-lg">
                    </div>
                </form>
            </div>
        </section><!-- /.content -->
    </div>
@endsection
