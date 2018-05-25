<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class GoodiesController extends Controller
{
    public function create() {
        return view('vitrine.goodies');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::send('emails.contact-message', [
            'msg' => $request->message
        ], function($mail) use($request) {
            $mail->from($request->email, $request->name);
            $mail->to('kevin.dintanavong@gmail.com')->subject('Message depuis le formulaire de contact');
        });

        return redirect()->back()->with('flash_message', 'Merci pour votre message.');
    }
}
