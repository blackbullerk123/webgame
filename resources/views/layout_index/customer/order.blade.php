@extends('layout_index.master')
@section('content')
<style>
#img1{
    height: 10%;
    width: 16%;
    position: absolute;
}
@media only screen and (max-width: 762px) {
    #img1{
        width: 27%;
        height: 6%;
    }
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
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.html" class="nk-nav-logo">
                <img src="assets/images/logo.png" alt="" width="120">
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

<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->
    
<div class="container" >
    <div class="row vertical-gap">
        <div class="col-lg-3">

            <!-- START: Now Playing -->
            <div class="nk-match">
                <div class="px-4 text-center mb-4">
                    <span class="avatar avatar-md mb-3">                   
                        <img src="https://gamemobile.io/assets/uploads/1618905948.png" style="height: 80px; width: 80px" class="image rounded-circle">
                    </span>            
                    <div class="list-group">
                    <ul class="list-group list-group-flush">
                        <li class="nk-match">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-home aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Dashboard</span>
                            </a>
                        </li>       
                            <li class="nk-match">
                                <a href="#" class="aiz-side-nav-link">
                                    <i class="las la-hourglass-half aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">
                                        Assigned Delivery
                                    </span>
                                </a>
                            </li>
                            <li class="nk-match">
                                <a href="#" class="aiz-side-nav-link">
                                    <i class="las la-luggage-cart aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">
                                        Pickup Delivery
                                    </span>
                                </a>
                            </li>
                            <li class="nk-match">
                                <a href="#" class="aiz-side-nav-link">
                                    <i class="las la-check-circle aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">
                                        Completed Delivery
                                    </span>
                                </a>
                            </li>
                            <li class="nk-match">
                                <a href="#" class="aiz-side-nav-link">
                                    <i class="las la-clock aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">
                                        Pending Delivery
                                    </span>
                                </a>
                            </li>
                            <li class="nk-match">
                                <a href="#" class="aiz-side-nav-link">
                                    <i class="las la-times-circle aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">
                                        Cancelled Delivery
                                    </span>
                                </a>
                            </li>
                        <li class="nk-match">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-user aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Manage Profile</span>
                            </a>
                        </li>
        
                    </ul>
                    </div>
                </div>
            </div>
            <!-- END: Now Playing -->
        </div>
        <div class="col-lg-9">
            <table class="table table-striped custom-table float-left">
                <thead>              
                    <tr>
                    <th scope="col" style="width: 15%;">Order</th>
                    <th scope="col" style="width: 35%;">Name</th>
                    <th scope="col" style="width: 15%;">Value</th>
                    <th scope="col" style="width: 15%;">Point</th>
                    <th scope="col" style="width: 15%;">Education</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr scope="row">

                    
                            <td> 1392</td>
                            <td><a href="#">James Yates</a></td>
                            <td>0.99$</td>
                            <td>19,800</td>
                            <td><a href="{{ route('checkout') }}" class="more">Details</a></td>
                    
                    </tr>            
                    <tr scope="row">

                    
                        <td> 1392</td>
                        <td><a href="#">James Yates</a></td>
                        <td>0.99$</td>
                        <td>19,800</td>
                        <td><a href="{{ route('checkout') }}" class="more">Details</a></td>
                
                </tr>            
                <tr scope="row">

                    
                    <td> 1392</td>
                    <td><a href="#">James Yates</a></td>
                    <td>0.99$</td>
                    <td>19,800</td>
                    <td><a href="{{ route('checkout') }}" class="more">Details</a></td>
            
            </tr>            
            <tr scope="row">

                    
                <td> 1392</td>
                <td><a href="#">James Yates</a></td>
                <td>0.99$</td>
                <td>19,800</td>
                <td><a href="{{ route('checkout') }}" class="more">Details</a></td>
        
        </tr>            
        <tr scope="row">

                    
            <td> 1392</td>
            <td><a href="#">James Yates</a></td>
            <td>0.99$</td>
            <td>19,800</td>
            <td><a href="{{ route('checkout') }}" class="more">Details</a></td>
    
    </tr>                    
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="nk-gap-2"></div>

@endsection