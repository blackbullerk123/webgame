@extends('layout_admin.master')
@section('content')
    <div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sửa game
            </h1>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Hệ thống</a></li>
                <li><a href="#">Game</a></li>
                <li class="active">sửa game</li>
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
                    @include('layout_admin.product.template')
                    <div class="text-center">
                        <input style="border:none; background-color:#4a4235;" type="submit" name="submit" value="Cập nhật"
                            class="btn  btn-warning btnthem btn-lg">
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
        $('#img').click(function() {
            $('#fImages').click();
        });

        function changeThumbnail(input, thum) {
            var file = input.files[0];
            var name = input.files[0].name;
            var fileNameExt = name.substr(name.lastIndexOf('.') + 1);
            var validExtensions = ['jpg', 'png', 'jpeg', 'JPG', 'JPEG', 'PNG', 'jfif'];
            if ($.inArray(fileNameExt, validExtensions) < 0) {
                swal.fire(image_file + " " + validExtensions.join(', '));
                return false;
            }
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#' + thum).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
            // if (input.files && input.files[0]) {
            //     var reader = new FileReader();
            //     reader.onload = function(e) {
            //         $('#'+thum).attr('src', e.target.result);
            //     }
            //     reader.readAsDataURL(input.files[0]);
            // }
        }
        //     $('#thum').click(function() {
        //         $('#thumbnail').click();
        // });

        function add() {
            var thum_id = 0;
            thum_id++;
            var new_chq_no = parseInt($('#total_chq').val()) + 1;
            var new_input = '<div class="input-group" id="new_' + new_chq_no + '"><div class="col-sm-2">' +
                '<p>Ảnh: </p>' +
                '<input id="thumbnail" type="file" name="thumbnail" class="form-control hidden" onchange="changeThumbnail(this)">' +
                '<img id="thum' + thum_id +
                '" class="thumbnail" style="width: 50px; height: 40px;" src="{{ asset('images/no_img.jpg') }}">' +
                '</div>' +
                '<div class="col-sm-3">' +
                '<p>Tên gói: </p>' +
                '<input id="package" name="package" type="text" class="form-control" placeholder="Tên gói. . . . . . . . .">' +
                '</div>' +
                '<div class="col-sm-3">' +
                '<p>Giá trị: </p>' +
                '<input id="value" name="value" type="text" class="form-control" placeholder="Giá trị. . . . . . . . .">' +
                '</div>' +
                '<div class="col-sm-3">' +
                '<p>Points: </p>' +
                '<input id="point" name="point" type="text" class="form-control" placeholder="Point. . . . . . . . .">' +
                '</div></div>';
            $('#new_chq').append(new_input);
            $('#total_chq').val(new_chq_no)
        }

        function remove() {
            var last_chq_no = $('#total_chq').val();
            if (last_chq_no > 1) {
                $('#new_' + last_chq_no).remove();
                $('#total_chq').val(last_chq_no - 1);
            }
        }

    </script>
@stop
