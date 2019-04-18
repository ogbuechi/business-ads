<?php

namespace App\Http\Controllers;

use App\Models\CompanyCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class CompanyCatsController extends Controller
{

    /**
     * Display a listing of the company cats.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $companyCats = CompanyCat::paginate(25);

        return view('company_cats.index', compact('companyCats'));
    }

    /**
     * Show the form for creating a new company cat.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('company_cats.create');
    }

    /**
     * Store a new company cat in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            CompanyCat::create($data);

            return redirect()->route('company_cats.company_cat.index')
                             ->with('success_message', 'Company Cat was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified company cat.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $companyCat = CompanyCat::findOrFail($id);

        return view('company_cats.show', compact('companyCat'));
    }

    /**
     * Show the form for editing the specified company cat.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $companyCat = CompanyCat::findOrFail($id);
        

        return view('company_cats.edit', compact('companyCat'));
    }

    /**
     * Update the specified company cat in the storage.
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
            
            $companyCat = CompanyCat::findOrFail($id);
            $companyCat->update($data);

            return redirect()->route('company_cats.company_cat.index')
                             ->with('success_message', 'Company Cat was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified company cat from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $companyCat = CompanyCat::findOrFail($id);
            $companyCat->delete();

            return redirect()->route('company_cats.company_cat.index')
                             ->with('success_message', 'Company Cat was successfully deleted!');

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
            'name' => 'string|min:1|max:255|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
