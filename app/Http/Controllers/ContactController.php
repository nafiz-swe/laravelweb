<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactConfirmationMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required',
            'inquiry' => 'required',
            'theme' => 'nullable|string', // ✅ theme এর validation add করলাম
            'message' => 'required|min:10',
        ]);

        // Save to database
        $contact = Contact::create($request->all());

        // Send email to user
        Mail::to($request->email)->send(new ContactConfirmationMail($request->all()));

        return back()->with('success', "<div class='toast-custom'>
            <div class='icon'><i class='fas fa-check-circle'></i></div>
            <div class='title'>Thank you!</div>
            <div class='message'>Your message was sent successfully. We'll get back to you soon.</div>
        </div>");
    }

}
