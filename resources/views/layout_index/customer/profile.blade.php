@extends('layout_index.master')
@section('content')
    <!--
        START: Navbar Mobile

        Additional Classes:
            .nk-navbar-left-side
            .nk-navbar-right-side
            .nk-navbar-lg
            .nk-navbar-overlay-content
    -->
    <style>
        .hidden{
            visibility: hidden;
        }      
    </style>
    <div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
        <div class="nano">
            <div class="nano-content">
                <a href="index.html" class="nk-nav-logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" width="120">
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

    <div class="container">
        <div class="row vertical-gap">
            <div class="col-lg-3">
                @include('layout_index.customer.nav')
            </div>
            <div class="col-lg-9">
                <h3 class="text-main-1">personal information</h3>
                <div class="nk-gap"></div>
                <div class="card-header">
                    <h5 class="text-main-1">Basic information</h5>
                </div>
                <div class="card-body">
                    <form action="#"  enctype="multipart/form-data">
                       <div class="form-group row">
                            <p class="col-md-3 col-form-label">Name:</p>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Name . . . . ." name="name" value="">
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <p class="col-md-3 col-form-label">Phone:</p>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Phone . . . . . " name="phone" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="col-md-3 col-form-label">Image:</p>
                            <div class="col-md-9">
                                <input id="fImages" type="file" name="avatar" class="form-control hidden"
                                    onchange="changeImg(this)">
                                <img id="img" class="img" style="width: 200px; height: 150px; margin-top: -30px"
                                    src="{{ asset('images/no_img.jpg') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="col-md-3 col-form-label">Email:</p>
                            <div class="col-md-9">
                                <input type="email" class="form-control" placeholder="Email . . . . ." name="email">
                            </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="nk-btn nk-btn-rounded nk-btn-color-main-1">Update Profile</button>
                        </div>
                    </form>
                </div>
                <div class="card-header">
                    <h5 class="text-main-1">Change Password</h5>
                </div>
                <div class="card-body">
                    <form action="#"  enctype="multipart/form-data">               
                        <div class="form-group row">
                            <p class="col-md-3 col-form-label">New password:</p>
                            <div class="col-md-9">
                                <input type="password" class="form-control" placeholder="New password . . . . ." name="new_password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="col-md-3 col-form-label">Confirm password:</p>
                            <div class="col-md-9">
                                <input type="password" class="form-control" placeholder="Confirm password . . . . ." name="confirm_password">
                            </div>
                        </div>
        
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="nk-btn nk-btn-rounded nk-btn-color-main-1">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="nk-gap-2"></div>

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
  </script>
@stop