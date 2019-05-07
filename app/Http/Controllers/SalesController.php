<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SaleBid;
use App\Models\SubCategory;
use App\User;
use App\Models\Sale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{

    /**
     * Display a listing of the sales.
     *
     * @return Illuminate\View\View
     */

    public function index()
    {
        if(Auth::user()->hasRole(['admin','super'])){
            $sales = Sale::with('user')->orderBy('status','DESC')->paginate(30);
            $title = 'All Sales Ads';
        }else{
            $sales = Sale::with('user')
                ->whereStatus('1')->paginate(2);
            $title = 'Your Approved Sales Ads';
        }
        return view('sales.index', compact('sales','title'));
    }
    public function awaitingReview()
    {
        if(Auth::user()->hasRole(['admin','super'])){
            $sales = Sale::with('user')->orderBy('status','ASC')
                ->whereStatus('0')->paginate(30);
            $title = 'All Sales Ads Awaiting Approval';
        }else{
            $sales = Sale::with('user')
                ->whereStatus('0')
                ->whereUserId(Auth::id())
                ->orderBy('status','ASC')->paginate(20);
            $title = 'Your Sales Ads Awaiting Approval';
        }

        return view('sales.index', compact('sales','title'));
    }
    public function myAds()
    {

        $sales = Sale::with('user')
            ->whereUserId(Auth::id())->paginate(20);

        $title = 'Your Available Business Sale Ads';

        return view('sales.index', compact('sales','title'));

    }

    /**
     * Show the form for creating a new sale.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('name','id')->all();
        $categories = Category::all();
        $sub_categories = SubCategory::all();

        return view('sales.create', compact('users','categories','sub_categories'));
    }

    /**
     * Store a new sale in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
//        try {
            
            $data = $this->getData($request);
            
            Sale::create($data);

            return redirect()->route('sales.sale.index')
                             ->with('success_message', 'Sale was successfully added!');

//        } catch (Exception $exception) {
//
//            return back()->withInput()
//                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
//        }
    }

    /**
     * Display the specified sale.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $sale = Sale::with('user')->findOrFail($id);

//        return $sale->business_type;

        $bids = SaleBid::whereSaleId($sale->id)->get();

        return view('sales.show', compact('sale','bids'));
    }

    /**
     * Show the form for editing the specified sale.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $sale = Sale::findOrFail($id);
        $users = User::pluck('name','id')->all();
        $categories = Category::all();
        $sub_categories = SubCategory::all();

        return view('sales.edit', compact('sale','users','categories','sub_categories'));
    }

    /**
     * Update the specified sale in the storage.
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
            
            $sale = Sale::findOrFail($id);
            $sale->update($data);

            return redirect()->route('sales.sale.index')
                             ->with('success_message', 'Sale was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified sale from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $sale = Sale::findOrFail($id);
            $sale->delete();

            return redirect()->route('sales.sale.index')
                             ->with('success_message', 'Sale was successfully deleted!');

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
            'name' => 'string|min:1|max:255|required',
            'summary' => 'string|min:1|nullable',
            'business_type' => 'array|min:1|required',
            'shareholders' => 'string|min:1|required',
            'employees' => 'numeric|min:1|required|max:2147483647',
            'value' => 'numeric|min:1|required|max:2147483647',
            'listed' => 'string|min:1|required',
            'selling_conditions' => 'string|min:1|required',
            'selling_reasons' => 'string|min:1|required',
            'sales_authorization' => 'string|min:1|required',
            'image' => ['image','nullable','file'],
            'user_id' => 'required',
     
        ];
        
        $data = $request->validate($rules);
        if ($request->has('custom_delete_image')) {
            $data['image'] = null;
        }
        if ($request->hasFile('image')) {
            $data['image'] = $this->moveFile($request->file('image'));
        }

        return $data;
    }
  
    /**
     * Moves the attached file to the server.
     *
     * @param Symfony\Component\HttpFoundation\File\UploadedFile $file
     *
     * @return string
     */
    protected function moveFile($file)
    {
        if (!$file->isValid()) {
            return '';
        }
        
        $path = 'uploads/sales';
        $saved = $file->store('public/' . $path, config('filesystems.default'));

        return substr($saved, 7);
    }
}
