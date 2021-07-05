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
        <div class="col-lg-3">
            <div class="nk-feature-1">
                <div class="nk-feature-icon" style="width:70px">
                    <img src="{{ asset('images/card-itunes.png')}}" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="{{ route('game.type.view', 'Card') }}">Card</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="{{ route('game.type.view', 'Card') }}">View Card</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="nk-feature-1">
                <div class="nk-feature-icon" style="width:70px">
                    <img src="{{ asset('images/android.png') }}" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="{{ route('game.type.view', 'Android') }}">ANDROID</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="{{ route('game.type.view', 'Android') }}">View Games</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="nk-feature-1">
                <div class="nk-feature-icon" style="width:70px">
                    <img src="{{ asset('images/ios.png') }}" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="{{ route('game.type.view', 'IOS') }}">IOS</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="{{ route('game.type.view', 'IOS') }}">View Games</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="nk-feature-1">
                <div class="nk-feature-icon" style="width:70px">
                    <img src="{{ asset('images/wallet.png') }}" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="{{ route('game.type.view', 'Wallet') }}">Wallet  IOS</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="{{ route('game.type.view', 'Wallet') }}">View Games</a></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Categories -->


    <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">All</span> {{ $type }}</span></h3>
    <div class="nk-gap"></div>
    <div class="nk-blog-grid">
        <div class="row">
            @if(isset($game_type))
                @foreach ($game_type as $gt )
                <div class="col-md-6 col-lg-3">
                    <!-- START: Post -->
                    <div class="nk-blog-post">
                        <a href="{{ route('product.detail', $gt->id) }}" class="nk-post-img">
                            <img src="{{asset($gt->image)}}" style="height: 300px" alt="He made his passenger captain of one">            
                        </a>
                        <div class="nk-gap"></div>
                        <h2 class="nk-post-title h4"><a href="{{ route('product.detail', $gt->id) }}">{{ $gt->name }} - {{ $gt->os_supported }}</a></h2>
                        
                        <div class="nk-gap"></div>
                        <a href="{{ route('product.detail', $gt->id) }}" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">ORDER</a>
                        <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> {{ date('d/m/Y ', strtotime($gt->created_at)) }}</div>
                    </div>
                    <!-- END: Post -->
                </div>  
                @endforeach  
            @endif  
        </div>
        <div class="nk-pagination nk-pagination-center">
            {{ $game_type->links('vendor.pagination.bootstrap-4') }}
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
