<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

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
            'message' => 'required|min:10',
        ]);

        Contact::create($request->all());

        return back()->with('success', 'Thank you for contacting us!');
    }
}
