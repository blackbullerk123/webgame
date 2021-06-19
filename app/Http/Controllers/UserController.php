<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function order()
    {
        return view('layout_index.customer.order');
    }

    public function loadPoints()
    {
        return view('layout_index.customer.purchase_points');
    }

    public function transactionHistory()
    {
        return view('layout_index.customer.transaction_history');
    }

    public function profile()
    {
        return view('layout_index.customer.profile');
    }
}
