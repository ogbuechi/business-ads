<?php

namespace App\Http\Controllers;

use App\Models\CompanyCat;
use Illuminate\Http\Request;
use App\Models\CompanySubCat;
use App\Http\Controllers\Controller;
use Exception;

class CompanySubCatsController extends Controller
{

    /**
     * Display a listing of the company sub cats.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $companySubCats = CompanySubCat::with('companycat')->paginate(25);

        return view('company_sub_cats.index', compact('companySubCats'));
    }

    /**
     * Show the form for creating a new company sub cat.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $companyCats = CompanyCat::pluck('name','id')->all();
        
        return view('company_sub_cats.create', compact('companyCats'));
    }

    /**
     * Store a new company sub cat in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            CompanySubCat::create($data);

            return redirect()->route('company_sub_cats.company_sub_cat.index')
                             ->with('success_message', 'Company Sub Cat was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified company sub cat.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $companySubCat = CompanySubCat::with('companycat')->findOrFail($id);

        return view('company_sub_cats.show', compact('companySubCat'));
    }

    /**
     * Show the form for editing the specified company sub cat.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $companySubCat = CompanySubCat::findOrFail($id);
        $companyCats = CompanyCat::pluck('name','id')->all();

        return view('company_sub_cats.edit', compact('companySubCat','companyCats'));
    }

    /**
     * Update the specified company sub cat in the storage.
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
            
            $companySubCat = CompanySubCat::findOrFail($id);
            $companySubCat->update($data);

            return redirect()->route('company_sub_cats.company_sub_cat.index')
                             ->with('success_message', 'Company Sub Cat was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified company sub cat from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $companySubCat = CompanySubCat::findOrFail($id);
            $companySubCat->delete();

            return redirect()->route('company_sub_cats.company_sub_cat.index')
                             ->with('success_message', 'Company Sub Cat was successfully deleted!');

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
            'company_cat_id' => 'nullable',
            'name' => 'string|min:1|max:255|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
