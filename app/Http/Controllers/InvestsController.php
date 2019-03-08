<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Invest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class InvestsController extends Controller
{

    /**
     * Display a listing of the invests.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $invests = Invest::with('user')->paginate(25);

        return view('invests.index', compact('invests'));
    }
    public function myAds()
    {
        $invests = Invest::with('user')->paginate(25);

        return view('dashboard.ads.invest.index', compact('invests'));
    }

    /**
     * Show the form for creating a new invest.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('name','id')->all();
        
        return view('invests.create', compact('users'));
    }

    /**
     * Store a new invest in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
            $data = $this->getData($request);

            $invest = Invest::create($data);

        $url =  route('invests.invest.show_my_ad', $invest->id );

            return redirect()->back()
                             ->with('success_message', "B2B Invest Ads was successfully created! <a class='pull-right' href='$url'>View Ad</a>");


    }

    /**
     * Display the specified invest.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $invest = Invest::with('user')->findOrFail($id);

        return view('invests.show', compact('invest'));
    }
    public function showMyAd($id)
    {
        $invest = Invest::with('user')->findOrFail($id);

        return view('dashboard.ads.invest.show', compact('invest'));
    }

    /**
     * Show the form for editing the specified invest.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $invest = Invest::findOrFail($id);
        $users = User::pluck('name','id')->all();

        return view('dashboard.ads.invest.edit', compact('invest','users'));
    }

    /**
     * Update the specified invest in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $invest = Invest::findOrFail($id);
            $invest->update($data);

            return redirect()->route('invests.invest.myads')
                             ->with('success_message', 'B2B Invest Post Ad was successfully updated!');

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

            return redirect()->route('invests.invest.myads')
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
            'user_id' => 'required|int|nullable',
            'brand_name' => 'required|string',
            'business_type' => 'required|string',
            'profile_summary' => 'required',
            'maximum_capital' => 'required|int',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
