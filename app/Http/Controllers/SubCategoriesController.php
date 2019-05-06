<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class SubCategoriesController extends Controller
{

    /**
     * Display a listing of the sub categories.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $subCategories = SubCategory::with('category')->paginate(25);

        return view('sub_categories.index', compact('subCategories'));
    }

    /**
     * Show the form for creating a new sub category.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::pluck('name','id')->all();
        
        return view('sub_categories.create', compact('categories'));
    }

    /**
     * Store a new sub category in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            SubCategory::create($data);

            return redirect()->route('sub_categories.sub_category.index')
                             ->with('success_message', 'Sub Category was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified sub category.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $subCategory = SubCategory::with('category')->findOrFail($id);

        return view('sub_categories.show', compact('subCategory'));
    }

    /**
     * Show the form for editing the specified sub category.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $categories = Category::pluck('name','id')->all();

        return view('sub_categories.edit', compact('subCategory','categories'));
    }

    /**
     * Update the specified sub category in the storage.
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
            
            $subCategory = SubCategory::findOrFail($id);
            $subCategory->update($data);

            return redirect()->route('sub_categories.sub_category.index')
                             ->with('success_message', 'Sub Category was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified sub category from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $subCategory = SubCategory::findOrFail($id);
            $subCategory->delete();

            return redirect()->route('sub_categories.sub_category.index')
                             ->with('success_message', 'Sub Category was successfully deleted!');

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
            'name' => 'required|string|min:1|max:255|nullable',
            'category_id' => 'nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
