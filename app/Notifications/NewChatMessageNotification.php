<?php

namespace App\Notifications;

use App\Models\Chat;
use App\Models\ChatMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewChatMessageNotification extends Notification implements ShouldQueue
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
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $adminChatUrl = url('/admin/chats/' . $this->chat->id);
        
        return (new MailMessage)
            ->subject('New Customer Chat Message')
            ->greeting('Hello Admin,')
            ->line('You have received a new chat message from ' . $this->chat->name . ' (' . $this->chat->email . '):')
            ->line('"' . $this->message->message . '"')
            ->action('Reply to Message', $adminChatUrl)
            ->line('Please respond as soon as possible.');
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
            'chat_id' => $this->chat->id,
            'message_id' => $this->message->id,
            'sender_name' => $this->chat->name,
            'message' => $this->message->message,
        ];
    }
}
