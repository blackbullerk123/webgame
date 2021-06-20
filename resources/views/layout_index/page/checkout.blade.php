@extends('layout_index.master')
@section('content')

<div class="container">
  <ul class="nk-breadcrumbs">
      
      
      <li><a href="index.html">Home</a></li>
      
      
      <li><span class="fa fa-angle-right"></span></li>
      
      <li><a href="store.html">Store</a></li>
      
      
      <li><span class="fa fa-angle-right"></span></li>
      
      <li><span>Cart</span></li>
      
  </ul>
</div>
<div class="nk-gap-2"></div>
<div class="container">
  <div class="nk-store nk-store-cart">
      <div class="table-responsive">

          <!-- START: Products in Cart -->
          <form action="{{route('index')}}" method="post" enctype="multipart/form-data" id="form_data">
        @if($product_info && $package_selected)
          <table class="table nk-store-cart-products">
              <tbody>
                  
                      <tr>
                          <td class="nk-product-cart-thumb">
                              <a href="#" class="nk-image-box-1 nk-post-image">
                                  <img src="{{ asset($product_info->image) }}" alt="However, I have reason" width="115">
                              </a>
                          </td>
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
                                  <input type="number" id="number" class="form-control" value="1" min="1" max="21" onchange="tinh_tong_tien()">
                              </div>
                          </td>
                          <td class="nk-product-cart-total">
                              <h5 class="h6">Total:</h5>
                              <div class="nk-gap-1"></div>

                              <strong id="tong_tien">{{$package_selected[2]}}</strong>
                          </td>
                          <td class="nk-product-cart-remove"><a href="#"><span class="ion-android-close"></span></a></td>
                      </tr>
                  
              </tbody>
          </table>
          <!-- END: Products in Cart -->
          </form>
      </div>
      <div class="nk-gap-1"></div>
      <a class="nk-btn nk-btn-rounded nk-btn-color-white float-right" href="#" id="update_bill">Update Cart</a>
    @endif
      <div class="clearfix"></div>
      <div class="nk-gap-2"></div>
  </div>
</div>

<script>

function tinh_tong_tien(){ 
    var point = '{{$package_selected[2]}}'
    $("#tong_tien").html($("#number").val()*point); 
}

$(document).ready(function(){

    $('#update_bill').click(function () {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
        }
        })
    })

})

</script>
@endsection