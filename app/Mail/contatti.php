<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class contatti extends Mailable
{
    use Queueable, SerializesModels;

    public $username;
    public $mail;
    public $description;
    /**
     * Create a new message instance.
     */
    public function __construct($_email,$_username,$_description)
    {
        // VALORIZZAZIONI



        $this->username = $_username;
        $this->email = $_email;
        $this->description = $_description;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->email,$this->username),
            subject: 'Questa è una mail di contatto',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.contact',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
