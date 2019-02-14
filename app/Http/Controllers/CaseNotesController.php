<?php

namespace App\Http\Controllers;

use App\User;
//use App\Models\Nurse;
use App\Models\CaseNote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;

class CaseNotesController extends Controller
{

    /**
     * Display a listing of the case notes.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $caseNotes = CaseNote::with('user')->paginate(25);

        return view('case_notes.index', compact('caseNotes'));
    }

    /**
     * Show the form for creating a new case note.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('name','id')->all();
$nurses = User::pluck('id','id')->all();
        
        return view('case_notes.create', compact('users','nurses'));
    }

    /**
     * Store a new case note in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
//            $request['nurse_id'] = Auth::id();
            $data = $this->getData($request);
            
            CaseNote::create($data);

            return redirect()->route('case_notes.case_note.index')
                             ->with('success_message', 'Case Note was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified case note.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $caseNote = CaseNote::with('user')->findOrFail($id);

        return view('case_notes.show', compact('caseNote'));
    }

    /**
     * Show the form for editing the specified case note.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $caseNote = CaseNote::findOrFail($id);
        $users = User::pluck('name','id')->all();
$nurses = User::pluck('id','id')->all();

        return view('case_notes.edit', compact('caseNote','users','nurses'));
    }

    /**
     * Update the specified case note in the storage.
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
            
            $caseNote = CaseNote::findOrFail($id);
            $caseNote->update($data);

            return redirect()->route('case_notes.case_note.index')
                             ->with('success_message', 'Case Note was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified case note from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $caseNote = CaseNote::findOrFail($id);
            $caseNote->delete();

            return redirect()->route('case_notes.case_note.index')
                             ->with('success_message', 'Case Note was successfully deleted!');

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
            'nurse_id' => 'nullable',
            'note' => 'string|min:1|max:1000|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
