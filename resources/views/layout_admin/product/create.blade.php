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
                    <h4> Tên game : </h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
                        <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}" placeholder="Tên game . . . . . . . . .">
                    </div>
                    @error('name')
                    <div style="color: red"> {{ $message }} </div>
                    @enderror
                    <h4> Gói nạp game : </h4>
                    <div class="col-sm-1">
                        <label>Ảnh: </label>
                        <input id="fImages" type="file" name="avatar" class="form-control hidden" onchange="changeImg(this)">
                            <img id="img" class="img" style="width: 50px; height: 40px;" src="{{ asset('images/no_img.jpg') }}">
                    </div>
                    <div class="col-sm-2">
                        <label>Tên gói: </label>
                        <input id="package" name="package" type="text" class="form-control" value="{{ old('package') }}" placeholder="Tên gói. . . . . . . . .">
                    </div>
                    <div class="col-sm-2">
                        <label>Giá trị: </label>
                        <input id="value" name="value" type="text" class="form-control" value="{{ old('value') }}" placeholder="Giá trị. . . . . . . . .">
                    </div>
                    <div class="col-sm-2">
                        <label>Points: </label>
                        <input id="point" name="point" type="text" class="form-control" value="{{ old('point') }}" placeholder="Point. . . . . . . . .">
                    </div>
                    
                    <div id="new_chq"></div>
                    <input type="hidden" value="1" id="total_chq">
                    <br>            
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
    function add(){
      var new_chq_no = parseInt($('#total_chq').val())+1;
      var new_input="<input id='package"+new_chq_no+"'name='package' type='text' class='form-control' value='{{ old('package') }}' placeholder='Tên gói. . . . . . . . .''> <input type='text' id='new_"+new_chq_no+"'>";
      $('#new_chq').append(new_input);
      $('#total_chq').val(new_chq_no)
    }
    function remove(){
      var last_chq_no = $('#total_chq').val();
      if(last_chq_no>1){
        $('#new_'+last_chq_no).remove();
        $('#total_chq').val(last_chq_no-1);
      }
    }
</script>