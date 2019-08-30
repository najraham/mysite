<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        $message = new Message();
        $message->name = \Auth::user()->name;
        $message->email = \Auth::user()->email;
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->save();

        return redirect()->back();
    }
}
