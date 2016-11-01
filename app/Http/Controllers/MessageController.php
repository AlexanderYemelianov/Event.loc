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

        if (empty($request->phone))
        {
            $message->phone = 'There is no phone';
        } else
        {
            $message->phone = $request->phone;
        }

        $message->save();

        $messagesCreatedAt = Message::all();

        $info = $messagesCreatedAt->sortByDesc('id')->first();

        $to = 'nobody@mail.com';
        $subject = 'new message from site' . $info->created_at;

        $message = 'Привет красотка,' . "\r\n\r\n" . ' у тебя новое сообщение с сайта от ' . $info->name . $info->lat_name . "\r\n\r\n" . $info->message . "\r\n\r\n" . 'Контактный телефон: ' . $info->phone;


        mail($to, $subject, $message);

        return back()->with('message', 'Thank you for your message! We will contact you as soon as possible.');
    }

}
