<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Sale;
use App\Models\SaleBid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class SaleBidsController extends Controller
{

    /**
     * Display a listing of the sale bids.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $saleBids = SaleBid::with('user','sale')->paginate(25);

        return view('sale_bids.index', compact('saleBids'));
    }

    /**
     * Show the form for creating a new sale bid.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('name','id')->all();
$sales = Sale::pluck('name','id')->all();
        
        return view('sale_bids.create', compact('users','sales'));
    }

    /**
     * Store a new sale bid in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            SaleBid::create($data);

            return back()->with('success_message', 'Bid was successfully placed for this sale!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified sale bid.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $saleBid = SaleBid::with('user','sale')->findOrFail($id);

        return view('sale_bids.show', compact('saleBid'));
    }

    /**
     * Show the form for editing the specified sale bid.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $saleBid = SaleBid::findOrFail($id);
        $users = User::pluck('name','id')->all();
$sales = Sale::pluck('name','id')->all();

        return view('sale_bids.edit', compact('saleBid','users','sales'));
    }

    /**
     * Update the specified sale bid in the storage.
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
            
            $saleBid = SaleBid::findOrFail($id);
            $saleBid->update($data);

            return redirect()->route('sale_bids.sale_bid.index')
                             ->with('success_message', 'Sale Bid was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified sale bid from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $saleBid = SaleBid::findOrFail($id);
            $saleBid->delete();

            return redirect()->route('sale_bids.sale_bid.index')
                             ->with('success_message', 'Sale Bid was successfully deleted!');

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
            'sale_id' => 'nullable',
            'bid' => 'string|min:1|nullable|numeric|max:2147483647',
            'reason' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
