<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GoodGames | Community and Store HTML Game Template</title>

    <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK">

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet"
        type="text/css">

    <link rel="stylesheet" href="{{ asset('table/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('table/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('table/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('table/css/style.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- FontAwesome -->
    <script defer src="{{ asset('assets/vendor/fontawesome-free/js/all.js') }}"></script>
    <script defer src="{{ asset('assets/vendor/fontawesome-free/js/v4-shims.js') }}"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/ionicons/css/ionicons.min.css') }}">

    <!-- Flickity -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/flflickity/dist/flickity.min.css') }}">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/photoswipe/dist/photoswipe.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/vendor/photoswipe/dist/default-skin/default-skin.css') }}">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css') }}">
    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/summernote/dist/summernote-bs4.css') }}">
    <!-- GoodGames -->
    <link rel="stylesheet" href="{{ asset('assets/css/goodgames.css') }}">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
    <!-- jQuery -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>



</head>


<!--
    Additional Classes:
        .nk-page-boxed
-->

<body>
    <!-- START: Search Modal -->
    <div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="ion-android-close"></span>
                    </button>

                    <h4 class="mb-0">Search</h4>

                    <div class="nk-gap-1"></div>
                    <form action="#" class="nk-form nk-form-style-1">
                        <input type="text" value="" name="search" class="form-control"
                            placeholder="Type something and press Enter" autofocus>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Search Modal -->
    <!-- START: Login Modal -->
    <div class="modal fade" id="modalLogin" aria-hidden="true" aria-labelledby="modalLogin">
        <div class="modal-dialog modal-sm-8" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="ion-android-close"></span>
                    </button>
                    <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                    <div class="nk-gap-1"></div>
                    <form action="#" method="post" id="signin_form" class="nk-form text-white">
                        <input type="hidden" name="_token" id="csrf-token" />
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                Use email and password:
                                <div class="nk-gap"></div>
                                <input type="email" value="" name="email" class="required form-control"
                                    placeholder="Email">
                                <div class="nk-gap"></div>
                                <input type="password" value="" name="password" class="required form-control"
                                    placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                Or social account:

                                <div class="nk-gap"></div>

                                <ul class="nk-social-links-2">
                                    <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a>
                                    </li>
                                    <li><a class="nk-social-google-plus" href="#"><span
                                                class="fab fa-google-plus"></span></a></li>
                                    <li><a class="nk-social-twitter" href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="nk-gap-1"></div>
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                <button class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block login">Sign
                                    In</button>
                            </div>
                            <div class="col-md-6">
                                <div class="mnt-5">
                                    <small><a href="#">Forgot your password?</a></small>
                                </div>
                                <div class="mnt-5">
                                    <small><a href="#" data-toggle="modal" data-target="#modalRegister"
                                            data-dismiss="modal">Not a member? Sign up</a></small>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Login Modal -->
    <!-- START: Reg Modal -->
    <div class="modal fade" id="modalRegister" aria-hidden="true" aria-labelledby="modalRegister" tabindex="-1">
        <div class="modal-dialog modal-sm-8" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="ion-android-close"></span>
                    </button>

                    <h4 class="mb-0"><span class="text-main-1">Sign</span> Up</h4>

                    <div class="nk-gap-1"></div>
                    <form action="#" method="post" id="signup_form" class="nk-form text-white">
                        <input type="hidden" name="_token" id="csrf-token" />
                        <div class="row vertical-gap">
                            <div class="col-md-8">
                                <div class="nk-gap"></div>
                                <label>Name:</label>
                                <input type="text" value="" name="name" id="name" class="form-control"
                                    placeholder="Name">
                                <p id="error-name" style="color:red"></p>
                                <label>Email:</label>
                                <input type="text" value="" name="email" id="email" class="form-control"
                                    placeholder="Email">
                                <p id="error-email" style="color:red"></p>
                                <label>Password:</label>
                                <input type="password" value="" name="password" id="password" class="form-control"
                                    placeholder="Password">
                                <p id="error-pass" style="color:red"></p>
                                <label>Confirm Password:</label>
                                <input type="password" value="" name="confirm_password" id="confirm_password"
                                    class="form-control" placeholder="Password">
                                <p id="error-confirm" style="color:red"></p>
                            </div>
                        </div>

                        <div class="nk-gap-1"></div>
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                <button class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign Up</button>
                            </div>
                            <div class="col-md-6">
                                <div class="mnt-5">
                                    <small><a href="#">Forgot your password?</a></small>
                                </div>
                                <div class="mnt-5">
                                    <small><a href="#" data-toggle="modal" data-dismiss="modal"
                                            data-target="#modalLogin">Is a member? Sign In</a></small>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Reg Modal -->

    <!--
    Additional Classes:
        .nk-header-opaque
-->

    @include('layout_index.header')

    @yield('content')

    @include('layout_index.footer')

    <!-- START: Page Background -->

    <img class="nk-page-background-top" src="{{ asset('assets/images/bg-top.png') }}" alt="">
    <img class="nk-page-background-bottom" src="{{ asset('assets/images/bg-bottom.png') }}" alt="">

    <!-- END: Page Background -->

    <!-- START: Scripts -->

    <!-- Object Fit Polyfill -->

    <script src="{{ asset('assets/vendor/object-fit-images/dist/ofi.min.js') }}"></script>

    <!-- GSAP -->
    <script src="{{ asset('assets/vendor/gsap/src/minified/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js') }}"></script>

    <!-- Popper -->
    <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Sticky Kit -->
    <script src="{{ asset('assets/vendor/sticky-kit/dist/sticky-kit.min.js') }}"></script>

    <!-- Jarallax -->
    <script src="{{ asset('assets/vendor/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jarallax/dist/jarallax-video.min.js') }}"></script>

    <!-- imagesLoaded -->
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>

    <!-- Flickity -->
    <script src="{{ asset('assets/vendor/flickity/dist/flickity.pkgd.min.js') }}"></script>

    <!-- Photoswipe -->
    <script src="{{ asset('assets/vendor/photoswipe/dist/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js') }}"></script>

    <!-- Jquery Validation -->
    <script src="{{ asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>

    <!-- Jquery Countdown + Moment -->
    <script src="{{ asset('assets/vendor/jquery-countdown/dist/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js') }}"></script>

    <!-- Hammer.js -->
    <script src="{{ asset('assets/vendor/hammerjs/hammer.min.js') }}"></script>

    <!-- NanoSroller -->
    <script src="{{ asset('assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js') }}"></script>

    <!-- SoundManager2 -->
    <script src="{{ asset('assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js') }}"></script>

    <!-- Seiyria Bootstrap Slider -->
    <script src="{{ asset('assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('assets/vendor/summernote/dist/summernote-bs4.min.js') }}"></script>

    <!-- nK Share -->
    <script src="{{ asset('assets/plugins/nk-share/nk-share.js') }}"></script>

    <!-- GoodGames -->
    <script src="{{ asset('assets/js/goodgames.min.js') }}"></script>
    <script src="{{ asset('assets/js/goodgames-init.js') }}"></script>
    <!-- END: Scripts -->
    <script src="{{ asset('js/toastr/toastr.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

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

        $("#signup_form").submit(function(e) {
            e.preventDefault();
            let name = $("#name").val();
            let email = $("#email").val();
            let password = $("#password").val();
            let confirm_password = $("#confirm_password").val();
            $.ajax({
                url: "{{ route('signup') }}",
                type: "post",
                data: {
                    _token: "{{ csrf_token() }}",
                    name: name,
                    email: email,
                    password: password,
                    confirm_password: confirm_password
                },
                success: function(response) {
                    $('#signup_form').find('input').each(function() {
                            $(this).val('');
                            $(this).next('p').text('');
                        }),
                        Swal.fire({
                            icon: 'success',
                            title: 'Added successfully',
                            showConfirmButton: false,
                            timer: 2000
                        })
                    $('#modalRegister').modal('hide');
                },
                error: function(response) {
                    $('#signup_form').find('input').each(function() {
                        $(this).next('p').text('');
                    });
                    var data = response.responseJSON;
                    if ($.isEmptyObject(data.errors) == false) {
                        $.each(data.errors, function(key, value) {
                            $('#signup_form').find('input[name="' + key + '"]').next('p')
                                .text(value[0]);
                        });
                    }
                }
            });
        });
        $("#signin_form").submit(function(e) {
            e.preventDefault();
            let email = $("#email").val();
            let password = $("#password").val();
            $.ajax({
                url: "{{ route('login') }}",
                type: "post",
                data: {
                    _token: "{{ csrf_token() }}",
                    email: email,
                    password: password,
                },
                success: function(response) {
                    if(response == 200){
                        Swal.fire({
                            icon: 'success',
                            title: 'Logged in successfully',
                            showConfirmButton: false,
                            timer: 2000
                        })
                        $('#modalLogin').modal('hide');
                    }
                        
                    
                    //else{
                    //     Swal.fire({
                    //     icon: 'error',
                    //     title: 'Incorrect account or password',
                    //     timer: 2000
                    // })
                    // }
                },
                // error: function(response) {
                //     Swal.fire({
                //         icon: 'error',
                //         title: 'Incorrect account or password',
                //         timer: 2000
                //     })
                // }
            });
        });

    </script>
    @yield('script')
</body>

</html>
