<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index(){
        $messengers = Message::select('sender_id')->whereReceiverId(Auth::id())->distinct()->get();
        $messages = $messengers->load('sender');
        $user = User::with('profile')->whereId(Auth::id())->first();

        return view('admin.chat.chat', compact('user','messages'));

    }

    public function inbox($id)
    {
        $messengers = Message::select('sender_id')->whereReceiverId(Auth::id())->distinct()->get();
        $users = $messengers->load('sender');

        $receiver = User::findOrFail($id);
        $message = Message::with('sender','receiver')->whereSenderId($id)->orWhere('receiver_id',$id)->get();

        return view('admin.chat.inbox', compact('message','receiver','users','id'));
    }
}
