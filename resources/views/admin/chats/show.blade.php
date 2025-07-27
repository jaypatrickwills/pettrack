@extends('layouts.admin')

@section('title', 'Chat Details | Pets Travel International')
@section('header', 'Chat with ' . $chat->name)

@section('content')
<div class="space-y-6">
    <div class="flex flex-wrap items-center text-sm text-gray-500 mb-2">
        <a href="{{ route('admin.dashboard') }}" class="hover:text-dark-blue">Dashboard</a>
        <span class="mx-2">/</span>
        <a href="{{ route('admin.chats.index') }}" class="hover:text-dark-blue">Chat Management</a>
        <span class="mx-2">/</span>
        <span class="text-gray-700">Chat with {{ $chat->name }}</span>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-200 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex flex-col md:flex-row gap-6">
        <!-- Customer Information -->
        <div class="w-full md:w-1/3 lg:w-1/4">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
                <div class="flex items-center p-4 border-b border-gray-200 bg-brand-red bg-opacity-90">
                    <i class="fas fa-user mr-2 text-white"></i>
                    <h2 class="text-lg font-semibold text-white">Customer Information</h2>
                </div>
                <div class="p-4 space-y-3">
                    <div>
                        <span class="text-gray-600 font-medium">Name:</span>
                        <span class="text-gray-800 ml-1">{{ $chat->name }}</span>
                    </div>
                    <div>
                        <span class="text-gray-600 font-medium">Email:</span>
                        <a href="mailto:{{ $chat->email }}" class="text-dark-blue hover:underline ml-1">{{ $chat->email }}</a>
                    </div>
                    @if($chat->tracking_number)
                        <div>
                            <span class="text-gray-600 font-medium">Tracking Number:</span>
                            <a href="{{ route('admin.trackings.show', $chat->tracking_number) }}" target="_blank" class="text-brand-red hover:underline ml-1">
                                {{ $chat->tracking_number }}
                            </a>
                        </div>
                    @endif
                    <div>
                        <span class="text-gray-600 font-medium">Chat Started:</span>
                        <span class="text-gray-800 ml-1">{{ $chat->created_at->format('M d, Y H:i') }}</span>
                    </div>
                    <div>
                        <span class="text-gray-600 font-medium">Status:</span>
                        @if($chat->is_active)
                            <span class="ml-1 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                        @else
                            <span class="ml-1 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">Archived</span>
                        @endif
                    </div>

                    <div class="pt-4 border-t border-gray-100 mt-4">
                        @if($chat->is_active)
                            <form action="{{ route('admin.chats.archive', $chat) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-2 bg-orange text-white rounded-md text-sm hover:bg-opacity-80 transition-colors duration-200">
                                    <i class="fas fa-archive mr-2"></i> Archive Chat
                                </button>
                            </form>
                        @else
                            <form action="{{ route('admin.chats.restore', $chat) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-2 bg-green-600 text-white rounded-md text-sm hover:bg-opacity-80 transition-colors duration-200">
                                    <i class="fas fa-undo mr-2"></i> Restore Chat
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-2/3 lg:w-3/4">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
                <div class="flex justify-between items-center p-4 border-b border-gray-200 bg-brand-red bg-opacity-90">
                    <div class="flex items-center text-white">
                        <i class="fas fa-comments mr-2"></i>
                        <h2 class="text-lg font-semibold">Conversation</h2>
                    </div>
                    <div>
                        <a href="#messageForm" class="inline-flex items-center px-3 py-1 bg-white bg-opacity-90 text-dark-blue rounded-md text-sm hover:bg-opacity-100 transition-colors duration-200">
                            <i class="fas fa-reply mr-1"></i> <span class="hidden sm:inline">Jump to Reply</span>
                        </a>
                    </div>
                </div>
                <div class="p-4">
                    <div class="chat-messages h-[400px] sm:h-[500px] overflow-y-auto p-2">
                        @if($chat->messages->count() > 0)
                            @foreach($chat->messages as $message)
                                <div class="chat-message mb-4 flex {{ $message->is_from_admin ? 'justify-end' : 'justify-start' }}">
                                    <div class="message-bubble p-3 rounded-lg {{ $message->is_from_admin ? 'bg-brand-red text-white shadow-sm' : 'bg-gray-100 border border-gray-200' }} max-w-[80%] sm:max-w-[70%] break-words relative {{ $message->is_from_admin ? 'rounded-tr-none' : 'rounded-tl-none' }}">
                                        <div class="message-content text-sm sm:text-base">
                                            {{ $message->message }}
                                        </div>
                                        <div class="message-meta mt-1.5 text-right {{ $message->is_from_admin ? 'text-white text-opacity-80' : 'text-gray-500' }} text-xs flex justify-end items-center">
                                            <span>{{ $message->created_at->format('M d, g:i A') }}</span>
                                            @if($message->is_from_admin && $message->admin)
                                                <span class="ml-1">by {{ $message->admin->name }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-center py-8">
                                <div class="flex justify-center mb-4">
                                    <i class="fas fa-comment-slash text-4xl text-gray-400"></i>
                                </div>
                                <h3 class="text-lg font-medium text-gray-700 mb-1">No messages yet</h3>
                                <p class="text-gray-500">Start the conversation by sending a message below</p>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="border-t border-gray-200 bg-gray-50 p-3 sm:p-4" id="messageForm">
                    @if($chat->is_active)
                        <form id="messageForm">
                            @csrf
                            <div class="flex items-center space-x-2">
                                <div class="flex-grow relative">
                                    <input type="text" id="message-input" name="message" 
                                        class="w-full border border-gray-300 rounded-md px-3 sm:px-4 py-2 sm:py-2.5 focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 transition-colors" 
                                        placeholder="Type your message..." required {{ $chat->is_active ? '' : 'disabled' }}>
                                </div>
                                <button type="submit" class="inline-flex items-center justify-center px-3 sm:px-4 py-2 sm:py-2.5 bg-brand-red text-white rounded-md hover:bg-opacity-80 transition-colors duration-200 whitespace-nowrap">
                                    <i class="fas fa-paper-plane mr-1 sm:mr-2"></i> <span class="hidden sm:inline">Send</span>
                                </button>
                            </div>
                        </form>
                        <div id="sending-indicator" class="flex items-center justify-center mt-2 sm:mt-3 hidden">
                            <div class="animate-spin rounded-full h-4 w-4 border-2 border-gray-400 border-t-dark-blue" role="status"></div>
                            <span class="ml-2 text-sm text-gray-500">Sending message...</span>
                        </div>
                    @else
                        <div class="bg-yellow-50 border border-yellow-200 text-yellow-700 px-4 py-3 rounded flex items-center justify-center">
                            <i class="fas fa-archive mr-2"></i>
                            <span>This chat is archived. Reactivate it to send messages.</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const chatId = {{ $chat->id }};
        const chatMessages = document.querySelector('.chat-messages');
        const messageForm = document.getElementById('messageForm');
        const messageInput = document.getElementById('message-input');
        const sendingIndicator = document.getElementById('sending-indicator');
        let lastMessageTime = '{{ $chat->messages->count() > 0 ? $chat->messages->last()->created_at : $chat->created_at }}';
        
        // Scroll to bottom of chat on load
        scrollToBottom();
        
        // Focus message input
        if (messageInput) {
            messageInput.focus();
        }
        
        // Status indicator for auto-refresh
        const statusIndicator = document.createElement('div');
        statusIndicator.className = 'w-full mb-3 flex items-center justify-between px-4 py-2 bg-gray-100 text-gray-700 rounded-md text-sm';
        statusIndicator.innerHTML = `
            <div class="flex items-center">
                <i class="fas fa-circle text-green-500 text-xs mr-2"></i>
                <span>Live chat connected</span>
            </div>
            <button id="manual-refresh" class="text-gray-500 hover:text-dark-blue transition-colors duration-200">
                <i class="fas fa-sync-alt"></i>
            </button>
        `;
        chatMessages.parentNode.insertBefore(statusIndicator, chatMessages);
        
        // Add manual refresh button event listener
        document.getElementById('manual-refresh').addEventListener('click', function() {
            this.querySelector('i').className = 'fas fa-sync-alt fa-spin';
            fetchMessages()
                .then(() => {
                    this.querySelector('i').className = 'fas fa-sync-alt';
                })
                .catch(() => {
                    this.querySelector('i').className = 'fas fa-sync-alt';
                });
        });
        
        // Set up automatic polling (every 3 seconds)
        const pollingInterval = setInterval(() => {
            fetchMessages();
        }, 3000);
        
        // Clean up polling when navigating away
        window.addEventListener('beforeunload', () => {
            clearInterval(pollingInterval);
        });

        if (messageForm) {
            messageForm.addEventListener('submit', function(e) {
                e.preventDefault();
                sendMessage();
            });
        }

        function sendMessage() {
            const message = messageInput.value.trim();
            if (!message) return;
            
            // Clear input immediately for better UX
            const messageText = message;
            messageInput.value = '';
            
            // Create optimistic message (show immediately)
            const optimisticId = 'temp-' + Date.now();
            const now = new Date();
            const optimisticMessage = {
                id: optimisticId,
                message: messageText,
                is_from_admin: true,
                created_at: now.toISOString(),
                is_optimistic: true
            };
            
            // Add message to UI immediately
            appendMessage(optimisticMessage);
            scrollToBottom();
            
            // Show subtle sending indicator
            const tempMessage = document.getElementById(optimisticId);
            const tempMeta = tempMessage.querySelector('.message-meta');
            tempMeta.innerHTML = '<i class="fas fa-circle-notch fa-spin mr-1"></i> Sending...';
            
            // Actually send the message
            fetch(`/admin/chats/${chatId}/messages`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    message: messageText
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Update the optimistic message with server data
                    if (tempMessage) {
                        tempMeta.innerHTML = formatMessageTime(now);
                    }
                } else {
                    // Show error in the message
                    if (tempMessage) {
                        tempMeta.innerHTML = '<i class="fas fa-exclamation-circle text-yellow-500 mr-1"></i> Not sent';
                        tempMessage.querySelector('.message-bubble').classList.add('bg-opacity-70');
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Show error in the message
                if (tempMessage) {
                    tempMeta.innerHTML = '<i class="fas fa-exclamation-circle text-yellow-500 mr-1"></i> Not sent';
                    tempMessage.querySelector('.message-bubble').classList.add('bg-opacity-70');
                }
            })
            .finally(() => {
                messageInput.focus();
            });
        }
        
        function fetchMessages() {
            return fetch(`/admin/chats/${chatId}/messages?last_time=${encodeURIComponent(lastMessageTime)}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.messages && data.messages.length > 0) {
                    data.messages.forEach(message => {
                        appendMessage(message);
                    });
                    lastMessageTime = data.last_time;
                    scrollToBottom();
                }
            })
            .catch(error => {
                console.error('Error fetching messages:', error);
            });
        }
        
        // Helper function to format message time
        function formatMessageTime(date) {
            return `${date.toLocaleDateString('en-US', { month: 'short' })} ${date.getDate()}, ${date.toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit', hour12: true })}`;
        }
        
        function appendMessage(message) {
            // Check if message already exists (to avoid duplicates during polling)
            if (!message.is_optimistic && document.getElementById('msg-' + message.id)) {
                return;
            }
            
            const messageDiv = document.createElement('div');
            messageDiv.className = `chat-message mb-3 flex ${message.is_from_admin ? 'justify-end' : 'justify-start'}`;
            messageDiv.id = message.is_optimistic ? message.id : 'msg-' + message.id;
            
            const bubbleDiv = document.createElement('div');
            bubbleDiv.className = `message-bubble p-3 rounded-lg ${message.is_from_admin ? 'bg-brand-red text-white' : 'bg-gray-100'} max-w-[75%] sm:max-w-[70%] break-words`;
            
            const contentDiv = document.createElement('div');
            contentDiv.className = 'message-content text-sm sm:text-base';
            contentDiv.textContent = message.message;
            
            const metaDiv = document.createElement('div');
            metaDiv.className = `message-meta mt-1 text-right ${message.is_from_admin ? 'text-white text-opacity-80' : 'text-gray-500'} text-xs`;
            
            // Format date
            const date = new Date(message.created_at);
            if (!message.is_optimistic) {
                metaDiv.textContent = formatMessageTime(date);
            } else {
                metaDiv.innerHTML = '<i class="fas fa-circle-notch fa-spin mr-1"></i> Sending...';
            }
            
            bubbleDiv.appendChild(contentDiv);
            bubbleDiv.appendChild(metaDiv);
            messageDiv.appendChild(bubbleDiv);
            
            chatMessages.appendChild(messageDiv);
        }
        
        function scrollToBottom() {
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
    });
</script>
</div>
@endsection
