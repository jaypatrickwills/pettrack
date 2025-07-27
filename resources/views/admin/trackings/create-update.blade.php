@extends('layouts.admin')

@section('title', 'Add Tracking Update - Admin Dashboard')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Add Update for Tracking: {{ $tracking->tracking_number }}</h1>
        <a href="{{ route('admin.trackings.show', $tracking) }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
            <i class="fas fa-arrow-left mr-1"></i> Back to Details
        </a>
    </div>

    <div class="mb-6 p-4 bg-gray-50 rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <span class="block text-sm text-gray-500">Pet Name</span>
                <span class="font-medium">{{ $tracking->pet_name }}</span>
            </div>
            <div>
                <span class="block text-sm text-gray-500">Current Status</span>
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                    @if($tracking->status == 'pending') bg-yellow-100 text-yellow-800
                    @elseif($tracking->status == 'in_transit') bg-blue-100 text-blue-800
                    @elseif($tracking->status == 'delivered') bg-green-100 text-green-800
                    @elseif($tracking->status == 'delayed') bg-red-100 text-red-800
                    @endif">
                    {{ ucfirst(str_replace('_', ' ', $tracking->status)) }}
                </span>
            </div>
            <div>
                <span class="block text-sm text-gray-500">Current Location</span>
                <span class="font-medium">{{ $tracking->current_location }}</span>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.trackings.updates.store', $tracking) }}" method="POST" class="space-y-6">
        @csrf
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status *</label>
                <select name="status" id="status" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring focus:ring-red-200 focus:ring-opacity-50 @error('status') border-red-500 @enderror" 
                    required>
                    <option value="">Select Status</option>
                    <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="in_transit" {{ old('status') == 'in_transit' ? 'selected' : '' }}>In Transit</option>
                    <option value="delivered" {{ old('status') == 'delivered' ? 'selected' : '' }}>Delivered</option>
                    <option value="delayed" {{ old('status') == 'delayed' ? 'selected' : '' }}>Delayed</option>
                </select>
                @error('status')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="location" class="block text-sm font-medium text-gray-700 mb-1">Location *</label>
                <input type="text" name="location" id="location" value="{{ old('location', $tracking->current_location) }}" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring focus:ring-red-200 focus:ring-opacity-50 @error('location') border-red-500 @enderror" 
                    required>
                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
        
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
            <textarea name="description" id="description" rows="4" 
                class="w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring focus:ring-red-200 focus:ring-opacity-50 @error('description') border-red-500 @enderror"
                placeholder="Provide details about this update">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="pt-4 border-t flex justify-end">
            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline">
                Add Update
            </button>
        </div>
    </form>
</div>
@endsection
