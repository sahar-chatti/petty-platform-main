<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function showContactForm()
    {
        return view('home.contact');
    }
    public function store(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
           
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);


        // Create a new message record
          Message::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
            'is_read' => 0, // Default to unread
        ]);
        return redirect('/')->with('success', 'Message envoyé avec succès!');
    }
}


