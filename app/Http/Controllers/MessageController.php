<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class messageController extends Controller
{
    public function create(Request $request)
    {
        request()->validate(['email' => "required|email"]);
        Message::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,

        ]);
        return redirect()->route('contactus')->with('contactmessage', "Thanks " . $request->first_name . " " . ' Your msg is sent!');
    }


    public function index()
    {
        return view('admin.view_msgs', [
            'msgs' => Message::all()

        ]);
    }

    public function show($id)
    {
        $msg = Message::find($id);

        return view('admin.show', ['msg' => $msg]);
    }

    public function reply($id)
    {
        $msg = Message::find($id);

        return view('admin.reply', ['msg' => $msg]);
    }

    public function sendMail()
    {
        // dd(request('replymsg'));
        Mail::raw(request('replymsg'), function ($message) {
            $message
            ->to(request('email'))
            ->subject('HELLO THERE WITH TEXTAREA!');
        });
        return redirect()->route("view_messages")->with('replyMsg','Reply Sent Successfuly  TO '.request('email'));
    }
}
