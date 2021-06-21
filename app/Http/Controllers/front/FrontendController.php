<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Repositories\FrontendRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    /**
     * The ProductRepository instance.
     *
     * @var \App\Repositories\front\FrontendRepository
     * 
     */
    protected $repository;



    /**
     * Create a new PostController instance.
     *
     * @param  \App\Repositories\PageRepository $repository
     *
     */
    public function __construct(FrontendRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getIndex()
    {
        $products = $this->repository->getProductToIndex();
        return view('layout_index.index', compact('products'));
    }

    public function getDetail($id)
    {
        $product = $this->repository->getDetailToProduct($id);  
        return view('layout_index.page.product_detail', compact('product'));
    }

    public function getCheckout($id, $package)
    {
        $product_info = $this->repository->getPackageToCheckout($id);
        $package_selected = $this->repository->getPackageSelectedToCheckout($product_info, $package);
        return view('layout_index.page.checkout', compact('product_info', 'package_selected', 'package'));
    }

    public function contact()
    {
        return view('layout_index.page.contact_us');
    }

    public function about()
    {
        return view('layout_index.page.contact_us');
    }

    public function allGames()
    {
        $products = $this->repository->getProductToIndex();
        return view('layout_index.page.all_games', compact('products'));
    }

    public function postLogin(Request $request)
    {
        $credentaials = array('email' => $request->email, 'password' => $request->password);
        if (Auth::attempt($credentaials)) {
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false
            ]);
        }
    }

    public function postSignup(RegisterRequest $request)
    {
        $this->repository->createuser($request);
        return response()->json([
            'success' => true
        ],200);
    }

    public function postLogout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public function getBill(Request $request, $id, $package)
    {
        $product_info = $this->repository->getPackageToCheckout($id);
        $package_selected = $this->repository->getPackageSelectedToCheckout($product_info, $package);
        
    }
}