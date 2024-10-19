<?php

namespace App\Http\Controllers;

/*use http\Message;*/

use App\Models\Message;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function send(Request $request){
        $validated = $request->validate([
            'message' => 'required',
        ]);

        $message= new Message();
        $message->message=$validated['message'];
        $message->save();

        return view('index');
    }

    public function show(){
        $messages= Message::all();
        return view('allMessages', compact('messages'));
    }

    public function complaint(Request $request){
        $validated = $request->validate([
            'id' => 'required',
        ]);
        $message= Message::findOrFail($validated['id']);
        $message->complaint=1;
        $message->save();
        return redirect()->back();
    }
}
