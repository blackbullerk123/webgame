@extends('layout_admin.master')
@section('content')
    <div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thêm game
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
                @if (session('information'))
                    <div class="alert alert-success">{{ session('information') }}</div>
                @endif
            </div>
            <div class="box box-info">
                <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data" id="form_data">
                    @csrf
                    @include('layout_admin.product.template')
                    <div class="text-center">
                        <input style="border:none; background-color:#4a4235;" type="submit" name="submit" id="submit" value="Thêm"
                            class="btn  btn-warning btnthem btn-lg">
                    </div>
                </form>
            </div>
        </section><!-- /.content -->
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){

            var count = 1;
            
            function data_form(number) {
                var html = '<div class="input-group" id="row'+count+'">';
                    html += "<div class='col-sm-3'>";
                    html += ' <p>Tên gói: </p>';
                    html += "<input name='package[]' type='text' class='form-control' placeholder='Tên gói. . . . . . . . .' required>";
                    html += '</div>';
                    html += "<div class='col-sm-3'>";
                    html += '<p>Giá trị: </p>';
                    html += "<input name='value[]' type='text' class='form-control' placeholder='Giá trị. . . . . . . . .' required>";
                    html += '</div>';
                    html += '<div class="col-sm-3">';
                    html += '<p>Points: </p>';
                    html += '<input name="point[]" type="number" class="form-control" placeholder="Point. . . . . . . . ." required>';
                    html += '</div>';
                    html += '<div class="col-sm-3">';
                    html += '<p>Thao tác:</p>';
                    html += '<button type="button" class="btn btn-danger btn_remove" name="remove_btn" id="'+count+'"><i class="glyphicon glyphicon-trash"></i></button>';
                    html += '</div>';
                    html += '</div>';

                    $('#new_chq').append(html);

            }

            $('#add_btn').click(function() {
                count++;
                data_form(count);
            }); 

           $(document).on('click', '.btn_remove', function() {
               var button_id = $(this).attr('id');
               $('#row'+button_id+'').remove();
           });
    });
    </script>
@stop
