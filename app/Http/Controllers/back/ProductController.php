<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
Use Alert;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    protected $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $product = $this->repository->getProducts();
        return view('layout_admin.product.index', compact('product'));
    }

    public function update(Request $request, $id)

    {
        $this->repository->update($request ,$id);
        return redirect()->back()->with('information', 'Cập nhật thành công');
    }

    public function deletePackage(Request $request, $id)
    {
        return $this->repository->AjaxDeletePackage($request, $id);
    }

    public function create()
    {
        $os_type = $this->repository->getOsType();
        return view('layout_admin.product.create', compact('os_type'));
    }

    public function store(Request $request)
    {
 
           $this->repository->store($request);
           return redirect()->back()->with('information', 'Thêm thành công');
    //     return back()->withError("Lỗi hệ thống! Chưa chọn loại sách")->withInput();
    //    }
    //     return view('layout_admin.product.index');
    }

    public function edit($id)
    {
        $product = $this->repository->getProductById($id);
        $package_by_id = $this->repository->getPackageByIdProduct($product->id);
        return view('layout_admin.product.edit', compact('product', 'package_by_id'));
    }

    public function delete($id)
    {
       $this->repository->productdestroy($id);
       return redirect()->back()->with('information', 'Xoá thành công!');
    }
    public function getDetail()
    {
        return view('layout_index.page.product_detail');
    }
}
