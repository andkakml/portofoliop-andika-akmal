<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Pastikan Mail di-import

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Simpan ke database
        Contact::create($validated);

        // UBAH EMAIL TUJUAN DI SINI ⬇️
        Mail::to('andikaakmal2709@gmail.com')->send(new \App\Mail\ContactMail($validated));

        return redirect()->to(url()->previous() . '#contact')
                 ->with('success', 'Pesan Anda berhasil dikirim!');
    }
}