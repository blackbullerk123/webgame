@extends('layout_index.master')
@section('content')
<style>
#img1{
    position: absolute;
}
@media only screen and (max-width: 762px) {
    #img1{
        width: 27%;
        height: 6%;
    }
}

</style>  
        <!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
-->
@if(isset($product))
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.html" class="nk-nav-logo">
                <img src="{{asset('assets/images/post-2-fw.jpg')}}" alt="" width="120">
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
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        
        
        <li><a href="index.html">Home</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><a href="#">Blog</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span>Blog FullWidth</span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->
    
<div class="container">
    <!-- START: Posts FullWidth -->
   <h4>IOS - Yong Heroes</h4>
    <div class="nk-blog-post">
    <img id="img1" src="{{asset($product->image)}}" alt="We found a witch! May we burn her?" >
    </div>
        <!-- START: Post -->
    <div class="col-sm-7" style="margin-left: 25%">
        <table class="table table-striped custom-table float-left">
                <thead>              
                    <tr>
                    <th scope="col" style="width: 35%;">Package name</th>
                    <th scope="col" style="width: 15%;">Value</th>
                    <th scope="col" style="width: 15%;">Point</th>
                    <th scope="col" style="width: 15%;">Education</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                @if(isset($product->package_name))
                @for ($i = 0;$i < count(explode(',', $product->package_name)); $i++)
                    <tr scope="row">
                            <td><a href="#">{{explode(',', $product->package_name)[$i]}}</a></td>
                            <td>{{ explode(',', $product->package_price)[$i] }}</td>
                            <td>{{ explode(',', $product->point_number)[$i] }}</td>
                            <td><a href="{{ route('checkout.bill', [$product->product_id, $i]) }}" class="more">Details</a></td>                   
                    </tr>  
                @endfor                            
                @endif
                </tbody>
            </table>
    </div><br><br><br><br><br><br><br><br><br><br>
        <div class="nk-blog-post">
            <div class="nk-gap-2"></div>
            <div class="row vertical-gap">
                <div class="col-md-8 col-lg-9">
                    <h2 class="nk-post-title h4"><a href="blog-article.html">Smell magic in the air. Or maybe barbecue</a></h2>
                    <div class="nk-gap"></div>
                    <div class="nk-post-text">
                        <p>She clutched the matron by the arm, and forcing her into a chair by the bedside, was about to speak, when looking round, she caught sight of the two old women bending forward in the attitude of eager listeners. They belong to the old gentleman, said Oliver, wringing his hands; to the good, kind, old gentleman who took me into his house, and had me nursed, when I was near dying of the fever . Oh, pray send them back; send him back the books and money . Keep me here all my life long; but pray, pray send them back...</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post -->
        
        <!-- START: Post -->
        <div class="nk-blog-post">
            <a href="blog-article.html" class="nk-post-img">
                <img src="{{asset('assets/images/post-2-fw.jpg')}}" alt="Grab your sword and fight the Horde">
            </a>
            <div class="nk-gap-2"></div>
            <div class="row vertical-gap">
                <div class="col-md-8 col-lg-9">
                    <div class="nk-gap"></div>
                    <div class="nk-post-text">
                        <p>Looking cautiously round, to ascertain that they were not overheard, the two hags cowered nearer to the fire, and chuckled heartily. Nancy stooped below the shutters, and Oliver heard the sound of a bell. They crossed to the opposite side of the street, and stood for a few moments under a lamp. A noise, as if a sash window were gently raised, was heard; and soon afterwards the door softly opened. Mr. Sikes then seized the terrified boy by the collar with very little ceremony; and all three were quickly inside the house...</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                </div>
            </div>
        </div>
        <!-- END: Post -->
        
        <!-- START: Post -->
        <div class="nk-blog-post">
            <a href="blog-article.html" class="nk-post-img">
                <img src="{{ asset('assets/images/post-3-fw.jpg') }}" alt="We found a witch! May we burn her?">
            </a>
            <div class="nk-gap-2"></div>
            <div class="row vertical-gap">
                <div class="col-md-8 col-lg-9">
                    <h2 class="nk-post-title h4"><a href="blog-article.html">We found a witch! May we burn her?</a></h2>
                    <div class="nk-gap"></div>
                    <div class="nk-post-text">
                        <p>Looking cautiously round, to ascertain that they were not overheard, the two hags cowered nearer to the fire, and chuckled heartily. Nancy stooped below the shutters, and Oliver heard the sound of a bell. They crossed to the opposite side of the street, and stood for a few moments under a lamp. A noise, as if a sash window were gently raised, was heard; and soon afterwards the door softly opened. Mr. Sikes then seized the terrified boy by the collar with very little ceremony; and all three were quickly inside the house...</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post -->
        
        <!-- START: Post -->
        <div class="nk-blog-post">
            <a href="blog-article.html" class="nk-post-img">
                <img src="{{ asset('assets/images/post-4-fw.jpg') }}" alt="For good, too though, in consequence">
            </a>
            <div class="nk-gap-2"></div>
            <div class="row vertical-gap">
                <div class="col-md-8 col-lg-9">
                    <div class="nk-gap"></div>
                    <div class="nk-post-text">
                        <p>At length one of them called out in a clear, polite, smooth dialect, not unlike in sound to the Italian: and therefore I returned an answer in that language, hoping at least that the cadence might be more agreeable to his ears. But it must be observed, that this island cannot move beyond the extent of the dominions below, nor can it rise above the height of four miles. For which the astronomers (who have written large systems concerning the stone) assign the following reason: that the magnetic virtue does...</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post -->
        
        <!-- START: Post -->
        <div class="nk-blog-post">
            <a href="blog-article.html" class="nk-post-img">
                <img src="{{ asset('assets/images/post-5-fw.jpg') }}" alt="He made his passenger captain of one">
            </a>
            <div class="nk-gap-2"></div>
            <div class="row vertical-gap">
                <div class="col-md-8 col-lg-9">
                    <div class="nk-gap"></div>
                    <div class="nk-post-text">
                        <p>Now the races of these two have been for some ages utterly extinct, and besides to discourse any further of them would not be at all to my purpose. But the concern I have most at heart is for our Corporation of Poets, from whom I am preparing a petition to your Highness, to be subscribed with the names of one hundred and thirty-six of the first race, but whose immortal productions are never likely to reach your eyes, though each of them is now an humble and an earnest appellant for the laurel, and has large comely volumes ready to show for a support to his pretensions...</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post -->
    </div>
    <!-- END: Posts FullWidth -->
</div>

<div class="nk-gap-2"></div>
@endif

@endsection