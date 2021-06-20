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

    public function index()
    {
        return view('layout_index.index');
    }

    public function contact()
    {
        return view('layout_index.page.contact_us');
    }

    public function about()
    {
        return view('layout_index.page.contact_us');
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

}
