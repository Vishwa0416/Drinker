<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Send email using the ContactMail mailable
        Mail::to('agvawijesekara@std.appsc.sab.ac.lk')->send(new ContactMail($validated));

        return back()->with('success', 'Your message has been sent!');
    }
}
