<?php

namespace App\Notifications;

use App\Models\Chat;
use App\Models\ChatMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ChatMessageNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $chat;
    protected $message;

    /**
     * Create a new notification instance.
     *
     * @param Chat $chat
     * @param ChatMessage $message
     * @return void
     */
    public function __construct(Chat $chat, ChatMessage $message)
    {
        $this->chat = $chat;
        $this->message = $message;
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
        $replyUrl = url('/chat?reply=' . $this->chat->id);
        
        return (new MailMessage)
            ->subject('New Message from Pets Travel International Support')
            ->greeting('Hello ' . $this->chat->name . ',')
            ->line('You have received a new message from our support team:')
            ->line('"' . $this->message->message . '"')
            ->line('You can reply directly to this email or click the button below to continue the conversation on our website.')
            ->action('Reply to Message', $replyUrl)
            ->line('Thank you for choosing Pets Travel International!');
    }
}
