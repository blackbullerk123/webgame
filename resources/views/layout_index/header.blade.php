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
                                    <a href="{{ route('admin') }}"><span
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
                                    <a href="{{ route('order') }}"><span
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
                    {{-- <li>
                    <span class="nk-cart-toggle">
                        <span class="fa fa-shopping-cart"></span>
                        <span class="nk-badge">27</span>
                    </span>
                    <div class="nk-cart-dropdown">
                        
                        <div class="nk-widget-post">
                            <a href="store-product.html" class="nk-post-image">
                                <img src="{{asset('assets/images/product-5-xs.jpg')}}" alt="In all revolutions of">
                            </a>
                            <h3 class="nk-post-title">
                                <a href="#" class="nk-cart-remove-item"><span class="ion-android-close"></span></a>
                                <a href="store-product.html">In all revolutions of</a>
                            </h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 23.00</div>
                        </div>
                        
                        <div class="nk-widget-post">
                            <a href="store-product.html" class="nk-post-image">
                                <img src="{{asset('assets/images/product-7-xs.jpg')}}" alt="With what mingled joy">
                            </a>
                            <h3 class="nk-post-title">
                                <a href="#" class="nk-cart-remove-item"><span class="ion-android-close"></span></a>
                                <a href="store-product.html">With what mingled joy</a>
                            </h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 14.00</div>
                        </div>
                        
                        <div class="nk-gap-2"></div>
                        <div class="text-center">
                            <a href="store-checkout.html" class="nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white">Proceed to Checkout</a>
                        </div>
                    </div>
                </li> --}}
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

                <a href="index.html" class="nk-nav-logo">
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
                        <a href="gallery.html">
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
                <img src="{{ asset('assets/images/logo.png')}}" alt="" width="120">
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
@section('script')

@stop
