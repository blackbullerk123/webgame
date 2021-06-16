<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class BillController extends Controller
{
    public function index()
    {
        return view('layout_admin.bills.index');
    }

    public function show()
    {
        return view('layout_admin.bills.show');
    }
}
