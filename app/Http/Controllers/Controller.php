<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function checkUser(){
        if(Auth::check()){
            if(Auth::user()->plan->level > 0){
                return 1;
            }else {
                return 0;
            }
        }else{
            return 0;
        }
    }

    public function makePremium(){
        return response()->json(Auth::user()->update(['plan_id' => 2]));
    }
    public function makeFree(){
        return response()->json(Auth::user()->update(['plan_id' => 1]));
    }

}
