@extends('layouts.app')

@section('title', 'Departure & Destination Services - Pets Travel International')

@section('content')
    <!-- Hero Banner Section -->
    <section class="relative min-h-[400px] flex items-end bg-cover bg-center" style="background-image: url('https://airpetsinternational.com/wp-content/uploads/2020/01/departure-destination.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="container mx-auto px-4 py-10 relative z-10">
            <div class="text-white max-w-2xl">
                <h1 class="text-4xl md:text-5xl font-pathway-gothic mb-2">Departure & Destination Services</h1>
                <h4 class="text-xl md:text-2xl font-pathway-gothic">Comprehensive Support at Both Ends of Your Pet's Journey</h4>
            </div>
        </div>
    </section>

    <!-- Service Overview Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto mb-10">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Departure & Destination Services</h2>
                
                <p class="text-gray-700 mb-6">
                    At Pets Travel International, we understand that pet relocation involves critical logistics at both the departure and arrival points. Our comprehensive Departure & Destination Services ensure your pet's journey begins and ends smoothly, with professional support every step of the way.
                </p>

                <p class="text-gray-700 mb-6">
                    From pre-departure preparations to arrival assistance, our experienced team handles all the details to minimize stress for both you and your pet. We coordinate with airlines, customs officials, veterinarians, and other stakeholders to create a seamless travel experience from door to door.
                </p>
                
                <div class="mb-10">
                    <img src="https://airpetsinternational.com/wp-content/uploads/2020/01/departure-destination.jpg" alt="Departure and destination services" class="rounded-lg w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Departure Services Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Our Departure Services</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-10">
                    <!-- Service 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-clipboard-check text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Pre-Travel Veterinary Coordination</h3>
                        <p class="text-gray-700">
                            We coordinate with your veterinarian to ensure all required health checks, vaccinations, and documentation are completed according to destination country requirements.
                        </p>
                    </div>

                    <!-- Service 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-file-signature text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Export Documentation</h3>
                        <p class="text-gray-700">
                            We prepare and process all necessary export permits, health certificates, and other documentation required for your pet to leave the country of origin.
                        </p>
                    </div>

                    <!-- Service 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-box-open text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Crate Preparation</h3>
                        <p class="text-gray-700">
                            We provide airline-approved travel crates properly sized for your pet and prepare them with appropriate bedding, water attachments, and identification.
                        </p>
                    </div>

                    <!-- Service 4 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-plane-departure text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Airport Check-In Assistance</h3>
                        <p class="text-gray-700">
                            Our team handles the complex airport check-in process, ensuring your pet is properly checked in with the airline and all documentation is verified.
                        </p>
                    </div>

                    <!-- Service 5 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-shield-alt text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Customs Clearance</h3>
                        <p class="text-gray-700">
                            We handle all customs formalities at the departure point, ensuring compliance with export regulations and procedures.
                        </p>
                    </div>

                    <!-- Service 6 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-home text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Home Pick-Up</h3>
                        <p class="text-gray-700">
                            We offer door-to-airport transportation for your pet, minimizing stress and ensuring timely arrival at the departure airport.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Destination Services Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Our Destination Services</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-10">
                    <!-- Service 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-plane-arrival text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Airport Arrival Assistance</h3>
                        <p class="text-gray-700">
                            Our representatives meet your pet at the arrival airport, ensuring they are properly received and processed through the arrival procedures.
                        </p>
                    </div>

                    <!-- Service 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-file-import text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Import Documentation</h3>
                        <p class="text-gray-700">
                            We handle all import documentation and ensure compliance with the destination country's pet import regulations.
                        </p>
                    </div>

                    <!-- Service 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-passport text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Customs Clearance</h3>
                        <p class="text-gray-700">
                            We navigate the often complex customs clearance process at the destination, handling all required inspections and paperwork.
                        </p>
                    </div>

                    <!-- Service 4 -->
                    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-clinic-medical text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Veterinary Inspection Coordination</h3>
                        <p class="text-gray-700">
                            We coordinate any required veterinary inspections upon arrival and ensure all health requirements are met.
                        </p>
                    </div>

                    <!-- Service 5 -->
                    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-hotel text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Quarantine Arrangements</h3>
                        <p class="text-gray-700">
                            If quarantine is required, we arrange for comfortable, reputable facilities and regular updates during your pet's stay.
                        </p>
                    </div>

                    <!-- Service 6 -->
                    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-truck text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Final Delivery</h3>
                        <p class="text-gray-700">
                            We provide transportation from the airport to your new home, ensuring your pet arrives safely at their final destination.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Our Door-to-Door Process</h2>
                
                <div class="space-y-6 mb-10">
                    <!-- Step 1 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">1</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Initial Consultation</h3>
                            <p class="text-gray-700">
                                We begin with a detailed consultation to understand your pet's specific needs and your relocation timeline. We'll explain the requirements for both departure and destination countries.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">2</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Customized Relocation Plan</h3>
                            <p class="text-gray-700">
                                We create a detailed plan covering all aspects of your pet's journey, including departure preparations, travel arrangements, and destination services.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">3</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Pre-Departure Preparations</h3>
                            <p class="text-gray-700">
                                We coordinate veterinary visits, documentation, crate preparation, and all other departure requirements according to the timeline.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">4</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Departure Day</h3>
                            <p class="text-gray-700">
                                Our team handles the pick-up, airport check-in, and all departure procedures, keeping you updated throughout the process.
                            </p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">5</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">In-Transit Updates</h3>
                            <p class="text-gray-700">
                                We provide regular updates on your pet's journey, coordinating with airline staff and our destination partners.
                            </p>
                        </div>
                    </div>

                    <!-- Step 6 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">6</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Arrival Processing</h3>
                            <p class="text-gray-700">
                                Our destination team handles all arrival procedures, including customs clearance, veterinary inspections, and any required quarantine arrangements.
                            </p>
                        </div>
                    </div>

                    <!-- Step 7 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">7</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Final Delivery</h3>
                            <p class="text-gray-700">
                                We deliver your pet to your new home, providing any necessary settling-in advice and local veterinary recommendations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Benefits of Our Departure & Destination Services</h2>
                
                <div class="grid md:grid-cols-3 gap-8 mb-10">
                    <!-- Benefit 1 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-check-circle text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Stress Reduction</h3>
                        <p class="text-gray-700">
                            Our comprehensive services minimize stress for both you and your pet throughout the relocation process.
                        </p>
                    </div>

                    <!-- Benefit 2 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-clock text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Time Saving</h3>
                        <p class="text-gray-700">
                            We handle the time-consuming logistics and paperwork, allowing you to focus on other aspects of your move.
                        </p>
                    </div>

                    <!-- Benefit 3 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-shield-alt text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Compliance Assurance</h3>
                        <p class="text-gray-700">
                            Our expertise ensures all regulatory requirements are met, avoiding delays or complications.
                        </p>
                    </div>

                    <!-- Benefit 4 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-globe-americas text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Global Network</h3>
                        <p class="text-gray-700">
                            Our established network of partners worldwide ensures seamless service at both ends of your pet's journey.
                        </p>
                    </div>

                    <!-- Benefit 5 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-hand-holding-heart text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Pet Comfort</h3>
                        <p class="text-gray-700">
                            Our pet-centered approach prioritizes your pet's comfort and well-being throughout the entire process.
                        </p>
                    </div>

                    <!-- Benefit 6 -->
                    <div class="text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-comments text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Constant Communication</h3>
                        <p class="text-gray-700">
                            We provide regular updates and are available to answer questions throughout your pet's journey.
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
                        "Moving from the US to Singapore with our two cats seemed overwhelming until we found Pets Travel International. Their departure and destination services were flawless. They handled everything from veterinary requirements to customs clearance, and even delivered our cats to our new apartment. The regular updates throughout the journey gave us such peace of mind."
                    </div>
                    <div class="font-bold text-right">- Michael and Jennifer T., USA to Singapore</div>
                </div>
                
                <div>
                    <div class="italic text-gray-700 mb-4">
                        "The quarantine requirements for bringing our dog to Australia were complex, but Pets Travel International made the process so much easier. Their team coordinated everything at both ends, and their representative in Sydney visited our dog regularly during his quarantine stay, sending us photos and updates. We couldn't have managed this move without their expertise."
                    </div>
                    <div class="font-bold text-right">- Emma L., UK to Australia</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-dark-blue py-12 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6">Ready to Plan Your Pet's Journey?</h2>
            <p class="max-w-2xl mx-auto mb-8">
                Contact our team today to discuss your pet's relocation needs and learn how our departure and destination services can ensure a smooth journey.
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
