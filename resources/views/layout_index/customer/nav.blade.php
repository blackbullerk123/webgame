<style>
    #img1 {
        height: 10%;
        width: 16%;
        position: absolute;
    }

    .btn-secondary {
        background-color: #293139;
        border-color: #293139;
        margin-top: 10px;
    }

    #note {
        text-align: left;
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
            <p>Hello, <b style="color: #dd163b">{{ Auth::user()->name }}</b> <br>
                <a href="{{ route('logout') }}" id="tg-currenty" aria-haspopup="true" aria-expanded="false">
                    Logout
                </a>
            </p>
        </div>
        <hr>
        <ul class="list-group list-group-flush">
            <a href="{{ route('order') }}" class="btn btn-secondary">
                <i class="las la-home aiz-side-nav-icon"></i>
                <span class="aiz-side-nav-text">Bills</span>
            </a>
            <a href="{{ route('purchase_points') }}" class="btn btn-secondary">
                <i class="las la-hourglass-half aiz-side-nav-icon"></i>
                <span class="aiz-side-nav-text">
                    Purchase Points
                </span>
            </a>
            <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-secondary">
                <i class="las la-luggage-cart aiz-side-nav-icon"></i>
                <span class="aiz-side-nav-text">
                    Withdraw Points
                </span>
            </a>
            <a href="{{ route('transaction_history') }}" class="btn btn-secondary">
                <i class="las la-check-circle aiz-side-nav-icon"></i>
                <span class="aiz-side-nav-text">
                    Transaction History
                </span>
            </a>
            <a href="{{ route('profile') }}" class="btn btn-secondary">
                <i class="las la-user aiz-side-nav-icon"></i>
                <span class="aiz-side-nav-text">Manage Profile</span>
            </a>
        </ul>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Withdraw points</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group"> <label>Number of withdrawal points</label> <input class="form-control"
                        name="amount" id="amount" type="number" step="1" placeholder=" 50000 "> </div>
                <div class="form-group"> <label>Notes</label>
                    <div class="controls">
                        <textarea name="note" id="note" class="form-control" rows="5">Tên tài khoản :  / 
Số tài khoản: / 
Tên ngân hàng : /                     
                    </textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Withdraw Points</button>
            </div>
        </div>
    </div>
</div>
<!-- END: Now Playing -->
