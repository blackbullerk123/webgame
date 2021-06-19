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
}
