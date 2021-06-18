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
                @if (session('error'))
                    <div class="alert alert-danger text-center">{{ session('error') }}</div>
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
        $(document).ready(function(){

            var count = 1;
            
            function data_form(number) {
                var html = '<div class="input-group" id="row'+count+'">';
                    html += "<div class='col-sm-3'>";
                    html += ' <p>Tên gói: </p>';
                    html += "<input name='package[]' type='text' class='form-control' placeholder='Tên gói. . . . . . . . .'>";
                    html += '</div>';
                    html += "<div class='col-sm-3'>";
                    html += '<p>Giá trị: </p>';
                    html += "<input name='value[]' type='text' class='form-control' placeholder='Giá trị. . . . . . . . .'>";
                    html += '</div>';
                    html += '<div class="col-sm-3">';
                    html += '<p>Points: </p>';
                    html += '<input name="point[]" type="text" class="form-control" placeholder="Point. . . . . . . . .">';
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

        //    $('#submit').click(function() {
        //        $.ajax({
        //             url:"product.create",
        //             method:"POST",
        //             data:$('#form_data').serialize(),
        //             success:function(data) {
        //                 alert(data);
        //                 $('#form_data')[0].reset();
        //             }
        //        });
        //    });
                
    //         $("#addButton").click(function () {
                        
    //         if(counter>10){
    //                 alert("Only 10 textboxes allow");
    //                 return false;
    //         }   
                
    //         // var newTextBoxDiv = $(document.createElement('div'))
    //         //     .attr("id", 'TextBoxDiv' + counter);
                        
    //         var newTextBoxDiv = '<div class="input-group" id="new_' + counter + '"><div class="col-sm-2">' +
    //             '<p>Ảnh: </p>' +
    //             '<input id="thumbnail'+counter+'" type="file" name="thumbnail" class="form-control hidden" onchange="changeThumbnail(this)">' +
    //             '<img id="thum' + counter +
    //             '" class="thumbnail" style="width: 50px; height: 40px;" src="{{ asset('images/no_img.jpg') }}">' +
    //             '</div>' +
    //             '<div class="col-sm-3">' +
    //             '<p>Tên gói: </p>' +
    //             '<input id="package'+counter+'" name="package" type="text" class="form-control" placeholder="Tên gói. . . . . . . . .">' +
    //             '</div>' +
    //             '<div class="col-sm-3">' +
    //             '<p>Giá trị: </p>' +
    //             '<input id="value'+counter+'" name="value" type="text" class="form-control" placeholder="Giá trị. . . . . . . . .">' +
    //             '</div>' +
    //             '<div class="col-sm-3">' +
    //             '<p>Points: </p>' +
    //             '<input id="point'+counter+'" name="point" type="text" class="form-control" placeholder="Point. . . . . . . . .">' +
    //             '</div></div>';
                    
    //             $('#new_chq').append(newTextBoxDiv);

                        
    //         counter++;
    //         });

    //         $("#removeButton").click(function () {
    //             if(counter==1){
    //                 alert("No more textbox to remove");
    //                 return false;
    //             }   
                
    //             counter--;
                    
    //             $('#new_' + counter).remove();
                    
    //         });
                
    //         $("#addButton").click(function () {
                
    //             var msg1 = '';
    //             var msg2 = '';
    //             var msg3 = '';
    //             for(i=1; i<counter; i++){
    //                 msg1 +=  ','+$('#package' + i).val();
    //                 msg2 +=  ','+$('#value' + i).val();
    //                 msg3 +=  ','+$('#point' + i).val();
    //             }
    //                 console.log(msg1.split(','), msg2.split(','), msg3.split(','));
    //         });

    //         // $('#addButton').click(function () {
    //         //     console.log(counter - 1)
    //         // })
            
    //     //     function changeThumbnail(input) {
    //     //         var id_thumb_number = counter - 1;
    //     //         if (input.files && input.files[0]) {
    //     //             var reader = new FileReader();
    //     //             reader.onload = function(e) {
    //     //                 $('#thum'+id_thumb_number+'').attr('src', e.target.result);
    //     //             }
    //     //             reader.readAsDataURL(input.files[0]);
    //     //         }
    //     //     }

    //     //     $('#thum'+counter - 1+'').click(function() {
    //     //     $('#thumbnail'+count     - 1+'').click();
    //     // });
    });
    </script>
@stop
