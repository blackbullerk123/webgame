@extends('layout_index.master')
@section('content')
<style>
    p{
        font-size: 18px;
    }
</style>
<div class="nk-main">
    <div class="nk-gap-2"></div>
    <div class="container">
        <h2 class="nk-decorated-h"><span><span class="text-main-1">Service</span> manual</span></h2>
        <div class="nk-gap-1"></div>
        <div class="col-lg-12">
            <h3 class="text-main-1">User manual</h3>
            <div class="nk-gap"></div>
            <!-- START: Tabs  -->
            <div class="nk-tabs">
                <!--
                    Additional Classes:
                        .nav-tabs-fill
                -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" href="#tabs-1-1" role="tab" data-toggle="tab" aria-selected="true">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabs-1-2" role="tab" data-toggle="tab" aria-selected="false">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabs-1-3" role="tab" data-toggle="tab" aria-selected="false">Purchase point</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabs-1-4" role="tab" data-toggle="tab" aria-selected="false">Purchase game packs</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active show" id="tabs-1-1">
                        <div class="nk-gap"></div>
                        <p>- Please click on the icon on the right corner of the screen on your PC or mobile browser.</p>
                        <p><img src="{{ asset('images/1.png') }}" style="width: 100%;" alt=""></p>
                        <p>- Customers fill in all the information in the fields and click sign up</p>
                        <p><img src="{{ asset('images/2.png') }}" style="width: 100%;" alt=""></p>
                        <p>- Then a successful registration message will be displayed</p>
                        <div class="nk-gap"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-2">
                        <div class="nk-gap"></div>
                        <h5>1. Login with user:</h5>
                        <p>- Please click on the icon on the right corner of the screen on your PC or mobile browser.</p>
                        <p><img src="{{ asset('images/1.png') }}" style="width: 100%;" alt=""></p>
                        <p>- Customers fill in all the information in the fields and click sign in</p>
                        <p><img src="{{ asset('images/3.png') }}" style="width: 100%;" alt=""></p>
                        <p>- Then a successful login message will be displayed</p>
                        <h5>2. Login with facebook:</h5>
                        <p>- Please click the facebook icon.</p>
                        <p><img src="{{ asset('images/4.png') }}" style="width: 100%;" alt=""></p>
                        <div class="nk-gap"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-3">
                        <div class="nk-gap"></div>
                        <p>- Click on point of purchase to order </p>
                        <p>- <b style="color: red">Note:</b> $100 = 100 Points</p> 
                        <p><img src="{{ asset('images/5.png') }}" style="width: 100%;" alt=""></p>
                        <p>- Choose a method to purchase points</p>
                        <p>- Choose the number of purchase points </p>
                        <p>- Then click on purchase</p>
                        <p><img src="{{ asset('images/6.png') }}" style="width: 100%;" alt=""></p>
                        <p>- After the customer creates a top-up invoice, please transfer money with the content stated on the invoice.</p>
                        <p><img src="{{ asset('images/7.png') }}" style="width: 100%;" alt=""></p>
                        <div class="nk-gap"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-4">
                        <div class="nk-gap"></div>
                        <p>- After you have completed the above steps and have points in your account. Customers can now start buying the game they want. Then click home to go to the homepage</p>
                        <p>- <b style="color: red">Note:</b> If your game is playing on any operating system device - For example, I will choose the game: "GODDESS MUA"</p> 
                        <p><img src="{{ asset('images/8.png') }}" alt=""></p>
                        <p>- Customers choose packages to purchase</p>
                        <p><img src="{{ asset('images/9.png') }}" style="width: 100%;" alt=""></p>
                        <p>- Select the operating system to load, select the terms and order</p>                        
                        <p><img src="{{ asset('images/10.png') }}" style="width: 100%;" alt=""></p>
                        <p>- After order confirmation will show pending status</p>
                        <p>- Customers need to send the order code to the support page</p>
                        <p><img src="{{ asset('images/11.png') }}" alt=""></p>
                        <p>- After the admin has finished loading the game, the completion status will be sent to the login page and inbox via facebook for you</p>
                        <p>- Thank you for viewing the article.</p>
                        <div class="nk-gap"></div>
                    </div>
                </div>
            </div>
            <!-- END: Tabs -->           
        </div>
        <div class="col-lg-12">
            <h4 style="color: red">If you have any questions, please send feedback to</h4>
            <p>Email: hotro@gamemobile.vn <br>
            Page: <a href="https://www.facebook.com/Game-Mobile-102755492063301">Game mobile </a> <br>
            Phone: 0799.0799.52 <br>
            Personal Support: <a href="{{ route('contact') }}">Liên hệ </a> <br>
            Support customer 24/7</p>
        </div>
    </div>
</div>
@endsection