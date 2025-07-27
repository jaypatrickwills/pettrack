@extends('layouts.app')

@section('title', 'International Pet Relocation Services - Pets Travel International')

@section('content')
    <!-- Hero Banner Section -->
    <section class="relative min-h-[400px] flex items-end bg-cover bg-center" style="background-image: url('https://airpetsinternational.com/wp-content/uploads/2020/01/italy-1.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="container mx-auto px-4 py-10 relative z-10">
            <div class="text-white max-w-2xl">
                <h1 class="text-4xl md:text-5xl font-pathway-gothic mb-2">International Pet Relocation Services</h1>
                <h4 class="text-xl md:text-2xl font-pathway-gothic">Expert Global Pet Transportation to Destinations Worldwide</h4>
            </div>
        </div>
    </section>

    <!-- Service Overview Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto mb-10">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">International Pet Relocation Services</h2>
                
                <p class="text-gray-700 mb-6">
                    Moving your pet internationally requires specialized knowledge, careful planning, and attention to complex regulations. At Pets Travel International, we have over 30 years of experience in international pet transportation, making us experts in navigating the intricate requirements of global pet travel.
                </p>

                <p class="text-gray-700 mb-6">
                    Our comprehensive international pet relocation services are designed to handle every aspect of your pet's journey abroad, from documentation and compliance to comfortable transportation and safe arrival at your international destination.
                </p>
                
                <div class="mb-10">
                    <img src="https://airpetsinternational.com/wp-content/uploads/2020/01/italy-1.jpg" alt="International pet relocation" class="rounded-lg w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Included Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Our International Relocation Services Include</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-10">
                    <!-- Service 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-passport text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Import & Export Documentation</h3>
                        <p class="text-gray-700">
                            We handle all the complex paperwork required for international pet travel, including health certificates, import permits, and customs documentation specific to your destination country.
                        </p>
                    </div>

                    <!-- Service 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-plane-departure text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Flight Booking & Coordination</h3>
                        <p class="text-gray-700">
                            We coordinate with airlines to secure the safest and most direct routes for your pet, handling all booking details and special arrangements for international travel.
                        </p>
                    </div>

                    <!-- Service 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-stethoscope text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Veterinary Coordination</h3>
                        <p class="text-gray-700">
                            We work with veterinarians to ensure your pet meets all health requirements for international travel, including vaccinations, microchipping, and health certificates required by your destination country.
                        </p>
                    </div>

                    <!-- Service 4 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-box text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">IATA-Approved Travel Crates</h3>
                        <p class="text-gray-700">
                            We provide airline-approved travel crates sized specifically for your pet, ensuring their comfort and compliance with international air transport regulations.
                        </p>
                    </div>

                    <!-- Service 5 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-clipboard-list text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Customs Clearance</h3>
                        <p class="text-gray-700">
                            Our team handles all customs clearance procedures at both departure and arrival points, ensuring a smooth transition through international borders.
                        </p>
                    </div>

                    <!-- Service 6 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-home text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Door-to-Door Service</h3>
                        <p class="text-gray-700">
                            We provide complete door-to-door service across international borders, from pick-up at your current home to delivery at your new international residence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Country Requirements Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">International Pet Travel Requirements</h2>
                
                <p class="text-gray-700 mb-6">
                    Every country has specific requirements for importing pets. Our team stays up-to-date with the latest regulations for all major destinations worldwide. Here are some common requirements for international pet travel:
                </p>
                
                <div class="space-y-6 mb-10">
                    <!-- Requirement 1 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Microchipping</h3>
                        <p class="text-gray-700">
                            Most countries require pets to be identified with an ISO-standard microchip before travel. This must typically be done before vaccinations.
                        </p>
                    </div>

                    <!-- Requirement 2 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Rabies Vaccination</h3>
                        <p class="text-gray-700">
                            A current rabies vaccination is required for most international destinations, often with specific timing requirements relative to travel dates.
                        </p>
                    </div>

                    <!-- Requirement 3 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Blood Tests</h3>
                        <p class="text-gray-700">
                            Some countries require rabies titer tests to prove vaccination effectiveness, with waiting periods of up to several months after testing.
                        </p>
                    </div>

                    <!-- Requirement 4 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Health Certificates</h3>
                        <p class="text-gray-700">
                            Official health certificates endorsed by government veterinarians are typically required, often within a specific timeframe before travel.
                        </p>
                    </div>

                    <!-- Requirement 5 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Import Permits</h3>
                        <p class="text-gray-700">
                            Some countries require pre-approved import permits before your pet can enter the country.
                        </p>
                    </div>

                    <!-- Requirement 6 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Quarantine</h3>
                        <p class="text-gray-700">
                            Certain destinations have mandatory quarantine periods for incoming pets, which we can help arrange and make as comfortable as possible.
                        </p>
                    </div>
                </div>
                
                <p class="text-gray-700">
                    Our team will guide you through the specific requirements for your destination country, ensuring all documentation and procedures are completed correctly and on time.
                </p>
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
                        "Moving our two cats from the US to Germany seemed like an impossible task until we found Pets Travel International. They handled everything from the complex paperwork to the flight arrangements. Their knowledge of EU pet import requirements was impressive, and they kept us informed throughout the entire process. Our cats arrived safely and without any issues!"
                    </div>
                    <div class="font-bold text-right">- Thomas L., USA to Germany</div>
                </div>
                
                <div>
                    <div class="italic text-gray-700 mb-4">
                        "When my job required a move to Australia, I was worried about the strict quarantine requirements for my dog. Pets Travel International made the process so much easier than I expected. They arranged everything, including the quarantine stay, and provided regular updates and photos during that time. Their expertise in navigating Australia's pet import regulations was invaluable."
                    </div>
                    <div class="font-bold text-right">- Emma K., UK to Australia</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-dark-blue py-12 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6">Ready to Plan Your Pet's International Journey?</h2>
            <p class="max-w-2xl mx-auto mb-8">
                Contact our team today to discuss your pet's international transportation needs and receive a customized quote for our global pet relocation services.
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
