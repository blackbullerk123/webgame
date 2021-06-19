<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

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
 
           $this->repository->store($request);
           return back()->withSuccess("Thêm game thành công!")->withInput();
    //     return back()->withError("Lỗi hệ thống! Chưa chọn loại sách")->withInput();
    //    }
    //     return view('layout_admin.product.index');
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
