<?php

namespace App\Mail\Office;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Arr;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    public $formType = [
        'virtualOffices' => '[Wirtualne biuro]',
        'coworkingOffices' => '[Coworking]',
        'readyOffices' => '[Biura]',
    ];

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = $this->getTitle($this->data['formType']);

        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'office.mail.contactMail',
            with: [
                'data' => $this->data
            ],
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

    public function getTitle($formType)
    {
        return Arr::get($this->formType, $formType) . ' - Zapytanie z formularza';
    }
}
