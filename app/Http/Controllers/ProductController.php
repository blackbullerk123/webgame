<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getDetail()
    {
        return view('layout_index.page.product_detail');
    }
}
