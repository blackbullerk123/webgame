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
                <h3 class="text-main-1">Transaction history</h3>
                <div class="nk-gap"></div>
                <table class="table table-striped custom-table float-left">
                    <thead>
                        <tr>
                            <th scope="col">Bill</th>
                            <th scope="col">Type</th>
                            <th scope="col">Method</th>
                            <th scope="col">Point</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr scope="row">


                            <td> 1392</td>
                            <td><a href="#">James Yates</a></td>
                            <td>0.99$</td>
                            <td>19,800</td>
                            <td><a href="#" class="more">Details</a></td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="nk-gap-2"></div>

@endsection
