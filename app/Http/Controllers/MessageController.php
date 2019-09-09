<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->status = "unread";
        $message->save();

        return redirect()->back()->with('success' , 'Message sent succesfully');
    }
}
