<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('nibirjoydhar@gmail.com')->send(new ContactMessage($validated));

        return response()->json(['success' => 'Message sent successfully!']);
    }
}
