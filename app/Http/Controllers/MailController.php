<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request){
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        $name = $request->name;

        // Kirim email
        Mail::raw("Name: {$validated['name']}\nEmail: {$validated['email']}\nMessage: {$validated['message']}", function ($mail) use ($name) {
            $mail->to('rizal.ef340@gmail.com') // Ganti dengan email tujuan
                 ->subject("efrizal.me (From {$name})");
        });

        return back()->with('success', 'Message sent successfully!');
    }
}
