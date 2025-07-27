@extends('layouts.admin')

@section('title', 'Manage Pet Trackings - Admin Dashboard')
@section('header', 'Pet Trackings')

@section('content')
<div class="bg-white rounded-lg shadow-md p-4 sm:p-6">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
        <div class="flex items-center">
            <h1 class="text-xl sm:text-2xl font-bold">All Trackings</h1>
            <span class="ml-3 bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs font-medium">{{ $trackings->total() }}</span>
        </div>
        <a href="{{ route('admin.trackings.create') }}" class="w-full sm:w-auto bg-brand-red hover:bg-opacity-90 text-white font-medium py-2 px-4 rounded flex items-center justify-center">
            <i class="fas fa-plus mr-2"></i> New Tracking
        </a>
    </div>

    @if($trackings->count() > 0)
        <!-- Desktop Table View (hidden on mobile) -->
        <div class="hidden md:block overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-3 px-4 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider border-b">Tracking #</th>
                        <th class="py-3 px-4 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider border-b">Pet Name</th>
                        <th class="py-3 px-4 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider border-b">Origin</th>
                        <th class="py-3 px-4 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider border-b">Destination</th>
                        <th class="py-3 px-4 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider border-b">Status</th>
                        <th class="py-3 px-4 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider border-b">Created</th>
                        <th class="py-3 px-4 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider border-b">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($trackings as $tracking)
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 border-b">{{ $tracking->tracking_number }}</td>
                            <td class="py-3 px-4 border-b">{{ $tracking->pet_name }}</td>
                            <td class="py-3 px-4 border-b">{{ $tracking->origin }}</td>
                            <td class="py-3 px-4 border-b">{{ $tracking->destination }}</td>
                            <td class="py-3 px-4 border-b">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    @if($tracking->status == 'pending') bg-yellow-100 text-yellow-800
                                    @elseif($tracking->status == 'in_transit') bg-blue-100 text-blue-800
                                    @elseif($tracking->status == 'delivered') bg-green-100 text-green-800
                                    @elseif($tracking->status == 'delayed') bg-red-100 text-red-800
                                    @endif">
                                    {{ ucfirst(str_replace('_', ' ', $tracking->status)) }}
                                </span>
                            </td>
                            <td class="py-3 px-4 border-b">{{ $tracking->created_at->format('M j, Y') }}</td>
                            <td class="py-3 px-4 border-b text-sm">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.trackings.show', $tracking) }}" class="text-dark-blue hover:text-opacity-80" title="View Details">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.trackings.edit', $tracking) }}" class="text-orange hover:text-opacity-80" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('admin.trackings.updates.create', $tracking) }}" class="text-green-600 hover:text-opacity-80" title="Add Update">
                                        <i class="fas fa-plus-circle"></i>
                                    </a>
                                    <form action="{{ route('admin.trackings.destroy', $tracking) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this tracking?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-brand-red hover:text-opacity-80" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- Mobile Card View (hidden on desktop) -->
        <div class="md:hidden grid grid-cols-1 gap-4">
            @foreach($trackings as $tracking)
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
                    <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-medium text-gray-800">{{ $tracking->pet_name }}</h3>
                            <p class="text-sm text-gray-500">{{ $tracking->tracking_number }}</p>
                        </div>
                        <span class="px-2.5 py-1 text-xs font-semibold rounded-full
                            @if($tracking->status == 'pending') bg-yellow-100 text-yellow-800
                            @elseif($tracking->status == 'in_transit') bg-blue-100 text-blue-800
                            @elseif($tracking->status == 'delivered') bg-green-100 text-green-800
                            @elseif($tracking->status == 'delayed') bg-red-100 text-red-800
                            @endif">
                            {{ ucfirst(str_replace('_', ' ', $tracking->status)) }}
                        </span>
                    </div>
                    
                    <div class="p-4 space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Origin:</span>
                            <span class="text-gray-900 font-medium">{{ $tracking->origin }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Destination:</span>
                            <span class="text-gray-900 font-medium">{{ $tracking->destination }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Created:</span>
                            <span class="text-gray-900">{{ $tracking->created_at->format('M j, Y') }}</span>
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-200 p-3 bg-gray-50 flex justify-between">
                        <a href="{{ route('admin.trackings.show', $tracking) }}" class="inline-flex items-center text-sm text-dark-blue hover:underline">
                            <i class="fas fa-eye mr-1"></i> View
                        </a>
                        <a href="{{ route('admin.trackings.edit', $tracking) }}" class="inline-flex items-center text-sm text-orange hover:underline">
                            <i class="fas fa-edit mr-1"></i> Edit
                        </a>
                        <a href="{{ route('admin.trackings.updates.create', $tracking) }}" class="inline-flex items-center text-sm text-green-600 hover:underline">
                            <i class="fas fa-plus-circle mr-1"></i> Update
                        </a>
                        <form action="{{ route('admin.trackings.destroy', $tracking) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this tracking?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center text-sm text-brand-red hover:underline">
                                <i class="fas fa-trash mr-1"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="mt-6 px-2 sm:px-0">
            {{ $trackings->links() }}
        </div>
    @else
        <div class="bg-gray-50 p-6 text-center rounded-lg border border-gray-200">
            <div class="py-6">
                <div class="flex justify-center mb-4">
                    <i class="fas fa-shipping-fast text-4xl text-gray-400"></i>
                </div>
                <h3 class="text-lg font-medium text-gray-700 mb-1">No trackings found</h3>
                <p class="text-gray-500 mb-4">Get started by creating your first tracking</p>
                <a href="{{ route('admin.trackings.create') }}" class="inline-flex items-center px-4 py-2 bg-brand-red text-white rounded-md hover:bg-opacity-90 transition">
                    <i class="fas fa-plus mr-2"></i> New Tracking
                </a>
            </div>
        </div>
    @endif
</div>
@endsection
