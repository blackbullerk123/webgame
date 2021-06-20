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
                        <a href="#" class="nk-news-box-item-url">ORDER</a>
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
                        <a href="#" class="nk-news-box-item-url">ORDER</a>
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
                        <a href="#" class="nk-news-box-item-url">ORDER</a>
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
                        <a href="#" class="nk-news-box-item-url">ORDER</a>
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
                        <a href="#" class="nk-news-box-item-url">ORDER</a>
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
                        <a href="#" class="nk-news-box-item-url">ORDER</a>
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
                    <a href="#" class="nk-news-box-item-more">ORDER</a>
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
            
            @if(isset($products))
            @foreach($products as $pro)
            <div class="col-md-6 col-lg-3">
                <!-- START: Post -->
                <div class="nk-blog-post">
                    <a href="{{ route('product.detail', $pro->id) }}" class="nk-post-img">
                        <img src="{{asset($pro->image)}}" style="height: 300px" alt="He made his passenger captain of one">
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-5">Indie</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="{{ route('product.detail', $pro->id) }}">{{$pro->name}}</a></h2>
                    
                    <div class="nk-gap"></div>
                    <a href="{{ route('product.detail', $pro->id) }}" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">ORDER</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> {{$pro->created_at}}</div>
                </div>
                <!-- END: Post -->
            </div>
            @endforeach
            @endif
            
            </div>          
        </div>
    </div>
    <!-- END: Latest News -->
            </aside>
            <!-- END: Sidebar -->
        </div>
    </div>
</div>

<div class="nk-gap-4"></div>
@endsection
