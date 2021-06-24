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
                            <th scope="col">ID Order</th>
                            <th scope="col">Method</th>
                            <th scope="col">Point</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($point_purchase))
                        @foreach($point_purchase as $point)
                        <tr scope="row">
                            <td><a href="{{ route('waiting.bill.show',$point->id) }}" target="_blank"> <button class="nk-btn nk-btn-rounded nk-btn-color-main-1">Bill</button></a></td>
                            <td>{{ $point->order_id }}</td>
                            <td>{{ $point->method }}</td>
                            <td>{{ $point->point_purchase }}</td>
                            @if($point->status == 0)
                            <td>Pending</td>
                            @endif
                            @if($point->status == 1)
                            <td>Paid</td>
                            @endif
                            @if($point->status == 2)
                            <td>Cancel</td>
                            @endif
                            <td>{{date('d-m-Y', strtotime(str_replace('/', '-', $point->created_at )))}}</td>
                        </tr>
                        @endforeach                    
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="nk-gap-2"></div>

@endsection
