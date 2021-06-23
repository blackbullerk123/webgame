    @extends('layout_admin.master')
    @section('content')

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Thay đổi thông tin
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Hệ thống</a></li>
                    <li class="active">Thông tin</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="box box-info">
                    <div class="box">
                        <div class="box-header text-center">
                            <img style="width: 100px; height: 100px"
                                src="{{ asset($admin->avatar) }}" class="img-circle" 
                                alt="User Image" />
                            <p>
                                {{ $admin->name }}
                                {{-- <small>({{$user->role->display_name }})</small> --}}
                            </p>
                            <h1 class="box-title" style="font-size: 30px">Thông tin tài khoản</h1>
                        </div>
                        @if (Session::has('flag'))
                            <div class="alert alert-{{ Session::get('flag') }}">{{ Session::get('messege') }}
                            </div>
                        @endif
                        @if (session('information'))
                            <div class="alert alert-success">{{ session('information') }}</div>
                        @endif
                        <form action="{{ route('admin.profile.updateinfo',$admin->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <h4><b> Tên : </b></h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
                                    <input id="name" name="name" type="text" class="form-control"
                                        value="{{ isset($admin) ? $admin->name : old('name') }}" style="width: 700px;">
                                </div>
                                <br>
                                <h4><b> Số điện thoại : </b></h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-lg"></i></span>
                                    <input id="phone" name="phone" type="text" class="form-control"
                                        value="{{ isset($admin) ? $admin->phone : old('phone') }}" style="width: 700px;">
                                </div>
                                <br>
                                <h4><b> Email : </b></h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa-lg"></i></span>
                                    <input id="email" name="email" type="text" class="form-control"
                                        value="{{ isset($admin) ? $admin->email : old('name') }}" style="width: 700px;"
                                        disabled>
                                </div>
                                <br>
                                <div class="input-group">
                                    <h4><b> Ảnh :</b>
                                        <h4>
                                            <input id="fImages" type="file" name="avatar" class="form-control hidden"
                                                onchange="changeImg(this)">
                                            <img id="img" class="img" style="width: 200px; height: 150px;"
                                                src="{{ isset($admin) ? asset($admin->avatar) : asset('images/no_img.jpg') }}">
                                </div>
                                @error('avatar')
                                    <div style="color: red"> {{ $message }} </div>
                                @enderror
                                <!-- ./row -->

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"
                                        style="background-color: #4a4235;border: #4a4235">Cập nhật</button>
                                </div>
                        </form>
                        <div class="box-header text-center">
                            <h1 class="box-title" style="font-size: 30px">Đổi mật khẩu</h1>
                        </div>
                        <form action="{{ route('admin.profile.update', $admin->id) }}" method="post"
                            class="beta-form-checkout">
                            @csrf
                            <div class="box-body">
                                <!-- Date range -->
                                <h4><b> Mật khẩu cũ: </b></h4>
                                <div class="input-group aa ">
                                    <span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
                                    <input required name="password_old" type="password" class="form-control"
                                        placeholder="Mật khẩu cũ. . . . . . . . ." style="width: 700px;">
                                </div>
                                @error('password_old')
                                    <p style="color: red"> {{ $message }} </p>
                                @enderror
                                <h4><b> Mật khẩu mới:</b></h4>
                                <div class="input-group aa ">
                                    <span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
                                    <input required name="new_password" type="password" class="form-control"
                                        placeholder="Mật khẩu mới. . . . . . . . ." style="width: 700px;">
                                </div>
                                @error('new_password')
                                    <p style="color: red"> {{ $message }} </p>
                                @enderror
                                <h4><b> Xác nhận mật khẩu: </b></h4>
                                <div class="input-group aa">
                                    <span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
                                    <input required name="re_password" type="password" class="form-control"
                                        placeholder="Xác nhận mật khẩu. . . . . . . . ." style="width: 700px;">
                                </div>
                                @error('re_password')
                                    <p style="color: red"> {{ $message }} </p>
                                @enderror

                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"
                                        style="background-color: #4a4235;border: #4a4235">Cập nhật</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </section><!-- /.content -->
        </div>

    @endsection
