<style>
    #img1 {
        height: 10%;
        width: 16%;
        position: absolute;
    }

    .btn-secondary {
        background-color: #293139;
        border-color: #293139;
        margin-top: 8px;
    }

    @media only screen and (max-width: 762px) {
        #img1 {
            width: 27%;
            height: 6%;
        }
    }

</style>
<!-- START: Now Playing -->
<div class="nk-match">
    <div class="px-4 text-center mb-4">
        <span class="avatar avatar-md mb-3">
            <img src="https://gamemobile.io/assets/uploads/1618905948.png" style="height: 80px; width: 80px"
                class="image rounded-circle">
        </span>
        <div style="margin-top: 10px">
            <p class="mb-0">Surplus: <span class="text-main-1">0</span> Points</p>
            <p>Hello, <b></b> <br>
                <a href="{{ route('logout') }}" id="tg-currenty" aria-haspopup="true" aria-expanded="false">
                    Đăng xuất
                </a>
            </p>
        </div>
        <ul class="list-group list-group-flush">
            <a href="{{ route('order') }}" class="btn btn-secondary">
                <i class="las la-home aiz-side-nav-icon"></i>
                <span class="aiz-side-nav-text">Bills</span>
            </a>
            <a href="{{ route('purchase_points') }}" class="btn btn-secondary">
                <i class="las la-hourglass-half aiz-side-nav-icon"></i>
                <span class="aiz-side-nav-text">
                    Purchase points
                </span>
            </a>
            <a href="#" class="btn btn-secondary">
                <i class="las la-luggage-cart aiz-side-nav-icon"></i>
                <span class="aiz-side-nav-text">
                    Withdraw points
                </span>
            </a>
            <a href="#" class="btn btn-secondary">
                <i class="las la-check-circle aiz-side-nav-icon"></i>
                <span class="aiz-side-nav-text">
                    Completed Delivery
                </span>
            </a>
            <a href="#" class="btn btn-secondary">
                <i class="las la-user aiz-side-nav-icon"></i>
                <span class="aiz-side-nav-text">Manage Profile</span>
            </a>
        </ul>
    </div>
</div>
<!-- END: Now Playing -->
