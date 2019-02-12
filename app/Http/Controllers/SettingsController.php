<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class SettingsController extends Controller
{

    /**
     * Display a listing of the settings.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $settings = Setting::paginate(25);

        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new setting.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('admin.settings.create');
    }

    /**
     * Store a new setting in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Setting::create($data);

            return redirect()->route('settings.setting.index')
                             ->with('success_message', 'Setting was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified setting.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $setting = Setting::findOrFail($id);

        return view('admin.settings.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified setting.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        

        return view('admin.settings.edit', compact('setting'));
    }

    /**
     * Update the specified setting in the storage.
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
            
            $setting = Setting::findOrFail($id);
            $setting->update($data);

            return redirect()->route('settings.setting.index')
                             ->with('success_message', 'Setting was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified setting from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $setting = Setting::findOrFail($id);
            $setting->delete();

            return redirect()->route('settings.setting.index')
                             ->with('success_message', 'Setting was successfully deleted!');

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
            'key' => 'required|string|min:1|max:191',
            'value' => 'nullable|string|min:0|max:191',
            'locale' => 'nullable|string|min:0|max:191',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
