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
    <style>
        p.a{
            width: 210px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

    </style>
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
                <h3 class="text-main-1">Waiting Bill</h3>
                <div class="nk-gap"></div>
                <div class="table-responsive" style="width: 110%;">
                    <table class="table table-striped custom-table float-left" id="example1">
                        <thead>
                            <tr>
                                <th scope="col">Bill</th>
                                <th scope="col">ID Order</th>
                                <th scope="col">Point purchase</th>
                                <th scope="col" style="width: 25%;">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($point_purchase_info))
                                @foreach ($point_purchase_info as $point_info)
                                    <tr scope="row">
                                        <td><a href="{{ route('waiting.bill.show', $point_info->id) }}" target="_blank">
                                                <button class="nk-btn nk-btn-rounded nk-btn-color-main-1">Bill</button></a>
                                        </td>
                                        <td>{{ $point_info->order_id }}</td>
                                        <td>{{ number_format($point_info->point_purchase) }} Point</td>
                                        <td><p class="a">{{ $point_info->description }}</p></td>
                                        @if ($point_info->status == 0)
                                            <td>Pending</td>
                                        @endif
                                        @if ($point_info->status == 1)
                                            <td>Paid</td>
                                        @endif
                                        @if ($point_info->status == 2)
                                            <td>Cancel</td>
                                        @endif
                                        <td>{{ date('d-m-Y', strtotime(str_replace('/', '-', $point_info->created_at))) }}
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="nk-pagination nk-pagination-center">
                        {{ $point_purchase_info->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>

    <div class="nk-gap-2"></div>
@endsection