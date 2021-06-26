@extends('layout_index.master')
@section('content')
    <div class="nk-main">
        <div class="container">
            <div class="nk-gap-2"></div>
            <div style="text-align: center">
                <h1 class="text-main-1"> Liên hệ </h1>
            </div>
            <div class="nk-gap-2"></div>
        <div class="col-lg-12">
            <div class="col-lg-4 text-center" style="float: left">
                <span class="avatar avatar-md mb-3">
                    <a href="https://www.facebook.com/kyru.vu/" target="_blank"><img src="{{ asset('images/boy.jpg') }}" style="height: 200px; width: 200px"
                        class="image rounded-circle"></a>
                </span><br>
                <div style="margin-top: 20px">
                    <a href="https://www.facebook.com/kyru.vu/" target="_blank" class="mb-0" style="text-align: center">KyRu Vũ</a>
                </div><br>
            </div>
            <div class="col-lg-4 text-center" style="float: left">
                <span class="avatar avatar-md mb-3">
                    <a href="#" target="_blank"><img src="https://gamemobile.io/assets/uploads/1618905948.png" style="height: 200px; width: 200px"
                        class="image rounded-circle"></a>
                </span><br>
                <div style="margin-top: 20px">
                    <a  href="#" target="_blank" class="mb-0" style="text-align: center">Name</a>
                </div><br>
            </div>
            <div class="col-lg-4 text-center" style="float: left">
                <span class="avatar avatar-md mb-3">
                    <a href="#" target="_blank"><img src="https://gamemobile.io/assets/uploads/1618905948.png" style="height: 200px; width: 200px"
                        class="image rounded-circle"></a>
                </span><br>
                <div style="margin-top: 20px">
                    <a  href="#" target="_blank" class="mb-0" style="text-align: center">Name</a>
                </div><br>
            </div>
        </div>
        <br>
            <div class="row">
                <div class="col-12 " style="text-align: center">
                    <h3 class="text-main-4">Phản hồi khách hàng xin vui lòng gửi về email: <b>admin@gmail.com</b>
                    </h3> <br>
                </div>
            </div>
        </div>
    @endsection
