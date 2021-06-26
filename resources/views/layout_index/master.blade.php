<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>WebGame | Community and Store HTML Game Template</title>

    <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK">

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet"
        type="text/css">
   {{-- Data table --}}
  <link rel="stylesheet" href="{{ asset('adminlte2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/photoswipe/dist/default-skin/default-skin.css') }}">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css') }}">
    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/summernote/dist/summernote-bs4.css') }}">
    <!-- GoodGames -->
    <link rel="stylesheet" href="{{ asset('assets/css/goodgames.css') }}">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!-- jQuery -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>



</head>


<!--
    Additional Classes:
        .nk-page-boxed
-->

<body>
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

    <script src="//js.pusher.com/3.1/pusher.min.js"></script>

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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('adminlte2/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- GoodGames -->
    <script src="{{ asset('assets/js/goodgames.min.js') }}"></script>
    <script src="{{ asset('assets/js/goodgames-init.js') }}"></script>
    <!-- END: Scripts -->
    @yield('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#signup_form").submit(function(e) {
            e.preventDefault();
            var name = $("#name").val();
            var phone = $("#phone").val();
            var email = $("#email_sign").val();
            var password = $("#password_sign").val();
            var confirm_password = $("#confirm_password").val();
            $.ajax({
                url: "{{ route('signup') }}",
                type: "post",
                data: {
                    _token: "{{ csrf_token() }}",
                    name: name,
                    phone: phone,
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
                            $('#signup_form').find('input[name="' + key + '"]').next('p').text(value[0]);
                        });
                    }
                }
            });
        });
        $("#signin_form").submit(function(e) {
            e.preventDefault();
            var email = $("#email").val();
            var password = $("#password").val();
            $.ajax({
                url: "{{ route('login') }}",
                type: "post",
                data: {
                    _token: "{{ csrf_token() }}",
                    email: email,
                    password: password,
                },
                success: function(response) {   
                    if(response.success == true){
                        Swal.fire({
                            icon: 'success',
                            title: 'Logged in successfully',
                            showConfirmButton: false,
                            timer: 2000
                        })
                        $('#modalLogin').modal('hide');
                        window.location.reload();
                    }else{
                        Swal.fire({
                        icon: 'error',
                        title: 'Incorrect account or password',
                        showConfirmButton: false,
                        timer: 2000
                    })
                    }
                },
            });
        });
    $("div.alert").delay(3000).slideUp();
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
    <!-- Messenger Plugin chat Code -->
   <!-- Messenger Plugin chat Code -->
   <div id="fb-root"></div>

   <!-- Your Plugin chat code -->
   <div id="fb-customer-chat" class="fb-customerchat">
   </div>

   <script>
     var chatbox = document.getElementById('fb-customer-chat');
     chatbox.setAttribute("page_id", "102755492063301");
     chatbox.setAttribute("attribution", "biz_inbox");
     window.fbAsyncInit = function() {
       FB.init({
         xfbml            : true,
         version          : 'v11.0'
       });
     };

     (function(d, s, id) {
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) return;
       js = d.createElement(s); js.id = id;
       js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
   </script>
<script>
           $(function() {
            $('#product_table').DataTable({
                "sDom": '<"row view-filter"<"col-sm-12"<"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"pull-left"l><"pull-right"p><"text-center"i>>>',
                'paging': true,
                'searching': true,
                'info': true,
                'autoWidth': false,
                'lengthChange': false,
                'ordering': true,
                'aaSorting': [],
                'columnDefs': []
            })
        })
</script>
</body>

</html>