
@extends('layout_index.master')
@section('content')
    
    

    <div class="nk-main">
        

        
<div class="nk-fullscreen-block">
    <div class="nk-fullscreen-block-top">
        <div class="text-center">
            <div class="nk-gap-4"></div>
            <a href="index.html"><img src="{{ asset('assets/images/logo-2.png') }}" alt="GoodGames"></a>
            <div class="nk-gap-2"></div>
        </div>
    </div>
    <div class="nk-fullscreen-block-middle">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4">
                    <h1 class="text-main-1" style="font-size: 150px;">404</h1>

                    <div class="nk-gap"></div>
                    <h2 class="h4">You chose the wrong path!</h2>

                    <div>Or such a page just doesn't exist... <br> Would you like to go back to the homepage?</div>
                    <div class="nk-gap-3"></div>

                    <a href="index.html" class="nk-btn nk-btn-rounded nk-btn-color-white">Return to Homepage</a>
                </div>
            </div>
            <div class="nk-gap-3"></div>
        </div>
    </div>
    <div class="nk-fullscreen-block-bottom">
        <div class="nk-gap-2"></div>
        <ul class="nk-social-links-2 nk-social-links-center">
            <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
            <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
            <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
            <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
            <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
            <li><a class="nk-social-twitter" href="#" target="_blank"><span class="fab fa-twitter"></span></a></li>
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
        <div class="nk-gap-2"></div>
    </div>
</div>


        
    </div>

    

    
        <!-- START: Page Background -->

<!-- END: Page Background -->

    

    
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
                    <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->
    

    
        <!-- START: Login Modal -->
<div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form text-white">
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            Use email and password:

                            <div class="nk-gap"></div>
                            <input type="email" value="" name="email" class=" form-control" placeholder="Email">

                            <div class="nk-gap"></div>
                            <input type="password" value="" name="password" class="required form-control" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            Or social account:

                            <div class="nk-gap"></div>

                            <ul class="nk-social-links-2">
                                <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                                <li><a class="nk-social-twitter" href="#"><span class="fab fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign In</a>
                        </div>
                        <div class="col-md-6">
                            <div class="mnt-5">
                                <small><a href="#">Forgot your password?</a></small>
                            </div>
                            <div class="mnt-5">
                                <small><a href="#">Not a member? Sign up</a></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Login Modal -->
@endsection
