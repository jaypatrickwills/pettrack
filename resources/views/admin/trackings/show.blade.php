@extends('layouts.admin')

@section('title', 'Tracking Details - Admin Dashboard')
@section('header', 'Tracking Details')

@section('content')
<div class="space-y-6">
    <div class="flex flex-wrap items-center text-sm text-gray-500 mb-4">
        <a href="{{ route('admin.dashboard') }}" class="hover:text-dark-blue">Dashboard</a>
        <span class="mx-2">/</span>
        <a href="{{ route('admin.trackings.index') }}" class="hover:text-dark-blue">Trackings</a>
        <span class="mx-2">/</span>
        <span class="text-gray-700">{{ $tracking->tracking_number }}</span>
    </div>
    
    <div class="bg-white rounded-lg shadow-md p-4 sm:p-6">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
            <div>
                <h1 class="text-xl sm:text-2xl font-bold mb-2">{{ $tracking->pet_name }}</h1>
                <div class="text-gray-500 text-sm mb-3">Tracking: <span class="font-semibold text-gray-700">{{ $tracking->tracking_number }}</span></div>
            </div>
            
            <div class="flex flex-wrap gap-2 w-full sm:w-auto">
                <a href="{{ route('admin.trackings.index') }}" class="inline-flex items-center justify-center bg-gray-500 hover:bg-opacity-80 text-white py-2 px-3 rounded text-sm font-medium transition-colors duration-200 flex-1 sm:flex-none">
                    <i class="fas fa-arrow-left mr-2"></i> Back
                </a>
                <a href="{{ route('admin.trackings.edit', $tracking) }}" class="inline-flex items-center justify-center bg-dark-blue hover:bg-opacity-80 text-white py-2 px-3 rounded text-sm font-medium transition-colors duration-200 flex-1 sm:flex-none">
                    <i class="fas fa-edit mr-2"></i> Edit
                </a>
                <a href="{{ route('admin.trackings.updates.create', $tracking) }}" class="inline-flex items-center justify-center bg-brand-red hover:bg-opacity-80 text-white py-2 px-3 rounded text-sm font-medium transition-colors duration-200 flex-1 sm:flex-none">
                    <i class="fas fa-plus-circle mr-2"></i> Update
                </a>
            </div>
        </div>

    <!-- Status Badge -->
    <div class="mb-6 flex flex-wrap gap-2 items-center">
        <span class="inline-flex px-4 py-1 rounded-full text-sm font-medium
            @if($tracking->status == 'pending') bg-yellow-100 text-yellow-800
            @elseif($tracking->status == 'in_transit') bg-blue-100 text-blue-800
            @elseif($tracking->status == 'delivered') bg-green-100 text-green-800
            @elseif($tracking->status == 'delayed') bg-red-100 text-red-800
            @endif">
            {{ ucfirst(str_replace('_', ' ', $tracking->status)) }}
        </span>
        
        <span class="text-gray-500 text-sm">
            <i class="far fa-clock mr-1"></i> Created {{ $tracking->created_at->diffForHumans() }}
        </span>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <!-- Pet Information -->
        <div class="bg-gray-50 p-4 sm:p-6 rounded-lg shadow-sm border border-gray-200">
            <h2 class="text-lg sm:text-xl font-semibold mb-4 border-b border-gray-200 pb-2 flex items-center">
                <i class="fas fa-paw mr-2 text-gray-600"></i> Pet Information
            </h2>
            <div class="space-y-3 text-sm sm:text-base">
                <div class="flex flex-wrap">
                    <span class="w-full sm:w-1/3 font-medium text-gray-600 mb-1 sm:mb-0">Pet Name:</span>
                    <span class="w-full sm:w-2/3">{{ $tracking->pet_name }}</span>
                </div>
                <div class="flex flex-wrap">
                    <span class="w-full sm:w-1/3 font-medium text-gray-600 mb-1 sm:mb-0">Pet Type:</span>
                    <span class="w-full sm:w-2/3">{{ $tracking->pet_type }}</span>
                </div>
                @if($tracking->pet_breed)
                <div class="flex flex-wrap">
                    <span class="w-full sm:w-1/3 font-medium text-gray-600 mb-1 sm:mb-0">Breed:</span>
                    <span class="w-full sm:w-2/3">{{ $tracking->pet_breed }}</span>
                </div>
                @endif
                @if($tracking->pet_age)
                <div class="flex flex-wrap">
                    <span class="w-full sm:w-1/3 font-medium text-gray-600 mb-1 sm:mb-0">Age:</span>
                    <span class="w-full sm:w-2/3">{{ $tracking->pet_age }}</span>
                </div>
                @endif
                <div class="flex flex-wrap">
                    <span class="w-full sm:w-1/3 font-medium text-gray-600 mb-1 sm:mb-0">Special Notes:</span>
                    <span class="w-full sm:w-2/3">{{ $tracking->pet_notes ?: 'None' }}</span>
                </div>
            </div>
        </div>
        
        <!-- Owner Information -->
        <div class="bg-gray-50 p-4 sm:p-6 rounded-lg shadow-sm border border-gray-200">
            <h2 class="text-lg sm:text-xl font-semibold mb-4 border-b border-gray-200 pb-2 flex items-center">
                <i class="fas fa-user mr-2 text-gray-600"></i> Owner Information
            </h2>
            <div class="space-y-3 text-sm sm:text-base">
                <div class="flex flex-wrap">
                    <span class="w-full sm:w-1/3 font-medium text-gray-600 mb-1 sm:mb-0">Name:</span>
                    <span class="w-full sm:w-2/3">{{ $tracking->owner_name }}</span>
                </div>
                <div class="flex flex-wrap">
                    <span class="w-full sm:w-1/3 font-medium text-gray-600 mb-1 sm:mb-0">Email:</span>
                    <span class="w-full sm:w-2/3">
                        <a href="mailto:{{ $tracking->owner_email }}" class="text-dark-blue hover:text-opacity-80">
                            {{ $tracking->owner_email }}
                        </a>
                    </span>
                </div>
                <div class="flex flex-wrap">
                    <span class="w-full sm:w-1/3 font-medium text-gray-600 mb-1 sm:mb-0">Phone:</span>
                    <span class="w-full sm:w-2/3">
                        <a href="tel:{{ $tracking->owner_phone }}" class="text-dark-blue hover:text-opacity-80">
                            {{ $tracking->owner_phone }}
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Journey Information -->
    <div class="bg-gray-50 p-4 sm:p-6 rounded-lg shadow-sm border border-gray-200 mb-8">
        <h2 class="text-lg sm:text-xl font-semibold mb-4 border-b border-gray-200 pb-2 flex items-center">
            <i class="fas fa-route mr-2 text-gray-600"></i> Journey Information
        </h2>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="space-y-3 text-sm sm:text-base">
                <div class="flex flex-wrap">
                    <span class="w-full sm:w-1/3 font-medium text-gray-600 mb-1 sm:mb-0">Origin:</span>
                    <span class="w-full sm:w-2/3">{{ $tracking->origin }}</span>
                </div>
                <div class="flex flex-wrap">
                    <span class="w-full sm:w-1/3 font-medium text-gray-600 mb-1 sm:mb-0">Destination:</span>
                    <span class="w-full sm:w-2/3">{{ $tracking->destination }}</span>
                </div>
                <div class="flex flex-wrap">
                    <span class="w-full sm:w-1/3 font-medium text-gray-600 mb-1 sm:mb-0">Current Location:</span>
                    <span class="w-full sm:w-2/3">{{ $tracking->current_location }}</span>
                </div>
            </div>
            
            <div class="space-y-3 text-sm sm:text-base">
                <div class="flex flex-wrap">
                    <span class="w-full sm:w-1/3 font-medium text-gray-600 mb-1 sm:mb-0">Departure Date:</span>
                    <span class="w-full sm:w-2/3">{{ $tracking->departure_date->format('M j, Y') }}</span>
                </div>
                <div class="flex flex-wrap">
                    <span class="w-full sm:w-1/3 font-medium text-gray-600 mb-1 sm:mb-0">Est. Arrival:</span>
                    <span class="w-full sm:w-2/3">{{ $tracking->estimated_arrival_date->format('M j, Y') }}</span>
                </div>
                <div class="flex flex-wrap">
                    <span class="w-full sm:w-1/3 font-medium text-gray-600 mb-1 sm:mb-0">Created By:</span>
                    <span class="w-full sm:w-2/3">{{ $tracking->admin->name }}</span>
                </div>
            </div>
        </div>
        
        @if($tracking->notes)
        <div class="mt-4 pt-4 border-t border-gray-200">
            <span class="font-medium text-gray-600 block mb-2">Additional Notes:</span>
            <p class="text-gray-700 text-sm sm:text-base bg-white p-3 rounded border border-gray-200">{{ $tracking->notes }}</p>
        </div>
        @endif
    </div>

    <!-- Tracking Updates -->
    <div class="bg-gray-50 p-4 sm:p-6 rounded-lg shadow-sm border border-gray-200">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3 mb-6">
            <h2 class="text-lg sm:text-xl font-semibold flex items-center">
                <i class="fas fa-history mr-2 text-gray-600"></i> Tracking Updates
            </h2>
            <a href="{{ route('admin.trackings.updates.create', $tracking) }}" class="inline-flex items-center justify-center bg-brand-red hover:bg-opacity-80 text-white text-sm font-medium py-2 px-4 rounded w-full sm:w-auto transition-colors duration-200">
                <i class="fas fa-plus-circle mr-2"></i> Add Update
            </a>
        </div>
        
        @if($tracking->updates->count() > 0)
            <div class="relative">
                <!-- Timeline line -->
                <div class="absolute left-3 sm:left-5 top-0 h-full w-0.5 bg-gray-200"></div>
                
                <!-- Timeline items -->
                <div class="space-y-6">
                    @foreach($tracking->updates as $update)
                        <div class="relative pl-10 sm:pl-14">
                            <!-- Timeline dot -->
                            <div class="absolute left-0 top-1.5 w-7 h-7 sm:w-10 sm:h-10 rounded-full 
                                @if($update->status == 'pending') bg-yellow-500
                                @elseif($update->status == 'in_transit') bg-blue-500
                                @elseif($update->status == 'delivered') bg-green-500
                                @elseif($update->status == 'delayed') bg-red-500
                                @endif 
                                flex items-center justify-center">
                                @if($update->status == 'pending')
                                    <i class="fas fa-clock text-white text-xs sm:text-base"></i>
                                @elseif($update->status == 'in_transit')
                                    <i class="fas fa-plane text-white text-xs sm:text-base"></i>
                                @elseif($update->status == 'delivered')
                                    <i class="fas fa-check text-white text-xs sm:text-base"></i>
                                @elseif($update->status == 'delayed')
                                    <i class="fas fa-exclamation-triangle text-white text-xs sm:text-base"></i>
                                @endif
                            </div>
                            
                            <!-- Content -->
                            <div class="bg-white p-3 sm:p-4 rounded-lg shadow-sm border border-gray-200">
                                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-1 mb-2">
                                    <h3 class="font-medium text-sm sm:text-base">
                                        <span class="inline-flex px-2 py-1 rounded-full text-xs font-medium
                                            @if($update->status == 'pending') bg-yellow-100 text-yellow-800
                                            @elseif($update->status == 'in_transit') bg-blue-100 text-blue-800
                                            @elseif($update->status == 'delivered') bg-green-100 text-green-800
                                            @elseif($update->status == 'delayed') bg-red-100 text-red-800
                                            @endif mr-1 sm:hidden">
                                            {{ ucfirst(str_replace('_', ' ', $update->status)) }}
                                        </span>
                                        <span class="hidden sm:inline">{{ ucfirst(str_replace('_', ' ', $update->status)) }}</span>
                                    </h3>
                                    <span class="text-xs sm:text-sm text-gray-500">{{ $update->created_at->format('M j, Y - g:i A') }}</span>
                                </div>
                                <p class="text-gray-600 mb-2 text-sm sm:text-base">{{ $update->location }}</p>
                                @if($update->description)
                                    <p class="text-xs sm:text-sm text-gray-500">{{ $update->description }}</p>
                                @endif
                                <div class="mt-2 text-xs text-gray-400">
                                    Updated by: {{ $update->admin->name }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="text-center py-8 text-gray-500">
                <div class="flex justify-center mb-4">
                    <i class="fas fa-clipboard-list text-4xl text-gray-400"></i>
                </div>
                <h3 class="text-lg font-medium text-gray-700 mb-1">No tracking updates yet</h3>
                <p class="text-gray-500 mb-4">Add the first update to keep customers informed</p>
                <a href="{{ route('admin.trackings.updates.create', $tracking) }}" class="inline-flex items-center justify-center px-4 py-2 bg-brand-red text-white rounded-md hover:bg-opacity-90 transition-colors duration-200 w-full sm:w-auto max-w-xs mx-auto">
                    <i class="fas fa-plus-circle mr-2"></i> Add First Update
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
