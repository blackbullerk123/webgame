<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SlideRequest;
use App\Repositories\SlideRepository;

class SlideController extends Controller
{
    protected $repository;

    public function __construct(SlideRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $slides = $this->repository->getSlides();
        return view('layout_admin.slides.index', compact('slides'));
    }

    public function create()
    {
        return view('layout_admin.slides.create');
    }

    public function store(SlideRequest $request)
    {
        $this->repository->store($request);
        return redirect()->back()->with('information', 'Thêm thành công');
    }

    public function edit($id)
    {
        $slides = $this->repository->getSlidesById($id);
        return view('layout_admin.slides.edit', compact('slides'));
    }

    public function update(Request $request, $id)
    {
        $this->repository->update($request, $id);
        return redirect()->back()->with('information', 'Cập nhật thành công');
    }

    public function delete(Request $request)
    {
        $this->repository->destroy($request);
        return response()->json([
            'success' => true
        ]);
    }
}
