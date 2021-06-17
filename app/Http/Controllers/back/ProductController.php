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

    public function store(Request $request)
    {
        dd($request->all());
        return view('layout_admin.product.index');
    }

    public function edit()
    {
        return view('layout_admin.product.edit');
    }

    public function getDetail()
    {
        return view('layout_index.page.product_detail');
    }
}
