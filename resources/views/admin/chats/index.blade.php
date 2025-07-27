@extends('layouts.admin')

@section('title', 'Chat Management | Pets Travel International')
@section('header', 'Chat Management')

@section('content')
<div class="space-y-6">
    <div class="flex items-center text-sm text-gray-500 mb-2">
        <a href="{{ route('admin.dashboard') }}" class="hover:text-dark-blue">Dashboard</a>
        <span class="mx-2">/</span>
        <span class="text-gray-700">Chat Management</span>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-200 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Active Chats -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
        <div class="flex items-center p-4 sm:p-6 border-b border-gray-200 bg-brand-red bg-opacity-90">
            <i class="fas fa-comments mr-2 text-white"></i>
            <h2 class="text-lg sm:text-xl font-semibold text-white">Active Chats</h2>
        </div>
        <div class="p-4 sm:p-6">
            @if($activeChats->count() > 0)
                <!-- Desktop Table (hidden on mobile) -->
                <div class="hidden md:block overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-50 border-b border-gray-200">
                                <th class="py-3 px-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                                <th class="py-3 px-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Email</th>
                                <th class="py-3 px-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tracking</th>
                                <th class="py-3 px-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Last Message</th>
                                <th class="py-3 px-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($activeChats as $chat)
                                <tr class="hover:bg-gray-50 transition-colors duration-150">
                                    <td class="py-3 px-4 text-sm font-medium text-gray-900">{{ $chat->name }}</td>
                                    <td class="py-3 px-4 text-sm text-gray-600">{{ $chat->email }}</td>
                                    <td class="py-3 px-4 text-sm text-gray-600">{{ $chat->tracking_number ?? 'N/A' }}</td>
                                    <td class="py-3 px-4 text-sm text-gray-600">{{ $chat->last_message_at ? $chat->last_message_at->diffForHumans() : 'N/A' }}</td>
                                    <td class="py-2 px-4">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.chats.show', $chat) }}" class="inline-flex items-center px-3 py-1.5 bg-dark-blue text-white rounded-md text-sm hover:bg-opacity-80 transition-colors duration-200">
                                                <i class="fas fa-comments mr-1"></i> View
                                                @if($chat->unreadMessages()->count() > 0)
                                                    <span class="ml-1 flex items-center justify-center bg-brand-red text-white rounded-full w-5 h-5 text-xs">{{ $chat->unreadMessages()->count() }}</span>
                                                @endif
                                            </a>
                                            <form action="{{ route('admin.chats.archive', $chat) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="inline-flex items-center px-3 py-1.5 bg-orange text-white rounded-md text-sm hover:bg-opacity-80 transition-colors duration-200">
                                                    <i class="fas fa-archive mr-1"></i> Archive
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Card Layout (shown only on mobile) -->
                <div class="md:hidden space-y-4">
                    @foreach($activeChats as $chat)
                        <div class="border border-gray-200 rounded-md p-4 hover:bg-gray-50 transition-colors duration-150">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-medium text-dark-blue">{{ $chat->name }}</h3>
                                @if($chat->unreadMessages()->count() > 0)
                                    <span class="flex items-center justify-center bg-brand-red text-white rounded-full w-5 h-5 text-xs">{{ $chat->unreadMessages()->count() }}</span>
                                @endif
                            </div>
                            <div class="text-sm text-gray-600 mb-1">{{ $chat->email }}</div>
                            <div class="text-sm text-gray-600 mb-3">
                                <div><span class="text-gray-500">Tracking:</span> {{ $chat->tracking_number ?? 'N/A' }}</div>
                                <div><span class="text-gray-500">Last message:</span> {{ $chat->last_message_at ? $chat->last_message_at->diffForHumans() : 'N/A' }}</div>
                            </div>
                            <div class="flex space-x-2 pt-2 border-t border-gray-100">
                                <a href="{{ route('admin.chats.show', $chat) }}" class="flex-1 inline-flex items-center justify-center px-3 py-2 bg-dark-blue text-white rounded-md text-sm hover:bg-opacity-80 transition-colors duration-200">
                                    <i class="fas fa-comments mr-1"></i> View Chat
                                </a>
                                <form action="{{ route('admin.chats.archive', $chat) }}" method="POST" class="flex-1">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="w-full inline-flex items-center justify-center px-3 py-2 bg-orange text-white rounded-md text-sm hover:bg-opacity-80 transition-colors duration-200">
                                        <i class="fas fa-archive mr-1"></i> Archive
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8">
                    <div class="flex justify-center mb-4">
                        <i class="fas fa-comments text-4xl text-gray-400"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-700 mb-1">No active chats</h3>
                    <p class="text-gray-500">When customers start new conversations, they'll appear here</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Archived Chats -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
        <div class="flex items-center p-4 sm:p-6 border-b border-gray-200 bg-gray-600">
            <i class="fas fa-archive mr-2 text-white"></i>
            <h2 class="text-lg sm:text-xl font-semibold text-white">Archived Chats</h2>
        </div>
        <div class="p-4 sm:p-6">
            @if($archivedChats->count() > 0)
                <!-- Desktop Table (hidden on mobile) -->
                <div class="hidden md:block overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-50 border-b border-gray-200">
                                <th class="py-3 px-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                                <th class="py-3 px-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Email</th>
                                <th class="py-3 px-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tracking</th>
                                <th class="py-3 px-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Last Message</th>
                                <th class="py-3 px-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($archivedChats as $chat)
                                <tr class="hover:bg-gray-50 transition-colors duration-150">
                                    <td class="py-3 px-4 text-sm font-medium text-gray-900">{{ $chat->name }}</td>
                                    <td class="py-3 px-4 text-sm text-gray-600">{{ $chat->email }}</td>
                                    <td class="py-3 px-4 text-sm text-gray-600">{{ $chat->tracking_number ?? 'N/A' }}</td>
                                    <td class="py-3 px-4 text-sm text-gray-600">{{ $chat->last_message_at ? $chat->last_message_at->diffForHumans() : 'N/A' }}</td>
                                    <td class="py-2 px-4">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.chats.show', $chat) }}" class="inline-flex items-center px-3 py-1.5 bg-gray-500 text-white rounded-md text-sm hover:bg-opacity-80 transition-colors duration-200">
                                                <i class="fas fa-eye mr-1"></i> View
                                            </a>
                                            <form action="{{ route('admin.chats.restore', $chat) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="inline-flex items-center px-3 py-1.5 bg-dark-blue text-white rounded-md text-sm hover:bg-opacity-80 transition-colors duration-200">
                                                    <i class="fas fa-undo mr-1"></i> Restore
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Card Layout (shown only on mobile) -->
                <div class="md:hidden space-y-4">
                    @foreach($archivedChats as $chat)
                        <div class="border border-gray-200 rounded-md p-4 hover:bg-gray-50 transition-colors duration-150">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-medium text-gray-700">{{ $chat->name }}</h3>
                            </div>
                            <div class="text-sm text-gray-600 mb-1">{{ $chat->email }}</div>
                            <div class="text-sm text-gray-600 mb-3">
                                <div><span class="text-gray-500">Tracking:</span> {{ $chat->tracking_number ?? 'N/A' }}</div>
                                <div><span class="text-gray-500">Last message:</span> {{ $chat->last_message_at ? $chat->last_message_at->diffForHumans() : 'N/A' }}</div>
                            </div>
                            <div class="flex space-x-2 pt-2 border-t border-gray-100">
                                <a href="{{ route('admin.chats.show', $chat) }}" class="flex-1 inline-flex items-center justify-center px-3 py-2 bg-gray-500 text-white rounded-md text-sm hover:bg-opacity-80 transition-colors duration-200">
                                    <i class="fas fa-eye mr-1"></i> View Chat
                                </a>
                                <form action="{{ route('admin.chats.restore', $chat) }}" method="POST" class="flex-1">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="w-full inline-flex items-center justify-center px-3 py-2 bg-dark-blue text-white rounded-md text-sm hover:bg-opacity-80 transition-colors duration-200">
                                        <i class="fas fa-undo mr-1"></i> Restore
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8">
                    <div class="flex justify-center mb-4">
                        <i class="fas fa-archive text-4xl text-gray-400"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-700 mb-1">No archived chats</h3>
                    <p class="text-gray-500">Archived conversations will appear here</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
