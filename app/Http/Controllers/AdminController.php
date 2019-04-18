<?php

namespace App\Http\Controllers;


use App\Models\Invest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use jeremykenedy\LaravelRoles\Models\Role;

class AdminController extends Controller
{
    public function index()
    {
        if(!Auth::user()->company->name){
            return redirect()->route('user.complete.reg')
                ->with('warning_message', 'Pls Complete Your Registration!');
    }
        $users = User::with('roles')->paginate(10);
        $invests = Invest::with('user')->orderBy('id','desc')->paginate(10);
        return view('admin.index', compact('users','invests'));
    }
public function soon(){
        return view('admin.coming');
}

    public function media()
    {
        return view('admin.media');
    }
}
