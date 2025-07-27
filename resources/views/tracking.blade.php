@extends('layouts.app')

@section('content')
<!-- Hero Banner -->
<div class="bg-gray-800 py-16 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/tracking-banner.svg') }}" alt="Pet Tracking" class="w-full h-full object-cover">
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-pathway-gothic text-white mb-4">TRACK YOUR PET</h1>
            <p class="text-xl text-gray-200 mb-8">Enter your tracking number to get real-time updates on your pet's journey</p>
        </div>
    </div>
</div>

<!-- Tracking Form Section -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8 border border-gray-200">
            <h2 class="text-3xl font-pathway-gothic text-center mb-6">TRACK YOUR PET</h2>
            
            @if(session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                    <p>{{ session('error') }}</p>
                </div>
            @endif

            <form action="{{ route('track-pet.search') }}" method="GET" class="space-y-6">
                <div>
                    <label for="tracking_number" class="block text-gray-700 font-medium mb-2">Tracking Number</label>
                    <input type="text" name="tracking_number" id="tracking_number" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#c7352c] text-base sm:text-lg"
                        placeholder="Enter tracking number" required>
                    <p class="text-sm text-gray-500 mt-1">Your tracking number was provided in your confirmation email</p>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="bg-brand-red hover:bg-[#c41f1e] text-white font-bold py-3 px-8 rounded-md transition duration-300">
                        Track Now
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- How Tracking Works Section -->
<div class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-pathway-gothic text-center mb-12">HOW TRACKING WORKS</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="w-16 h-16 bg-orange rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-qrcode text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-pathway-gothic mb-3">GET YOUR TRACKING NUMBER</h3>
                <p class="text-gray-600">Receive a unique tracking number when your pet's journey is confirmed</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="w-16 h-16 bg-orange rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-search-location text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-pathway-gothic mb-3">ENTER YOUR TRACKING NUMBER</h3>
                <p class="text-gray-600">Visit our tracking page and enter your tracking number to check status</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="w-16 h-16 bg-orange rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-map-marked-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-pathway-gothic mb-3">GET REAL-TIME UPDATES</h3>
                <p class="text-gray-600">View real-time status updates and location information for your pet</p>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-pathway-gothic text-center mb-12">FREQUENTLY ASKED QUESTIONS</h2>
        
        <div class="max-w-3xl mx-auto space-y-6">
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button class="faq-toggle flex justify-between items-center w-full p-4 text-left bg-white hover:bg-gray-50" aria-expanded="false">
                    <span class="font-medium">Where can I find my tracking number?</span>
                    <i class="fas fa-chevron-down text-orange transition-transform duration-300"></i>
                </button>
                <div class="faq-content hidden p-4 bg-gray-50 border-t border-gray-200">
                    <p>Your tracking number is provided in the confirmation email sent to you when your pet's journey is confirmed. It typically starts with "PT-" followed by the date and a unique code.</p>
                </div>
            </div>
            
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button class="faq-toggle flex justify-between items-center w-full p-4 text-left bg-white hover:bg-gray-50" aria-expanded="false">
                    <span class="font-medium">How often is the tracking information updated?</span>
                    <i class="fas fa-chevron-down text-orange transition-transform duration-300"></i>
                </button>
                <div class="faq-content hidden p-4 bg-gray-50 border-t border-gray-200">
                    <p>Tracking information is updated at key milestones during your pet's journey, including departure, transit points, and arrival. Our team updates the status as soon as there's a change in your pet's location or status.</p>
                </div>
            </div>
            
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button class="faq-toggle flex justify-between items-center w-full p-4 text-left bg-white hover:bg-gray-50" aria-expanded="false">
                    <span class="font-medium">What if I lost my tracking number?</span>
                    <i class="fas fa-chevron-down text-orange transition-transform duration-300"></i>
                </button>
                <div class="faq-content hidden p-4 bg-gray-50 border-t border-gray-200">
                    <p>If you've lost your tracking number, please contact our customer service team with your name, your pet's name, and the origin/destination details. We'll be happy to provide your tracking number again.</p>
                </div>
            </div>
            
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button class="faq-toggle flex justify-between items-center w-full p-4 text-left bg-white hover:bg-gray-50" aria-expanded="false">
                    <span class="font-medium">Can I receive email notifications about my pet's journey?</span>
                    <i class="fas fa-chevron-down text-orange transition-transform duration-300"></i>
                </button>
                <div class="faq-content hidden p-4 bg-gray-50 border-t border-gray-200">
                    <p>Yes, we provide email notifications for major updates in your pet's journey. These are sent automatically to the email address provided during booking.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="py-16 bg-red-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-pathway-gothic mb-4">NEED ASSISTANCE WITH YOUR PET'S JOURNEY?</h2>
        <p class="text-xl mb-8">Our team is available 24/7 to answer your questions and provide support</p>
        <a href="{{ url('/contact') }}" class="inline-block bg-white text-red-600 font-bold py-3 px-8 rounded-md hover:bg-gray-100 transition duration-300">Contact Us</a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqToggles = document.querySelectorAll('.faq-toggle');
        
        faqToggles.forEach(toggle => {
            toggle.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('i');
                
                // Toggle the content visibility
                content.classList.toggle('hidden');
                
                // Toggle the icon rotation
                if (content.classList.contains('hidden')) {
                    icon.style.transform = 'rotate(0deg)';
                    this.setAttribute('aria-expanded', 'false');
                } else {
                    icon.style.transform = 'rotate(180deg)';
                    this.setAttribute('aria-expanded', 'true');
                }
            });
        });
    });
</script>
@endsection
