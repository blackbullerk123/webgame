@extends('layout_admin.master')
@section('content')
<div class="content-wrapper" style="min-height: 898px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm game
            <small>Thêm, xóa, cập nhập game.</small>
        </h1>

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Hệ thống</a></li>
            <li><a href="#">Game</a></li>
            <li class="active">Thêm game</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box-header">
            @if (session('error'))
            <div class="alert alert-danger text-center">{{ session('error') }}</div>
            @endif
        </div>
        <div class="box box-info">
            <form action="#" method="" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <h4><b> Tên game : </b></h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
                        <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}" placeholder="Tên game . . . . . . . . .">
                    </div>
                    @error('name')
                    <div style="color: red"> {{ $message }} </div>
                    @enderror
                    <div class="input-group">
                        <h4><b> Avatar :</b><h4> 
                        <input id="fImages" type="file" name="avatar" class="form-control hidden" onchange="changeImg(this)">
                            <img id="img" class="thumbnail" style="width: 200px; height: 150px;" src="{{ asset('images/no_img.jpg') }}">
                    </div>
                    <h4><b> Gói nạp game : </b><h4> 
                    <div class="input-group">
                    <div class="col-sm-2">
                        <p>Ảnh: </p>
                        <input id="thumbnail" type="file" name="thumbnail" class="form-control hidden" onchange="changeImg(this)">
                            <img id="thum" class="thumbnail" style="width: 50px; height: 40px;" src="{{ asset('images/no_img.jpg') }}">
                    </div>
                    <div class="col-sm-3">
                        <p>Tên gói: </p>
                        <input id="package" name="package" type="text" class="form-control" placeholder="Tên gói. . . . . . . . .">
                    </div>
                    <div class="col-sm-3">
                        <p>Giá trị: </p>
                        <input id="value" name="value" type="text" class="form-control" placeholder="Giá trị. . . . . . . . .">
                    </div>
                    <div class="col-sm-3">
                        <p>Points: </p>
                        <input id="point" name="point" type="text" class="form-control"placeholder="Point. . . . . . . . .">
                    </div>
                    </div>
                    <div id="new_chq"></div>
                    <input type="hidden" value="1" id="total_chq">
                               
                </div>
                <div class="text-center">
                    <input style="border:none; background-color:#4a4235;" type="submit" name="submit" value="Thêm" class="btn  btn-warning btnthem btn-lg">
                </div>
            </form>
            <button onclick="add()">Add</button>
                    <button onclick="remove()">remove</button>
        </div>
    </section><!-- /.content -->
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
    $(document).ready(function() {
        $('#img').click(function() {
            $('#fImages').click();
        });
    });

    function changeThumbnail(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#thum').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function() {
        $('#thum').click(function() {
            $('#thumbnail').click();
        });
    });

    function add(){
      var new_chq_no = parseInt($('#total_chq').val())+1;
      var new_input='<div class="input-group" id="new_'+ new_chq_no + '"><div class="col-sm-2">'
                        +'<p>Ảnh: </p>'+
                        '<input id="thumbnail" type="file" name="thumbnail" class="form-control hidden" onchange="changeImg(this)">'+
                            '<img id="thum" class="thumbnail" style="width: 50px; height: 40px;" src="{{ asset("images/no_img.jpg") }}">'+
                    '</div>'+
                    '<div class="col-sm-3">'+
                        '<p>Tên gói: </p>'+
                        '<input id="package" name="package" type="text" class="form-control" placeholder="Tên gói. . . . . . . . .">'+
                    '</div>'+
                    '<div class="col-sm-3">'+
                        '<p>Giá trị: </p>'+
                        '<input id="value" name="value" type="text" class="form-control" placeholder="Giá trị. . . . . . . . .">'+
                    '</div>'+
                    '<div class="col-sm-3">'+
                        '<p>Points: </p>'+
                        '<input id="point" name="point" type="text" class="form-control" placeholder="Point. . . . . . . . .">'+
                    '</div></div>';
      $('#new_chq').append(new_input);
      $('#total_chq').val(new_chq_no)
    }
    function remove(){
      var last_chq_no = $('#total_chq').val();
      if(last_chq_no > 1){
        $('#new_'+last_chq_no).remove();
        $('#total_chq').val(last_chq_no-1);
      }
    }
</script>