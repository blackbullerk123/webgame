<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\BillRepository;

class BillController extends Controller
{
    protected $repository;

    public function __construct(BillRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {   
        $bills = $this->repository->getIndex($request);
        return view('layout_admin.bills.index', compact('bills'));
    }

    public function show($id)
    {
        
        $admin = $this->repository->getAdminInfo();
        $user = $this->repository->getUserInfo($id);
        $bill = $this->repository->getBill($id);
        return view('layout_admin.bills.show', compact('user', 'admin', 'id', 'bill'));
    }
    
    public function purchaseBill($id, $status)
    {
        $this->repository->BillTransaction($id, $status);
        return redirect()->back();
    }

    public function billSearch(Request $request)          
    {
        dd($request->all());
    }
}
