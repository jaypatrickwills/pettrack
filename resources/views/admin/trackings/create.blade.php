@extends('layouts.admin')

@section('title', 'Create New Tracking - Admin Dashboard')
@section('header', 'Create New Tracking')

@section('content')
<div class="space-y-6">
    <div class="flex flex-wrap items-center text-sm text-gray-500 mb-4">
        <a href="{{ route('admin.dashboard') }}" class="hover:text-dark-blue">Dashboard</a>
        <span class="mx-2">/</span>
        <a href="{{ route('admin.trackings.index') }}" class="hover:text-dark-blue">Trackings</a>
        <span class="mx-2">/</span>
        <span class="text-gray-700">Create New</span>
    </div>
    
    <div class="flex flex-wrap justify-between items-center mb-4 gap-4">
        <h2 class="text-lg sm:text-xl font-semibold">New Tracking Details</h2>
        <a href="{{ route('admin.trackings.index') }}" class="inline-flex items-center justify-center px-3 sm:px-4 py-1.5 sm:py-2 bg-gray-500 hover:bg-gray-600 text-white text-sm font-medium rounded transition-colors duration-200">
            <i class="fas fa-arrow-left mr-1.5"></i> Back to List
        </a>
    </div>

    <form action="{{ route('admin.trackings.store') }}" method="POST" class="space-y-6">
        @csrf
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Pet Information -->
            <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 border border-gray-200">
                <h2 class="text-lg sm:text-xl font-semibold mb-4 border-b border-gray-200 pb-2 flex items-center">
                    <i class="fas fa-paw mr-2 text-gray-600"></i> Pet Information
                </h2>
                <div class="space-y-4">
                
                <div>
                    <label for="pet_name" class="block text-sm font-medium text-gray-700 mb-1">Pet Name *</label>
                    <input type="text" name="pet_name" id="pet_name" value="{{ old('pet_name') }}" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('pet_name') border-red-500 @enderror" 
                        required>
                    @error('pet_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="pet_type" class="block text-sm font-medium text-gray-700 mb-1">Pet Type *</label>
                    <select name="pet_type" id="pet_type" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('pet_type') border-red-500 @enderror" 
                        required>
                        <option value="">Select Pet Type</option>
                        <option value="Dog" {{ old('pet_type') == 'Dog' ? 'selected' : '' }}>Dog</option>
                        <option value="Cat" {{ old('pet_type') == 'Cat' ? 'selected' : '' }}>Cat</option>
                        <option value="Bird" {{ old('pet_type') == 'Bird' ? 'selected' : '' }}>Bird</option>
                        <option value="Rabbit" {{ old('pet_type') == 'Rabbit' ? 'selected' : '' }}>Rabbit</option>
                        <option value="Other" {{ old('pet_type') == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('pet_type')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="pet_breed" class="block text-sm font-medium text-gray-700 mb-1">Pet Breed (Optional)</label>
                    <input type="text" name="pet_breed" id="pet_breed" value="{{ old('pet_breed') }}" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('pet_breed') border-red-500 @enderror">
                    @error('pet_breed')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                </div>
            </div>
            
            <!-- Owner Information -->
            <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 border border-gray-200">
                <h2 class="text-lg sm:text-xl font-semibold mb-4 border-b border-gray-200 pb-2 flex items-center">
                    <i class="fas fa-user mr-2 text-gray-600"></i> Owner Information
                </h2>
                <div class="space-y-4">
                
                <div>
                    <label for="owner_name" class="block text-sm font-medium text-gray-700 mb-1">Owner Name *</label>
                    <input type="text" name="owner_name" id="owner_name" value="{{ old('owner_name') }}" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('owner_name') border-red-500 @enderror" 
                        required>
                    @error('owner_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="owner_email" class="block text-sm font-medium text-gray-700 mb-1">Owner Email *</label>
                    <input type="email" name="owner_email" id="owner_email" value="{{ old('owner_email') }}" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('owner_email') border-red-500 @enderror" 
                        required>
                    @error('owner_email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="owner_phone" class="block text-sm font-medium text-gray-700 mb-1">Owner Phone *</label>
                    <input type="text" name="owner_phone" id="owner_phone" value="{{ old('owner_phone') }}" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('owner_phone') border-red-500 @enderror" 
                        required>
                    @error('owner_phone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                </div>
            </div>
        </div>
        
        <!-- Journey Information -->
        <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 border border-gray-200 mt-6">
            <h2 class="text-lg sm:text-xl font-semibold mb-4 border-b border-gray-200 pb-2 flex items-center">
                <i class="fas fa-route mr-2 text-gray-600"></i> Journey Information
            </h2>
            <div class="space-y-6">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="origin" class="block text-sm font-medium text-gray-700 mb-1">Origin *</label>
                    <input type="text" name="origin" id="origin" value="{{ old('origin') }}" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('origin') border-red-500 @enderror" 
                        required>
                    @error('origin')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="destination" class="block text-sm font-medium text-gray-700 mb-1">Destination *</label>
                    <input type="text" name="destination" id="destination" value="{{ old('destination') }}" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('destination') border-red-500 @enderror" 
                        required>
                    @error('destination')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="departure_date" class="block text-sm font-medium text-gray-700 mb-1">Departure Date *</label>
                    <input type="date" name="departure_date" id="departure_date" value="{{ old('departure_date') }}" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('departure_date') border-red-500 @enderror" 
                        required>
                    @error('departure_date')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="estimated_arrival_date" class="block text-sm font-medium text-gray-700 mb-1">Estimated Arrival Date *</label>
                    <input type="date" name="estimated_arrival_date" id="estimated_arrival_date" value="{{ old('estimated_arrival_date') }}" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('estimated_arrival_date') border-red-500 @enderror" 
                        required>
                    @error('estimated_arrival_date')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div>
                <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Additional Notes (Optional)</label>
                <textarea name="notes" id="notes" rows="3" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-dark-blue focus:ring focus:ring-dark-blue focus:ring-opacity-20 @error('notes') border-red-500 @enderror">{{ old('notes') }}</textarea>
                @error('notes')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                </div>
            </div>
        </div>
        
        <div class="flex justify-center sm:justify-end pt-4">
            <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center bg-brand-red hover:bg-opacity-90 text-white font-medium py-3 px-6 rounded transition-colors duration-200">
                <i class="fas fa-plus-circle mr-2"></i> Create Tracking
            </button>
        </div>
    </form>
</div>
@endsection
