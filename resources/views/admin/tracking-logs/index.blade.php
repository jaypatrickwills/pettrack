@extends('layouts.admin')

@section('title', 'Tracking Logs - Admin Dashboard')

@section('content')
<div class="container px-6 py-8 mx-auto">
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-dark-blue">Tracking Logs</h1>
        <p class="mt-1 text-sm text-gray-600">View when customers have tracked their pets</p>
    </div>

    <!-- Search and Filter -->
    <div class="p-4 bg-white rounded-lg shadow mb-6">
        <form action="{{ route('admin.tracking-logs.index') }}" method="GET" class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
                <label for="tracking_number" class="block text-sm font-medium text-gray-700 mb-1">Tracking Number</label>
                <input type="text" name="tracking_number" id="tracking_number" value="{{ $filters['tracking_number'] ?? '' }}" 
                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-brand-red focus:border-brand-red">
            </div>
            <div class="flex items-end">
                <button type="submit" class="bg-brand-red hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fas fa-search mr-2"></i> Search
                </button>
            </div>
        </form>
    </div>

    <!-- Tracking Stats Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tracking Number
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            View Count
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Last Viewed
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($trackingStats as $stat)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $stat->tracking_number }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $stat->view_count }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ \Carbon\Carbon::parse($stat->last_viewed)->format('M d, Y H:i') }}</div>
                            <div class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($stat->last_viewed)->diffForHumans() }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('admin.tracking-logs.show', $stat->tracking_number) }}" 
                               class="text-brand-red hover:text-red-800">View Details</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                            No tracking logs found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="px-6 py-3 bg-gray-50 border-t border-gray-200">
            {{ $trackingStats->appends(request()->query())->links() }}
        </div>
    </div>
</div>
@endsection
