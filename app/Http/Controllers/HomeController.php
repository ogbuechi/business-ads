<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Invest;
use App\Models\Partnership;
use App\Models\Sale;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $subcats = SubCategory::all();
        $sales = Sale::with('user')
            ->whereStatus('1')
//            ->whereUserId(Auth::id())
            ->orderBy('status','ASC')->get()->toArray();
        $invests = Invest::with('user')
            ->whereStatus('1')
//            ->whereUserId(Auth::id())
            ->orderBy('status','ASC')->get()->toArray();
        $partnerships = Partnership::with('user')
            ->whereStatus('1')
//            ->whereUserId(Auth::id())
            ->orderBy('status','ASC')->get()->toArray();
        $all = array_merge($partnerships,$sales);
        $ads = array_merge($all,$invests);
        return view('home', compact('categories','subcats','ads'));
    }

    public function featured()
    {
        $sales = Sale::with('user')
            ->whereStatus('1')
            ->whereFeatured('1')
            ->orderBy('status','ASC')->get()->toArray();
        $invests = Invest::with('user')
            ->whereStatus('1')
            ->whereFeatured('1')
            ->orderBy('featured','ASC')->get()->toArray();
        $partnerships = Partnership::with('user')
            ->whereStatus('1')
            ->whereFeatured('1')
            ->orderBy('featured','ASC')->get()->toArray();
        $all = array_merge($partnerships,$sales);
        $ads = array_merge($all,$invests);
        return $ads;
    }

    public function investors()
    {
        $invests = Invest::with('user')
            ->whereStatus('1')
            ->orderBy('featured','DESC')->paginate(20);
        $count = count(Invest::all());
        return view('b2b_invests', compact('invests','count'));
    }
    public function sales()
    {
        $invests = Sale::with('user')
            ->whereStatus('1')
            ->orderBy('featured','DESC')->paginate(20);
        $count = count(Sale::all());
        return view('b2b_sales', compact('invests','count'));
    }

    public function partnerships()
    {
        $invests = Partnership::with('user')
            ->whereStatus('1')
            ->orderBy('featured','DESC')->paginate(20);
        $count = count(Partnership::all());
        return view('open_partnership', compact('invests','count'));
    }


    public function store(Request $request)
    {

        $image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();
        $upload_success = $image->move(public_path('images'),$imageName);

        if ($upload_success) {
            return response()->json($upload_success, 200);
        }
        // Else, return error 400
        else {
            return response()->json('error', 400);
        }
    }
}
