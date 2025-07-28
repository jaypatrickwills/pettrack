@extends('layouts.app')

@section('title', 'Domestic & International Pet Shipping | Pets Travel International')

@section('content')
    <style>
        body, p {
            font-family: 'Open Sans', sans-serif !important;
            color: #555;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Pathway Gothic One', sans-serif !important;
            color: #004558;
            font-weight: 700;
        }
        .text-orange {
            color: #f5a623;
        }
        .bg-orange {
            background-color: #f5a623;
        }
        .bg-dark-blue {
            background-color: #004558;
        }
        .elementor-button {
            display: inline-block;
            text-decoration: none;
            border-radius: 9999px;
            padding: 1rem 2.5rem;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s;
        }
        .slides {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            animation: kenburns 21s infinite;
        }
        .slide:nth-child(1) {
            animation-delay: 0s;
        }
        .slide:nth-child(2) {
            animation-delay: 7s;
        }
        .slide:nth-child(3) {
            animation-delay: 14s;
        }
        @keyframes kenburns {
            0% {
                opacity: 0;
                transform: scale(1);
            }
            5% {
                opacity: 1;
            }
            33% {
                opacity: 1;
                transform: scale(1.15);
            }
            38% {
                opacity: 0;
                transform: scale(1.15);
            }
            100% {
                opacity: 0;
                transform: scale(1);
            }
        }
    </style>

    <main>
        <section class="hero-section relative h-[80vh] overflow-hidden">
            <div class="slides">
                <div class="slide" style="background-image: url('{{ asset('images/pexels-photo-1108099.webp') }}');"></div>
                <div class="slide" style="background-image: url('{{ asset('images/pexels-photo-1805164.webp') }}');"></div>
                <div class="slide" style="background-image: url('{{ asset('images/weimaraner-puppy-dog-snout-97082.webp') }}');"></div>
            </div>
            <div class="absolute inset-0 bg-black bg-opacity-40 z-10"></div>
            <div class="relative h-full flex flex-col justify-center items-center text-center text-white p-6 z-20">
                <h1 class="text-5xl md:text-7xl uppercase tracking-wider" style="color: white !important;">First Class Pet Transportation</h1>
                <p class="text-xl md:text-2xl mt-4 max-w-3xl" style="color: white !important;">For your furry, feathered, or scaly family members. We treat your pets like our own, because we're pet owners too.</p>
                
                <!-- Pet Tracking Form -->
                <div class="bg-white shadow-lg p-6 mt-8 w-full max-w-lg">
                    <h3 class="text-dark-blue text-2xl font-bold mb-4">Track Your Pet</h3>
                    <form action="{{ route('track-pet.search') }}" method="GET" class="space-y-4">
                        <div class="flex flex-col space-y-2">
                            <label for="tracking_number" class="text-gray-700 font-medium text-left">Tracking Number</label>
                            <input type="text" id="tracking_number" name="tracking_number" placeholder="Enter your tracking number" class="border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange text-black">
                        </div>
                        <button type="submit" class="w-full bg-brand-red hover:bg-[#c41f1e] text-white font-bold py-3 uppercase transition-colors duration-300">Track Now</button>
                    </form>
                </div>
            </div>
        </section>

        <section class="py-16 sm:py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    
                    <div>
                        <h2 class="text-4xl lg:text-5xl mb-6 text-center">Wherever You Go, Your Pet Goes Too</h2>
                        <div class="text-base space-y-4 text-gray-600 text-left">
                            <p>Pets are more than just animals; they’re cherished members of the family. They share in our daily lives, bringing <strong>joy, comfort, and companionship</strong>. Whether it’s a morning walk, a cozy evening on the couch, or a spontaneous adventure, pets are there every step of the way.</p>
                            <p>But <strong>what happens when you need to move</strong> to another state or across the world?</p>
                            <p>As you prepare for your next move, the thought of leaving your pet behind certainly seems unimaginable. Your pet’s well-being is a top priority, meaning <strong>you want them to travel safely and comfortably, right by your side</strong>.</p>
                            <p>However, relocating with a pet involves numerous tasks and stressors, from navigating documentation and customs, to ensuring proper crate sizes and managing layovers. As a result, pet owners like you often <strong>worry about their pet’s safety and comfort throughout the journey</strong>, especially if they do the entire process themselves.</p>
                            <p>At Pets Travel International, we understand these challenges and are here to assist you every step of the way. <strong>Our team handles the complex logistics</strong>, including airport transfers, care during delays, and secure lodging, ensuring your pet’s safety and your peace of mind. Wherever life takes you, trust us to make your pet’s move seamless and stress-free.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-6 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 items-center">
                    <div class="flex justify-center lg:justify-end">
                        <img src="{{ asset('images/shutterstock_1532654051-scaled.jpg') }}" alt="Dog traveling with pet relocation services" class="rounded-lg shadow-lg max-w-[200px] h-auto">
                    </div>
                    <div class="flex justify-center">
                        <img src="{{ asset('images/airpets-international-van-1.jpg') }}" alt="white van used for ground pet transport with animal stickers at the back." class="rounded-lg shadow-lg max-w-[240px] h-auto">
                    </div>
                    <div class="flex justify-center lg:justify-start">
                        <img src="{{ asset('images/dog-cat-travel-desktop.jpg') }}" alt="a dog with its tongue sticking out sitting beside a tabby cat" class="rounded-lg shadow-lg max-w-[200px] h-auto">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-brand-red py-12">
            <div class="container mx-auto px-4 flex flex-col md:flex-row justify-around items-center text-center md:text-left">
                <div class="mb-8 md:mb-0">
                    <h3 class="text-white text-2xl font-pathway-gothic font-bold mb-4">Ready to Partner With Pets Travel International?</h3>
                    <a href="/track-pet/" class="inline-block bg-dark-blue text-white font-bold py-3 px-6 uppercase flex items-center justify-center">
                        Track Pet <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div>
                    <h3 class="text-white text-2xl font-pathway-gothic font-bold mb-4">Unsure How Pet Relocation Works?</h3>
                    <a href="/pet-relocation-guide" class="inline-block bg-dark-blue text-white font-bold py-3 px-6 uppercase flex items-center justify-center">
                        Download the Guide <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </section>

        <section class="py-16 sm:py-20" style="background-image: url('{{ asset('images/dotted-map-bg.png') }}'); background-color: #0d2a3b; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-4xl lg:text-5xl text-white font-pathway-gothic font-bold uppercase tracking-wider">Our Pet Moving Services</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <a href="/domestic-relocations-services" class="group block bg-white shadow-lg overflow-hidden">
                        <div class="overflow-hidden">
                            <img src="{{ asset('images/austin.jpg') }}" alt="Austin skyline for domestic pet relocation" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">
                        </div>
                        <div class="p-8 text-center">
                            <h3 class="font-pathway-gothic text-2xl font-bold text-dark-blue uppercase tracking-wider mb-3">Domestic Pet Relocation</h3>
                            <p class="font-open-sans text-gray-600 mb-6">Your pet can comfortably travel anywhere in the 48 contiguous United States with us, whether you choose to do so in the air or on the ground.</p>
                            <span class="inline-block bg-dark-blue text-white font-bold py-3 px-8 uppercase text-sm tracking-wider">Domestic Relocation</span>
                        </div>
                    </a>

                    <a href="/international-relocation-services" class="group block bg-white shadow-lg overflow-hidden">
                        <div class="overflow-hidden">
                            <img src="{{ asset('images/British-Airways1.jpg') }}" alt="British Airways plane for international pet relocation" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">
                        </div>
                        <div class="p-8 text-center">
                            <h3 class="font-pathway-gothic text-2xl font-bold text-dark-blue uppercase tracking-wider mb-3">International Pet Relocation</h3>
                            <p class="font-open-sans text-gray-600 mb-6">Relocating your pet to another country requires lots of leg work. We handle as much of the process as you want, from door to door or airport to airport.</p>
                            <span class="inline-block bg-dark-blue text-white font-bold py-3 px-8 uppercase text-sm tracking-wider">International Relocation</span>
                        </div>
                    </a>

                    <a href="/pet-ground-transportation" class="group block bg-white shadow-lg overflow-hidden relative">
                        <div class="absolute top-2 -right-10 transform rotate-45 bg-orange text-white text-xs font-bold px-10 py-1 uppercase tracking-wider z-10">United States</div>
                        <div class="overflow-hidden">
                            <img src="{{ asset('images/AP-pet-taxi-vans-2024.jpg') }}" alt="Pet transport van for ground transportation" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">
                        </div>
                        <div class="p-8 text-center">
                            <h3 class="font-pathway-gothic text-2xl font-bold text-dark-blue uppercase tracking-wider mb-3">Pet Ground Transportation</h3>
                            <p class="font-open-sans text-gray-600 mb-6">Our climate-controlled vehicles can move pets of any size from one destination to the next, from home to the airport, or from one state to another.</p>
                            <span class="inline-block bg-dark-blue text-white font-bold py-3 px-8 uppercase text-sm tracking-wider">Ground Transportation</span>
                        </div>
                    </a>

                    <a href="/pet-taxi-services" class="group block bg-white shadow-lg overflow-hidden relative">
                        <div class="absolute top-2 -right-10 transform rotate-45 bg-orange text-white text-xs font-bold px-10 py-1 uppercase tracking-wider z-10">Texas</div>
                        <div class="overflow-hidden">
                            <img src="{{ asset('images/AP-pet-taxi-driver-dog-loaded-2024-1024x819.jpg') }}" alt="Pet taxi driver with a dog" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">
                        </div>
                        <div class="p-8 text-center">
                            <h3 class="font-pathway-gothic text-2xl font-bold text-dark-blue uppercase tracking-wider mb-3">Pet Taxi Services</h3>
                            <p class="font-open-sans text-gray-600 mb-6">For residents in the Dallas Fort Worth metroplex, pet taxi services can help you transport pets to the vet, groomer, or other destination anywhere in our service area.</p>
                            <span class="inline-block bg-dark-blue text-white font-bold py-3 px-8 uppercase text-sm tracking-wider">DFW Pet Taxi</span>
                        </div>
                    </a>
                </div>
                <div class="text-center mt-12">
                    <a href="/services/" class="inline-block bg-brand-red text-white font-bold py-3 px-6 uppercase flex items-center justify-center hover:bg-[#c41f1e] transition-colors duration-300">
                        <span class="flex justify-center items-center gap-2">
                            <span>Explore All Services</span>
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <section class="py-16 sm:py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-4xl lg:text-5xl text-dark-blue font-pathway-gothic font-bold">Pets Travel International: Your Trusted Pet Transportation Company</h2>
                    <p class="mt-4 text-lg text-gray-600 font-open-sans">We are a fun and professional team of pet and animal transportation experts with over 30 years of industry experience.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div>
                        <h3 class="text-2xl font-bold font-pathway-gothic mb-4" style="color: #db2a17;">Fully-Customizable Pet Transportation Services</h3>
                        <p class="font-open-sans text-gray-600 mb-6">At Pets Travel International, we believe that pet travel is about more than just getting from point A to point B. It’s about ensuring that your furry companion feels pampered, prepared, and protected every step of the way. That’s why we’re proud to offer <strong>fully-customizable pet relocation services</strong> to make your pet’s journey as comfortable and enjoyable as possible.</p>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="text-orange mr-3 mt-1"><i class="fas fa-dot-circle"></i></span>
                                <span class="font-open-sans text-gray-600">Air travel and ground transportation</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange mr-3 mt-1"><i class="fas fa-dot-circle"></i></span>
                                <span class="font-open-sans text-gray-600">Domestic and international</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange mr-3 mt-1"><i class="fas fa-dot-circle"></i></span>
                                <span class="font-open-sans text-gray-600">Permits, custom clearance, and quarantine arrangements</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange mr-3 mt-1"><i class="fas fa-dot-circle"></i></span>
                                <span class="font-open-sans text-gray-600">Veterinarian services for international travel</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold font-pathway-gothic mb-4" style="color: #db2a17;">Safety is Our Top Priority</h3>
                        <p class="font-open-sans text-gray-600 mb-6">We understand that your pets are more than just animals—they’re cherished members of your family. For years, we’ve specialized in making pet travel a safe and comfortable experience for both pets and their parents.</p>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="text-orange mr-3 mt-1"><i class="fas fa-dot-circle"></i></span>
                                <span class="font-open-sans text-gray-600">Partner with the safest airlines</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange mr-3 mt-1"><i class="fas fa-dot-circle"></i></span>
                                <span class="font-open-sans text-gray-600">Hire most qualified pet handlers</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange mr-3 mt-1"><i class="fas fa-dot-circle"></i></span>
                                <span class="font-open-sans text-gray-600">IATA-compliant crates</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange mr-3 mt-1"><i class="fas fa-dot-circle"></i></span>
                                <span class="font-open-sans text-gray-600">Fleet of temperature-controlled vans with professionally-trained drivers</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange mr-3 mt-1"><i class="fas fa-dot-circle"></i></span>
                                <span class="font-open-sans text-gray-600">Spacious, temperature-controlled lodging during layovers or delays</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        <!-- CTA Section -->
        <section class="bg-brand-red py-12">
            <div class="container mx-auto px-4 flex flex-col md:flex-row justify-around items-center text-center md:text-left">
                <div class="mb-8 md:mb-0">
                    <h3 class="text-white text-2xl font-pathway-gothic font-bold mb-4">Ready to Partner With Pets Travel International?</h3>
                    <a href="/track-pet/" class="inline-block bg-dark-blue text-white font-bold py-3 px-6 uppercase flex items-center justify-center">
                        Track Pet <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div>
                    <h3 class="text-white text-2xl font-pathway-gothic font-bold mb-4">Unsure How Pet Relocation Works?</h3>
                    <a href="/pet-relocation-guide" class="inline-block bg-dark-blue text-white font-bold py-3 px-6 uppercase flex items-center justify-center">
                        Download the Guide <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- OUR IMPACT Section -->
        <section class="py-16 sm:py-20 bg-gray-100">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl lg:text-5xl text-dark-blue font-pathway-gothic font-bold uppercase mb-12">Our Impact</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Stat 1 -->
                    <div class="flex flex-col items-center">
                        <span class="text-6xl font-bold font-pathway-gothic impact-counter" style="color: #c7352c;" data-target="34">0</span>
                        <h5 class="mt-4 text-xl font-bold uppercase text-dark-blue font-pathway-gothic">years moving pets</h5>
                        <p class="mt-2 text-gray-600 font-open-sans">IPATA Member since 1990</p>
                    </div>
                    <!-- Stat 2 -->
                    <div class="flex flex-col items-center">
                        <span class="text-6xl font-bold font-pathway-gothic impact-counter" style="color: #c7352c;" data-target="12500">0</span>
                        <h5 class="mt-4 text-xl font-bold uppercase text-dark-blue font-pathway-gothic">pets moved</h5>
                        <p class="mt-2 text-gray-600 font-open-sans">Across 155+ destinations</p>
                    </div>
                    <!-- Stat 3 -->
                    <div class="flex flex-col items-center">
                        <span class="text-6xl font-bold font-pathway-gothic impact-counter" style="color: #c7352c;" data-target="281">0</span>
                        <h5 class="mt-4 text-xl font-bold uppercase text-dark-blue font-pathway-gothic">Google reviews</h5>
                        <p class="mt-2 text-gray-600 font-open-sans">Average google rating is 4.8</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Let Us Handle Pet Logistics Section -->
        <section class="py-16 sm:py-20 bg-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl lg:text-5xl text-dark-blue font-pathway-gothic font-bold uppercase mb-16">Let Us Handle Pet Logistics While You Relocate</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <!-- Column 1 -->
                    <div class="flex flex-col items-center">
                        <div class="text-orange text-5xl mb-6">
                            <i class="fas fa-dog"></i>
                        </div>
                        <h3 class="text-2xl font-bold uppercase mb-4 font-pathway-gothic" style="color: #c7352c;">Comprehensive Services</h3>
                        <p class="font-open-sans text-gray-600">From door-to-door transport to paperwork management, we offer a comprehensive range of services designed to streamline the pet relocation process. Whether you’re moving across the country or around the globe, our experienced team will take care of every detail, ensuring a smooth and hassle-free journey for your pets.</p>
                    </div>
                    <!-- Column 2 -->
                    <div class="flex flex-col items-center">
                        <div class="text-orange text-5xl mb-6">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3 class="text-2xl font-bold uppercase mb-4 font-pathway-gothic" style="color: #c7352c;">Expert Guidance</h3>
                        <p class="font-open-sans text-gray-600">Our team of pet relocation specialists is well-versed in the latest pet travel laws and regulations. We’ll guide you through the process, providing accurate information and personalized assistance every step of the way. Say goodbye to confusion and uncertainty – with Pets Travel International, you’re in expert hands.</p>
                    </div>
                    <!-- Column 3 -->
                    <div class="flex flex-col items-center">
                        <div class="text-orange text-5xl mb-6">
                            <i class="fas fa-comment-dots"></i>
                        </div>
                        <h3 class="text-2xl font-bold uppercase mb-4 font-pathway-gothic" style="color: #c7352c;">Regular Updates</h3>
                        <p class="font-open-sans text-gray-600">We understand how important it is to pet parents to stay informed throughout the relocation process. That’s why we provide regular updates and communication, keeping you informed of your pet’s progress every step of the way. With Pets Travel International, you’ll always know exactly what’s happening with your furry friend.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Bar Section -->
        <section class="bg-brand-red py-12">
            <div class="container mx-auto px-4 flex flex-col md:flex-row justify-around items-center text-center md:text-left">
                <div class="mb-8 md:mb-0">
                    <h3 class="text-white text-2xl font-pathway-gothic font-bold mb-4">Ready to Partner With Pets Travel International?</h3>
                    <a href="/track-pet/" class="inline-block bg-dark-blue text-white font-bold py-3 px-6 uppercase flex items-center justify-center">
                        Track Pet <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div>
                    <h3 class="text-white text-2xl font-pathway-gothic font-bold mb-4">Unsure How Pet Relocation Works?</h3>
                    <a href="/pet-relocation-guide" class="inline-block bg-dark-blue text-white font-bold py-3 px-6 uppercase flex items-center justify-center">
                        Download the Guide <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Happy Travelers Section -->
        <section class="py-16 sm:py-20 bg-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl lg:text-5xl text-dark-blue font-pathway-gothic font-bold uppercase mb-4">Happy Travelers</h2>
                <p class="font-open-sans text-gray-600 max-w-2xl mx-auto mb-12">Don’t just take our word for it, checkout what all of these happy travelers have to say about their pet flights with Pets Travel International.</p>
                
                <!-- Reviews Widget -->
                <div class="mb-12">
                    <script type="text/javascript" src="https://app.thrivelocal.com/embed/v7/172996211462880/11/987654321301115183" async></script>
                    <div id="bf-revz-widget-987654321301115183"></div>
                    
                    <div class="hidden">
                        <div id="review-widget-1077"></div>
                        <script data-token="eyJhbGciOiJIUzI1NiJ9.eyJ0ZW5hbnQiOiJyaXplcmV2aWV3cyIsImhvc3QiOiJ3d3cucml6ZS5yZXZpZXdzIiwic3RvcmUiOjEsIndpZGdldCI6MTA3NywiaWF0IjoxNzA0Mjk1ODQwfQ.un3RI27sVcbKe0turkfzeHpfgOXS_MTcZFuBB6r4kxg" data-id="1077" src="https://www.rize.reviews/widget-embed.js" async></script>
                    </div>
                </div>

                <!-- GET STARTED Button -->
                <a href="/track-pet/" class="inline-block bg-brand-red text-white font-bold py-3 px-6 uppercase flex items-center justify-center hover:bg-[#c41f1e] transition-colors duration-300">
                    <span class="flex justify-center items-center gap-2">
                        <span>GET STARTED</span>
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>
            </div>
        </section>

        <!-- Where is your pet traveling to? Section -->
        <section class="bg-dark-blue py-16 sm:py-20 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl lg:text-5xl font-pathway-gothic font-bold uppercase mb-4" style="color: white !important;">WHERE IS YOUR PET TRAVELING TO?</h2>
                <p class="font-open-sans max-w-2xl mx-auto mb-12" style="color: white !important;">See some of our more popular locations below!</p>
                
                <div class="relative w-full max-w-4xl mx-auto">
                    <img src="{{ asset('images/map-pet-travel-1.svg') }}" class="w-full h-auto" alt="World map showing pet travel destinations">
                    
                    <!-- Hotspots - Mobile-friendly with responsive font sizes and positioning -->
                    <a href="#" class="absolute text-white text-[10px] sm:text-xs md:text-sm font-bold whitespace-nowrap uppercase px-2 py-1 sm:px-4 sm:py-2 rounded-full" style="top: 29%; left: 13%; transform: translate(-50%, -50%); background-color: #E32726;">NORTH AMERICA</a>
                    <a href="#" class="absolute text-white text-[10px] sm:text-xs md:text-sm font-bold uppercase px-2 py-1 sm:px-4 sm:py-2 rounded-full" style="top: 41%; left: 18%; transform: translate(-50%, -50%); background-color: #E32726;">USA</a>
                    <a href="#" class="absolute text-white text-[10px] sm:text-xs md:text-sm font-bold whitespace-nowrap uppercase hidden sm:block px-2 py-1 sm:px-4 sm:py-2 rounded-full" style="top: 74%; left: 33%; transform: translate(-50%, -50%); background-color: #E32726;">LATIN AMERICA</a>
                    <a href="#" class="absolute text-white text-[10px] sm:text-xs md:text-sm font-bold uppercase px-2 py-1 sm:px-4 sm:py-2 rounded-full" style="top: 35%; left: 56%; transform: translate(-50%, -50%); background-color: #E32726;">EUROPE</a>
                    <a href="#" class="absolute text-white text-[10px] sm:text-xs md:text-sm font-bold whitespace-nowrap uppercase hidden sm:block px-2 py-1 sm:px-4 sm:py-2 rounded-full" style="top: 55%; left: 53%; transform: translate(-50%, -50%); background-color: #E32726;">MIDDLE EAST</a>
                    <a href="#" class="absolute text-white text-[10px] sm:text-xs md:text-sm font-bold uppercase px-2 py-1 sm:px-4 sm:py-2 rounded-full" style="top: 44%; left: 78%; transform: translate(-50%, -50%); background-color: #E32726;">ASIA</a>
                    <a href="#" class="absolute text-white text-[10px] sm:text-xs md:text-sm font-bold uppercase hidden sm:block px-2 py-1 sm:px-4 sm:py-2 rounded-full" style="top: 75%; left: 89%; transform: translate(-50%, -50%); background-color: #E32726;">OCEANIA</a>
                </div>

                <div class="mt-12">
                    <a href="/track-pet/" class="inline-block bg-brand-red text-white font-bold py-3 px-6 uppercase flex items-center justify-center hover:bg-[#c41f1e] transition-colors duration-300">
                        <span class="flex justify-center items-center gap-2">
                            <span>Track Pet</span>
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <!-- We Move Many Types of Pets Section -->
        <section class="py-16 sm:py-20 bg-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl lg:text-5xl text-dark-blue font-pathway-gothic font-bold uppercase mb-12">We Move Many Types of Pets, Big or Small</h2>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @php
                        $pets = [
                            ['name' => 'Dogs', 'img' => asset('images/shutterstock_424481974-scaled.jpg')], 
                            ['name' => 'Cats', 'img' => asset('images/QmxvZy03MzM1.jpeg')],
                            ['name' => 'Guinea Pigs', 'img' => asset('images/download-1-1.jpg')],
                            ['name' => 'Hedgehogs', 'img' => asset('images/Hedgehog.png')],
                            ['name' => 'Iguanas', 'img' => asset('images/MJ.jpg')],
                            ['name' => 'Lizards/Geckos', 'img' => asset('images/Gecko.png')],
                            ['name' => 'Rabbits', 'img' => asset('images/API_img9-scaled.jpg')],
                            ['name' => 'Rats & Mice', 'img' => asset('images/Rat.png')],
                            ['name' => 'Skunks (descented)', 'img' => asset('images/Skunk.png')],
                            ['name' => 'Snakes', 'img' => asset('images/snake.png')],
                            ['name' => 'Sugar Gliders', 'img' => asset('images/sugar-glider.png')],
                            ['name' => 'Tortoises', 'img' => asset('images/Tortoise.png')],
                        ];
                    @endphp

                    @foreach ($pets as $pet)
                        <div class="relative group overflow-hidden">
                            <img src="{{ $pet['img'] }}" alt="{{ $pet['name'] }}" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                                <h4 class="text-white text-xl font-bold">{{ $pet['name'] }}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>

                <p class="mt-12 font-open-sans text-gray-600">Have another pet in mind? <a href="/contact" class="text-brand-red font-bold hover:underline">Contact us</a>!</p>
            </div>
        </section>

        <!-- Pet Travel Tips Section -->
        <section class="py-16 sm:py-20 bg-gray-50">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl lg:text-5xl text-dark-blue font-pathway-gothic font-bold uppercase mb-12">Pet Travel Tips From Our Globetrotting Experts</h2>
                
                @php
                    $articles = [
                        [
                            'img' => asset('images/june-blog-1-1024x683.png'),
                            'category' => 'International Pet Shipping',
                            'title' => 'What Do Pet Movers Do? A Guide to Stress-Free Pet Relocation',
                            'excerpt' => 'Relocating with pets can feel overwhelming. Between paperwork, transportation logistics, health requirements, and your pet’s well-being, it’s a lot to manage alone. That’s where professional',
                            'link' => '/what-do-pet-movers-do',
                            'date' => 'June 19, 2025'
                        ],
                        [
                            'img' => asset('images/Navigating-Customs-Regulations-When-Flying-With-a-Dog-2-1024x1024.png'),
                            'category' => 'International Pet Shipping',
                            'title' => 'The Best Ways to Ship Your Reptiles Safely and Legally',
                            'excerpt' => 'Shipping reptiles safely requires more than just a box and a label—it demands planning, precision, and a deep understanding of your scaly companion’s unique needs.',
                            'link' => '/ship-reptiles-safely',
                            'date' => 'May 8, 2025'
                        ],
                        [
                            'img' => asset('images/Pet-Transport-Service-1024x685.jpg'),
                            'category' => 'Animal Crates Info & Posts',
                            'title' => 'How to Choose the Right Pet Transport Service for Your Furry Family Member',
                            'excerpt' => 'Whether you’re relocating across the country or moving overseas, finding a reliable pet transport service is crucial to ensuring your pet’s comfort, safety, and well-being.',
                            'link' => '/choosing-pet-transport-service',
                            'date' => 'May 6, 2025'
                        ]
                    ];
                @endphp

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-left">
                    @foreach ($articles as $article)
                        <div class="bg-white shadow-lg overflow-hidden group">
                            <a href="{{ $article['link'] }}" class="block relative">
                                <img src="{{ $article['img'] }}" alt="{{ $article['title'] }}" class="w-full h-56 object-cover">
                                <div class="absolute top-4 right-4 bg-brand-red text-white text-xs font-bold uppercase px-2 py-1">{{ $article['category'] }}</div>
                            </a>
                            <div class="p-6">
                                <h3 class="text-lg sm:text-xl font-bold text-dark-blue mb-2 font-pathway-gothic leading-tight">
                                    <a href="{{ $article['link'] }}" class="text-brand-red hover:underline transition-colors duration-300">{{ $article['title'] }}</a>
                                </h3>
                                <p class="text-gray-600 font-open-sans text-sm mb-4 line-clamp-3 sm:line-clamp-none">{{ $article['excerpt'] }}</p>
                                <a href="{{ $article['link'] }}" class="text-brand-red font-bold hover:underline text-sm inline-flex items-center">
                                    Read More <span class="ml-1">»</span>
                                </a>
                                <div class="text-gray-500 text-xs mt-4">{{ $article['date'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-12">
                    <button class="bg-brand-red text-white font-bold py-3 px-8 uppercase w-full sm:w-auto transition-colors duration-300 hover:bg-[#c41f1e]">Load More</button>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="bg-brand-red py-12">
            <div class="container mx-auto px-4 flex flex-col md:flex-row justify-around items-center text-center md:text-left">
                <div class="mb-8 md:mb-0 w-full md:w-auto">
                    <h3 class="text-white text-2xl font-pathway-gothic font-bold mb-4">Ready to Partner With Pets Travel International?</h3>
                    <a href="/track-pet/" class="inline-block bg-dark-blue text-white font-bold py-3 px-6 uppercase flex items-center justify-center w-full sm:w-auto">
                        Track Pet <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="w-full md:w-auto">
                    <h3 class="text-white text-2xl font-pathway-gothic font-bold mb-4">Unsure How Pet Relocation Works?</h3>
                    <a href="/pet-relocation-guide" class="inline-block bg-dark-blue text-white font-bold py-3 px-6 uppercase flex items-center justify-center w-full sm:w-auto">
                        Download the Guide <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </section>

    </main>
@endsection

<script>
        document.addEventListener('DOMContentLoaded', function () {
            // Ken Burns Slider
            const slides = document.querySelectorAll('.ken-burns-slide');
            if (slides.length > 0) {
                let currentSlide = 0;

                function showSlide(index) {
                    slides.forEach((slide, i) => {
                        slide.classList.remove('active');
                        if (i === index) {
                            slide.classList.add('active');
                        }
                    });
                }

                function nextSlide() {
                    currentSlide = (currentSlide + 1) % slides.length;
                    showSlide(currentSlide);
                }

                setInterval(nextSlide, 5000); // Change slide every 5 seconds
                showSlide(currentSlide);
            }

            // Impact Counter Animation
            const counters = document.querySelectorAll('.impact-counter');
            if (counters.length > 0) {
                const observer = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const counter = entry.target;
                            const animate = () => {
                                const target = +counter.getAttribute('data-target');
                                let current = +counter.innerText.replace(/,/g, '');
                                const speed = 200; // Adjust for speed
                                const increment = target / speed;

                                if (current < target) {
                                    counter.innerText = Math.ceil(current + increment).toLocaleString();
                                    setTimeout(animate, 10);
                                } else {
                                    counter.innerText = target.toLocaleString();
                                }
                            };
                            animate();
                            observer.unobserve(counter);
                        }
                    });
                }, { threshold: 0.1 });

                counters.forEach(counter => {
                    observer.observe(counter);
                });
            }
        });
    </script>
