@extends('layouts.app')

@section('title', 'Pet Taxi Services - Pets Travel International')

@section('content')
    <!-- Hero Banner Section -->
    <section class="relative min-h-[400px] flex items-end bg-cover bg-center" style="background-image: url('https://airpetsinternational.com/wp-content/uploads/2024/08/AP-pet-taxi-driver-dog-loaded-2024-1024x819.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="container mx-auto px-4 py-10 relative z-10">
            <div class="text-white max-w-2xl">
                <h1 class="text-4xl md:text-5xl font-pathway-gothic mb-2">Pet Taxi Services</h1>
                <h4 class="text-xl md:text-2xl font-pathway-gothic">Reliable Local Transportation for Your Beloved Pets</h4>
            </div>
        </div>
    </section>

    <!-- Service Overview Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto mb-10">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Pet Taxi Services</h2>
                
                <p class="text-gray-700 mb-6">
                    At Pets Travel International, we understand that transporting your pet locally can sometimes be challenging. Whether you need to take your pet to a veterinary appointment, grooming session, boarding facility, or any other destination, our professional pet taxi service provides a safe, reliable, and stress-free transportation solution.
                </p>

                <p class="text-gray-700 mb-6">
                    Our pet taxi drivers are trained animal handlers who prioritize the comfort and safety of your pets. We use specially equipped vehicles designed to keep your pets secure and comfortable throughout their journey, no matter how short or long the distance.
                </p>
                
                <div class="mb-10">
                    <img src="https://airpetsinternational.com/wp-content/uploads/2024/08/AP-pet-taxi-driver-dog-loaded-2024-1024x819.jpg" alt="Pet taxi service" class="rounded-lg w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Included Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Our Pet Taxi Services Include</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-10">
                    <!-- Service 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-hospital text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Veterinary Appointments</h3>
                        <p class="text-gray-700">
                            We provide transportation to and from veterinary appointments, ensuring your pet arrives on time and returns home safely after their visit.
                        </p>
                    </div>

                    <!-- Service 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-cut text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Grooming Services</h3>
                        <p class="text-gray-700">
                            Let us handle the transportation to and from grooming appointments, so your pet can look their best without the stress of travel.
                        </p>
                    </div>

                    <!-- Service 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-hotel text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Boarding Facilities</h3>
                        <p class="text-gray-700">
                            We provide drop-off and pick-up services for boarding facilities when you're traveling or need pet care during the day.
                        </p>
                    </div>

                    <!-- Service 4 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-plane text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Airport Transfers</h3>
                        <p class="text-gray-700">
                            We offer reliable transportation to and from airports for pets traveling by air, coordinating with flight schedules for seamless transfers.
                        </p>
                    </div>

                    <!-- Service 5 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-home text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Home Relocations</h3>
                        <p class="text-gray-700">
                            Moving to a new home locally? We can transport your pets safely to your new residence while you focus on the move.
                        </p>
                    </div>

                    <!-- Service 6 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-paw text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Dog Parks & Pet Events</h3>
                        <p class="text-gray-700">
                            Need transportation to dog parks, pet-friendly events, or socialization activities? Our pet taxi service has you covered.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Why Choose Our Pet Taxi Service</h2>
                
                <div class="grid md:grid-cols-3 gap-8 mb-10">
                    <!-- Feature 1 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-shield-alt text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Safety First</h3>
                        <p class="text-gray-700">
                            Our vehicles are equipped with secure pet restraint systems, climate control, and first aid kits to ensure your pet's safety and comfort.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-user-friends text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Professional Handlers</h3>
                        <p class="text-gray-700">
                            Our drivers are trained animal handlers who understand pet behavior and know how to keep pets calm and comfortable during transport.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-clock text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Reliable & Punctual</h3>
                        <p class="text-gray-700">
                            We pride ourselves on punctuality and reliability, ensuring your pet arrives at their destination on time, every time.
                        </p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-calendar-alt text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Flexible Scheduling</h3>
                        <p class="text-gray-700">
                            We offer flexible scheduling options, including same-day service when available and advance bookings for planned appointments.
                        </p>
                    </div>

                    <!-- Feature 5 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-broom text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Clean Vehicles</h3>
                        <p class="text-gray-700">
                            Our vehicles are thoroughly cleaned and sanitized between each trip to maintain a healthy environment for all pets.
                        </p>
                    </div>

                    <!-- Feature 6 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-phone-alt text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Regular Updates</h3>
                        <p class="text-gray-700">
                            We provide updates throughout the journey, so you always know your pet's status and estimated arrival time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">How Our Pet Taxi Service Works</h2>
                
                <div class="space-y-6 mb-10">
                    <!-- Step 1 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">1</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Book Your Ride</h3>
                            <p class="text-gray-700">
                                Contact us by phone or online to schedule your pet's transportation. Let us know your pet's details, pick-up and drop-off locations, and any special requirements.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">2</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Confirmation</h3>
                            <p class="text-gray-700">
                                We'll confirm your booking and provide you with details about your driver, estimated pick-up time, and pricing.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">3</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Pick-Up</h3>
                            <p class="text-gray-700">
                                Our professional driver will arrive at the scheduled time, greet your pet, and ensure they're comfortably and securely placed in our specially equipped vehicle.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">4</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Transportation</h3>
                            <p class="text-gray-700">
                                Your pet will be transported safely to their destination. Our drivers are trained to provide a calm and comfortable journey.
                            </p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">5</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Drop-Off</h3>
                            <p class="text-gray-700">
                                We'll ensure your pet is safely handed over at their destination, whether that's to you, a veterinarian, groomer, or boarding facility staff.
                            </p>
                        </div>
                    </div>

                    <!-- Step 6 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">6</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Confirmation & Feedback</h3>
                            <p class="text-gray-700">
                                We'll notify you when your pet has been safely delivered, and welcome your feedback on our service.
                            </p>
                        </div>
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
                        "I use Pets Travel International's pet taxi service regularly for my elderly dog's veterinary appointments. The drivers are always so kind and patient with him, and the vehicles are clean and comfortable. It's such a relief to have reliable transportation for my pet when I'm at work."
                    </div>
                    <div class="font-bold text-right">- Rebecca M., Chicago</div>
                </div>
                
                <div>
                    <div class="italic text-gray-700 mb-4">
                        "When I needed to get my two cats to the groomer but didn't have a car that day, Pets Travel International came to the rescue! Their pet taxi service was prompt, professional, and my cats arrived calm and happy. I'll definitely be using this service again!"
                    </div>
                    <div class="font-bold text-right">- David P., Dallas</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-dark-blue py-12 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6">Ready to Book a Pet Taxi?</h2>
            <p class="max-w-2xl mx-auto mb-8">
                Contact our team today to schedule reliable, safe transportation for your pet's next appointment or journey.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/contact" class="bg-brand-red hover:bg-red-700 text-white px-6 py-3 rounded-md transition duration-300 inline-flex items-center">
                    <span class="mr-2">BOOK NOW</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="/services" class="bg-white hover:bg-gray-100 text-dark-blue px-6 py-3 rounded-md transition duration-300 inline-flex items-center">
                    <span class="mr-2">VIEW ALL SERVICES</span>
                    <i class="fas fa-paw"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
