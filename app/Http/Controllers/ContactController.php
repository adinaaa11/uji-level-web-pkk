<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    // Show the contact form
    public function showForm()
    {
        return view('contact');
    }

    // Handle form submission
    public function submit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Process the form submission, e.g., send an email or save the message in the database

        // Flash a success message to the session
        Session::flash('success', 'Pesan Anda telah terkirim! Terima kasih.');

        // Redirect back to the contact form
        return redirect()->route('contact');
    }
}
?>