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
        $game_top = $this->repository->gamesTop();
        $products = $this->repository->getProductToIndex();
        $slides = $this->repository->getSlides();
        return view('layout_index.index', compact('products','slides','game_top'));
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

    public function document()
    {
        return view('layout_index.page.document');
    }

    public function contact()
    {
        return view('layout_index.page.contact_us');
    }

    public function about()
    {
        return view('layout_index.page.about_us');
    }

    public function service()
    {
        return view('layout_index.page.service');
    }

    public function privacy()
    {
        return view('layout_index.page.privacy');
    }

    public function allGames()
    {
        $products = $this->repository->getAllGames();
        return view('layout_index.page.all_games', compact('products'));
    }

    public function viewAndroid()
    {
        $products = $this->repository->getProductToIndex();
        return view('layout_index.page.view_android', compact('products'));
    }

    public function viewIos()
    {
        $products = $this->repository->getProductToIndex();
        return view('layout_index.page.view_ios', compact('products'));
    }

    public function viewCard()
    {
        $products = $this->repository->getProductToIndex();
        return view('layout_index.page.view_card', compact('products'));
    }
    
    public function search(Request $request)
    {
        $products = $this->repository->search($request);
        return view('layout_index.page.search', compact('products'));
    }

    public function postLogin(Request $request)
    {
        $credentaials = array('email' => $request->email, 'password' => $request->password);
        if (Auth::attempt($credentaials)) {
            if(Auth::user()->banned_status == 0){
                return response()->json([
                    'success' => true
                ]);
            }
            else
            {
                Auth::logout();
                return response()->json([
                    'success' => 'banned'
                ]);
            }
            
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
        $check1 = $package_selected[2] * $request->number;
        $check2 = Auth::user()->point;
        if($check2 - $check1 < 0){
            return redirect()->back()->with('mess','1');
        }else{
            $this->repository->createBill($request, $product_info, $package_selected);
            return redirect(route('order_history'));
        }      
    }

    public function viewGameType($type)
    {
        $game_type = $this->repository->getGameForTypeGame($type);
        return view('layout_index.page.search_type', compact('game_type', 'type'));
    }
}