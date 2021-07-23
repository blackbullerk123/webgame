@extends('layout_index.master')
@section('content')
<?php use Illuminate\Support\Facades\Auth;?>
<style>
#img1{
    width:220px;
    height: 280px;
}
</style>  
        <!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
-->
@if(isset($product))
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.html" class="nk-nav-logo">
                <img src="{{asset('assets/images/post-2-fw.jpg')}}" alt="" width="120">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->

    

    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">            
        <li><span><span class="text-main-1">Product</span> Detail</span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->
    
<div class="container">
    <!-- START: Posts FullWidth -->
    <div class="row">
        <div class="col-12 col-xs-12 col-sm-6 col-md-4 col-xl-3 text-center">
            <input type="hidden" id="id_user" value="{{ isset(Auth::user()->id) ? Auth::user()->id : ''}}">
            <h4>{{ $product->name }} - {{ $product->os_supported }}</h4>
            <img id="img1" src="{{asset($product->image)}}" alt="We found a witch! May we burn her?" >
        </div>
            <!-- START: Post -->
        <div class="col-12 col-xs-12 col-sm-6 col-md-8 col-xl-9 ">
            <div class="table-responsive" style="width: 110%;">
                <table class="table table-striped custom-table">
                        <thead>              
                            <tr>
                            <th scope="col" style="width:20%;font-size: 13px">Package Image</th>
                            <th scope="col" style="font-size: 13px">Package Name</th>
                            <th scope="col" style="font-size: 13px">Value</th>
                            <th scope="col" style="font-size: 13px">Point</th>
                            <th scope="col" style="font-size: 13px">Education</th>
                            <th scope="col" style="font-size: 13px"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($product->package_name))
                        @for ($i = 0;$i < count(json_decode($product->package_name)); $i++)
                            <tr scope="row">
                                    <td style="text-align: center">
                                        <img src="{{asset(isset(json_decode($product->package_image)[$i]) ? json_decode($product->package_image)[$i] : 'images/no_img.jpg' )}}" class="popup" width="50px" height="30px" />
                                    </td>
                                    <td><a href="#" style="font-size: 18px">{{json_decode($product->package_name)[$i]}}</a></td>
                                    <td><a href="#" style="font-size: 18px">{{ json_decode($product->package_price)[$i] }}</a></td>
                                    <td><a href="#" style="font-size: 18px">{{ number_format(json_decode($product->point_number)[$i]) }} point</a></td>
                                    <td><a href="{{ route('checkout.bill', [$product->product_id, $i]) }}" class="more" id="detail" style="font-size: 14px">Order</a></td>                   
                            </tr> 
                        @endfor                            
                        @endif
                        </tbody>
                </table>
            </div>
            <hr>
        </div>  
            <!-- END: Post -->
        
    </div>
    <div class="nk-gap-2"></div>
    <div class="container">
        <ul class="nk-breadcrumbs">            
            <li><span><span class="text-main-1">Description</span> Game</span></li>
            
        </ul>
    </div>
    <div class="col-12">
        {!! $product->content_1 !!}
    </div>
    <!-- END: Posts FullWidth -->
</div>
<div class="nk-gap-2"></div>
</div>
<!-- Modal -->
<div class="nk-modal modal fade" id="img_package" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-body" style="text-align: center">
          <img id="popup-img" style="width:300px; height:200px" src="" alt="image">
        </div>
    </div>
  </div>
@endif
@endsection
@section('script')
<script>
   $(document).ready(function(){
    $('.popup').click(function () {
        var src = $(this).attr('src');
        $('#img_package').modal('show');
        $('#popup-img').attr('src',src);
    })
});
</script>
@stop