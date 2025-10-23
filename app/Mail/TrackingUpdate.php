<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TrackingUpdate extends Mailable
{
    use Queueable, SerializesModels;

    public $tracking;
    public $update;
    public $statusText;
    public $viewUrl;

    /**
     * Create a new message instance.
     */
    public function __construct($tracking, $update)
    {
        $this->tracking = $tracking;
        $this->update = $update;
        $this->statusText = ucfirst(str_replace('_', ' ', $this->update->status));
        $this->viewUrl = url('/track-pet/search?tracking_number=' . $this->tracking->tracking_number);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pet Tracking Update: ' . $this->tracking->pet_name . ' - ' . $this->statusText,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.tracking-update',
            with: [
                'tracking' => $this->tracking,
                'update' => $this->update,
                'statusText' => $this->statusText,
                'viewUrl' => $this->viewUrl,
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
}
