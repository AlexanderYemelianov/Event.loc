<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Message;

/*use Redirect;*/

class MessageController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
           'message' => ['required', 'max:500']
        ]);

        $message = new Message($request->all());

        $message->save();

        /*return Redirect::route('contacts')->with('message', 'Thank you for your message! We will contact you as soon as possible.');*/
        return back()->with('message', 'Thank you for your message! We will contact you as soon as possible.');
    }

}
