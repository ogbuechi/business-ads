<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Partnership;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;

class PartnershipsController extends Controller
{

//    public function index()
//    {
//        $partnerships = Partnership::with('user')->paginate(25);
//
//        return view('partnerships.index', compact('partnerships'));
//    }

    public function index()
    {
        if(Auth::user()->hasRole(['admin','super'])){
            $partnerships = Partnership::with('user')->orderBy('status','DESC')->paginate(30);
            $title = 'All Partnerships Ads';
        }else{
            $partnerships = Partnership::with('user')
                ->whereStatus('1')->paginate(20);
            $title = 'Available Partnerships Ads';
        }
        return view('partnerships.index', compact('partnerships','title'));
    }
    public function awaitingReview()
    {
        if(Auth::user()->hasRole(['admin','super'])){
            $partnerships = Partnership::with('user')->orderBy('status','ASC')
                ->whereStatus('0')->paginate(30);
            $title = 'All Partnerships Ads Awaiting Approval';
        }else{
            $partnerships = Partnership::with('user')
                ->whereStatus('0')
                ->whereUserId(Auth::id())
                ->orderBy('status','ASC')->paginate(20);
            $title = 'Your Partnerships Ads Awaiting Approval';
        }

        return view('partnerships.index', compact('partnerships','title'));
    }
    public function myAds()
    {

        $partnerships = Partnership::with('user')
            ->whereUserId(Auth::id())->paginate(20);

        $title = 'Your Available Business Partnership Ads';

        return view('partnerships.index', compact('partnerships','title'));

    }

    /**
     * Show the form for creating a new partnership.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('name','id')->all();

        return view('partnerships.create', compact('users'));
    }

    /**
     * Store a new partnership in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);

            Partnership::create($data);

            return redirect()->route('partnerships.partnership.index')
                             ->with('success_message', 'Partnership was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified partnership.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $partnership = Partnership::with('user')->findOrFail($id);

        return view('partnerships.show', compact('partnership'));
    }

    /**
     * Show the form for editing the specified partnership.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        if(Auth::user()->plan->level == 0){
            return redirect()->route('admin.account.upgrade');
        }
        $partnership = Partnership::findOrFail($id);

        if($partnership->user_id != Auth::id()){
            return redirect()->back();
        }

        $users = User::pluck('name','id')->all();

        return view('partnerships.edit', compact('partnership','users'));
    }

    /**
     * Update the specified partnership in the storage.
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

            $partnership = Partnership::findOrFail($id);
            $partnership->update($data);

            return redirect()->route('partnerships.partnership.index')
                             ->with('success_message', 'Partnership was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Remove the specified partnership from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $partnership = Partnership::findOrFail($id);
            $partnership->delete();

            return redirect()->route('partnerships.partnership.index')
                             ->with('success_message', 'Partnership was successfully deleted!');

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
            'summary' => 'required|string|min:1|nullable',
            'partnership' => 'required|string|min:1|nullable',
            'expected_profit' => 'required|integer|min:1|nullable|numeric|max:2147483647',
            'project_stage' => 'required|nullable',
            'company_type' => 'required|nullable',
            'image' => ['image','nullable','file'],
            'user_id' => 'nullable',

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

        $path = config('codegenerator.files_upload_path', 'uploads');
        $saved = $file->store('public/' . $path, config('filesystems.default'));

        return substr($saved, 7);
    }
}
