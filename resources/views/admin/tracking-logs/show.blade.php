@extends('layouts.admin')

@section('title', 'Tracking Log Details - Admin Dashboard')

@section('content')
<div class="container px-6 py-8 mx-auto">
    <div class="mb-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-dark-blue">Tracking Log: {{ $trackingNumber }}</h1>
                <p class="mt-1 text-sm text-gray-600">View detailed tracking log information</p>
            </div>
            <a href="{{ route('admin.tracking-logs.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-2 px-4 rounded inline-flex items-center">
                <i class="fas fa-arrow-left mr-2"></i> Back to Logs
            </a>
        </div>
    </div>

    <!-- Tracking Information -->
    @if($tracking)
    <div class="bg-white rounded-lg shadow mb-6 overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-dark-blue">Pet Information</h2>
        </div>
        <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Pet Name</span>
                    <span class="block mt-1 text-lg">{{ $tracking->pet_name }}</span>
                </div>
                <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Pet Type</span>
                    <span class="block mt-1 text-lg">{{ $tracking->pet_type }}</span>
                </div>
                <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Pet Breed</span>
                    <span class="block mt-1 text-lg">{{ $tracking->pet_breed }}</span>
                </div>
            </div>
            <div>
                <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Origin</span>
                    <span class="block mt-1 text-lg">{{ $tracking->origin }}</span>
                </div>
                <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Destination</span>
                    <span class="block mt-1 text-lg">{{ $tracking->destination }}</span>
                </div>
                <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Current Status</span>
                    <span class="block mt-1 text-lg">
                        <span class="px-2 py-1 text-xs font-bold rounded-full 
                            @if($tracking->status == 'In Transit') bg-blue-100 text-blue-800
                            @elseif($tracking->status == 'Delivered') bg-green-100 text-green-800
                            @elseif($tracking->status == 'Delayed') bg-yellow-100 text-yellow-800
                            @else bg-gray-100 text-gray-800 @endif">
                            {{ $tracking->status }}
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
        <div class="flex">
            <div class="flex-shrink-0">
                <i class="fas fa-exclamation-triangle text-yellow-400"></i>
            </div>
            <div class="ml-3">
                <p class="text-sm text-yellow-700">
                    No tracking information found for this tracking number. It may have been deleted or never existed.
                </p>
            </div>
        </div>
    </div>
    @endif

    <!-- Tracking Logs Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-dark-blue">Tracking Log History</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Date & Time
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            IP Address
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            User Agent
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($logs as $log)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $log->tracked_at->format('M d, Y H:i:s') }}</div>
                            <div class="text-xs text-gray-500">{{ $log->tracked_at->diffForHumans() }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $log->ip_address }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900 truncate max-w-xs">{{ $log->user_agent }}</div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="px-6 py-4 text-center text-gray-500">
                            No tracking logs found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="px-6 py-3 bg-gray-50 border-t border-gray-200">
            {{ $logs->links() }}
        </div>
    </div>
</div>
@endsection
