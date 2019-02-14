<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{

    /**
     * Display a listing of the profiles.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $profiles = Profile::with('user')->paginate(25);

        return view('admin.profiles.index', compact('profiles'));
    }

    public function myProfile(){
        $user = User::with('profile')->whereId(Auth::id())->first();
        return view('admin.profiles.myprofile', compact('user'));
    }

    /**
     * Show the form for creating a new profile.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('name','id')->all();
        
        return view('admin.profiles.create', compact('users'));
    }

    /**
     * Store a new profile in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Profile::create($data);

            return redirect()->route('profiles.profile.index')
                             ->with('success_message', 'Profile was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified profile.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $profile = Profile::with('user')->findOrFail($id);

        return view('admin.profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified profile.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        $users = User::pluck('name','id')->all();

        return view('admin.profiles.edit', compact('profile','users'));
    }

    public function editMyProfile()
    {
        $user = User::with('profile')->whereId(Auth::id())->first();

        return view('admin.profiles.edit_my', compact('user'));
    }

    /**
     * Update the specified profile in the storage.
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
            
            $profile = Profile::findOrFail($id);
            $profile->update($data);

            return redirect()->route('profiles.profile.index')
                             ->with('success_message', 'Profile was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified profile from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $profile = Profile::findOrFail($id);
            $profile->delete();

            return redirect()->route('profiles.profile.index')
                             ->with('success_message', 'Profile was successfully deleted!');

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
            'first_name' => 'string|min:1|nullable',
            'last_name' => 'string|min:1|nullable',
            'phone' => 'string|min:1|nullable',
            'country' => 'string|nullable',
            'state' => 'string|min:1|nullable',
            'city' => 'string|min:1|nullable',
            'residential_address' => 'string|min:1|nullable',
            'parmenent_address' => 'string|min:1|nullable',
            'marital_status' => 'string|min:1|nullable',
            'sex' => 'string|min:1|nullable',
            'date_of_birth' => 'date_format:j/n/Y|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
