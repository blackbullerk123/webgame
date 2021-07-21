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

    <div class="nk-gap-1"></div>
    <!-- END: Breadcrumbs -->

    <div class="container">
        <div class="row vertical-gap">
            <div class="col-lg-3">
                @include('layout_index.customer.nav')
            </div>
            <div class="col-lg-9">
                <h3 class="text-main-1">Purchase points</h3>
                <div class="box-header">
                    @if (session('information'))
                        <div class="alert alert-warning">{{ session('information') }}</div>
                    @endif
                </div>
                <div class="nk-gap"></div>
                <!-- START: Tabs  -->
                <div class="nk-tabs">
                    <!--
                                    Additional Classes:
                                        .nav-tabs-fill
                                -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#tabs-1-1" role="tab" data-toggle="tab">Bank</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-2" role="tab" data-toggle="tab">Momo wallet</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="tabs-1-1">
                            <div class="nk-gap"></div>
                            <p>- Conversion rate: $100 = 100 Points.</p>
                            <p>- After pressing the deposit button, you pay online or transfer money to the bank with the
                                transfer content recorded in the Deposit - Withdrawal history table.</p>
                            <div class="nk-gap"></div>
                            <form action="{{ route('purchase_points.update', [Auth::user()->id, 'Bank']) }}" method="post"enctype="multipart/form-data">
                               @csrf
                                <div class="form-group">
                                    <p>Points to purchase:</p>
                                    <input type="number" min="0" class="form-control" id="amount_dep_bank" placeholder="Your point to purchase..." name="amount_dep" style="width: 200px;">
                                    <!-- <select class="form-control" id="amount_dep_bank" name="amount_dep" style="width: 200px;">
                                        <option value="100">100 Points</option>
                                        <option value="200">200 Points</option>
                                        <option value="500">500 Points</option>
                                        <option value="1000">1,000 Points</option>
                                        <option value="1200">1,200 Points</option>
                                        <option value="1500">1,500 Points</option>
                                        <option value="2000">2,000 Points</option>
                                        <option value="2200">2,200 Points</option>
                                        <option value="2500">2,500 Points</option>
                                        <option value="3000">3,000 Points</option>
                                        <option value="3200">3,200 Points</option>
                                        <option value="3500">3,500 Points</option>
                                        <option value="4000">4,000 Points</option>
                                        <option value="4200">4,200 Points</option>
                                        <option value="4500">4,500 Points</option>
                                        <option value="5000">5,000 Points</option>
                                        <option value="5200">5,200 Points</option>
                                        <option value="5500">5,500 Points</option>
                                        <option value="6000">6,000 Points</option>
                                    </select> -->
                                </div>
                                <button class="nk-btn nk-btn-rounded nk-btn-color-main-1">Purchase</button>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tabs-1-2">
                            <div class="nk-gap"></div>
                            <p>- Conversion rate: $100 = 100 Points.</p>
                            <p>- After pressing the deposit button, you pay via MoMo with the transfer content recorded in
                                the Deposit - Withdrawal history table.</p>
                            <div class="nk-gap"></div>
                            <form action="{{ route('purchase_points.update', [Auth::user()->id, 'Momo']) }}" method="post"enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <p>Points to purchase:</p>
                                    <select class="form-control" id="amount_dep_bank" name="amount_dep" style="width: 200px;">
                                        <option value="100">100 Points</option>
                                        <option value="200">200 Points</option>
                                        <option value="500">500 Points</option>
                                        <option value="1000">1,000 Points</option>
                                        <option value="1200">1,200 Points</option>
                                        <option value="1500">1,500 Points</option>
                                        <option value="2000">2,000 Points</option>
                                        <option value="2200">2,200 Points</option>
                                        <option value="2500">2,500 Points</option>
                                        <option value="3000">3,000 Points</option>
                                        <option value="3200">3,200 Points</option>
                                        <option value="3500">3,500 Points</option>
                                        <option value="4000">4,000 Points</option>
                                        <option value="4200">4,200 Points</option>
                                        <option value="4500">4,500 Points</option>
                                        <option value="5000">5,000 Points</option>
                                        <option value="5200">5,200 Points</option>
                                        <option value="5500">5,500 Points</option>
                                        <option value="6000">6,000 Points</option>
                                    </select>
                                </div>
                                <button class="nk-btn nk-btn-rounded nk-btn-color-main-1">Purchase</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END: Tabs -->
            </div>
        </div>
    </div>

    <div class="nk-gap-2"></div>

@endsection
