<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('layout_admin.product.index');
    }

    public function create()
    {
        return view('layout_admin.product.create');
    }

    public function getDetail()
    {
        return view('layout_index.page.product_detail');
    }
}
