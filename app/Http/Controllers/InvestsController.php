<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\User;
use App\Models\Invest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;

class InvestsController extends Controller
{

    /**
     * Display a listing of the invests.
     *
     * @return Illuminate\View\View
     */

    public function index()
    {
        if(Auth::user()->hasRole(['admin','super'])){
            $invests = Invest::with('user')->orderBy('status','DESC')->paginate(30);
            $title = 'All Sales Ads';
        }else{
            $invests = Invest::with('user')
                ->whereStatus('1')->paginate(10);
            $title = 'Available Business Invest Ads';
        }
        return view('invests.index', compact('invests','title'));
    }
    public function awaitingReview()
    {
        if(Auth::user()->hasRole(['admin','super'])){
            $invests = Invest::with('user')->orderBy('status','ASC')
                ->whereStatus('0')->paginate(30);
            $title = 'All Business Invest Ads Awaiting Approval';
        }else{
            $invests = Invest::with('user')
                ->whereStatus('0')
                ->whereUserId(Auth::id())
                ->orderBy('status','ASC')->paginate(20);
            $title = 'Your Invests Ads Awaiting Approval';
        }

        return view('invests.index', compact('invests','title'));
    }
    public function myAds()
    {

        $invests = Invest::with('user')
            ->whereUserId(Auth::id())->paginate(20);

        $title = 'Your Available Business Investor Ads';

        return view('invests.index', compact('invests','title'));

    }

    public function create()
    {
        if(Auth::user()->plan->level == 0){
            return redirect()->route('admin.account.upgrade');
        }
        $users = User::pluck('name','id')->all();

        $categories = Category::all();
        $sub_categories = SubCategory::all();

        return view('invests.create', compact('users','categories','sub_categories'));

    }

    public function store(Request $request)
    {
//        try {

            $data = $this->getData($request);

            Invest::create($data);

            return redirect()->route('invests.invest.index')
                             ->with('success_message', 'Invest Ads was successfully posted and undergoing review, you will be notified once approved!');

//        } catch (Exception $exception) {
//
//            return back()->withInput()
//                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
//        }
    }

    public function show($id)
    {
        $invest = Invest::with('user')->findOrFail($id);

        if($invest->user_id != Auth::id() && Auth::user()->plan->level == 0){
            return redirect()->route('admin.account.upgrade');
        }

        return view('invests.show', compact('invest'));
    }

    public function edit($id)
    {
        if(Auth::user()->plan->level == 0){
            return redirect()->route('admin.account.upgrade');
        }
        $invest = Invest::findOrFail($id);

        if($invest->user_id != Auth::id()){
            return redirect()->back();
        }
        $users = User::pluck('name','id')->all();
        $categories = Category::all();

        $sub_categories = SubCategory::all();

        return view('invests.edit', compact('invest','users','categories','sub_categories'));

    }

    /**
     * Update the specified invest in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function approveAd($id){
        $invest = Invest::findOrFail($id);
        $invest->update([
            'status'    => true
            ]
        );

        return redirect()->back()
            ->with('success_message', 'Invest Ad successfully approved');

    }
    public function update($id, Request $request)
    {
        try {

            $data = $this->getData($request);

            $invest = Invest::findOrFail($id);
            $invest->update($data);

            return redirect()->route('invests.invest.index')
                             ->with('success_message', 'Invest was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Remove the specified invest from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $invest = Invest::findOrFail($id);
            $invest->delete();

            return redirect()->route('invests.invest.index')
                             ->with('success_message', 'Invest was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }


    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'user_id' => 'nullable',
            'brand_name' => 'string|min:1|nullable',
            'business_type' => 'array|min:1|nullable',
            'profile_summary' => 'string|min:1|nullable',
            'maximum_capital' => 'string|min:1|nullable',

        ];

        $data = $request->validate($rules);


        return $data;
    }

}
