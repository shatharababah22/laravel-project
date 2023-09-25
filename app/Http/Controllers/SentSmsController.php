<?php

namespace App\Http\Controllers;


use Vonage\Client\Credentials\Basic;
use Vonage\Client;
use Vonage\SMS\Message\SMS;
use App\Models\SentSms;
use Illuminate\Http\Request;

class SentSmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
// public function Sent() {
//         $basic  = new Basic("6d4ecd4c", "IdmEAmF3HTQl1XHP");
//         $client = new Client($basic);

//         $response = $client->sms()->send(
//             new SMS("962789776587", 'HELPZ', 'A text message sent using the Nexmo SMS API')
//         );

//         $message = $response->current();

//         if ($message->getStatus() == 0) {
//             echo "The message was sent successfully\n";
//         } else {
//             echo "The message failed with status: " . $message->getStatus() . "\n";
//         }
//         return response()->json('SMS massage has been delevered',200);
//    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SentSms  $sentSms
     * @return \Illuminate\Http\Response
     */
    public function show(SentSms $sentSms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SentSms  $sentSms
     * @return \Illuminate\Http\Response
     */
    public function edit(SentSms $sentSms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SentSms  $sentSms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SentSms $sentSms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SentSms  $sentSms
     * @return \Illuminate\Http\Response
     */
    public function destroy(SentSms $sentSms)
    {
        //
    }
}
