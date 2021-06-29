<style>
    span.a {
        width: 100px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

</style>
<header class="nk-header nk-header-opaque">

    <!-- START: Top Contacts -->
    <div class="nk-contacts-top">
        <div class="container">
            <div class="nk-contacts-left">
                <ul class="nk-social-links">
                    <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                    <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                    <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                    <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                    <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                    <li><a class="nk-social-twitter" href="#" target="_blank"><span class="fab fa-twitter"></span></a>
                    </li>
                    <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>

                    <!-- Additional Social Buttons
                    <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                    <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                    <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                    <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                    <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                    <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                    <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                    <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                    <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                    <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                    <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                    <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                    <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                    <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                    <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                    <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                    <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                    <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                    <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                    <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
                    <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                -->
                </ul>
            </div>
            <div class="nk-contacts-right index">
                <ul class="nk-contacts-icons">

                    <li>
                        <a href="#" data-toggle="modal" data-target="#modalSearch">
                            <span class="fa fa-search"></span>
                        </a>
                    </li>
                    @if (Auth::check())
                        @if (Auth::user()->email == 'admin@webgame.com')
                            <li>
                                <a href="#" id="tg-currenty" class="tg-btnthemedropdown" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-user"></i>
                                    <a href="{{ route('admin') }}"><span class="a"
                                            style="font-weight: bold;">{{ Auth::user()->name }}</span></a>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" id="tg-currenty" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-sign-out"></i>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="#" id="tg-currenty" class="tg-btnthemedropdown" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-user"></i>
                                    <a href="{{ route('order') }}"><span class="a"
                                            style="font-weight: bold;">{{ Auth::user()->name }}</span></a>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" id="tg-currenty" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-sign-out"></i>
                                </a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a href="#" data-toggle="modal" data-target="#modalLogin">
                                <span class="fa fa-user"></span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Top Contacts -->



    <!--
        START: Navbar

        Additional Classes:
            .nk-navbar-sticky
            .nk-navbar-transparent
            .nk-navbar-autohide
    -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">

                <a href="{{ route('index') }}" class="nk-nav-logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="GoodGames" width="199">
                </a>

                <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">

                    <li class=" nk-item">
                        <a href="{{ route('index') }}">
                            Home
                        </a>
                    </li>
                    <li class=" nk-item">
                        <a href="{{ route('all_games') }}">
                            All Games
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('document') }}">
                            Document
                        </a>
                    </li>
                    <li class=" nk-item">
                        <a href="{{ route('about') }}">
                            About us
                        </a>
                    </li>
                    <li class=" nk-item">
                        <a href="{{ route('contact') }}">
                            Contact Us
                        </a>
                    </li>
                </ul>
                <ul class="nk-nav nk-nav-right nk-nav-icons">

                    <li class="single-icon d-lg-none">
                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                            <span class="nk-icon-burger">
                                <span class="nk-t-1"></span>
                                <span class="nk-t-2"></span>
                                <span class="nk-t-3"></span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->
</header>
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
                <form action="{{ route('search') }}" method="get" class="nk-form nk-form-style-1">
                    <input type="text" value="" name="search" class="form-control"
                        placeholder="Type something and press Enter" autofocus>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->
<!-- START: Terms Modal -->
<div class="modal fade" id="termsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">              
                After clicking confirm, you much contact the supporter for assistance in loading money into the game.
                NOTE: please send the game account including <a href="#" style="color: red">your id + password </a> and
                ''<a href="#" style="color: red">sever, character name... (if the game has one)</a>''
                Before sending, please enable <a href="#" style="color: red">Two-factor Authentication</a> for your
                account to avoid bad situations.
                Webgame.vn secures 100% of customer information absolutely and safely.
                <hr>
                <p style="color: yellow">After clicking confirm, the money will be deducted from your account, support
                    will contact you via facebook page or phone number/email you have registered.</p>
                <h6 style="color:red">Account information</h6>
                <input type="text" value="" id="username" name="username" class="required form-control" placeholder="Username">
                <div class="nk-gap"></div>
                <input type="text" value="" id="password_game" name="password_game" class="required form-control" placeholder="Password">
                <div class="nk-gap"></div>
                <input type="text" value="" id="sever" name="sever" class="required form-control" placeholder="Sever (if there is a server)">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="confirm_terms">Confirm</button>
            </div>
        </div>
    </div>
</div>
<!-- END: Terms Modal -->
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
                    @csrf
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            Use email and password:
                            <div class="nk-gap"></div>
                            <input type="email" value="" id="email" name="email" class="required form-control"
                                placeholder="Email">
                            <div class="nk-gap"></div>
                            <input type="password" value="" id="password" name="password" class="required form-control"
                                placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            Or social account:

                            <div class="nk-gap"></div>

                            <ul class="nk-social-links-2">
                                <li><a class="nk-social-facebook"
                                        href="{{ route('social.login', ['facebook']) }}"><span
                                            class="fab fa-facebook"></span></a>
                                </li>
                                {{-- <li><a class="nk-social-google-plus" href="#"><span
                                                class="fab fa-google-plus"></span></a></li>
                                    <li><a class="nk-social-twitter" href="#"><span class="fab fa-twitter"></span></a>
                                    </li> --}}
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
                    @csrf
                    <div class="row vertical-gap">
                        <div class="col-md-8">
                            <div class="nk-gap"></div>
                            <label>Name:</label>
                            <input type="text" value="" name="name" id="name" class="form-control" placeholder="Name">
                            <p id="error-name" style="color:red"></p>
                            <label>Email:</label>
                            <input type="text" value="" name="email" id="email_sign" class="form-control"
                                placeholder="Email">
                            <p id="error-email" style="color:red"></p>
                            <label>Phone:</label>
                            <input type="text" value="" name="phone" id="phone" maxlength="15" class="form-control"
                                placeholder="Phone">
                            <p id="error-phone" style="color:red"></p>
                            <label>Password:</label>
                            <input type="password" value="" name="password" id="password_sign" class="form-control"
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
                                <small><a href="#" data-toggle="modal" data-dismiss="modal" data-target="#modalLogin">Is
                                        a member? Sign In</a></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Reg Modal -->
<!-- END: Navbar Mobile -->
@section('script')

@stop
