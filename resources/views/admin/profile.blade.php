@extends('layouts.admin')

@section('title', 'My Profile - Admin Dashboard')
@section('header', 'My Profile')

@section('content')
<div class="space-y-6">
    <div class="flex flex-wrap items-center text-sm text-gray-500 mb-4">
        <a href="{{ route('admin.dashboard') }}" class="hover:text-dark-blue">Dashboard</a>
        <span class="mx-2">/</span>
        <span class="text-gray-700">My Profile</span>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Profile Information -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 border border-gray-200">
                <h2 class="text-lg sm:text-xl font-semibold mb-4 border-b border-gray-200 pb-2 flex items-center">
                    <i class="fas fa-user-circle mr-2 text-gray-600"></i> Profile Information
                </h2>
                
                <form action="{{ route('admin.profile.update') }}" method="POST" class="space-y-4 sm:space-y-6">
                    @csrf
                    @method('PUT')
                    
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', Auth::guard('admin')->user()->name) }}" 
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('name') border-red-500 @enderror" 
                            required>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" name="email" id="email" value="{{ old('email', Auth::guard('admin')->user()->email) }}" 
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('email') border-red-500 @enderror" 
                            required>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="pt-4 border-t border-gray-200">
                        <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center bg-brand-red hover:bg-opacity-90 text-white font-medium py-2 px-6 rounded transition-colors duration-200">
                            <i class="fas fa-save mr-2"></i> Update Profile
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Change Password -->
        <div>
            <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 border border-gray-200">
                <h2 class="text-lg sm:text-xl font-semibold mb-4 border-b border-gray-200 pb-2 flex items-center">
                    <i class="fas fa-lock mr-2 text-gray-600"></i> Change Password
                </h2>
                
                <form action="{{ route('admin.profile.update') }}" method="POST" class="space-y-4 sm:space-y-6">
                    @csrf
                    @method('PUT')
                    
                    <div>
                        <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                        <input type="password" name="current_password" id="current_password" 
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('current_password') border-red-500 @enderror" 
                            required>
                        @error('current_password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                        <input type="password" name="password" id="password" 
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('password') border-red-500 @enderror" 
                            required>
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" 
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20" 
                            required>
                    </div>
                    
                    <div class="pt-4 border-t border-gray-200">
                        <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center bg-brand-red hover:bg-opacity-90 text-white font-medium py-2 px-6 rounded transition-colors duration-200">
                            <i class="fas fa-key mr-2"></i> Change Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
