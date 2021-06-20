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
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-3" role="tab" data-toggle="tab">Phone card</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="tabs-1-1">
                            <div class="nk-gap"></div>
                            <p>- Conversion rate: 1000 VND = 1000 Points.</p>
                            <p>- After pressing the deposit button, you pay online or transfer money to the bank with the
                                transfer content recorded in the Deposit - Withdrawal history table.</p>
                            <div class="nk-gap"></div>
                            <div class="form-group"> 
                                <p>Points to purchase:</p> 
                                <select class="form-control"id="amount_dep_bank">
                                    <option value="7600">7,600</option>
                                    <option value="15200">15,200</option>
                                    <option value="20000">20,000</option>
                                    <option value="22800">22,800</option>
                                    <option value="38000">38,000</option>
                                    <option value="50000">50,000</option>
                                    <option value="76000">76,000</option>
                                    <option value="100000">100,000</option>
                                    <option value="152000">152,000</option>
                                    <option value="200000">200,000</option>
                                    <option value="228000">228,000</option>
                                    <option value="300000">300,000</option>
                                    <option value="365000">365,000</option>
                                    <option value="400000">400,000</option>
                                    <option value="500000">500,000</option>
                                    <option value="600000">600,000</option>
                                    <option value="700000">700,000</option>
                                    <option value="730000">730,000</option>
                                    <option value="800000">800,000</option>
                                    <option value="900000">900,000</option>
                                    <option value="1000000">1,000,000</option>
                                    <option value="2000000">2,000,000</option>
                                    <option value="5000000">5,000,000</option>
                                    <option value="10000000">10,000,000</option>
                                    <option value="20000000">20,000,000</option>
                                    <option value="50000000">50,000,000</option>
                                    <option value="100000000">100,000,000</option>
                                </select> 
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tabs-1-2">
                            <div class="nk-gap"></div>
                            <p>- Conversion rate: 1000 VND = 1000 Points.</p>
                            <p>- After pressing the deposit button, you pay via MoMo with the transfer content recorded in
                                the Deposit - Withdrawal history table.</p>
                            <div class="nk-gap"></div>
                            <div class="form-group"> 
                                <p>Points to purchase:</p> 
                                <select class="form-control"id="amount_dep_bank">
                                    <option value="7600">7,600</option>
                                    <option value="15200">15,200</option>
                                    <option value="20000">20,000</option>
                                    <option value="22800">22,800</option>
                                    <option value="38000">38,000</option>
                                    <option value="50000">50,000</option>
                                    <option value="76000">76,000</option>
                                    <option value="100000">100,000</option>
                                    <option value="152000">152,000</option>
                                    <option value="200000">200,000</option>
                                    <option value="228000">228,000</option>
                                    <option value="300000">300,000</option>
                                    <option value="365000">365,000</option>
                                    <option value="400000">400,000</option>
                                    <option value="500000">500,000</option>
                                    <option value="600000">600,000</option>
                                    <option value="700000">700,000</option>
                                    <option value="730000">730,000</option>
                                    <option value="800000">800,000</option>
                                    <option value="900000">900,000</option>
                                    <option value="1000000">1,000,000</option>
                                    <option value="2000000">2,000,000</option>
                                    <option value="5000000">5,000,000</option>
                                    <option value="10000000">10,000,000</option>
                                    <option value="20000000">20,000,000</option>
                                    <option value="50000000">50,000,000</option>
                                    <option value="100000000">100,000,000</option>
                                </select> 
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tabs-1-3">
                            <div class="nk-gap"></div>
                            <h4>Vui lòng liên hệ với page hỗ trợ nạp: <a href="https://www.facebook.com/napgamesales/">https://www.facebook.com/napgamesales/ </a></h4>
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
                        </div>
                    </div>
                </div>
                <!-- END: Tabs -->
            </div>
        </div>
    </div>

    <div class="nk-gap-2"></div>

@endsection
