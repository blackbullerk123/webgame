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
                <h3 class="text-main-1">Load points</h3>
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
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-3" role="tab" data-toggle="tab">Phone card</a>
                        </li> --}}
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
                                    <select class="form-control" id="amount_dep_bank" name="amount_dep" style="width: 200px;">
                                        <option value="100">100 Points</option>
                                        <option value="200">200 Points</option>
                                        <option value="500">500 Points</option>
                                        <option value="1,000">1,000 Points</option>
                                        <option value="1,200">1,200 Points</option>
                                        <option value="1,500">1,500 Points</option>
                                        <option value="2,000">2,000 Points</option>
                                        <option value="2,200">2,200 Points</option>
                                        <option value="2,500">2,500 Points</option>
                                        <option value="3,000">3,000 Points</option>
                                        <option value="3,200">3,200 Points</option>
                                        <option value="3,500">3,500 Points</option>
                                        <option value="4,000">4,000 Points</option>
                                        <option value="4,200">4,200 Points</option>
                                        <option value="4,500">4,500 Points</option>
                                        <option value="5,000">5,000 Points</option>
                                        <option value="5,200">5,200 Points</option>
                                        <option value="5,500">5,500 Points</option>
                                        <option value="6,000">6,000 Points</option>
                                    </select>
                                </div>
                                <button class="nk-btn nk-btn-rounded nk-btn-color-main-1">Button</button>
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
                                        <option value="1,000">1,000 Points</option>
                                        <option value="1,200">1,200 Points</option>
                                        <option value="1,500">1,500 Points</option>
                                        <option value="2,000">2,000 Points</option>
                                        <option value="2,200">2,200 Points</option>
                                        <option value="2,500">2,500 Points</option>
                                        <option value="3,000">3,000 Points</option>
                                        <option value="3,200">3,200 Points</option>
                                        <option value="3,500">3,500 Points</option>
                                        <option value="4,000">4,000 Points</option>
                                        <option value="4,200">4,200 Points</option>
                                        <option value="4,500">4,500 Points</option>
                                        <option value="5,000">5,000 Points</option>
                                        <option value="5,200">5,200 Points</option>
                                        <option value="5,500">5,500 Points</option>
                                        <option value="6,000">6,000 Points</option>
                                    </select>
                                </div>
                                <button class="nk-btn nk-btn-rounded nk-btn-color-main-1">Button</button>
                            </form>
                        </div>
                        {{-- <div role="tabpanel" class="tab-pane fade" id="tabs-1-3">
                            <div class="nk-gap"></div>
                            <h4>Vui lòng liên hệ với page hỗ trợ nạp: <a
                                    href="https://www.facebook.com/napgamesales/">https://www.facebook.com/napgamesales/
                                </a></h4>
                            <p>- Conversion rate:</p>
                            <div class="nk-gap"></div>
                            <div class="col-lg-9">
                                <table class="table table-striped custom-table float-left">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 30%;">Network</th>
                                            <th scope="col" style="width: 30%;">Denominations</th>
                                            <th scope="col" style="width: 30%;">Points</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Viettel</td>
                                            <td>10,000</td>
                                            <td>7,600</td>
                                        </tr>
                                        <tr>
                                            <td>Viettel</td>
                                            <td>20,000</td>
                                            <td>15,200</td>
                                        </tr>
                                        <tr>
                                            <td>Viettel</td>
                                            <td>30,000</td>
                                            <td>22,800</td>
                                        </tr>
                                        <tr>
                                            <td>Viettel</td>
                                            <td>50,000</td>
                                            <td>38,000</td>
                                        </tr>
                                        <tr>
                                            <td>Viettel</td>
                                            <td>100,000</td>
                                            <td>76,000</td>
                                        </tr>
                                        <tr>
                                            <td>Viettel</td>
                                            <td>200,000</td>
                                            <td>152,000</td>
                                        </tr>
                                        <tr>
                                            <td>Viettel</td>
                                            <td>300,000</td>
                                            <td>228,000</td>
                                        </tr>
                                        <tr>
                                            <td>Viettel</td>
                                            <td>500,000</td>
                                            <td>365,000</td>
                                        </tr>
                                        <tr>
                                            <td>Viettel</td>
                                            <td>1,000,000</td>
                                            <td>730,000</td>
                                        </tr>
                                        <tr>
                                            <td>Mobifone</td>
                                            <td>10,000</td>
                                            <td>7,500</td>
                                        </tr>
                                        <tr>
                                            <td>Mobifone</td>
                                            <td>20,000</td>
                                            <td>15,000</td>
                                        </tr>
                                        <tr>
                                            <td>Mobifone</td>
                                            <td>30,000</td>
                                            <td>22,500</td>
                                        </tr>
                                        <tr>
                                            <td>Mobifone</td>
                                            <td>50,000</td>
                                            <td>37,500</td>
                                        </tr>
                                        <tr>
                                            <td>Mobifone</td>
                                            <td>100,000</td>
                                            <td>75,000</td>
                                        </tr>
                                        <tr>
                                            <td>Mobifone</td>
                                            <td>200,000</td>
                                            <td>150,000</td>
                                        </tr>
                                        <tr>
                                            <td>Mobifone</td>
                                            <td>300,000</td>
                                            <td>225,000</td>
                                        </tr>
                                        <tr>
                                            <td>Mobifone</td>
                                            <td>500,000</td>
                                            <td>365,000</td>
                                        </tr>
                                        <tr>
                                            <td>Mobifone</td>
                                            <td>1,000,000</td>
                                            <td>730,000</td>
                                        </tr>
                                        <tr>
                                            <td>Vinaphone</td>
                                            <td>10,000</td>
                                            <td>7,500</td>
                                        </tr>
                                        <tr>
                                            <td>Vinaphone</td>
                                            <td>20,000</td>
                                            <td>15,000</td>
                                        </tr>
                                        <tr>
                                            <td>Vinaphone</td>
                                            <td>30,000</td>
                                            <td>22,500</td>
                                        </tr>
                                        <tr>
                                            <td>Vinaphone</td>
                                            <td>50,000</td>
                                            <td>37,500</td>
                                        </tr>
                                        <tr>
                                            <td>Vinaphone</td>
                                            <td>100,000</td>
                                            <td>75,000</td>
                                        </tr>
                                        <tr>
                                            <td>Vinaphone</td>
                                            <td>200,000</td>
                                            <td>150,000</td>
                                        </tr>
                                        <tr>
                                            <td>Vinaphone</td>
                                            <td>300,000</td>
                                            <td>225,000</td>
                                        </tr>
                                        <tr>
                                            <td>Vinaphone</td>
                                            <td>500,000</td>
                                            <td>365,000</td>
                                        </tr>
                                        <tr>
                                            <td>Vinaphone</td>
                                            <td>1,000,000</td>
                                            <td>730,000</td>
                                        </tr>
                                        <tr>
                                            <td>Vietnam Mobile</td>
                                            <td>10,000</td>
                                            <td>8,000</td>
                                        </tr>
                                        <tr>
                                            <td>Vietnam Mobile</td>
                                            <td>20,000</td>
                                            <td>16,000</td>
                                        </tr>
                                        <tr>
                                            <td>Vietnam Mobile</td>
                                            <td>30,000</td>
                                            <td>24,000</td>
                                        </tr>
                                        <tr>
                                            <td>Vietnam Mobile</td>
                                            <td>50,000</td>
                                            <td>40,000</td>
                                        </tr>
                                        <tr>
                                            <td>Vietnam Mobile</td>
                                            <td>100,000</td>
                                            <td>80,000</td>
                                        </tr>
                                        <tr>
                                            <td>Vietnam Mobile</td>
                                            <td>200,000</td>
                                            <td>160,000</td>
                                        </tr>
                                        <tr>
                                            <td>Vietnam Mobile</td>
                                            <td>300,000</td>
                                            <td>240,000</td>
                                        </tr>
                                        <tr>
                                            <td>Vietnam Mobile</td>
                                            <td>500,000</td>
                                            <td>400,000</td>
                                        </tr>
                                        <tr>
                                            <td>Vietnam Mobile</td>
                                            <td>1,000,000</td>
                                            <td>800,000</td>
                                        </tr>
                                        <tr> </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!-- END: Tabs -->
            </div>
        </div>
    </div>

    <div class="nk-gap-2"></div>

@endsection
