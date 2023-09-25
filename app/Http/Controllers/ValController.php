<?php

namespace App\Http\Controllers;

use App\Mail\ValMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Vonage\Client\Credentials\Basic;
use Vonage\Client;
use Vonage\SMS\Message\SMS;
use App\Models\SentSms;

class ValController extends Controller
{
    public function Val()
    {
        return view('pages.index');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'msg' => $request->msg

        ];

        Mail::to($request->email)->send(new ValMail($details));
        // return back()->with('message_sent1','Your message has been sent successfully');

        // Mail::to('husam-odat@outlook.com')->send(new ValMail($details));
        // return back()->with('message_sent','Your message has been sent successfully');


        // $basic  = new Basic("6d4ecd4c", "IdmEAmF3HTQl1XHP");
        // $client = new Client($basic);

        // $response = $client->sms()->send(
        //     new SMS($request->number, 'HELPZ', 'Thank you for applying to be a part of our team \n')
        // );

        // $message = $response->current();

        // if ($message->getStatus() == 0) {
        //     echo "The message was sent successfully\n";
        // } else {
        //     echo "The message failed with status: " . $message->getStatus() . "\n";
        // }
        // // return response()->json('SMS massage has been delevered', 200);
        return back()->with('message_sent1', 'Your request has been sent successfully');

    }
}