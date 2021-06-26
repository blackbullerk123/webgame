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
        @if(isset($slides))
        @foreach($slides as $slide)
        <div class="nk-image-slider-item">
           
            <img src="{{ asset($slide->images) }}" alt="" class="nk-image-slider-img" data-thumb="{{ asset($slide->images) }}">
           
            <div class="nk-image-slider-content">
                
                    <h3 class="h4">{{ $slide->name }}</h3>
                    <p class="text-white">{!! $slide->description !!}</p>
                    {{-- <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">ORDER</a> --}}
                
            </div>
            
        </div>     
        @endforeach
        @endif              
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
                    <h3 class="nk-feature-title"><a href="{{ route('game.type.view', 'Card') }}">Card</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="{{ route('game.type.view', 'Card') }}">View Card</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="{{ asset('images/android.png') }}" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="{{ route('game.type.view', 'Android') }}">ANDROID</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="{{ route('game.type.view', 'Android') }}">View Games</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="{{ asset('images/ios.png') }}" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="{{ route('game.type.view', 'IOS') }}">IOS</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="{{ route('game.type.view', 'IOS') }}">View Games</a></h4>
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
                    
                    @foreach ($game_top as $game)
                    <div class="nk-news-box-item nk-news-box-item-active">
                        <div class="nk-news-box-item-img">
                            <img src="{{ asset($game->image) }}" alt="Smell magic in the air. Or maybe barbecue">
                        </div>
                        <img src="{{ asset($game->thumbnail) }}" alt="Smell magic in the air. Or maybe barbecue" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">{{ $game->name }}</h3>
                        <div class="nk-news-box-item-text">
                            <p>{{ $game->short_des }}</p>
                        </div>
                        <a href="{{ route('product.detail', $game->id) }}" class="nk-news-box-item-url">ORDER</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> {{ date('d/m/Y ', strtotime($game->created_at)) }}</div>
                    </div>
                    @endforeach                                               
                </div>
            </div>
        </div>
        <div class="nk-news-box-each-info">
            <div class="nano">
                <div class="nano-content">
                    <!-- There will be inserted info about selected news-->
                    <div class="nk-news-box-item-image">
                        <img src="{{ asset('assets/images/post-1.jpg') }}" alt="">
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
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="{{ route('product.detail', $pro->id) }}">{{$pro->name}}</a></h2>
                    
                    <div class="nk-gap"></div>
                    <a href="{{ route('product.detail', $pro->id) }}" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">ORDER</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> {{ date('d/m/Y ', strtotime($pro->created_at)) }}</div>
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
