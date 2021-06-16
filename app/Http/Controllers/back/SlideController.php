<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlideController extends Controller
{
    public function index()
    {
        return view('layout_admin.slides.index');
    }

    public function create()
    {
        return view('layout_admin.slides.create');
    }
}
