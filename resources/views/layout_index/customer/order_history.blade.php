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
                <h3 class="text-main-1">Order</h3>
                <div class="nk-gap"></div>
                <table class="table table-striped custom-table float-left">
                    <thead>
                        <tr>
                            <th scope="col">Order</th>
                            <th scope="col">ID order</th>
                            <th scope="col">Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Point total</th>
                            <th scope="col">Status</th>
                            <th scope="col">Receive date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($all_bill))
                            @foreach ($all_bill as $bill)
                                <tr scope="row">
                                    <td><a href="{{ route('bill.show', $bill->id) }}" target="_blank"><button type="submit"
                                            class="nk-btn nk-btn-rounded nk-btn-color-main-1">Bill</button></a></td>
                                    <td>{{ $bill->order_id }}</a></td>
                                    <td>{{ $bill->product->name }}</td>
                                    <td style="text-align: center">{{ $bill->product_total }}</td>
                                    <td>{{ $bill->point_total }}</td>
                                    <td>
                                            {{-- @if ($bill->status == 0)
                                                <p style="color: #FF0000"> Chưa thanh toán</p>
                                            @else
                                                <p style="color: #33FF33"> Đã thanh toán </p>
                                            @endif --}}
                                    </td>
                                    <td>{{ date('d/m/Y ', strtotime($bill->created_at)) }}</td>
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