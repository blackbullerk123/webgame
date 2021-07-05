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
                @if (session('information'))
                    <div class="alert alert-success">{{ session('information') }}</div>
                @endif
            </div>
            <div class="box box-info">
                <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data"
                    id="form_data">
                    @csrf
                    @include('layout_admin.product.template')
                    <div class="text-center">
                        <input style="border:none; background-color:#4a4235;" type="submit" name="submit" value="Cập nhật"
                            class="btn  btn-warning btnthem btn-lg" id="update">
                    </div>
                </form>
            </div>
        </section><!-- /.content -->
    </div>
@endsection
@section('script')
    <script>
        $('#update2').click(function() {

        })

        function changeImgPack(input, id_number) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.img'+id_number+'').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            
        $(document).ready(function() {

            <?php if (isset($package_by_id->package_name)) { ?>
            var arr_number = '{{ count(explode(',', $package_by_id->package_name)) }}';
            var count = '{{ count(explode(',', $package_by_id->package_name)) }}';
            <?php } else { ?>
            var arr_number = 0;
            var count = 1;
            <?php } ?>

            function data_form(number) {
                var html = '<div class="input-group" id="row'+count+'">';
                    html += "<div class='col-sm-2'>";
                    html += ' <p>Tên gói: </p>';
                    html += "<input name='package[]' type='text' class='form-control' maxlength='150' placeholder='Tên gói. . . . . . . . .' required>";
                    html += '</div>';
                    html += "<div class='col-sm-2'>";
                    html += '<p>Giá trị: </p>';
                    html += "<input name='value[]' type='text' class='form-control' placeholder='Giá trị. . . . . . . . .' required>";
                    html += '</div>';
                    html += '<div class="col-sm-2">';
                    html += '<p>Points: </p>';
                    html += '<input name="point[]" type="number" class="form-control" placeholder="Point. . . . . . . . ." required>';
                    html += '</div>';
                    html += '<div class="col-sm-2">';
                    html += '<p>Ảnh packgame: </p>';
                    html += '<input id="img'+count+'" type="file" name="packgame[]" class="form-control hidden packgame" onchange="changeImgPack(this, '+count+')">';
                    html += '<img id="'+count+'" class="img'+count+' imgpackgame" style="width: 50px; height: 34px;" src="{{ asset("images/no_img.jpg") }}">';
                    html += '</div>';
                    html += '<div class="col-sm-2">';
                    html += '<p>Thao tác:</p>';
                    html += '<button type="button" class="btn btn-danger btn_remove" name="remove_btn" id="'+count+'"><i class="glyphicon glyphicon-trash"></i></button>';
                    html += '</div>';
                    html += '</div>';

                $('#new_chq').append(html);

            }

            $('#add_btn').click(function() {
                count++;
                data_form(count);
                console.log($("input[name='package[]']").val());
            });

            $(document).on('click', '.imgpackgame', function() {
                var input_id = $(this).attr('id');
                $('#img'+input_id+'').click();
            });

            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr('id');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                Swal.fire({
                    title: 'Bạn có chắc chắn muốn xoá?',
                    text: "Bạn không thể hoàn tác sau khi xoá!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Xoá!',
                    cancelButtonText: 'Huỷ'
                }).then((result) => {
                    if (result.isConfirmed) {
                        if (button_id == 1 && arr_number != 0) {
                            $("#package").val('');
                            $("#value").val('');
                            $("#point").val('');
                        } else {
                            $('#row' + button_id + '').remove();
                        }
                        $.ajax({
                            url: "{{ route('product.package.update', $product->id) }}",
                            method: 'POST',
                            data: $('#form_data').serialize(),
                            dataType: 'json',
                            success: function(data) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                                window.location.reload();
                            },
                            error: function() {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Something went wrong!',
                                    footer: '<a href="">Why do I have this issue?</a>'
                                })
                            }
                        });
                        // Swal.fire(
                        // 'Deleted!',
                        // 'Your file has been deleted.',
                        // 'success'
                        // )
                        // $('#row'+button_id+'').remove();
                    }
                })

                $('#form_data').validate();

            });
        });
    </script>
@stop
