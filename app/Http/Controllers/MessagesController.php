<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class MessagesController extends Controller
{

    public function send(Request $request)
    {
        $message = Message::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->contact_id,
            'text' => $request->text
        ]);

//        broadcast(new NewMessage($message));

        return response()->json($message);
    }

    function getMessagesFor($id){
        // mark all messages with the selected contact as read
        Message::where('sender_id', $id)->where('receiver_id', auth()->id())->update(['read' => true]);

        // get all messages between the authenticated user and the selected user
        $messages = Message::with('sender')->where(function($q) use ($id) {
            $q->where('sender_id', auth()->id());
            $q->where('receiver_id', $id);
        })->orWhere(function($q) use ($id) {
            $q->where('sender_id', $id);
            $q->where('receiver_id', auth()->id());
        })
            ->get();

        return response()->json($messages);
    }
    /**
     * Display a listing of the messages.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $messages = Message::with('sender','receiver')->paginate(25);

        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new message.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $senders = User::pluck('id','id')->all();
$receivers = User::pluck('id','id')->all();
        
        return view('messages.create', compact('senders','receivers'));
    }

    /**
     * Store a new message in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Message::create($data);

            return redirect()->route('messages.message.index')
                             ->with('success_message', 'Message was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified message.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $message = Message::with('sender','receiver')->findOrFail($id);

        return view('messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified message.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $message = Message::findOrFail($id);
        $senders = User::pluck('id','id')->all();
$receivers = User::pluck('id','id')->all();

        return view('messages.edit', compact('message','senders','receivers'));
    }

    /**
     * Update the specified message in the storage.
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
            
            $message = Message::findOrFail($id);
            $message->update($data);

            return redirect()->route('messages.message.index')
                             ->with('success_message', 'Message was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified message from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $message = Message::findOrFail($id);
            $message->delete();

            return redirect()->route('messages.message.index')
                             ->with('success_message', 'Message was successfully deleted!');

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
            'sender_id' => 'nullable',
            'receiver_id' => 'required|nullable',
            'text' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
