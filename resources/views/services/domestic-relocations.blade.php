@extends('layouts.app')

@section('title', 'Domestic Pet Relocations Services - Pets Travel International')

@section('content')
    <!-- Hero Banner Section -->
    <section class="relative min-h-[400px] flex items-end bg-cover bg-center" style="background-image: url('https://airpetsinternational.com/wp-content/uploads/2020/01/austin.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="container mx-auto px-4 py-10 relative z-10">
            <div class="text-white max-w-2xl">
                <h1 class="text-4xl md:text-5xl font-pathway-gothic mb-2">Domestic Pet Relocations Services</h1>
                <h4 class="text-xl md:text-2xl font-pathway-gothic">Safe and Stress-Free Pet Transportation Across the United States</h4>
            </div>
        </div>
    </section>

    <!-- Service Overview Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto mb-10">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Domestic Pet Relocation Services</h2>
                
                <p class="text-gray-700 mb-6">
                    At Pets Travel International, we understand that moving your pet within the United States requires careful planning and attention to detail. Our comprehensive domestic pet relocation services are designed to make your pet's journey as comfortable and stress-free as possible, whether you're moving across town or across the country.
                </p>

                <p class="text-gray-700 mb-6">
                    Our team of experienced pet transportation specialists will work with you to create a customized relocation plan that meets your pet's specific needs and your schedule requirements. We handle all aspects of domestic pet transportation, from initial consultation to final delivery, ensuring a seamless experience for both you and your furry family member.
                </p>
                
                <div class="mb-10">
                    <img src="https://airpetsinternational.com/wp-content/uploads/2020/01/austin.jpg" alt="Domestic pet relocations" class="rounded-lg w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Included Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Our Domestic Relocation Services Include</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-10">
                    <!-- Service 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-route text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Door-to-Door Transportation</h3>
                        <p class="text-gray-700">
                            We provide complete door-to-door service, picking up your pet from your current home and delivering them safely to your new residence, eliminating the stress of transportation logistics.
                        </p>
                    </div>

                    <!-- Service 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-plane text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Air Transportation</h3>
                        <p class="text-gray-700">
                            For longer distances, we arrange and coordinate air transportation with pet-friendly airlines, ensuring your pet travels on the most direct and comfortable route possible.
                        </p>
                    </div>

                    <!-- Service 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-car text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Ground Transportation</h3>
                        <p class="text-gray-700">
                            Our climate-controlled pet transport vehicles provide safe and comfortable ground transportation for shorter distances or for pets that may not be suitable for air travel.
                        </p>
                    </div>

                    <!-- Service 4 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-box text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Travel Crate Provision</h3>
                        <p class="text-gray-700">
                            We provide airline-approved travel crates sized specifically for your pet, ensuring their comfort and safety throughout the journey.
                        </p>
                    </div>

                    <!-- Service 5 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-user-nurse text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Pet Nanny Services</h3>
                        <p class="text-gray-700">
                            For pets requiring extra attention, our professional pet nannies can accompany your pet throughout their journey, providing constant care and updates.
                        </p>
                    </div>

                    <!-- Service 6 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-clipboard-check text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Veterinary Coordination</h3>
                        <p class="text-gray-700">
                            We coordinate with veterinarians to ensure your pet meets all health requirements for travel, including necessary vaccinations and health certificates.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Our Domestic Relocation Process</h2>
                
                <div class="space-y-6 mb-10">
                    <!-- Step 1 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">1</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Initial Consultation</h3>
                            <p class="text-gray-700">
                                We begin with a detailed consultation to understand your pet's needs, your timeline, and any special requirements for the move.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">2</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Customized Travel Plan</h3>
                            <p class="text-gray-700">
                                Our team creates a detailed travel plan tailored to your pet's specific needs, including transportation method, timing, and any special accommodations.
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
                                We help you prepare your pet for travel, including guidance on health certificates, vaccinations, and acclimating your pet to their travel crate.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">4</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Pick-Up and Transportation</h3>
                            <p class="text-gray-700">
                                On the day of travel, we pick up your pet from your specified location and begin the transportation process according to the agreed plan.
                            </p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">5</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Regular Updates</h3>
                            <p class="text-gray-700">
                                Throughout the journey, we provide regular updates on your pet's status and location, giving you peace of mind.
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
                                We deliver your pet safely to your new home, ensuring they are comfortable and settled before we leave.
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
                        "I was extremely nervous about moving my senior cat across the country, but the team at Pets Travel International made the process so smooth. They were professional, caring, and kept me updated throughout the entire journey. My cat arrived happy and relaxed, which was a huge relief. I can't thank them enough!"
                    </div>
                    <div class="font-bold text-right">- Sarah T., California to New York</div>
                </div>
                
                <div>
                    <div class="italic text-gray-700 mb-4">
                        "When we had to relocate for work, our biggest concern was how to transport our two large dogs. Pets Travel International provided an amazing ground transportation service that allowed our dogs to travel comfortably together. The drivers were clearly animal lovers and took great care of our pets. Highly recommended!"
                    </div>
                    <div class="font-bold text-right">- Michael and Jennifer R., Texas to Colorado</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-dark-blue py-12 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6">Ready to Plan Your Pet's Domestic Relocation?</h2>
            <p class="max-w-2xl mx-auto mb-8">
                Contact our team today to discuss your pet's transportation needs and receive a customized quote for our domestic pet relocation services.
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
