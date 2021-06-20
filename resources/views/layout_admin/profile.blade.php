@extends('layout_admin.master')
@section('content')
    <style>
        .aa {
            margin-left: 350px;
            width: 400px;


        }

    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thay đổi thông tin
                <small>Đổi mật khẩu</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Hệ thống</a></li>
                <li class="active">Đổi mật khẩu</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center">
                        <div class="box">
                            <div class="box-header">
                                <img style="background-color: #ffffff"
                                    src="{{ asset('adminlte2/dist/img/user2-160x160.jpg') }}" class="img-circle"
                                    alt="User Image" />
                                <p>
                                    {{ $admin->name }}
                                    {{-- <small>({{$user->role->display_name }})</small> --}}
                                </p>
                                <h1 class="box-title" style="font-size: 30px">Đổi mật khẩu</h1>
                            </div>

                            <form action="{{ route('admin.profile.update', $admin->id) }}" method="post" class="beta-form-checkout">
                                @csrf
                                @method('put')
                                <div class="box-body">
                                    <!-- Date range -->
                                    <h4> Mật khẩu cũ </h4>
                                    <div class="input-group aa ">
                                        <span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
                                        <input required name="password_old" type="password" class="form-control"
                                            placeholder="Mật khẩu cũ. . . . . . . . .">
                                    </div>
                                    @error('password_old')
                                        <p style="color: red"> {{ $message }} </p>
                                    @enderror                                       
                                    <h4> Mật khẩu mới:</h4>
                                    <div class="input-group aa ">
                                        <span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
                                        <input required name="new_password" type="password" class="form-control"
                                            placeholder="Mật khẩu mới. . . . . . . . .">
                                    </div>
                                    @error('new_password')
                                        <p style="color: red"> {{ $message }} </p>
                                    @enderror
                                    <h4> Xác nhận mật khẩu: </h4>
                                    <div class="input-group aa">
                                        <span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
                                        <input required name="re_password" type="password" class="form-control"
                                            placeholder="Xác nhận mật khẩu. . . . . . . . .">
                                    </div>
                                    @error('re_password')
                                        <p style="color: red"> {{ $message }} </p>
                                    @enderror
                                    
                                    <br>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"
                                            style="background-color: #4a4235;border: #4a4235">Cập nhật</button>
                                    </div>
                                    @if (Session::has('flag'))
                                    <div class="alert alert-{{ Session::get('flag') }}"
                                        style="width:350px; margin-left:380px; ">{{ Session::get('messege') }} </div>
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

    </script>
@stop
