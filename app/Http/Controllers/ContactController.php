<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        try {
            // Log incoming request data
            Log::info('Contact form submission:', $request->all());

            // Validate form data
            $validated = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email',
                'message' => 'required',
            ]);

            Log::info('Validated data:', $validated);

            // Send email
            Mail::to('nibirjoydhar@gmail.com')->send(new ContactMessage($validated));

            Log::info('Email sent successfully');

            return response()->json(['success' => 'Message sent successfully!']);
        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage(), [
                'exception' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);
            return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }
}