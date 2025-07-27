@extends('layouts.app')

@section('content')
<!-- Hero Banner -->
<div class="bg-gray-800 py-12 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/tracking-banner.svg') }}" alt="Pet Tracking" class="w-full h-full object-cover">
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-pathway-gothic text-white mb-2">TRACKING DETAILS</h1>
            <p class="text-xl text-gray-200">Tracking Number: {{ $tracking->tracking_number }}</p>
        </div>
    </div>
</div>

<!-- Tracking Status -->
<div class="py-8 bg-white border-b">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div>
                <span class="text-gray-500">Current Status:</span>
                <span class="ml-2 px-3 py-1 rounded-full text-sm font-medium
                    @if($tracking->status == 'pending') bg-yellow-100 text-yellow-800
                    @elseif($tracking->status == 'in_transit') bg-blue-100 text-blue-800
                    @elseif($tracking->status == 'delivered') bg-green-100 text-green-800
                    @elseif($tracking->status == 'delayed') bg-red-100 text-red-800
                    @endif">
                    {{ ucfirst(str_replace('_', ' ', $tracking->status)) }}
                </span>
            </div>
            <div class="mt-4 md:mt-0">
                <a href="{{ route('track-pet') }}" class="text-brand-red hover:text-[#c41f1e] font-medium text-base sm:text-lg inline-flex items-center px-3 py-2 rounded-md hover:bg-gray-100 transition-colors duration-200">
                    <i class="fas fa-search mr-2"></i> Track Another Pet
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Pet and Journey Details -->
<div class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Pet Information -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-pathway-gothic mb-4">PET INFORMATION</h2>
                <div class="space-y-4">
                    <div class="flex flex-col sm:flex-row border-b border-gray-100 pb-2">
                        <span class="w-full sm:w-1/3 font-medium text-gray-600">Pet Name:</span>
                        <span class="w-full sm:w-2/3 mt-1 sm:mt-0">{{ $tracking->pet_name }}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row border-b border-gray-100 pb-2">
                        <span class="w-full sm:w-1/3 font-medium text-gray-600">Pet Type:</span>
                        <span class="w-full sm:w-2/3 mt-1 sm:mt-0">{{ $tracking->pet_type }}</span>
                    </div>
                    @if($tracking->pet_breed)
                    <div class="flex flex-col sm:flex-row border-b border-gray-100 pb-2">
                        <span class="w-full sm:w-1/3 font-medium text-gray-600">Breed:</span>
                        <span class="w-full sm:w-2/3 mt-1 sm:mt-0">{{ $tracking->pet_breed }}</span>
                    </div>
                    @endif
                    <div class="flex flex-col sm:flex-row border-b border-gray-100 pb-2">
                        <span class="w-full sm:w-1/3 font-medium text-gray-600">Owner:</span>
                        <span class="w-full sm:w-2/3 mt-1 sm:mt-0">{{ $tracking->owner_name }}</span>
                    </div>
                </div>
            </div>
            
            <!-- Journey Information -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-pathway-gothic mb-4">JOURNEY DETAILS</h2>
                <div class="space-y-4">
                    <div class="flex flex-col sm:flex-row border-b border-gray-100 pb-2">
                        <span class="w-full sm:w-1/3 font-medium text-gray-600">Origin:</span>
                        <span class="w-full sm:w-2/3 mt-1 sm:mt-0">{{ $tracking->origin }}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row border-b border-gray-100 pb-2">
                        <span class="w-full sm:w-1/3 font-medium text-gray-600">Destination:</span>
                        <span class="w-full sm:w-2/3 mt-1 sm:mt-0">{{ $tracking->destination }}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row border-b border-gray-100 pb-2">
                        <span class="w-full sm:w-1/3 font-medium text-gray-600">Departure Date:</span>
                        <span class="w-full sm:w-2/3 mt-1 sm:mt-0">{{ $tracking->departure_date->format('F j, Y') }}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row border-b border-gray-100 pb-2">
                        <span class="w-full sm:w-1/3 font-medium text-gray-600">Est. Arrival:</span>
                        <span class="w-full sm:w-2/3 mt-1 sm:mt-0">{{ $tracking->estimated_arrival_date->format('F j, Y') }}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row border-b border-gray-100 pb-2">
                        <span class="w-full sm:w-1/3 font-medium text-gray-600">Current Location:</span>
                        <span class="w-full sm:w-2/3 mt-1 sm:mt-0">{{ $tracking->current_location }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tracking Timeline -->
<div class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-pathway-gothic mb-8 text-center">TRACKING HISTORY</h2>
        
        <div class="max-w-3xl mx-auto">
            @if($updates->count() > 0)
                <div class="relative">
                    <!-- Timeline line -->
                    <div class="absolute left-5 top-0 h-full w-0.5 bg-gray-200"></div>
                    
                    <!-- Timeline items -->
                    <div class="space-y-8">
                        @foreach($updates as $update)
                            <div class="relative pl-14">
                                <!-- Timeline dot -->
                                <div class="absolute left-0 top-1.5 w-10 h-10 rounded-full bg-brand-red flex items-center justify-center">
                                    @if($update->status == 'pending')
                                        <i class="fas fa-clock text-white"></i>
                                    @elseif($update->status == 'in_transit')
                                        <i class="fas fa-plane text-white"></i>
                                    @elseif($update->status == 'delivered')
                                        <i class="fas fa-check text-white"></i>
                                    @elseif($update->status == 'delayed')
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    @endif
                                </div>
                                
                                <!-- Content -->
                                <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                                    <div class="flex flex-col sm:flex-row justify-between items-start mb-2">
                                        <h3 class="font-medium mb-1 sm:mb-0">{{ ucfirst(str_replace('_', ' ', $update->status)) }}</h3>
                                        <span class="text-sm text-gray-500">{{ $update->created_at->format('M j, Y - g:i A') }}</span>
                                    </div>
                                    <p class="text-gray-600 mb-2">{{ $update->location }}</p>
                                    @if($update->description)
                                        <p class="text-sm text-gray-500">{{ $update->description }}</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="text-center py-8 text-gray-500">
                    <p>No tracking updates available yet.</p>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="py-12 bg-gray-100">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-pathway-gothic mb-4">NEED ASSISTANCE?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">If you have any questions about your pet's journey, our team is ready to help</p>
        <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-6">
            <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-red-600 text-white font-bold py-3 px-8 rounded-md hover:bg-red-700 transition duration-300">
                <i class="fas fa-envelope mr-2"></i> Contact Us
            </a>
            <a href="tel:+441234567890" class="inline-flex items-center justify-center bg-white text-red-600 border border-red-600 font-bold py-3 px-8 rounded-md hover:bg-gray-50 transition duration-300">
                <i class="fas fa-phone-alt mr-2"></i> Call Support
            </a>
        </div>
    </div>
</div>
@endsection
