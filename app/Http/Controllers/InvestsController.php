<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
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

    /**
     * Show the form for creating a new invest.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('name','id')->all();

        $categories = Category::all();
        $sub_categories = SubCategory::all();

        return view('invests.create', compact('users','categories','sub_categories'));

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
//        try {
            
            $data = $this->getData($request);
            
            Invest::create($data);

            return redirect()->route('invests.invest.index')
                             ->with('success_message', 'Invest was successfully added!');

//        } catch (Exception $exception) {
//
//            return back()->withInput()
//                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
//        }
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
