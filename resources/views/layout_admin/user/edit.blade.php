@extends('layout_admin.master')
@section('content')
    <div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Cập nhật point
            </h1>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Hệ thống</a></li>
                <li><a href="#">Point</a></li>
                <li class="active">Cập nhật</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box-header">
            </div>
            <div class="box box-info">
                <form action="{{ route('users.update', $users->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if (session('information'))
                        <div class="alert alert-success">{{ session('information') }}</div>
                    @endif
                    <div class="box-body">
                        <h4><b> Tên user : </b></h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
                            <input id="name" name="name" type="text" class="form-control" value="{{ $users->name }}"
                                style="width: 700px;" disabled>
                        </div>
                        <br>
                        <h4><b> Email : </b></h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
                            <input id="name" name="name" type="text" class="form-control" value="{{ $users->email }}"
                                style="width: 700px;" disabled>
                        </div>
                        <br>
                        <h4><b> Số point : </b></h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
                            <input id="point" name="point" type="text" class="form-control" value="{{ $users->point }}"
                                style="width: 700px;">
                        </div>
                        @error('point')
                            <p style="color: red" id="error"> {{ $message }} </p>
                        @enderror
                        <br>

                        <div class="text-center">
                            <input style="border:none; background-color:#4a4235;" type="submit" name="submit"
                                value="Cập nhật" class="btn  btn-warning btnthem btn-lg">
                        </div>
                </form>
            </div>
        </section><!-- /.content -->
    </div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        var msg = "{{Session::get('error')}}";
        var exist = "{{Session::has('error')}}";
        if (exist && msg == '1') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "Số point nhập phải cao hơn số point gốc!",
            })
        }
    })
</script>
@stop
