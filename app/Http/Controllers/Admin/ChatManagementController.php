<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\ChatMessage;
use App\Notifications\ChatMessageNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class ChatManagementController extends Controller
{
    // Middleware is applied in routes file
    public function __construct()
    {
        // Auth:admin middleware is applied in RouteServiceProvider or web.php routes file
    }
    
    /**
     * Display a listing of all chats.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $activeChats = Chat::where('is_active', true)
            ->orderBy('last_message_at', 'desc')
            ->get();
            
        $archivedChats = Chat::where('is_active', false)
            ->orderBy('last_message_at', 'desc')
            ->limit(20)
            ->get();
            
        return view('admin.chats.index', compact('activeChats', 'archivedChats'));
    }

    /**
     * Display a specific chat with its messages.
     *
     * @param  \App\Models\Chat  $chat
     * @return \Illuminate\View\View
     */
    public function show(Chat $chat)
    {
        // Mark all unread messages in this chat as read
        $chat->messages()->where('is_from_admin', false)->where('is_read', false)->update(['is_read' => true]);
        
        // Load the chat with its messages and admin
        $chat->load(['messages' => function ($query) {
            $query->orderBy('created_at', 'asc');
        }, 'admin']);
        
        // Assign admin to chat if not already assigned
        if (!$chat->admin_id) {
            $chat->update([
                'admin_id' => Auth::guard('admin')->id()
            ]);
        }
        
        return view('admin.chats.show', compact('chat'));
    }

    /**
     * Send a message in a chat.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Chat $chat
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function sendMessage(Request $request, Chat $chat)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        // Create a new message
        $message = new ChatMessage([
            'message' => $request->message,
            'is_from_admin' => true,
            'is_read' => true, // Admin messages are considered read immediately
        ]);

        // Associate with admin
        $message->admin_id = Auth::id();
        
        // Save to chat
        $chat->messages()->save($message);
        
        // Update last message timestamp
        $chat->update(['last_message_at' => now()]);
        
        // Send email notification to user
        try {
            Notification::route('mail', $chat->email)
                ->notify(new ChatMessageNotification($chat, $message));
        } catch (\Exception $e) {
            // Log error but continue
            \Log::error('Failed to send chat notification: ' . $e->getMessage());
        }

        // Return JSON response for AJAX requests
        if ($request->expectsJson()) {
            return response()->json([
                'success' => true, 
                'message' => 'Message sent successfully'
            ]);
        }

        return redirect()->back()->with('success', 'Message sent successfully.');
    }
    
    /**
     * Get new messages for a chat since a specific timestamp.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Chat $chat
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMessages(Request $request, Chat $chat)
    {
        $lastTime = $request->input('last_time');
        
        $messages = $chat->messages()
            ->where('created_at', '>', $lastTime)
            ->orderBy('created_at')
            ->get()
            ->map(function ($message) {
                return [
                    'id' => $message->id,
                    'message' => $message->message,
                    'is_from_admin' => $message->is_from_admin,
                    'created_at' => $message->created_at,
                    'admin_name' => $message->admin ? $message->admin->name : null,
                ];
            });
        
        $lastMessageTime = $chat->messages()->latest()->first()?->created_at ?? $chat->created_at;
        
        return response()->json([
            'messages' => $messages,
            'last_time' => $lastMessageTime,
        ]);
    }

    /**
     * Archive a chat.
     *
     * @param  \App\Models\Chat  $chat
     * @return \Illuminate\Http\RedirectResponse
     */
    public function archiveChat(Chat $chat)
    {
        $chat->update([
            'is_active' => false
        ]);

        return redirect()->route('admin.chats.index')
            ->with('success', 'Chat archived successfully.');
    }

    /**
     * Reactivate an archived chat.
     *
     * @param  \App\Models\Chat  $chat
     * @return \Illuminate\Http\RedirectResponse
     */
    public function reactivateChat(Chat $chat)
    {
        $chat->update([
            'is_active' => true,
            'last_message_at' => now()
        ]);

        return redirect()->route('admin.chats.show', $chat)
            ->with('success', 'Chat reactivated successfully.');
    }
}
