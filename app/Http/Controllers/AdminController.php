<?php

namespace App\Http\Controllers;


use App\Models\Invest;
use App\Models\Partnership;
use App\Models\Sale;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use jeremykenedy\LaravelRoles\Models\Role;

class AdminController extends Controller
{
    public function upgrade_account(){
        return view('admin.upgrade');
    }
    public function plans(){
        $user = Auth::user();
        return view('admin.plans', compact('user'));
    }
    public function payment(){
        $user = Auth::user();
        $data = [
            'one'     =>  25000,
            'two'     =>  18000 * 6,
            'twelve'     =>  12000 * 12,
        ];
        return view('admin.make_payment', compact('data','user'));
    }
    public function index()
    {
//        return Auth::user()->roles->first()->level;
        if(!Auth::user()->company->name){
            return redirect()->route('user.complete.reg')
                ->with('warning_message', 'Pls Complete Your Registration!');
    }
        $users = User::with('roles')->paginate(10);
        $invests = Invest::with('user')->orderBy('id','desc')->paginate(10);
        if(Auth::user()->roles->first()->level < 5){
            $sales = Sale::with('user')
                ->whereStatus('1')
                ->whereUserId(Auth::id())
                ->orderBy('status','ASC')->get()->toArray();
            $invests = Invest::with('user')
                ->whereStatus('1')
                ->whereUserId(Auth::id())
                ->orderBy('status','ASC')->get()->toArray();
            $partnerships = Partnership::with('user')
                ->whereStatus('1')
                ->whereUserId(Auth::id())
                ->orderBy('status','ASC')->get()->toArray();
            $all = array_merge($partnerships,$sales);
            $ads = array_merge($all,$invests);
//            return $ads;
            $count = [
              'sales'       =>  count($sales),
              'invest'      =>  count($invests),
              'partnership' =>  count($partnerships)
            ];
            return view('admin.user_dashboard', compact('users','ads','count'));
        }
        return view('admin.index', compact('users','invests'));
    }

    public function moderation()
    {
//        return Auth::user()->roles->first()->level;
        if(!Auth::user()->company->name){
            return redirect()->route('user.complete.reg')
                ->with('warning_message', 'Pls Complete Your Registration!');
        }
//        $users = User::with('roles')->paginate(10);
            $sales = Sale::with('user')
                ->whereStatus('0')
                ->whereUserId(Auth::id())
                ->orderBy('status','ASC')->get()->toArray();
            $invests = Invest::with('user')
                ->whereStatus('0')
                ->whereUserId(Auth::id())
                ->orderBy('status','ASC')->get()->toArray();
            $partnerships = Partnership::with('user')
                ->whereStatus('0')
                ->whereUserId(Auth::id())
                ->orderBy('status','ASC')->get()->toArray();
            $all = array_merge($partnerships,$sales);
            $ads = array_merge($all,$invests);
//            return $ads;
            $count = [
                'sales'       =>  count($sales),
                'invest'      =>  count($invests),
                'partnership' =>  count($partnerships)
            ];
            return view('admin.moderation', compact('ads','count'));

    }
public function soon(){
        return view('admin.coming');
}

    public function media()
    {
        return view('admin.media');
    }
}
