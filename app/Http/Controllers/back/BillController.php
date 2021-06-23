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

    public function index($status)
    {   
        $bills = $this->repository->getIndex($status);
        $current_date = date("d/m/Y");
        return view('layout_admin.bills.index', compact('bills', 'current_date'));
    }

    public function show($id)
    {
        
        $admin = $this->repository->getAdminInfo();
        $user = $this->repository->getUserInfo($id);
        $bill = $this->repository->getBill($id);
        return view('layout_admin.bills.show', compact('user', 'admin', 'id', 'bill'));
    }
}
