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

    

    <div class="nk-main">
        
            <div class="nk-gap-2"></div>
        

        @if (session('status'))
            {{session('status')}}
        @endif
<div class="container">

    <!-- START: Image Slider -->
    <div class="nk-image-slider" data-autoplay="8000">
        
        
        <div class="nk-image-slider-item">
            <img src="{{ asset('assets/images/slide-1.jpg') }}" alt="" class="nk-image-slider-img" data-thumb="{{ asset('assets/images/slide-1-thumb.jpg') }}">
            
            <div class="nk-image-slider-content">
                
                    <h3 class="h4">As we Passed, I remarked</h3>
                    <p class="text-white">As we passed, I remarked a beautiful church-spire rising above some old elms in the park; and before them, in the midst of a lawn, chimneys covered with ivy, and the windows shining in the sun.</p>
                    <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">ORDER</a>
                
            </div>
            
        </div>
        
        <div class="nk-image-slider-item">
            <img src="{{ asset('assets/images/slide-2.jpg')}}" alt="" class="nk-image-slider-img" data-thumb="{{ asset('assets/images/slide-2-thumb.jpg')}}">
            
            <div class="nk-image-slider-content">
                
                    <h3 class="h4">He made his passenger captain of one</h3>
                    <p class="text-white">Now the races of these two have been for some ages utterly extinct, and besides to discourse any further of them would not be at all to my purpose. But the concern I have most at heart is for our Corporation of Poets, from whom I am preparing a petition to your Highness,  to be subscribed with the names of one...</p>
                    <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">ORDER</a>
                
            </div>
            
        </div>
        
        <div class="nk-image-slider-item">
            <img src="{{ asset('assets/images/slide-3.jpg')}}" alt="" class="nk-image-slider-img" data-thumb="{{ asset('assets/images/slide-3-thumb.jpg')}}">
            
        </div>
        
        <div class="nk-image-slider-item">
            <img src="{{ asset('assets/images/slide-4.jpg')}}" alt="" class="nk-image-slider-img" data-thumb="{{ asset('assets/images/slide-4-thumb.jpg')}}">
            
            <div class="nk-image-slider-content">
                
                    <h3 class="h4">At length one of them called out in a clear</h3>
                    <p class="text-white">TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high...</p>
                    <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">ORDER</a>
                
            </div>
            
        </div>
        
        <div class="nk-image-slider-item">
            <img src="{{ asset('assets/images/slide-5.jpg')}}" alt="" class="nk-image-slider-img" data-thumb="{{ asset('assets/images/slide-5-thumb.jpg')}}">
            
            <div class="nk-image-slider-content">
                
                    <h3 class="h4">For good, too though, in consequence</h3>
                    <p class="text-white">She gave my mother such a turn, that I have always been convinced I am indebted to Miss Betsey for having been born on a Friday. The word was appropriate to the moment.</p>
                    <p class="text-white">My mother was so much worse that Peggotty, coming in with the teaboard and candles, and seeing at a glance how ill she was, - as Miss Betsey might have done sooner if there had been light enough, - conveyed her upstairs to her own room with all speed; and immediately dispatched Ham Peggotty, her nephew, who had been for some days past secreted in the house...</p>
                    <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">ORDER</a>
                
            </div>
            
        </div>
        
    </div>
    <!-- END: Image Slider -->

    <!-- START: Categories -->
    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="{{ asset('assets/images/icon-mouse.png')}}" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="#">PC</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
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

    <!-- START: Latest News -->
    <div class="nk-gap-2"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Top</span> Games</span></h3>
    <div class="nk-gap"></div>

    <div class="nk-news-box">
        <div class="nk-news-box-list">
            <div class="nano">
                <div class="nano-content">
                    
                    
                    <div class="nk-news-box-item nk-news-box-item-active">
                        <div class="nk-news-box-item-img">
                            <img src="https://gamemobile.io/assets/uploads/1618562274.png" alt="Smell magic in the air. Or maybe barbecue">
                        </div>
                        <img src="https://muathe123.vn/pictures/images/game-Goddess-MUA%20(8).jpg" alt="Smell magic in the air. Or maybe barbecue" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">Smell magic in the air. Or maybe barbecue</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-4">MMO</span>
                        </span>
                        
                        <div class="nk-news-box-item-text">
                            <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
                        </div>
                        <a href="{{ route('product.detail') }}" class="nk-news-box-item-url">ORDER</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 18, 2018</div>
                    </div>
                    
                    
                    <div class="nk-news-box-item">
                        <div class="nk-news-box-item-img">
                            <img src="https://gamemobile.io/assets/uploads/1618626980.png" alt="Grab your sword and fight the Horde">
                        </div>
                        <img src="{{ asset('assets/images/post-2.jpg')}}" alt="Grab your sword and fight the Horde" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">Grab your sword and fight the Horde</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-1">Action</span>
                        </span>
                        
                        <div class="nk-news-box-item-text">
                            <p>For good, too; though, in consequence of my previous emotions, I was still occasionally seized with a stormy sob . After we had jogged on for some little time, I asked the carrier...</p>
                        </div>
                        <a href="{{ route('product.detail') }}" class="nk-news-box-item-url">ORDER</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 5, 2018</div>
                    </div>
                    
                    
                    <div class="nk-news-box-item">
                        <div class="nk-news-box-item-img">
                            <img src="{{ asset('assets/images/post-3-sm.jpg')}}" alt="We found a witch! May we burn her?">
                        </div>
                        <img src="{{ asset('assets/images/post-3.jpg')}}" alt="We found a witch! May we burn her?" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">We found a witch! May we burn her?</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-2">Adventure</span>
                        </span>
                        
                        <div class="nk-news-box-item-text">
                            <p>And she went on planning to herself how she would manage it. `They must go by the carrier,' she thought; `and how funny it'll seem, sending presents to one's own feet!...</p>
                        </div>
                        <a href="{{ route('product.detail') }}" class="nk-news-box-item-url">ORDER</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Aug 27, 2018</div>
                    </div>
                    
                    
                    <div class="nk-news-box-item">
                        <div class="nk-news-box-item-img">
                            <img src="{{ asset('assets/images/post-4-sm.jpg')}}" alt="For good, too though, in consequence">
                        </div>
                        <img src="{{ asset('assets/images/post-4.jpg')}}" alt="For good, too though, in consequence" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">For good, too though, in consequence</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-3">Strategy</span>
                        </span>
                        
                        <div class="nk-news-box-item-text">
                            <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                        </div>
                        <a href="{{ route('product.detail') }}" class="nk-news-box-item-url">ORDER</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Aug 14, 2018</div>
                    </div>
                    
                    
                    <div class="nk-news-box-item">
                        <div class="nk-news-box-item-img">
                            <img src="{{ asset('assets/images/post-5-sm.jpg')}}" alt="He made his passenger captain of one">
                        </div>
                        <img src="{{ asset('assets/images/post-5.jpg')}}" alt="He made his passenger captain of one" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">He made his passenger captain of one</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-5">Indie</span>
                        </span>
                        
                        <div class="nk-news-box-item-text">
                            <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                        </div>
                        <a href="{{ route('product.detail') }}" class="nk-news-box-item-url">ORDER</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Jul 23, 2018</div>
                    </div>
                    
                    
                    <div class="nk-news-box-item">
                        <div class="nk-news-box-item-img">
                            <img src="{{ asset('assets/images/post-6-sm.jpg')}}" alt="At first, for some time, I was not able to answer">
                        </div>
                        <img src="{{ asset('assets/images/post-6.jpg')}}" alt="At first, for some time, I was not able to answer" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">At first, for some time, I was not able to answer</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-5">Racing</span>
                        </span>
                        
                        <div class="nk-news-box-item-text">
                            <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                        </div>
                        <a href="{{ route('product.detail') }}" class="nk-news-box-item-url">ORDER</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="nk-news-box-each-info">
            <div class="nano">
                <div class="nano-content">
                    <!-- There will be inserted info about selected news-->
                    <div class="nk-news-box-item-image">
                        <img src="{{ asset('assets/images/post-1.jpg') }}" alt="">
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-4">MMO</span>
                        </span>
                    </div>
                    <h3 class="nk-news-box-item-title">Smell magic in the air. Or maybe barbecue</h3>
                    <div class="nk-news-box-item-text">
                        <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
                    </div>
                    <a href="{{ route('product.detail') }}" class="nk-news-box-item-more">ORDER</a>
                    <div class="nk-news-box-item-date">
                        <span class="fa fa-calendar"></span> Sep 18, 2018
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="nk-gap-2"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">New</span> Games</span></h3>
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

    {{-- <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-8">


            <!-- START: Best Selling -->
            <div class="nk-gap-3"></div>
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Best</span> Selling</span></h3>
            <div class="nk-gap"></div>
            <div class="row vertical-gap">
                
                
                <div class="col-md-6">
                    <div class="nk-product-cat">
                        <a class="nk-product-image" href="store-product.html">
                            <img src="{{ asset('assets/images/product-11-xs.jpg')}}" alt="She gave my mother">
                        </a>
                        <div class="nk-product-cont">
                            <h3 class="nk-product-title h5"><a href="store-product.html">She gave my mother</a></h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 14.00</div>
                            <div class="nk-gap-1"></div>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                        </div>
                    </div>
                </div>
                           
                <div class="col-md-6">
                    <div class="nk-product-cat">
                        <a class="nk-product-image" href="store-product.html">
                            <img src="{{ asset('assets/images/product-12-xs.jpg')}}" alt="A hundred thousand">
                        </a>
                        <div class="nk-product-cont">
                            <h3 class="nk-product-title h5"><a href="store-product.html">A hundred thousand</a></h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 20.00</div>
                            <div class="nk-gap-1"></div>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-6">
                    <div class="nk-product-cat">
                        <a class="nk-product-image" href="store-product.html">
                            <img src="{{ asset('assets/images/product-13-xs.jpg')}}" alt="So saying he unbuckled">
                        </a>
                        <div class="nk-product-cont">
                            <h3 class="nk-product-title h5"><a href="store-product.html">So saying he unbuckled</a></h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 23.00</div>
                            <div class="nk-gap-1"></div>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-6">
                    <div class="nk-product-cat">
                        <a class="nk-product-image" href="store-product.html">
                            <img src="{{ asset('assets/images/product-14-xs.jpg')}}" alt="However, I have reason">
                        </a>
                        <div class="nk-product-cont">
                            <h3 class="nk-product-title h5"><a href="store-product.html">However, I have reason</a></h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 32.00</div>
                            <div class="nk-gap-1"></div>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- END: Best Selling -->
        </div> --}}
        {{-- <div class="col-lg-4">
            <!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
            -->
            <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                <div class="nk-widget">
    <div class="nk-widget-content">
        <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Type something...">
                <button class="nk-btn nk-btn-color-main-1"><span class="ion-search"></span></button>
            </div>
        </form>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">We</span> Are Social</span></h4>
    <div class="nk-widget-content">
        <!--
            Social Links 3

            Additional Classes:
                .nk-social-links-cols-5
                .nk-social-links-cols-4
                .nk-social-links-cols-3
                .nk-social-links-cols-2
        -->
        <ul class="nk-social-links-3 nk-social-links-cols-4">
            <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
            <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
            <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
            <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
            <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
            <li><a class="nk-social-twitter" href="#" target="_blank"><span class="fab fa-twitter"></span></a></li>
            <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>
            <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>

            <!-- Additional Social Buttons
                <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
            -->
        </ul>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Top 3</span> Recent</span></h4>
    <div class="nk-widget-content">
        
            <div class="nk-widget-post">
                <a href="{{ route('product.detail') }}" class="nk-post-image">
                    <img src="https://gamemobile.io/assets/uploads/1618562274.png" alt="">
                </a>
                <h3 class="nk-post-title"><a href="{{ route('product.detail') }}">Smell magic in the air. Or maybe barbecue</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> Sep 18, 2018</div>
            </div>
        
            <div class="nk-widget-post">
                <a href="{{ route('product.detail') }}" class="nk-post-image">
                    <img src="{{ asset('assets/images/post-2-sm.jpg')}}" alt="">
                </a>
                <h3 class="nk-post-title"><a href="{{ route('product.detail') }}">Grab your sword and fight the Horde</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> Sep 5, 2018</div>
            </div>
        
            <div class="nk-widget-post">
                <a href="{{ route('product.detail') }}" class="nk-post-image">
                    <img src="{{ asset('assets/images/post-3-sm.jpg')}}" alt="">
                </a>
                <h3 class="nk-post-title"><a href="{{ route('product.detail') }}">We found a witch! May we burn her?</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> Aug 27, 2018</div>
            </div>
        
    </div>
</div> --}}

            </aside>
            <!-- END: Sidebar -->
        </div>
    </div>
</div>

<div class="nk-gap-4"></div>
@endsection
