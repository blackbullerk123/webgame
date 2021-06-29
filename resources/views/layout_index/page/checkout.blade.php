@extends('layout_index.master')
@section('content')
<?php
    use Illuminate\Support\Facades\Auth;
    if(Auth::check()){
        $user = Auth::user()->id;
        $point = Auth::user()->point;
        $phone = Auth::user()->phone;
    }else
    {
        $user = '';   
        $point = '';    
        $phone = ''; 
    }
        
?>;
<div class="container">
  <ul class="nk-breadcrumbs">
      <li><span>Cart</span></li>    
  </ul>
</div>
<div class="nk-gap-2"></div>
<div class="container">
  <div class="nk-store nk-store-cart">
      <div class="table-responsive">
          <!-- START: Products in Cart -->
        @if($product_info && $package_selected)
        <form action="{{route('checkout.bill_detail', [$product_info->product_id, $package])}}" method="post" id="add_bill" class="nk-form text-white">
        @csrf
          <table class="table nk-store-cart-products">
              <tbody>   
                <input type="text" value="" id="uid" name="username" style="display: none">      
                <input type="text" value="" id="pass" name="password_game" style="display: none">
                <input type="text" value="" id="sv" name="sever" style="display: none">
                      <tr>
                          <td class="nk-product-cart-title">
                              <a href="#" class="nk-image-box-1 nk-post-image">
                              <img src="{{ asset($product_info->image) }}" alt="However, I have reason" width="115">
                              </a>
                          </>
                          <td class="nk-product-cart-title">
                              <h5 class="h6">Product:</h5>
                              <div class="nk-gap-1"></div>

                              <h2 class="nk-post-title h4">
                                  <a href="#">{{$product_info->name}}</a>
                              </h2>
                          </td>
                          <td class="nk-product-cart-price" style="width: 16%;">
                              <h5 class="h6">Package name:</h5>
                              <div class="nk-gap-1"></div>

                              <strong>{{$package_selected[0]}}</strong>
                          </td>
                          <td class="nk-product-cart-price">
                              <h5 class="h6">Value:</h5>
                              <div class="nk-gap-1"></div>

                              <strong>{{$package_selected[1]}}</strong>
                          </td>
                          <td class="nk-product-cart-price">
                              <h5 class="h6">OS:</h5>
                              <div class="nk-gap-1"></div>
                                <select class="form-select" name="os" id="os" >
                                @for($i = 0; $i < count(explode(",", $product_info->os_supported)); $i++)
                                    <option value="{{ explode(',', $product_info->os_supported)[$i] }}">{{ explode(',', $product_info->os_supported)[$i] }}</option>
                                @endfor
                                </select>
                          </td>
                          <td class="nk-product-cart-quantity">
                              <h5 class="h6">Quantity:</h5>
                              <div class="nk-gap-1"></div>

                              <div class="nk-form">
                                  <input type="number" id="number" name="number" class="form-control" value="1" min="1" max="21" onchange="tinh_tong_tien()">
                              </div>
                          </td>
                          <td class="nk-product-cart-total">
                              <h5 class="h6">Total:</h5>
                              <div class="nk-gap-1"></div>

                              <strong id="tong_tien">{{number_format($package_selected[2])}}</strong>
                          </td>
                          <td class="nk-product-cart-remove"><a href="#"><span class="ion-android-close"></span></a></td>
                      </tr>
              </tbody>
          </table>
        </form>
          <!-- END: Products in Cart -->
      <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="check_terms">I have read and accept the <a href="">Terms of Service</a> and <a href="">Privacy Policy</a></input>
          <p id="errors_checked" style="color: red"></p> 
      </div>
      </div>
      <div class="nk-gap-1"></div>
      <a class="nk-btn nk-btn-rounded nk-btn-color-white float-right" href="#" id="update_bill">Order</a>
    @endif
      <div class="clearfix"></div>
      <div class="nk-gap-2"></div>
  </div>
</div>

<script>
    var point = '{{$package_selected[2]}}'
    function tinh_tong_tien(){        
        $("#tong_tien").html($("#number").val()*point); 
        $("#tong_tien").html(Number($("#number").val()*point).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')); 
    }

    $(document).ready(function() {
        var msg = "{{Session::get('mess')}}";
        var exist = "{{Session::has('mess')}}";
        if (exist && msg == '1') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "You haven't enough points to buy it!",
            })
        }

        $('#update_bill').click(function() {
            if ($('#check_terms').is(':checked')) {
                $('#termsmodal').modal('show');
            }
            else
            {
                $('#errors_checked').html("You aren't checked to the terms yet");
            }
        })

        $('#confirm_terms').click(function() {
            var user = '{{ $user }}';
            if(user == '') {
                $('#modalLogin').modal('show');
                $('#termsmodal').modal('hide');
            }else
            {
                var point_user = '{{ $point }}';
                var phone_user = '{{ $phone }}'
                var point_total = $("#number").val()*point;
                var username = $('#username').val();
                var password_game = $('#password_game').val();
                if(username == '' || password_game == '' ){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: "Please enter game account information!",
                    })
                }
                else if(phone_user == '')
                {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: "Please update your phone number!",
                    })
                }else
                {
                    var uid = $('#username').val()
                    var pass = $('#password_game').val()
                    var sv = $('#sever').val()
                    $('#uid').val(uid)
                    $('#pass').val(pass)
                    $('#sv').val(sv)
                    // console.log($('#username').val());
                    $('#add_bill').submit();
                }
            }    
        })
    });
</script>
@endsection