@extends('layout_index.master')
@section('content')
<?php use Illuminate\Support\Facades\Auth;?>
<style>
#img1{
    width:250px;
    height: 300px;
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
        <li><span>Blog FullWidth</span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->
    
<div class="container">
    <!-- START: Posts FullWidth -->
    <div class="row">
        <div class="col-12 col-xs-12 col-sm-6 col-md-4 col-xl-3 text-center">
            <input type="hidden" id="id_user" value="{{ isset(Auth::user()->id) ? Auth::user()->id : ''}}">
            <h4>{{ $product->name }}</h4>
            <img id="img1" src="{{asset($product->image)}}" alt="We found a witch! May we burn her?" >
        </div>
            <!-- START: Post -->
        <div class="col-12 col-xs-12 col-sm-6 col-md-8 col-xl-9 ">
            <div class="table-responsive" style="width: 110%;">
                <table class="table table-striped custom-table">
                        <thead>              
                            <tr>
                            <th scope="col">Package Image</th>
                            <th scope="col">Package Name</th>
                            <th scope="col">Value</th>
                            <th scope="col">Point</th>
                            <th scope="col">Education</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($product->package_name))
                        @for ($i = 0;$i < count(json_decode($product->package_name)); $i++)
                            <tr scope="row">
                                    <td>
                                        <div class="hovergallery">
                                            <img src="{{asset($product->package_image)}}" width="50" />
                                        </div>
                                    </td>
                                    <td><a href="#">{{json_decode($product->package_name)[$i]}}</a></td>
                                    <td>{{ json_decode($product->package_price)[$i] }}</td>
                                    <td>{{ number_format(json_decode($product->point_number)[$i]) }} point</td>
                                    <td><a href="{{ route('checkout.bill', [$product->product_id, $i]) }}" class="more" id="detail">Order</a></td>                   
                            </tr> 
                        @endfor                            
                        @endif
                        </tbody>
                </table>
            </div>
            <hr>
            {!! $product->content_1 !!}
        </div>  
            <!-- END: Post -->
        
    </div>
    <!-- END: Posts FullWidth -->
</div>

<div class="nk-gap-2"></div>
</div>
@endif
<script>

</script>
@endsection