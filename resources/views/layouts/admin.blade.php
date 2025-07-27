<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard - Pets Travel International')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Pathway+Gothic+One&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-red': '#E32726',
                        'dark-blue': '#004558',
                        'orange': '#f5a623',
                    },
                    fontFamily: {
                        'pathway-gothic': ['"Pathway Gothic One"', 'sans-serif'],
                        'open-sans': ['"Open Sans"', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            color: #555;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Pathway Gothic One', sans-serif;
            color: #004558;
            font-weight: 700;
        }
        .sidebar-nav {
            @apply py-1;
        }
        .nav-link {
            @apply flex items-center text-gray-700 px-4 py-2 text-sm font-medium hover:bg-gray-100 hover:text-dark-blue rounded-md transition-colors;
            margin: 2px 8px;
        }
        .nav-link.active {
            @apply bg-brand-red bg-opacity-10 text-brand-red;
        }
        .nav-link i {
            @apply mr-3 text-lg;
        }
        .nav-badge {
            @apply ml-2 bg-brand-red text-white text-xs font-bold px-2 py-1 rounded-full;
        }
        .logout-btn {
            @apply flex items-center justify-center space-x-2 bg-dark-blue text-white py-2 px-4 rounded-md hover:bg-opacity-90 transition duration-200 w-full;
        }
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease-in-out;
            }
            .sidebar.open {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Alpine.js - for sidebar toggle -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <div class="flex min-h-screen" x-data="{sidebarOpen: window.innerWidth >= 768}">
        <!-- Sidebar - Completely rebuilt from scratch -->
        <aside class="fixed inset-y-0 left-0 z-30 w-64 bg-white shadow-lg overflow-hidden transition-transform duration-300 ease-in-out transform md:translate-x-0"
               :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}">
            <!-- Header -->
            <div class="p-5 border-b border-gray-200">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-bold text-dark-blue">Admin Panel</h2>
                    <button @click="sidebarOpen = false" class="md:hidden text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <p class="text-sm text-gray-600 mt-1">Welcome, {{ Auth::guard('admin')->user()->name }}</p>
            </div>
            
            <!-- Navigation -->
            <div class="py-4 px-3 flex-grow">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" 
                           class="block px-3 py-2.5 rounded-lg font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-brand-red bg-opacity-10 text-brand-red' : 'text-gray-700 hover:bg-gray-100' }}">
                            <div class="flex items-center">
                                <i class="fas fa-tachometer-alt w-5 mr-3 text-center"></i>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.trackings.index') }}" 
                           class="block px-3 py-2.5 rounded-lg font-medium {{ request()->routeIs('admin.trackings.*') ? 'bg-brand-red bg-opacity-10 text-brand-red' : 'text-gray-700 hover:bg-gray-100' }}">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt w-5 mr-3 text-center"></i>
                                <span>Pet Tracking</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.tracking-logs.index') }}" 
                           class="block px-3 py-2.5 rounded-lg font-medium {{ request()->routeIs('admin.tracking-logs.*') ? 'bg-brand-red bg-opacity-10 text-brand-red' : 'text-gray-700 hover:bg-gray-100' }}">
                            <div class="flex items-center">
                                <i class="fas fa-history w-5 mr-3 text-center"></i>
                                <span>Tracking Logs</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.chats.index') }}" 
                           class="block px-3 py-2.5 rounded-lg font-medium {{ request()->routeIs('admin.chats.*') ? 'bg-brand-red bg-opacity-10 text-brand-red' : 'text-gray-700 hover:bg-gray-100' }}">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <i class="fas fa-comments w-5 mr-3 text-center"></i>
                                    <span>Live Chat</span>
                                </div>
                                @php
                                    $unreadCount = App\Models\ChatMessage::where('is_from_admin', false)
                                        ->where('is_read', false)
                                        ->count();
                                @endphp
                                @if($unreadCount > 0)
                                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-brand-red rounded-full">{{ $unreadCount }}</span>
                                @endif
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.profile') }}" 
                           class="block px-3 py-2.5 rounded-lg font-medium {{ request()->routeIs('admin.profile') ? 'bg-brand-red bg-opacity-10 text-brand-red' : 'text-gray-700 hover:bg-gray-100' }}">
                            <div class="flex items-center">
                                <i class="fas fa-user-circle w-5 mr-3 text-center"></i>
                                <span>Profile</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Logout -->
            <div class="border-t border-gray-200 p-4 mt-auto">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center px-4 py-2 bg-dark-blue text-white rounded-md hover:bg-opacity-90 transition-all duration-200">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </aside>
        
        <!-- Main Content -->
        <div class="flex-1 ml-0 md:ml-64 flex flex-col min-h-screen">
            <!-- Top Navigation Bar -->
            <header class="bg-white shadow-sm border-b border-gray-200">
                <div class="px-6 py-4">
                    <div class="flex justify-between items-center">
                        <button @click="sidebarOpen = !sidebarOpen" class="md:hidden text-gray-500 hover:text-gray-700 mr-4">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                        <h2 class="text-2xl font-bold text-dark-blue uppercase tracking-wide">@yield('header', 'Dashboard')</h2>
                        
                        <!-- Admin Info -->
                        <div class="flex items-center space-x-4">
                            <span class="text-gray-600 font-semibold">{{ Auth::guard('admin')->user()->name }}</span>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Main Content Area -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6 md:p-8">
                @if(session('success'))
                    <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                
                @if(session('error'))
                    <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-exclamation-circle"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm">{{ session('error') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                
                <div class="max-w-7xl mx-auto">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    
    <script>
        // Mobile menu functionality
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const closeSidebarButton = document.getElementById('close-sidebar');
            
            function toggleSidebar() {
                sidebar.classList.toggle('open');
            }
            
            if (mobileMenuButton) {
                mobileMenuButton.addEventListener('click', toggleSidebar);
            }
            
            if (closeSidebarButton) {
                closeSidebarButton.addEventListener('click', toggleSidebar);
            }
            
            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', function(event) {
                const isClickInside = sidebar.contains(event.target) || mobileMenuButton.contains(event.target);
                if (!isClickInside && sidebar.classList.contains('open')) {
                    sidebar.classList.remove('open');
                }
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>
