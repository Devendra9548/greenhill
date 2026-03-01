<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    /**
     * Create a new message instance.
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.contact',
        );
    }

    public function build()
    {
        return $this->subject('New Registration')
            ->view('mail.contact')
            ->with('mailData', $this->mailData);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];
    
        if (!empty($this->mailData['aadhaar_file'])) {
    
            $filePath = public_path('aadhar/' . $this->mailData['aadhaar_file']);
            $fileName = basename($filePath);
    
            $attachments[] = Attachment::fromPath($filePath)
                ->as($fileName);   // ✅ original image name
        }
    
        if (!empty($this->mailData['pan_file'])) {
    
            $filePath = public_path('pencard/' . $this->mailData['pan_file']);
            $fileName = basename($filePath);
    
            $attachments[] = Attachment::fromPath($filePath)
                ->as($fileName);
        }
    
        return $attachments;
    }
}
