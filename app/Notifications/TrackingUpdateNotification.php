<?php

namespace App\Notifications;

use App\Models\Tracking;
use App\Models\TrackingUpdate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TrackingUpdateNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $tracking;
    protected $update;

    /**
     * Create a new notification instance.
     *
     * @param Tracking $tracking
     * @param TrackingUpdate $update
     * @return void
     */
    public function __construct(Tracking $tracking, TrackingUpdate $update)
    {
        $this->tracking = $tracking;
        $this->update = $update;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $statusText = ucfirst(str_replace('_', ' ', $this->update->status));
        $viewUrl = url('/track-pet?tracking_number=' . $this->tracking->tracking_number);

        return (new MailMessage)
            ->subject('Pet Tracking Update: ' . $this->tracking->pet_name . ' - ' . $statusText)
            ->greeting('Hello ' . $this->tracking->owner_name . ',')
            ->line('We have an update about your pet ' . $this->tracking->pet_name . '\'s journey.')
            ->line('Current Status: ' . $statusText)
            ->line('Location: ' . $this->update->location)
            ->line('Details: ' . $this->update->description)
            ->line('Tracking Number: ' . $this->tracking->tracking_number)
            ->action('View Tracking Details', $viewUrl)
            ->line('Thank you for trusting Pets Travel International with your pet\'s journey!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'tracking_id' => $this->tracking->id,
            'update_id' => $this->update->id,
            'status' => $this->update->status,
            'location' => $this->update->location,
        ];
    }
}
