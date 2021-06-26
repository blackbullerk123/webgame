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
        $date = $request->date;
        $status = $request->status;
        return view('layout_admin.bills.index', compact('bills', 'date', 'status'));
    }

    public function billNew()
    {   
        $bills = $this->repository->getBillNew();
        return view('layout_admin.bills.bill_new', compact('bills'));
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
        return redirect()->back()->with('information', 'Cập nhật thành công');;
    }

    public function indexPointPurchase(Request $request)
    {
        $points = $this->repository->getIndexPoint($request);
        $date = $request->date;
        $status = $request->status;
        return view('layout_admin.point_purchase.index', compact('points', 'date', 'status'));
    }

    public function billUnpaidPointPurchase(Request $request)
    {
        $points = $this->repository->billUnpaidPoint($request);
        return view('layout_admin.point_purchase.bill_unpaid', compact('points'));
    }

    public function purchasePoint($id, $status, $point, $user, $method)
    {
        $this->repository->PointTransaction($id, $status, $point, $user, $method);
        return redirect()->back()->with('information', 'Cập nhật thành công');
    }
}
