@extends('layouts.app')

@section('title', 'Pet Ground Transportation - Pets Travel International')

@section('content')
    <!-- Hero Banner Section -->
    <section class="relative min-h-[400px] flex items-end bg-cover bg-center" style="background-image: url('https://airpetsinternational.com/wp-content/uploads/2020/01/pet-ground-transport.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="container mx-auto px-4 py-10 relative z-10">
            <div class="text-white max-w-2xl">
                <h1 class="text-4xl md:text-5xl font-pathway-gothic mb-2">Pet Ground Transportation</h1>
                <h4 class="text-xl md:text-2xl font-pathway-gothic">Safe and Comfortable Long-Distance Travel for Your Pets</h4>
            </div>
        </div>
    </section>

    <!-- Service Overview Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto mb-10">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Pet Ground Transportation Services</h2>
                
                <p class="text-gray-700 mb-6">
                    At Pets Travel International, we understand that air travel isn't always the best option for every pet. Our specialized Pet Ground Transportation service provides a safe, comfortable alternative for pets traveling long distances within the continental United States and between neighboring countries.
                </p>

                <p class="text-gray-700 mb-6">
                    Our fleet of custom-designed pet transport vehicles is equipped with climate control systems, monitoring technology, and comfortable, secure compartments to ensure your pet's journey is stress-free. Each transport is managed by trained pet handlers who prioritize your pet's safety and well-being throughout the journey.
                </p>
                
                <div class="mb-10">
                    <img src="https://airpetsinternational.com/wp-content/uploads/2020/01/pet-ground-transport.jpg" alt="Pet ground transportation" class="rounded-lg w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- When to Choose Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">When to Choose Ground Transportation</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-10">
                    <!-- Scenario 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-ban text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Breed Restrictions</h3>
                        <p class="text-gray-700">
                            For breeds that face air travel restrictions or bans, such as brachycephalic (short-nosed) dogs and cats that may have breathing difficulties at altitude.
                        </p>
                    </div>

                    <!-- Scenario 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-weight text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Large or Giant Breeds</h3>
                        <p class="text-gray-700">
                            For very large dogs that exceed airline size or weight restrictions, ground transportation offers a comfortable alternative.
                        </p>
                    </div>

                    <!-- Scenario 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-temperature-low text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Seasonal Restrictions</h3>
                        <p class="text-gray-700">
                            During extreme temperature seasons when airlines may impose embargoes on pet travel in cargo holds.
                        </p>
                    </div>

                    <!-- Scenario 4 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-heartbeat text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Health Considerations</h3>
                        <p class="text-gray-700">
                            For elderly pets or those with medical conditions that make air travel inadvisable but are still cleared for ground transportation.
                        </p>
                    </div>

                    <!-- Scenario 5 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-paw text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Multiple Pets</h3>
                        <p class="text-gray-700">
                            For families relocating with multiple pets who wish to keep their animals together during transport.
                        </p>
                    </div>

                    <!-- Scenario 6 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-route text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Regional Moves</h3>
                        <p class="text-gray-700">
                            For relocations within driving distance where ground transportation is more practical and less stressful than air travel.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Fleet Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Our Specialized Pet Transport Fleet</h2>
                
                <p class="text-gray-700 mb-6 text-center">
                    Our fleet of vehicles is specifically designed for pet transportation, with features that prioritize safety, comfort, and well-being during long journeys.
                </p>
                
                <div class="space-y-8 mb-10">
                    <!-- Vehicle Type 1 -->
                    <div class="flex flex-col md:flex-row gap-6 items-center">
                        <div class="md:w-1/3">
                            <img src="https://airpetsinternational.com/wp-content/uploads/2020/01/pet-van.jpg" alt="Pet transport van" class="rounded-lg w-full">
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Climate-Controlled Transport Vans</h3>
                            <p class="text-gray-700 mb-4">
                                Our specialized transport vans feature individual compartments with dedicated climate control systems, ensuring your pet remains comfortable regardless of outside temperatures.
                            </p>
                            <ul class="list-disc pl-5 text-gray-700">
                                <li>Advanced air filtration systems</li>
                                <li>Temperature monitoring in each compartment</li>
                                <li>Noise reduction technology</li>
                                <li>Shock-absorbing suspension for a smooth ride</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Vehicle Type 2 -->
                    <div class="flex flex-col md:flex-row gap-6 items-center">
                        <div class="md:w-1/3 md:order-2">
                            <img src="https://airpetsinternational.com/wp-content/uploads/2020/01/pet-transport-truck.jpg" alt="Pet transport truck" class="rounded-lg w-full">
                        </div>
                        <div class="md:w-2/3 md:order-1">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Long-Distance Transport Trucks</h3>
                            <p class="text-gray-700 mb-4">
                                For cross-country relocations, our specially designed transport trucks provide spacious, secure accommodations for multiple pets with continuous monitoring.
                            </p>
                            <ul class="list-disc pl-5 text-gray-700">
                                <li>24/7 video monitoring of all pet compartments</li>
                                <li>Backup power systems for climate control</li>
                                <li>Regular comfort breaks scheduled throughout the journey</li>
                                <li>Two drivers for continuous operation with proper rest periods</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Vehicle Type 3 -->
                    <div class="flex flex-col md:flex-row gap-6 items-center">
                        <div class="md:w-1/3">
                            <img src="https://airpetsinternational.com/wp-content/uploads/2020/01/pet-suv.jpg" alt="Pet transport SUV" class="rounded-lg w-full">
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Private Pet Transport SUVs</h3>
                            <p class="text-gray-700 mb-4">
                                For clients seeking premium, private transportation for their pets, our luxury SUVs offer one-on-one attention and the highest level of care.
                            </p>
                            <ul class="list-disc pl-5 text-gray-700">
                                <li>Private transportation with dedicated pet handler</li>
                                <li>Custom crating or secure harness options</li>
                                <li>Flexible scheduling and route planning</li>
                                <li>Ideal for pets with special needs or anxiety</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Features of Our Ground Transportation Service</h2>
                
                <div class="grid md:grid-cols-3 gap-8 mb-10">
                    <!-- Feature 1 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-user-shield text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Professional Handlers</h3>
                        <p class="text-gray-700">
                            Our drivers are trained animal handlers with pet first aid certification and extensive experience in pet care.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-thermometer-half text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Climate Control</h3>
                        <p class="text-gray-700">
                            Dedicated climate control systems maintain optimal temperature and humidity levels for your pet's comfort.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-video text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Monitoring Systems</h3>
                        <p class="text-gray-700">
                            Video monitoring and environmental sensors ensure your pet's safety throughout the journey.
                        </p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-map-marked-alt text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">GPS Tracking</h3>
                        <p class="text-gray-700">
                            Real-time GPS tracking allows you to monitor your pet's journey and receive regular location updates.
                        </p>
                    </div>

                    <!-- Feature 5 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-paw text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Regular Comfort Breaks</h3>
                        <p class="text-gray-700">
                            Scheduled stops for exercise, hydration, feeding, and bathroom breaks during long journeys.
                        </p>
                    </div>

                    <!-- Feature 6 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-comments text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Regular Updates</h3>
                        <p class="text-gray-700">
                            We provide photo updates and status reports throughout your pet's journey for your peace of mind.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">How Our Ground Transportation Service Works</h2>
                
                <div class="space-y-6 mb-10">
                    <!-- Step 1 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">1</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Initial Consultation</h3>
                            <p class="text-gray-700">
                                We begin with a detailed consultation to understand your pet's specific needs, travel dates, and any special requirements.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">2</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Custom Transport Plan</h3>
                            <p class="text-gray-700">
                                We create a detailed transport plan including route, scheduled stops, estimated travel time, and vehicle type based on your pet's needs.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">3</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Pre-Travel Preparation</h3>
                            <p class="text-gray-700">
                                We provide guidance on preparing your pet for the journey, including any required health certificates or documentation.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">4</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Pick-Up</h3>
                            <p class="text-gray-700">
                                Our professional handler arrives at your location, conducts a brief health check, and carefully loads your pet into our specialized vehicle.
                            </p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">5</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Journey with Regular Updates</h3>
                            <p class="text-gray-700">
                                Throughout the journey, we provide regular updates including photos, location information, and status reports on your pet's well-being.
                            </p>
                        </div>
                    </div>

                    <!-- Step 6 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">6</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Safe Delivery</h3>
                            <p class="text-gray-700">
                                We deliver your pet safely to the destination address, providing a final status report and any necessary guidance for settling in.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Areas Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Our Service Areas</h2>
                
                <p class="text-gray-700 mb-6 text-center">
                    We provide comprehensive ground transportation services throughout the continental United States and between neighboring countries.
                </p>
                
                <div class="grid md:grid-cols-2 gap-8 mb-10">
                    <!-- Area 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-flag-usa text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Continental United States</h3>
                        <p class="text-gray-700">
                            Comprehensive coverage across all 48 contiguous states, with established routes connecting major cities and regions.
                        </p>
                    </div>

                    <!-- Area 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-leaf text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Canada</h3>
                        <p class="text-gray-700">
                            Cross-border transportation to and from major Canadian cities, with full assistance for customs and border requirements.
                        </p>
                    </div>

                    <!-- Area 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-pepper-hot text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Mexico</h3>
                        <p class="text-gray-700">
                            Transportation services to and from select Mexican destinations, with expertise in navigating border requirements and regulations.
                        </p>
                    </div>

                    <!-- Area 4 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-route text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Custom Routes</h3>
                        <p class="text-gray-700">
                            We can create custom transportation solutions for unique routes or destinations not covered by our standard service areas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-12" style="background-image: url('https://airpetsinternational.com/wp-content/uploads/2020/01/testimonial-bg.jpg'); background-size: cover; background-position: center;">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto bg-white bg-opacity-90 p-8 rounded-lg shadow-lg">
                <div class="text-center mb-8">
                    <h2 class="text-3xl md:text-4xl font-pathway-gothic font-bold text-dark-blue mb-4">What Our Clients Say</h2>
                </div>
                
                <div class="mb-8">
                    <div class="italic text-gray-700 mb-4">
                        "When we found out our French Bulldog couldn't fly due to airline breed restrictions, we were so worried about how to get him to our new home across the country. Pets Travel International's ground transportation service was the perfect solution. The regular photo updates during his journey gave us such peace of mind, and he arrived happy and healthy at our new home."
                    </div>
                    <div class="font-bold text-right">- Sarah and Mark J., California to New York</div>
                </div>
                
                <div>
                    <div class="italic text-gray-700 mb-4">
                        "We needed to transport our three large dogs and two cats from Texas to Canada, and the logistics seemed overwhelming. The ground transportation team at Pets Travel International handled everything perfectly. The vehicles were amazing - climate controlled, monitored, and our pets had regular breaks. The handlers were so caring and professional. I wouldn't trust anyone else with our fur family."
                    </div>
                    <div class="font-bold text-right">- The Wilson Family, Texas to Ontario</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-dark-blue py-12 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6">Ready to Plan Your Pet's Ground Transportation?</h2>
            <p class="max-w-2xl mx-auto mb-8">
                Contact our team today to discuss your pet's transportation needs and receive a customized quote for our ground transportation services.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/contact" class="bg-brand-red hover:bg-red-700 text-white px-6 py-3 rounded-md transition duration-300 inline-flex items-center">
                    <span class="mr-2">CONTACT US</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="/get-an-estimate" class="bg-white hover:bg-gray-100 text-dark-blue px-6 py-3 rounded-md transition duration-300 inline-flex items-center">
                    <span class="mr-2">GET AN ESTIMATE</span>
                    <i class="fas fa-calculator"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
