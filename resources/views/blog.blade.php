@extends('layouts.app')

@section('title', 'Blog & Pet News - Pets Travel International')

@section('content')
    <!-- Hero Banner Section -->
    <section class="relative min-h-[400px] flex items-end bg-cover bg-center" style="background-image: url('{{ asset('images/airpets-america-ban-1.png') }}')">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="container mx-auto px-4 py-10 relative z-10">
            <div class="text-white max-w-2xl">
                <h1 class="text-4xl md:text-5xl font-pathway-gothic mb-2">Blog & Pet News</h1>
                <h4 class="text-xl md:text-2xl font-pathway-gothic">Stay Updated with the Latest Pet Travel Information</h4>
            </div>
        </div>
    </section>

    <!-- Blog Content Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col lg:flex-row gap-8">
                    <!-- Main Content -->
                    <div class="lg:w-2/3">
                        <!-- Featured Post -->
                        <div class="mb-12">
                            <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red">Featured Article</h2>
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1541781774459-bb2af2f05b55?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Dog on airplane" class="w-full h-80 object-cover">
                                <div class="p-6">
                                    <div class="flex items-center text-sm text-gray-500 mb-3">
                                        <span class="mr-4"><i class="far fa-calendar-alt mr-1"></i> July 5, 2025</span>
                                        <span><i class="far fa-folder mr-1"></i> Pet Travel Tips</span>
                                    </div>
                                    <h3 class="text-2xl font-pathway-gothic mb-3">Preparing Your Pet for International Travel: A Complete Guide</h3>
                                    <p class="text-gray-700 mb-4">
                                        International pet travel requires careful planning and preparation. From health certificates to airline requirements, this guide covers everything you need to know to ensure your furry friend has a safe and comfortable journey.
                                    </p>
                                    <a href="/blog/preparing-your-pet-for-international-travel" class="inline-flex items-center text-brand-red hover:underline">
                                        <span class="mr-2">Read More</span>
                                        <i class="fas fa-arrow-right text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Posts -->
                        <div class="mb-12">
                            <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red">Recent Articles</h2>
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <!-- Post 1 -->
                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Dogs running" class="w-full h-48 object-cover">
                                    <div class="p-4">
                                        <div class="flex items-center text-sm text-gray-500 mb-2">
                                            <span class="mr-4"><i class="far fa-calendar-alt mr-1"></i> June 28, 2025</span>
                                        </div>
                                        <h3 class="text-xl font-pathway-gothic mb-2">Top Pet-Friendly Airlines for 2025</h3>
                                        <p class="text-gray-700 mb-3 text-sm line-clamp-3">
                                            Discover which airlines offer the best accommodations and services for pets traveling in cabin or as checked baggage.
                                        </p>
                                        <a href="/blog/pet-friendly-airlines-2025" class="text-brand-red hover:underline text-sm">Read More</a>
                                    </div>
                                </div>

                                <!-- Post 2 -->
                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Cat in carrier" class="w-full h-48 object-cover">
                                    <div class="p-4">
                                        <div class="flex items-center text-sm text-gray-500 mb-2">
                                            <span class="mr-4"><i class="far fa-calendar-alt mr-1"></i> June 20, 2025</span>
                                        </div>
                                        <h3 class="text-xl font-pathway-gothic mb-2">Choosing the Right Travel Carrier for Your Cat</h3>
                                        <p class="text-gray-700 mb-3 text-sm line-clamp-3">
                                            Learn how to select the perfect carrier that meets airline requirements while keeping your feline friend comfortable.
                                        </p>
                                        <a href="/blog/cat-travel-carriers" class="text-brand-red hover:underline text-sm">Read More</a>
                                    </div>
                                </div>

                                <!-- Post 3 -->
                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1577175889968-f551f5944cc4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Dog at vet" class="w-full h-48 object-cover">
                                    <div class="p-4">
                                        <div class="flex items-center text-sm text-gray-500 mb-2">
                                            <span class="mr-4"><i class="far fa-calendar-alt mr-1"></i> June 15, 2025</span>
                                        </div>
                                        <h3 class="text-xl font-pathway-gothic mb-2">Pre-Travel Veterinary Checklist</h3>
                                        <p class="text-gray-700 mb-3 text-sm line-clamp-3">
                                            Essential health checks, vaccinations, and documentation your pet needs before international travel.
                                        </p>
                                        <a href="/blog/pre-travel-vet-checklist" class="text-brand-red hover:underline text-sm">Read More</a>
                                    </div>
                                </div>

                                <!-- Post 4 -->
                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1568393691622-c7ba131d63b4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Dog passport" class="w-full h-48 object-cover">
                                    <div class="p-4">
                                        <div class="flex items-center text-sm text-gray-500 mb-2">
                                            <span class="mr-4"><i class="far fa-calendar-alt mr-1"></i> June 8, 2025</span>
                                        </div>
                                        <h3 class="text-xl font-pathway-gothic mb-2">Understanding Pet Passports: A Country-by-Country Guide</h3>
                                        <p class="text-gray-700 mb-3 text-sm line-clamp-3">
                                            Navigate the complex requirements for pet entry across different countries with our comprehensive guide.
                                        </p>
                                        <a href="/blog/pet-passports-guide" class="text-brand-red hover:underline text-sm">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8 text-center">
                                <button class="inline-flex items-center bg-brand-red text-white px-6 py-3 rounded-md hover:bg-red-700 transition">
                                    <span class="mr-2">LOAD MORE</span>
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="lg:w-1/3">
                        <!-- Search Widget -->
                        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                            <h3 class="text-xl font-pathway-gothic mb-4">Search</h3>
                            <form action="#" method="GET" class="flex">
                                <input type="text" placeholder="Search articles..." class="flex-grow px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-brand-red">
                                <button type="submit" class="bg-brand-red text-white px-4 py-2 rounded-r-md hover:bg-red-700 transition">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>

                        <!-- Categories Widget -->
                        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                            <h3 class="text-xl font-pathway-gothic mb-4">Categories</h3>
                            <ul class="space-y-2">
                                <li>
                                    <a href="/blog/category/pet-travel-tips" class="flex items-center justify-between text-gray-700 hover:text-brand-red">
                                        <span>Pet Travel Tips</span>
                                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded-full">12</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/blog/category/destination-guides" class="flex items-center justify-between text-gray-700 hover:text-brand-red">
                                        <span>Destination Guides</span>
                                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded-full">8</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/blog/category/pet-health" class="flex items-center justify-between text-gray-700 hover:text-brand-red">
                                        <span>Pet Health & Safety</span>
                                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded-full">15</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/blog/category/airline-policies" class="flex items-center justify-between text-gray-700 hover:text-brand-red">
                                        <span>Airline Policies</span>
                                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded-full">6</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/blog/category/success-stories" class="flex items-center justify-between text-gray-700 hover:text-brand-red">
                                        <span>Success Stories</span>
                                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded-full">9</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Recent Posts Widget -->
                        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                            <h3 class="text-xl font-pathway-gothic mb-4">Popular Posts</h3>
                            <ul class="space-y-4">
                                <li class="flex gap-3">
                                    <div class="flex-shrink-0 w-16 h-16">
                                        <img src="https://images.unsplash.com/photo-1541781774459-bb2af2f05b55?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Dog on airplane" class="w-full h-full object-cover rounded">
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold mb-1">Preparing Your Pet for International Travel</h4>
                                        <span class="text-xs text-gray-500"><i class="far fa-calendar-alt mr-1"></i> July 5, 2025</span>
                                    </div>
                                </li>
                                <li class="flex gap-3">
                                    <div class="flex-shrink-0 w-16 h-16">
                                        <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Cat in carrier" class="w-full h-full object-cover rounded">
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold mb-1">Choosing the Right Travel Carrier for Your Cat</h4>
                                        <span class="text-xs text-gray-500"><i class="far fa-calendar-alt mr-1"></i> June 20, 2025</span>
                                    </div>
                                </li>
                                <li class="flex gap-3">
                                    <div class="flex-shrink-0 w-16 h-16">
                                        <img src="https://images.unsplash.com/photo-1568393691622-c7ba131d63b4?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Dog passport" class="w-full h-full object-cover rounded">
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold mb-1">Understanding Pet Passports: A Country-by-Country Guide</h4>
                                        <span class="text-xs text-gray-500"><i class="far fa-calendar-alt mr-1"></i> June 8, 2025</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Newsletter Widget -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h3 class="text-xl font-pathway-gothic mb-4">Subscribe to Our Newsletter</h3>
                            <p class="text-gray-700 mb-4">Stay updated with the latest pet travel tips and news.</p>
                            <form action="#" method="POST" class="space-y-3">
                                <div>
                                    <input type="email" placeholder="Your email address" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-red">
                                </div>
                                <button type="submit" class="w-full bg-brand-red text-white px-4 py-2 rounded-md hover:bg-red-700 transition">
                                    SUBSCRIBE
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-4 text-brand-red">Ready to Plan Your Pet's Journey?</h2>
                <p class="text-gray-700 mb-8">
                    Let us help you navigate the complexities of pet travel. Our team of experts will ensure your furry friend travels safely and comfortably.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/get-an-estimate" class="inline-flex items-center justify-center bg-brand-red text-white px-6 py-3 rounded-md hover:bg-red-700 transition">
                        <span class="mr-2">GET AN ESTIMATE</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="/contact" class="inline-flex items-center justify-center bg-white border border-brand-red text-brand-red px-6 py-3 rounded-md hover:bg-gray-50 transition">
                        <span class="mr-2">CONTACT US</span>
                        <i class="fas fa-phone"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
