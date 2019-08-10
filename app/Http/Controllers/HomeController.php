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

    public function searchResult(){
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

        return view('search_result', compact('categories','subcats','ads'));
    }

    public function search(Request $request){
        $result = $request->keyword;
        $sales = Sale::with('user')
            ->whereStatus('1')
            ->where('name', 'LIKE', "%{$result}%")
            ->orderBy('status','ASC')->get();
        $invests = Invest::with('user')
            ->whereStatus('1')
            ->where('brand_name', 'LIKE', "%{$result}%")
            ->orderBy('status','ASC')->get();
        $partnerships = Partnership::with('user')
            ->whereStatus('1')
            ->where('name', 'LIKE', "%{$result}%")
            ->orderBy('status','ASC')->get();
//        $all = array_merge($partnerships,$sales);
        $all = $partnerships->merge($sales);
        $ads = $all->merge($invests)->paginate('2');
//        $ads = array_merge($all,$invests)->paginate('2');
        return view('search_result', compact('ads','result'));
    }

    public function index()
    {
//        $categories = Category::all();
//        $subcats = SubCategory::all();
        $sales = Sale::with('user')
            ->whereStatus('1')
//            ->whereUserId(Auth::id())
            ->orderBy('status','ASC')->latest()->get();
        $invests = Invest::with('user')
            ->whereStatus('1')
//            ->whereUserId(Auth::id())
            ->orderBy('status','ASC')->latest()->get();
        $partnerships = Partnership::with('user')
            ->whereStatus('1')
//            ->whereUserId(Auth::id())
            ->orderBy('status','ASC')->latest()->get();
        $all = $partnerships->merge($sales);
        $ads = $all->merge($invests)->paginate('9');
        return view('home', compact('ads'));
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
