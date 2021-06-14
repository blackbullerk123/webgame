<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getDetail()
    {
        return view('layout_index.page.product_detail');
    }
}
