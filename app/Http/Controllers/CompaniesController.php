<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use App\User;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
{

    /**
     * Display a listing of the companies.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $companies = Company::with('user')->paginate(25);

        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new company.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('name','id')->all();
        
        return view('companies.create', compact('users'));
    }

    /**
     * Store a new company in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Company::create($data);

            return redirect()->route('companies.company.index')
                             ->with('success_message', 'Company was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified company.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $company = Company::with('user')->findOrFail($id);

        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified company.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $countries = Country::pluck('name','id')->all();
        $states = State::pluck('name','id')->all();
        $company = Company::where('user_id',Auth::user()->id)->get()->first();
        $users = User::pluck('name','id')->all();

        return view('companies.edit', compact('company','users','countries','states'));
    }

    /**
     * Update the specified company in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
//        try {
            
            $data = $this->getData($request);
            
            $company = Company::findOrFail($id);
            $company->update($data);

            return redirect()->route('companies.company.index')
                             ->with('success_message', 'Company was successfully updated!');

//        } catch (Exception $exception) {
//
//            return back()->withInput()
//                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
//        }
    }

    /**
     * Remove the specified company from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $company = Company::findOrFail($id);
            $company->delete();

            return redirect()->route('companies.company.index')
                             ->with('success_message', 'Company was successfully deleted!');

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
            'user_id' => 'required',
            'name' => 'string|required|max:255|min:1',
            'description' => 'text|nullable',
            'country' => 'string|required',
//            'state' => 'string|required|nullable|min:1',
//            'city' => 'string|required|nullable|min:1',
            'address' => 'string|required|min:1',
            'rep_phone' => 'string|nullable|min:0',
            'rep_name' => 'string|required|nullable|min:1',
            'website' => 'string|nullable|min:0',
            'categories' => 'required|array',
            'employees' => 'numeric|required|min:-2147483648|max:2147483647',
            'years' => 'string|required',
            'is_active' => 'boolean|nullable',
     
        ];
        
        $data = $request->validate($rules);

        $data['is_active'] = $request->has('is_active');

        return $data;
    }

}
