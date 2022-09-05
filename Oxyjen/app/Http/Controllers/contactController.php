<?php

namespace App\Http\Controllers;
use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    //
    public function contact(){
        return view('pages.contact');
    }
    public function sendEmail(Request $request){
        $datalis=[
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        Mail::to('lujain.masters@gmail.com')->send(new contactMail($datalis));
        return back()->with('message_sent','Your Message has been sent successfully!');
    }
}
