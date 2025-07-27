<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Pets Travel International</title>
    
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
                        'dark-blue': '#0B3B60',
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
            background-color: #f3f4f6;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Pathway Gothic One', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full p-5 sm:p-6 bg-white rounded-lg shadow-lg border border-gray-200">
        <div class="text-center mb-6 sm:mb-8">
            <div class="flex justify-center mb-4">
                <img src="/images/logo.png" alt="Pets Travel International" class="h-12 sm:h-16">
            </div>
            <h1 class="text-2xl sm:text-3xl font-bold text-dark-blue mb-2">ADMIN LOGIN</h1>
            <p class="text-gray-600 text-sm sm:text-base">Sign in to access the admin dashboard</p>
        </div>
        
        @if(session('error'))
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                <p>{{ session('error') }}</p>
            </div>
        @endif
        
        <form action="{{ route('admin.login') }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-envelope text-gray-400"></i>
                    </div>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" 
                        class="pl-10 w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('email') border-red-500 @enderror" 
                        placeholder="admin@example.com" required autofocus>
                </div>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-lock text-gray-400"></i>
                    </div>
                    <input type="password" name="password" id="password" 
                        class="pl-10 w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('password') border-red-500 @enderror" 
                        placeholder="••••••••" required>
                </div>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="rounded border-gray-300 text-dark-blue shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20">
                <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
            </div>
            
            <div>
                <button type="submit" class="w-full bg-brand-red hover:bg-opacity-90 text-white font-medium py-3 px-4 rounded-md transition-colors duration-200 flex items-center justify-center">
                    <i class="fas fa-sign-in-alt mr-2"></i> Sign In
                </button>
            </div>
        </form>
        
        <div class="mt-6 text-center">
            <a href="{{ url('/') }}" class="text-sm text-gray-600 hover:text-red-600 transition duration-300">
                <i class="fas fa-arrow-left mr-1"></i> Back to Website
            </a>
        </div>
    </div>
</body>
</html>
