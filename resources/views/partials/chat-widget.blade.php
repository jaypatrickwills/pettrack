<!-- Chat Widget -->
<div id="chat-widget" class="fixed bottom-4 right-4 z-50">
    <!-- Chat Button -->
    <button id="chat-button" class="bg-brand-red hover:bg-red-700 text-white rounded-full p-4 shadow-lg flex items-center justify-center w-16 h-16 focus:outline-none transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
        </svg>
    </button>

    <!-- Chat Box (Hidden by default) -->
    <div id="chat-box" class="hidden bg-white rounded-lg shadow-xl w-80 sm:w-96 overflow-hidden" style="height: 480px; max-height: 80vh; position: relative;">
        <!-- Chat Header -->
        <div class="bg-brand-red text-white px-4 py-3 flex justify-between items-center">
            <h3 class="font-bold">Chat with Us</h3>
            <button id="close-chat" class="text-white hover:text-gray-300 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Login Form -->
        <div id="login-area" class="p-4 overflow-auto" style="height: calc(100% - 60px);">
            <p class="text-gray-700 mb-4">Please provide your information to start chatting with our team.</p>
            <form id="login-form">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Your Name</label>
                    <input type="text" id="user-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-brand-red focus:ring focus:ring-red-200" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Your Email</label>
                    <input type="email" id="user-email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-brand-red focus:ring focus:ring-red-200" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Tracking Number (optional)</label>
                    <input type="text" id="user-tracking" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-brand-red focus:ring focus:ring-red-200">
                </div>
                <button type="submit" class="bg-brand-red hover:bg-red-700 text-white py-2 px-4 rounded w-full">Start Chat</button>
            </form>
        </div>

        <!-- Chat Area - Using a simplified structure with hard-coded styles for reliability -->
        <div id="chat-area" class="hidden" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: white;">
            <!-- Chat Header (repeated for chat area) -->
            <div style="background-color: #dc2626; color: white; padding: 12px 16px; display: flex; justify-content: space-between; align-items: center;">
                <h3 style="font-weight: bold; margin: 0;">Chat with Us</h3>
                <button id="close-chat-2" style="background: none; border: none; color: white; cursor: pointer;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <!-- Messages Container - Fixed height with scrolling -->
            <div id="messages" style="position: absolute; top: 48px; left: 0; right: 0; bottom: 70px; padding: 16px; overflow-y: auto;"></div>
            
            <!-- Message Input - Fixed at bottom -->
            <div id="input-container" style="position: absolute; bottom: 0; left: 0; right: 0; border-top: 1px solid #e5e7eb; padding: 12px; background: white;">
                <form id="message-form" style="display: flex; width: 100%;">
                    <input type="text" id="message-input" placeholder="Type your message..." style="display: block; width: 100%; border: 1px solid #e5e7eb; border-radius: 0.5rem 0 0 0.5rem; padding: 0.5rem 0.75rem; outline: none;">
                    <button type="submit" style="display: flex; align-items: center; justify-content: center; background-color: #dc2626; color: white; border: none; border-radius: 0 0.5rem 0.5rem 0; padding: 0.5rem 1rem; cursor: pointer;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>


        <div id="chat-ended" class="hidden flex-1 p-4 flex flex-col justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <h3 class="text-lg font-medium text-gray-900 mb-2">Chat Ended</h3>
            <p class="text-gray-500 text-center mb-6">Thank you for chatting with us.</p>
            <button id="restart-chat" class="elementor-button bg-brand-red hover:bg-red-700 text-white py-2 px-4 rounded-full">
                Start New Chat
            </button>
        </div>

        <!-- Loading Indicator -->
        <div id="chat-loading" class="hidden absolute inset-0 bg-white bg-opacity-75 flex justify-center items-center">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-brand-red"></div>
        </div>
    </div>
</div>

<!-- Chat JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // DOM Elements
        const chatButton = document.getElementById('chat-button');
        const chatBox = document.getElementById('chat-box');
        const closeChat = document.getElementById('close-chat');
        const closeChat2 = document.getElementById('close-chat-2');
        const loginArea = document.getElementById('login-area');
        const loginForm = document.getElementById('login-form');
        const userName = document.getElementById('user-name');
        const userEmail = document.getElementById('user-email');
        const userTracking = document.getElementById('user-tracking');
        const chatArea = document.getElementById('chat-area');
        const messagesContainer = document.getElementById('messages');
        const messageForm = document.getElementById('message-form');
        const messageInput = document.getElementById('message-input');
        const chatEnded = document.getElementById('chat-ended');
        const restartChat = document.getElementById('restart-chat');
        const chatLoading = document.getElementById('chat-loading');
        
        let chatId = null;
        let messagesInterval = null;

        // Check if there's an active chat in session
        checkExistingChat();

        // Toggle Chat Box
        chatButton.addEventListener('click', function() {
            chatBox.classList.toggle('hidden');
            
            // If showing and we have a chat ID, fetch the latest messages
            if (!chatBox.classList.contains('hidden') && chatId) {
                fetchMessages();
                // Always make sure the message input is focused when chat is opened
                setTimeout(() => {
                    if (messageInput) messageInput.focus();
                }, 100);
            }
        });

        // Close Chat Box
        closeChat.addEventListener('click', function() {
            chatBox.classList.add('hidden');
        });

        // Close Chat Box (from chat area)
        if (closeChat2) {
            closeChat2.addEventListener('click', function() {
                chatBox.classList.add('hidden');
            });
        }

        // Initialize Chat
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = userName.value;
            const email = userEmail.value;
            const tracking = userTracking.value;
            
            if (!name.trim() || !email.trim()) {
                alert('Please enter your name and email.');
                return;
            }
            
            showLoading();
            
            fetch('/chat/init', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    name: name,
                    email: email,
                    tracking_number: tracking
                })
            })
            .then(response => response.json())
            .then(data => {
                hideLoading();
                
                if (data.success) {
                    chatId = data.chat_id;
                    showChatArea();
                    
                    // Store chat ID in localStorage
                    localStorage.setItem('chatId', chatId);
                    
                    // Focus on message input
                    messageInput.focus();
                }
            })
            .catch(error => {
                hideLoading();
                console.error('Error:', error);
                alert('Failed to initialize chat. Please try again.');
            });
        });

        // Send Message
        messageForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const message = messageInput.value;
            if (!message.trim()) return;
            
            // Store message and clear input immediately to prevent double submission
            const messageToSend = message.trim();
            messageInput.value = '';
            messageInput.focus();
            
            // Add message to UI immediately (optimistic UI)
            addMessage(messageToSend, false);
            
            fetch('/chat/send', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    message: messageToSend
                })
            })
            .then(response => response.json())
            .then(data => {
                if (!data.success) {
                    console.error('Failed to send message');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
        
        // Handle Enter key for message submission
        messageInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                if (this.value.trim()) {
                    const submitBtn = messageForm.querySelector('button[type="submit"]');
                    submitBtn.click();
                }
            }
        });

        // Restart Chat
        restartChat.addEventListener('click', function() {
            chatEnded.classList.add('hidden');
            loginArea.classList.remove('hidden');
            
            // Clear local storage
            localStorage.removeItem('chatId');
            chatId = null;
        });

        // Fetch Messages
        function fetchMessages() {
            fetch('/chat/messages')
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Clear existing messages
                        messagesContainer.innerHTML = '';
                        
                        // Add all messages
                        data.messages.forEach(msg => {
                            addMessage(msg.message, msg.is_from_admin, msg.created_at);
                        });
                        
                        // Scroll to bottom
                        scrollToBottom();
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        // Add Message to UI
        function addMessage(message, isFromAdmin, timestamp = null) {
            const messageDiv = document.createElement('div');
            messageDiv.className = isFromAdmin 
                ? 'flex mb-3 justify-start' 
                : 'flex mb-3 justify-end';
                
            const bubble = document.createElement('div');
            bubble.className = isFromAdmin 
                ? 'bg-gray-100 rounded-lg py-2 px-4 max-w-[80%]' 
                : 'bg-brand-red text-white rounded-lg py-2 px-4 max-w-[80%]';
                
            const textSpan = document.createElement('span');
            textSpan.className = 'text-sm';
            textSpan.textContent = message;
            
            bubble.appendChild(textSpan);
            
            if (timestamp) {
                const timeSpan = document.createElement('span');
                timeSpan.className = 'text-xs block mt-1 opacity-75';
                timeSpan.textContent = timestamp;
                bubble.appendChild(timeSpan);
            }
            
            messageDiv.appendChild(bubble);
            messagesContainer.appendChild(messageDiv);
            
            scrollToBottom();
        }

        // Scroll chat to bottom
        function scrollToBottom() {
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        // Show Loading
        function showLoading() {
            if (chatLoading) chatLoading.classList.remove('hidden');
        }

        // Hide Loading
        function hideLoading() {
            if (chatLoading) chatLoading.classList.add('hidden');
        }

        // Show Chat Area
        function showChatArea() {
            // Hide other areas
            if (loginArea) loginArea.style.display = 'none';
            if (chatEnded) chatEnded.style.display = 'none';
            
            // Show chat area with proper display style - use explicit styles rather than classes
            chatArea.classList.remove('hidden');
            chatArea.style.display = 'block';
            
            // Force visibility on input container
            const inputContainer = document.getElementById('input-container');
            if (inputContainer) {
                inputContainer.style.display = 'block';
            }
            
            // Ensure the message input is enabled and visible
            if (messageInput) {
                messageInput.disabled = false;
                messageInput.style.display = 'block';
                messageInput.setAttribute('placeholder', 'Type your message...');
            }
            
            if (messageForm) {
                messageForm.style.display = 'flex';
            }
            
            // Add a small delay before focusing to ensure rendering is complete
            setTimeout(() => {
                if (messageInput) {
                    messageInput.focus();
                    console.log('Input focused');
                }
            }, 300);
            
            // Fetch messages
            fetchMessages();
            
            // Start polling for messages
            if (messagesInterval) clearInterval(messagesInterval);
            messagesInterval = setInterval(fetchMessages, 15000); // Poll every 15 seconds
            
            // Output debug info
            console.log('Chat area opened, visibility status:', {
                'Chat area display': chatArea.style.display,
                'Input exists': !!messageInput,
                'Input visible': messageInput ? (messageInput.offsetHeight > 0) : false,
                'Input container': inputContainer ? inputContainer.style.display : 'N/A'
            });
        }

        // Check if there's an existing chat
        function checkExistingChat() {
            const storedChatId = localStorage.getItem('chatId');
            
            if (storedChatId) {
                chatId = storedChatId;
                
                // Directly update the UI (don't rely on showChatArea being called)
                if (loginArea) loginArea.classList.add('hidden');
                if (chatEnded) chatEnded.classList.add('hidden');
                
                chatArea.classList.remove('hidden');
                chatArea.style.display = 'block';
                
                // Ensure immediate visibility with explicit styles
                setTimeout(() => {
                    // Double check visibility
                    chatArea.style.display = 'block';
                    chatArea.classList.remove('hidden');
                    
                    // Focus input
                    if (messageInput) {
                        messageInput.disabled = false;
                        messageInput.style.display = 'block';
                        messageInput.focus();
                    }
                    
                    console.log('Chat area visibility enforced');
                    
                    // Now call the regular function to set up messages and polling
                    showChatArea();
                }, 100);
            }
        }

        // End Chat
        window.endChat = function() {
            if (!chatId) return;
            
            fetch('/chat/end', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Stop polling
                    if (messagesInterval) {
                        clearInterval(messagesInterval);
                    }
                    
                    // Show ended chat state
                    chatArea.classList.add('hidden');
                    loginArea.classList.add('hidden');
                    chatEnded.classList.remove('hidden');
                    
                    // Clear local storage
                    localStorage.removeItem('chatId');
                    chatId = null;
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        };
        
        // Add optional debug button (only in development)
        if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
            const debugButton = document.createElement('button');
            debugButton.textContent = 'Debug Chat';
            debugButton.className = 'text-xs text-gray-400 absolute top-1 right-16 p-1';
            debugButton.onclick = function() {
                console.log('--- Chat Debug Info ---');
                console.log('Chat ID:', chatId);
                console.log('Login area hidden:', loginArea.classList.contains('hidden'));
                console.log('Chat area hidden:', chatArea.classList.contains('hidden'));
                console.log('Input field disabled:', messageInput ? messageInput.disabled : 'N/A');
                console.log('Chat ended hidden:', chatEnded.classList.contains('hidden'));
            };
            chatBox.querySelector('.bg-brand-red').appendChild(debugButton);
        }
    });
</script>
