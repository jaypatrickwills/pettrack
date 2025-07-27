@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('header', 'Dashboard Overview')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-8">
    <!-- Total Trackings Card -->
    <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 border border-gray-200 hover:shadow-md transition-shadow duration-200">
        <div class="flex items-center">
            <div class="rounded-full bg-dark-blue bg-opacity-10 p-3 sm:p-4 mr-3 sm:mr-4">
                <i class="fas fa-map-marker-alt text-dark-blue text-xl sm:text-2xl"></i>
            </div>
            <div>
                <h3 class="text-gray-600 text-xs sm:text-sm font-semibold uppercase tracking-wide">Total Trackings</h3>
                <p class="text-2xl sm:text-3xl font-bold text-dark-blue mt-1">{{ $totalTrackings }}</p>
            </div>
        </div>
    </div>
    
    <!-- Active Trackings Card -->
    <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 border border-gray-200 hover:shadow-md transition-shadow duration-200">
        <div class="flex items-center">
            <div class="rounded-full bg-orange bg-opacity-10 p-3 sm:p-4 mr-3 sm:mr-4">
                <i class="fas fa-plane text-orange text-xl sm:text-2xl"></i>
            </div>
            <div>
                <h3 class="text-gray-600 text-xs sm:text-sm font-semibold uppercase tracking-wide">Active Trackings</h3>
                <p class="text-2xl sm:text-3xl font-bold text-dark-blue mt-1">{{ $activeTrackings }}</p>
            </div>
        </div>
    </div>
    
    <!-- Completed Trackings Card -->
    <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 border border-gray-200 hover:shadow-md transition-shadow duration-200">
        <div class="flex items-center">
            <div class="rounded-full bg-brand-red bg-opacity-10 p-3 sm:p-4 mr-3 sm:mr-4">
                <i class="fas fa-check-circle text-brand-red text-xl sm:text-2xl"></i>
            </div>
            <div>
                <h3 class="text-gray-600 text-xs sm:text-sm font-semibold uppercase tracking-wide">Completed</h3>
                <p class="text-2xl sm:text-3xl font-bold text-dark-blue mt-1">{{ $completedTrackings }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Recent Trackings -->
<div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-8">
    <div class="flex flex-col sm:flex-row justify-between items-center p-4 sm:p-6 border-b border-gray-200">
        <h2 class="text-xl sm:text-2xl font-bold text-dark-blue mb-2 sm:mb-0">Recent Trackings</h2>
        <a href="{{ route('admin.trackings.index') }}" class="flex items-center text-brand-red hover:text-opacity-80 transition-colors duration-200 font-semibold">
            View All <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
    
    @if($recentTrackings->count() > 0)
        <!-- Desktop Table (hidden on mobile) -->
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tracking #</th>
                        <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Pet Name</th>
                        <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                        <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Created</th>
                        <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($recentTrackings as $tracking)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="py-4 px-6 text-sm font-medium text-gray-900">{{ $tracking->tracking_number }}</td>
                            <td class="py-4 px-6 text-sm text-gray-600">{{ $tracking->pet_name }}</td>
                            <td class="py-4 px-6">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
                                    @if($tracking->status == 'pending') bg-orange bg-opacity-10 text-orange
                                    @elseif($tracking->status == 'in_transit') bg-dark-blue bg-opacity-10 text-dark-blue
                                    @elseif($tracking->status == 'delivered') bg-green-600 bg-opacity-10 text-green-600
                                    @elseif($tracking->status == 'delayed') bg-brand-red bg-opacity-10 text-brand-red
                                    @endif">
                                    {{ ucfirst(str_replace('_', ' ', $tracking->status)) }}
                                </span>
                            </td>
                            <td class="py-4 px-6 text-sm text-gray-600">{{ $tracking->created_at->format('M j, Y') }}</td>
                            <td class="py-4 px-6 text-sm font-medium space-x-3">
                                <a href="{{ route('admin.trackings.show', $tracking) }}" 
                                   class="text-dark-blue hover:text-opacity-80 transition-colors duration-200">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.trackings.updates.create', $tracking) }}" 
                                   class="text-brand-red hover:text-opacity-80 transition-colors duration-200">
                                    <i class="fas fa-plus-circle"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- Mobile Cards (shown only on mobile) -->
        <div class="md:hidden">
            <div class="divide-y divide-gray-200">
                @foreach($recentTrackings as $tracking)
                    <div class="p-4 hover:bg-gray-50">
                        <div class="flex justify-between items-center mb-2">
                            <span class="font-semibold text-dark-blue">{{ $tracking->tracking_number }}</span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                @if($tracking->status == 'pending') bg-orange bg-opacity-10 text-orange
                                @elseif($tracking->status == 'in_transit') bg-dark-blue bg-opacity-10 text-dark-blue
                                @elseif($tracking->status == 'delivered') bg-green-600 bg-opacity-10 text-green-600
                                @elseif($tracking->status == 'delayed') bg-brand-red bg-opacity-10 text-brand-red
                                @endif">
                                {{ ucfirst(str_replace('_', ' ', $tracking->status)) }}
                            </span>
                        </div>
                        <div class="text-sm text-gray-600 mb-1">{{ $tracking->pet_name }}</div>
                        <div class="flex justify-between items-center text-xs">
                            <span class="text-gray-500">{{ $tracking->created_at->format('M j, Y') }}</span>
                            <div class="flex space-x-3">
                                <a href="{{ route('admin.trackings.show', $tracking) }}" 
                                class="text-dark-blue hover:text-opacity-80 transition-colors duration-200 p-1">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.trackings.updates.create', $tracking) }}" 
                                class="text-brand-red hover:text-opacity-80 transition-colors duration-200 p-1">
                                    <i class="fas fa-plus-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="text-center py-12">
            <div class="text-gray-400 mb-3">
                <i class="fas fa-inbox text-4xl"></i>
            </div>
            <p class="text-gray-500 text-lg">No recent trackings found.</p>
        </div>
    @endif
</div>

<!-- Recent Updates -->
<div class="bg-white rounded-lg shadow-sm border border-gray-200">
    <div class="flex justify-between items-center p-4 sm:p-6 border-b border-gray-200">
        <h2 class="text-xl sm:text-2xl font-bold text-dark-blue">Recent Updates</h2>
    </div>
    
    @if($recentUpdates->count() > 0)
        <div class="divide-y divide-gray-100">
            @foreach($recentUpdates as $update)
                <div class="p-4 sm:p-6 hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex flex-col sm:flex-row justify-between items-start gap-4">
                        <div class="flex-grow w-full">
                            <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-3 mb-2">
                                <span class="inline-flex items-center px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium
                                    @if($update->status == 'pending') bg-orange bg-opacity-10 text-orange
                                    @elseif($update->status == 'in_transit') bg-dark-blue bg-opacity-10 text-dark-blue
                                    @elseif($update->status == 'delivered') bg-green-600 bg-opacity-10 text-green-600
                                    @elseif($update->status == 'delayed') bg-brand-red bg-opacity-10 text-brand-red
                                    @endif">
                                    {{ ucfirst(str_replace('_', ' ', $update->status)) }}
                                </span>
                                <p class="text-xs sm:text-sm text-gray-500">{{ $update->created_at->format('M j, Y - g:i A') }}</p>
                            </div>
                            <p class="font-semibold text-dark-blue mb-1 text-sm sm:text-base">
                                <a href="{{ route('admin.trackings.show', $update->tracking) }}" 
                                   class="hover:text-brand-red transition-colors duration-200">
                                    {{ $update->tracking->tracking_number }}
                                </a> 
                                - {{ $update->tracking->pet_name }}
                            </p>
                            <div class="text-gray-600">
                                <p class="text-xs sm:text-sm font-medium">{{ $update->location }}</p>
                                @if($update->description)
                                    <p class="text-xs sm:text-sm mt-1 pr-6 sm:pr-0">{{ $update->description }}</p>
                                @endif
                            </div>
                        </div>
                        <a href="{{ route('admin.trackings.show', $update->tracking) }}" 
                           class="text-brand-red hover:text-opacity-80 transition-colors duration-200 absolute right-4 sm:static sm:mt-0 mt-1">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-12">
            <div class="text-gray-400 mb-3">
                <i class="fas fa-clock text-4xl"></i>
            </div>
            <p class="text-gray-500 text-lg">No recent updates found.</p>
        </div>
    @endif
</div>
@endsection
