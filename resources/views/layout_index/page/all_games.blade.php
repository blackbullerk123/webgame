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
    

<div class="nk-main">
        
<div class="nk-gap-2"></div>
<div class="container">

    <!-- START: Categories -->
    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="{{ asset('images/card-itunes.png')}}" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="#">Card</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="#">View Card</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="{{ asset('images/android.png') }}" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="#">ANDROID</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="{{ asset('images/ios.png') }}" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="#">IOS</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Categories -->

    <div class="nk-gap-2"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">All</span> Games</span></h3>
    <div class="nk-gap"></div>
    <div class="nk-blog-grid">
        <div class="row">
            
            
            <div class="col-md-6 col-lg-3">
                <!-- START: Post -->
                <div class="nk-blog-post">
                    <a href="{{ route('product.detail') }}" class="nk-post-img">
                        <img src="https://gamemobile.io/assets/uploads/1618905948.png" alt="He made his passenger captain of one">
                        <span class="nk-post-comments-count">13</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-5">Indie</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="{{ route('product.detail') }}">honkai impact 3 </a></h2>
                    
                    <div class="nk-gap"></div>
                    <a href="{{ route('product.detail') }}" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">ORDER</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 23, 2018</div>
                </div>
                <!-- END: Post -->
            </div>
            
            <div class="col-md-6 col-lg-3">
                <!-- START: Post -->
                <div class="nk-blog-post">
                    <a href="{{ route('product.detail') }}" class="nk-post-img">
                        <img src="https://gamemobile.io/assets/uploads/1618903461.png" alt="He made his passenger captain of one">
                        <span class="nk-post-comments-count">13</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-5">Indie</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="{{ route('product.detail') }}">tap tap heroes: void cage</a></h2>
                    <div class="nk-gap"></div>
                    <a href="{{ route('product.detail') }}" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">ORDER</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 23, 2018</div>
                </div>
                <!-- END: Post -->
            </div>
            
            <div class="col-md-6 col-lg-3">
                <!-- START: Post -->
                <div class="nk-blog-post">
                    <a href="{{ route('product.detail') }}" class="nk-post-img">
                        <img src="https://gamemobile.io/assets/uploads/1618902360.png" alt="At first, for some time, I was not able to answer">
                        <span class="nk-post-comments-count">0</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-5">Racing</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="{{ route('product.detail') }}">Date A Live: Spirit Pledge</a></h2>
                    <div class="nk-gap"></div>
                    <a href="{{ route('product.detail') }}" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">ORDER</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                </div>
                <!-- END: Post -->
            </div>
            
            
            <div class="col-md-6 col-lg-3">
                <!-- START: Post -->
                <div class="nk-blog-post">
                    <a href="{{ route('product.detail') }}" class="nk-post-img">
                        <img src="https://gamemobile.io/assets/uploads/1618642684.png" alt="At length one of them called out in a clear">
                        <span class="nk-post-comments-count">0</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-6">MOBA</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="{{ route('product.detail') }}">Clash of Kings - CoK</a></h2>
                    <div class="nk-gap"></div>
                    <a href="{{ route('product.detail') }}" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">ORDER</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                </div>
                <!-- END: Post -->
            </div>
            
            
            <div class="col-md-6 col-lg-3">
                <!-- START: Post -->
                <div class="nk-blog-post">
                    <a href="{{ route('product.detail') }}" class="nk-post-img">
                        <img src="https://gamemobile.io/assets/uploads/1618626980.png" alt="For good, too though, in consequence">
                        <span class="nk-post-comments-count">0</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-2">Adventure</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="{{ route('product.detail') }}">Rise of Kingdoms</a></h2>
                    <div class="nk-gap"></div>
                    <a href="{{ route('product.detail') }}" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">ORDER</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                </div>
                <!-- END: Post -->
            </div>

            <div class="col-md-6 col-lg-3">
                <!-- START: Post -->
                <div class="nk-blog-post">
                    <a href="{{ route('product.detail') }}" class="nk-post-img">
                        <img src="https://gamemobile.io/assets/uploads/1618626980.png" alt="For good, too though, in consequence">
                        <span class="nk-post-comments-count">0</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-2">Adventure</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="{{ route('product.detail') }}">Rise of Kingdoms</a></h2>
                    <div class="nk-gap"></div>
                    <a href="{{ route('product.detail') }}" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">ORDER</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                </div>
                <!-- END: Post -->
            </div>

            <div class="col-md-6 col-lg-3">
                <!-- START: Post -->
                <div class="nk-blog-post">
                    <a href="{{ route('product.detail') }}" class="nk-post-img">
                        <img src="https://gamemobile.io/assets/uploads/1618626980.png" alt="For good, too though, in consequence">
                        <span class="nk-post-comments-count">0</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-2">Adventure</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="{{ route('product.detail') }}">Rise of Kingdoms</a></h2>
                    <div class="nk-gap"></div>
                    <a href="{{ route('product.detail') }}" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">ORDER</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                </div>
                <!-- END: Post -->
            </div>

            <div class="col-md-6 col-lg-3">
                <!-- START: Post -->
                <div class="nk-blog-post">
                    <a href="{{ route('product.detail') }}" class="nk-post-img">
                        <img src="https://gamemobile.io/assets/uploads/1618626980.png" alt="For good, too though, in consequence">
                        <span class="nk-post-comments-count">0</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-2">Adventure</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="{{ route('product.detail') }}">Rise of Kingdoms</a></h2>
                    <div class="nk-gap"></div>
                    <a href="{{ route('product.detail') }}" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">ORDER</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                </div>
                <!-- END: Post -->
            </div>          
        </div>
    </div>
    <!-- END: Latest News -->

            </aside>
            <!-- END: Sidebar -->
            <div class="nk-pagination nk-pagination-center">
                <a href="#" class="nk-pagination-prev">
                    <span class="ion-ios-arrow-back"></span>
                </a>
                <nav>
                    <a class="nk-pagination-current" href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <span>...</span>
                    <a href="#">14</a>
                </nav>
                <a href="#" class="nk-pagination-next">
                    <span class="ion-ios-arrow-forward"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="nk-gap-4"></div>
@endsection
