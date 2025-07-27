@extends('layouts.app')

@section('title', 'Services - Pets Travel International | First-Class Pet Services')

@section('content')
    <section class="bg-dark-blue py-16 sm:py-20 text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl lg:text-5xl font-pathway-gothic font-bold uppercase mb-4">Our Pet Moving Services</h1>
            <p class="font-open-sans max-w-2xl mx-auto mb-12">Our pet relocation services can move your pet to any location globally, and take care of every door-to-door detail.</p>
        </div>
    </section>

    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <a href="/domestic-relocations-services/" class="group block bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1541897035838-55596957ce53?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fHBldCUyMHRyYXZlbCUyMHZhbnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60" alt="Domestic pet relocations services" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-pathway-gothic font-bold uppercase mb-2 text-brand-red">DOMESTIC RELOCATIONS SERVICES</h3>
                        <p class="text-gray-600 mb-4">We offer door-to-door pet transportation services throughout the United States. Whether you're moving across town or across the country, we can help make your pet's journey safe and stress-free.</p>
                        <div class="flex items-center text-brand-red font-bold">
                            <span>Learn More</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </a>

                <a href="/international-relocation-services/" class="group block bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1534447677768-be436bb09401?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHBldCUyMGFpcnBvcnR8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60" alt="International relocation services" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-pathway-gothic font-bold uppercase mb-2 text-brand-red">INTERNATIONAL RELOCATION SERVICES</h3>
                        <p class="text-gray-600 mb-4">Moving your pet internationally requires careful planning and expertise. Our team handles all the complex logistics, paperwork, and compliance requirements to ensure your pet arrives safely at your international destination.</p>
                        <div class="flex items-center text-brand-red font-bold">
                            <span>Learn More</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </a>

                <a href="/pet-taxi-services/" class="group block bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1550621309-5c1034111afe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8ZG9nJTIwaW4lMjBjYXJ8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60" alt="Pet taxi services" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-pathway-gothic font-bold uppercase mb-2 text-brand-red">PET TAXI SERVICES</h3>
                        <p class="text-gray-600 mb-4">Need to transport your pet locally? Our pet taxi service provides safe and reliable transportation for your pet to veterinary appointments, grooming sessions, boarding facilities, or anywhere else they need to go.</p>
                        <div class="flex items-center text-brand-red font-bold">
                            <span>Learn More</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </a>

                <a href="/pet-nanny-services/" class="group block bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1541364983171-a8ba01e95cfc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHBldCUyMHNpdHRlcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60" alt="Pet nanny services" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-pathway-gothic font-bold uppercase mb-2 text-brand-red">PET NANNY SERVICES</h3>
                        <p class="text-gray-600 mb-4">Our professional pet nannies provide personalized care for your pet during travel, ensuring they remain comfortable and stress-free throughout their journey.</p>
                        <div class="flex items-center text-brand-red font-bold">
                            <span>Learn More</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </a>
                
                <a href="/cat-dog-crates/" class="group block bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1612536057832-2ff7ead58194?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGV0JTIwY3JhdGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60" alt="Cat and dog crates" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-pathway-gothic font-bold uppercase mb-2 text-brand-red">CAT & DOG CRATES</h3>
                        <p class="text-gray-600 mb-4">We provide airline-approved travel crates sized specifically for your pet, ensuring their comfort and safety throughout the journey.</p>
                        <div class="flex items-center text-brand-red font-bold">
                            <span>Learn More</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </a>
                
                <a href="/departure-destination-services/" class="group block bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1626397573687-1c4a4c2c2503?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZG9nJTIwYWlycG9ydHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60" alt="Departure and destination services" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-pathway-gothic font-bold uppercase mb-2 text-brand-red">DEPARTURE & DESTINATION SERVICES</h3>
                        <p class="text-gray-600 mb-4">We handle all the logistics at both departure and arrival points, including airport check-in, customs clearance, and delivery to your final destination.</p>
                        <div class="flex items-center text-brand-red font-bold">
                            <span>Learn More</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </a>
                
                <a href="/pet-ground-transportation/" class="group block bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1565801484074-7cac9d36c036?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8ZG9nJTIwdHJ1Y2t8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60" alt="Pet ground transportation" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-pathway-gothic font-bold uppercase mb-2 text-brand-red">PET GROUND TRANSPORTATION</h3>
                        <p class="text-gray-600 mb-4">Our specialized ground transportation services ensure your pet travels safely and comfortably by road when air travel isn't the best option.</p>
                        <div class="flex items-center text-brand-red font-bold">
                            <span>Learn More</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="py-16 sm:py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl lg:text-5xl text-dark-blue font-pathway-gothic font-bold uppercase mb-4">Additional Pet Services</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Beyond our core relocation services, we offer a range of specialized solutions to meet all your pet transportation needs.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="text-brand-red mb-4">
                        <i class="fas fa-clipboard-list text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-pathway-gothic font-bold uppercase mb-2 text-dark-blue">Import & Export Documentation</h3>
                    <p class="text-gray-600">We handle all the complex paperwork required for international pet travel, including health certificates, import permits, and customs documentation.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="text-brand-red mb-4">
                        <i class="fas fa-home text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-pathway-gothic font-bold uppercase mb-2 text-dark-blue">Pet-Friendly Housing Assistance</h3>
                    <p class="text-gray-600">Need help finding pet-friendly accommodations at your destination? Our team can provide resources and assistance to ensure your pet has a welcoming home.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="text-brand-red mb-4">
                        <i class="fas fa-plane text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-pathway-gothic font-bold uppercase mb-2 text-dark-blue">Flight Booking & Coordination</h3>
                    <p class="text-gray-600">We coordinate with airlines to secure the safest and most direct routes for your pet, handling all booking details and special arrangements.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="text-brand-red mb-4">
                        <i class="fas fa-box text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-pathway-gothic font-bold uppercase mb-2 text-dark-blue">Travel Crate Provision</h3>
                    <p class="text-gray-600">We provide airline-approved travel crates sized specifically for your pet, ensuring their comfort and safety throughout the journey.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="text-brand-red mb-4">
                        <i class="fas fa-stethoscope text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-pathway-gothic font-bold uppercase mb-2 text-dark-blue">Veterinary Coordination</h3>
                    <p class="text-gray-600">We work with veterinarians to ensure your pet meets all health requirements for travel, including vaccinations, microchipping, and health certificates.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="text-brand-red mb-4">
                        <i class="fas fa-paw text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-pathway-gothic font-bold uppercase mb-2 text-dark-blue">Pet Boarding</h3>
                    <p class="text-gray-600">If there's a gap between your departure and when your pet can travel, we can arrange comfortable boarding with trusted partners.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl lg:text-5xl text-dark-blue font-pathway-gothic font-bold uppercase mb-4">Why Choose Pets Travel International?</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">With over 30 years of experience in pet transportation, we provide professional and compassionate service for your beloved companions.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex items-start">
                    <div class="text-brand-red mr-4">
                        <i class="fas fa-check-circle text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2 text-dark-blue">Experienced Team</h3>
                        <p class="text-gray-600">Our team of pet relocation specialists has decades of combined experience moving pets worldwide.</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="text-brand-red mr-4">
                        <i class="fas fa-check-circle text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2 text-dark-blue">Door-to-Door Service</h3>
                        <p class="text-gray-600">We handle every aspect of your pet's journey from pickup at your current home to delivery at your new destination.</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="text-brand-red mr-4">
                        <i class="fas fa-check-circle text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2 text-dark-blue">Global Network</h3>
                        <p class="text-gray-600">Our extensive network of partners worldwide ensures smooth transitions no matter where you're moving.</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="text-brand-red mr-4">
                        <i class="fas fa-check-circle text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2 text-dark-blue">Personalized Care</h3>
                        <p class="text-gray-600">We understand that each pet is unique, and we tailor our services to meet their specific needs and temperament.</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="text-brand-red mr-4">
                        <i class="fas fa-check-circle text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2 text-dark-blue">Compliance Expertise</h3>
                        <p class="text-gray-600">We stay up-to-date with constantly changing regulations to ensure your pet meets all requirements for travel.</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="text-brand-red mr-4">
                        <i class="fas fa-check-circle text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2 text-dark-blue">Peace of Mind</h3>
                        <p class="text-gray-600">Regular updates throughout the journey keep you informed about your pet's status and well-being.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 sm:py-20" style="background-image: url('https://images.unsplash.com/photo-1444212477490-ca407925329e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGV0JTIwYmFja2dyb3VuZHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=1600&q=60'); background-size: cover; background-position: center;">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto bg-white bg-opacity-90 p-8 rounded-lg shadow-lg">
                <div class="text-center mb-8">
                    <h2 class="text-4xl lg:text-5xl text-dark-blue font-pathway-gothic font-bold uppercase mb-4">What Our Clients Say</h2>
                    <div class="flex justify-center">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400 mx-1"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400 mx-1"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                </div>
                
                <div class="italic text-center text-lg text-gray-700 mb-6">
                    "Pets Travel International made our international move with two cats completely stress-free. Their team handled everything from paperwork to flight arrangements, and kept us updated every step of the way. Our cats arrived safely and happy. I can't recommend their services enough!"
                </div>
                
                <div class="text-center">
                    <p class="font-bold text-dark-blue">Sarah T.</p>
                    <p class="text-sm text-gray-600">Moved from Texas to Germany</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-brand-red py-12">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-around items-center text-center md:text-left">
            <div class="mb-8 md:mb-0">
                <h3 class="text-white text-2xl font-pathway-gothic font-bold mb-4">Ready to Plan Your Pet's Journey?</h3>
                <p class="text-white mb-4">Contact us today for a personalized quote and consultation.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="/get-an-estimate/" class="bg-dark-blue text-white font-bold py-3 px-6 rounded-lg hover:bg-blue-800 transition duration-300 uppercase flex items-center justify-center">
                    <span>Get an Estimate</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <a href="/contact/" class="bg-white text-dark-blue font-bold py-3 px-6 rounded-lg hover:bg-gray-100 transition duration-300 uppercase flex items-center justify-center">
                    <span>Contact Us</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
