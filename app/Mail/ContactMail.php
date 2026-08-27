<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pesan Baru dari Portfolio: ' . $this->data['subject'],
        );
    }

    public function content(): Content
    {
        return new Content(
            htmlString: "
                <h3>Anda mendapatkan pesan baru dari Portofolio:</h3>
                <p><strong>Nama:</strong> {$this->data['name']}</p>
                <p><strong>Email:</strong> {$this->data['email']}</p>
                <p><strong>Subjek:</strong> {$this->data['subject']}</p>
                <p><strong>Pesan:</strong></p>
                <p>{$this->data['message']}</p>
            "
        );
    }
}