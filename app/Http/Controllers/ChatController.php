<?php

namespace App\Http\Controllers;

use App\User;
use App\Events\ChatEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function chat()
    {
        return view('chat');
    }

    
    public function send(Request $request)
    {
        //dd($request);
        
        $user=User::find(Auth::id());
        $this->saveToSession($request);
        //return $request->all();
        event(new ChatEvent($request->message,$user));
    }

    public function saveToSession(Request $request)
    { 
        session()->put('chat',$request->chat);
    }

    public function getOldMessage()
    { 
        return session('chat');
    }

    public function deleteSession()
    { 
        session()->forget('chat');
    }

}
