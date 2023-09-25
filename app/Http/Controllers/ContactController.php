<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('pages.index');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name'=> $request->name,
            'email'=> $request->email,
            'msg' => $request->msg

        ];

        Mail::to($request->email)->send(new ContactMail($details));
        return back()->with('message_sent','Your message has been sent successfully');

        // Mail::to('husam-odat@outlook.com')->send(new ContactMail($details));
        // return back()->with('message_sent','Your message has been sent successfully');


    }
}
