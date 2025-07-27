<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\ChatMessage;
use App\Notifications\NewChatMessageNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class ChatController extends Controller
{
    /**
     * Initialize a new chat.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function initChat(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tracking_number' => 'nullable|string|max:255',
        ]);

        // Check if the chat already exists for this email
        $chat = Chat::where('email', $validated['email'])
                    ->where('is_active', true)
                    ->first();

        if (!$chat) {
            $chat = Chat::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'tracking_number' => $validated['tracking_number'] ?? null,
                'is_active' => true,
                'last_message_at' => now(),
            ]);
        }

        // Store the chat ID in the session
        session(['chat_id' => $chat->id]);

        return response()->json([
            'success' => true,
            'chat_id' => $chat->id,
            'message' => 'Chat initialized successfully.'
        ]);
    }

    /**
     * Get messages for a chat.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMessages(Request $request)
    {
        $chat_id = session('chat_id');
        
        if (!$chat_id) {
            return response()->json(['success' => false, 'message' => 'No active chat session.'], 400);
        }

        $chat = Chat::findOrFail($chat_id);
        $messages = $chat->messages()->orderBy('created_at', 'asc')->get()->map(function($message) {
            return [
                'id' => $message->id,
                'message' => $message->message,
                'is_from_admin' => $message->is_from_admin,
                'created_at' => $message->created_at->diffForHumans(),
                'timestamp' => $message->created_at->toISOString(),
            ];
        });

        return response()->json([
            'success' => true,
            'messages' => $messages,
        ]);
    }

    /**
     * Send a new message.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string',
        ]);

        $chat_id = session('chat_id');
        
        if (!$chat_id) {
            return response()->json(['success' => false, 'message' => 'No active chat session.'], 400);
        }

        $chat = Chat::findOrFail($chat_id);
        $message = ChatMessage::create([
            'chat_id' => $chat->id,
            'message' => $validated['message'],
            'is_from_admin' => false,
            'message_id' => 'user_' . Str::uuid(),
            'is_read' => false,
        ]);

        $chat->update([
            'last_message_at' => now()
        ]);

        // Notify admin about new message
        if ($chat->admin_id) {
            // Get the admin and notify them
            $admin = \App\Models\Admin::find($chat->admin_id);
            if ($admin) {
                $admin->notify(new NewChatMessageNotification($chat, $message));
            }
        }

        return response()->json([
            'success' => true,
            'message' => [
                'id' => $message->id,
                'message' => $message->message,
                'is_from_admin' => $message->is_from_admin,
                'created_at' => $message->created_at->diffForHumans(),
                'timestamp' => $message->created_at->toISOString(),
            ],
        ]);
    }

    /**
     * End the current chat session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function endChat(Request $request)
    {
        $chat_id = session('chat_id');
        
        if (!$chat_id) {
            return response()->json(['success' => false, 'message' => 'No active chat session.'], 400);
        }

        $chat = Chat::findOrFail($chat_id);
        $chat->update([
            'is_active' => false
        ]);

        // Remove chat from session
        $request->session()->forget('chat_id');

        return response()->json([
            'success' => true,
            'message' => 'Chat session ended successfully.'
        ]);
    }
}
