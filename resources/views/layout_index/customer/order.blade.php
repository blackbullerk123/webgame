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

    <div class="nk-gap-1"></div>
    <!-- END: Breadcrumbs -->

    <div class="container">
        <div class="row vertical-gap">
            <div class="col-lg-3">
                @include('layout_index.customer.nav')
            </div>
            <div class="col-lg-9">
                <h3 class="text-main-1">Order</h3>
                <div class="nk-gap"></div>
                <table class="table table-striped custom-table float-left">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 10%;">#ID</th>
                            <th scope="col" style="width: 25%;">Product</th>
                            <th scope="col" style="width: 15%;">Quantity</th>
                            <th scope="col" style="width: 15%;">Date</th>
                            <th scope="col" style="width: 15%;">Status</th>
                            <th scope="col" style="width: 15%;">Total point</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr scope="row">


                            <td> 1392</td>
                            <td><a href="#">James Yates</a></td>
                            <td>0.99$</td>
                            <td>19,800</td>
                            <td></td>
                            <td><a href="#" class="more">Details</a></td>

                        </tr>
                        <tr scope="row">


                            <td> 1392</td>
                            <td><a href="#">James Yates</a></td>
                            <td>0.99$</td>
                            <td>19,800</td>
                            <td></td>
                            <td><a href="#" class="more">Details</a></td>

                        </tr>
                        <tr scope="row">


                            <td> 1392</td>
                            <td><a href="#">James Yates</a></td>
                            <td>0.99$</td>
                            <td>19,800</td>
                            <td></td>
                            <td><a href="#" class="more">Details</a></td>

                        </tr>
                        <tr scope="row">


                            <td> 1392</td>
                            <td><a href="#">James Yates</a></td>
                            <td>0.99$</td>
                            <td>19,800</td>
                            <td></td>
                            <td><a href="#" class="more">Details</a></td>

                        </tr>
                        <tr scope="row">


                            <td> 1392</td>
                            <td><a href="#">James Yates</a></td>
                            <td>0.99$</td>
                            <td>19,800</td>
                            <td></td>
                            <td><a href="#" class="more">Details</a></td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="nk-gap-2"></div>

@endsection
