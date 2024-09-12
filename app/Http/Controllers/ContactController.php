<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        // Process form (for example, send email or store in database)
        Mail::to('support@drinker.com')->send(new ContactUsMail($validated));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
