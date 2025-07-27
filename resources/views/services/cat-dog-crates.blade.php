@extends('layouts.app')

@section('title', 'Cat & Dog Crates - Pets Travel International')

@section('content')
    <!-- Hero Banner Section -->
    <section class="relative min-h-[400px] flex items-end bg-cover bg-center" style="background-image: url('https://airpetsinternational.com/wp-content/uploads/2020/01/pet-crate.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="container mx-auto px-4 py-10 relative z-10">
            <div class="text-white max-w-2xl">
                <h1 class="text-4xl md:text-5xl font-pathway-gothic mb-2">Cat & Dog Crates</h1>
                <h4 class="text-xl md:text-2xl font-pathway-gothic">Airline-Approved Travel Crates for Safe Pet Transportation</h4>
            </div>
        </div>
    </section>

    <!-- Service Overview Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto mb-10">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Travel Crates for Cats & Dogs</h2>
                
                <p class="text-gray-700 mb-6">
                    At Pets Travel International, we understand that a proper travel crate is essential for your pet's safety and comfort during transportation. We provide high-quality, airline-approved travel crates specifically sized for your pet, ensuring they meet all international and domestic travel regulations.
                </p>

                <p class="text-gray-700 mb-6">
                    Our travel crates are designed with your pet's comfort and security in mind, featuring proper ventilation, secure locking mechanisms, and durable construction to withstand the rigors of travel. Whether your pet is traveling by air, ground, or sea, our crates provide a safe and comfortable environment throughout their journey.
                </p>
                
                <div class="mb-10">
                    <img src="https://airpetsinternational.com/wp-content/uploads/2020/01/pet-crate.jpg" alt="Cat and dog travel crates" class="rounded-lg w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Crate Features Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Our Travel Crate Features</h2>
                
                <div class="grid md:grid-cols-3 gap-8 mb-10">
                    <!-- Feature 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-check-circle text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">IATA Approved</h3>
                        <p class="text-gray-700">
                            All our crates meet International Air Transport Association (IATA) standards for pet air travel.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-wind text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Proper Ventilation</h3>
                        <p class="text-gray-700">
                            Our crates feature adequate ventilation on all sides to ensure proper airflow for your pet.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-lock text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Secure Fastening</h3>
                        <p class="text-gray-700">
                            Metal bolts and secure locking mechanisms ensure your pet remains safely contained during transport.
                        </p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-shield-alt text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Durable Construction</h3>
                        <p class="text-gray-700">
                            Made from high-quality, impact-resistant materials designed to withstand the rigors of travel.
                        </p>
                    </div>

                    <!-- Feature 5 -->
                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-ruler text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Custom Sizing</h3>
                        <p class="text-gray-700">
                            We provide crates sized specifically for your pet, ensuring they have adequate room to stand, turn, and lie down comfortably.
                        </p>
                    </div>

                    <!-- Feature 6 -->
                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-water text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Water & Food Attachments</h3>
                        <p class="text-gray-700">
                            Our crates include secure attachments for water and food containers for longer journeys.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Crate Types Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Types of Travel Crates We Offer</h2>
                
                <div class="space-y-8 mb-10">
                    <!-- Crate Type 1 -->
                    <div class="flex flex-col md:flex-row gap-6 items-center">
                        <div class="md:w-1/3">
                            <img src="https://airpetsinternational.com/wp-content/uploads/2020/01/pet-crate.jpg" alt="Hard-sided pet crate" class="rounded-lg w-full">
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Hard-Sided Airline Crates</h3>
                            <p class="text-gray-700 mb-4">
                                Our most common option for air travel, these durable plastic crates with metal doors meet all airline requirements. They provide excellent protection and security for your pet during transportation.
                            </p>
                            <ul class="list-disc pl-5 text-gray-700">
                                <li>Available in multiple sizes to accommodate pets from 2 to 100+ pounds</li>
                                <li>Features include secure metal doors, ventilation on all sides, and interior absorbent padding</li>
                                <li>Compliant with most major airlines' pet transportation policies</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Crate Type 2 -->
                    <div class="flex flex-col md:flex-row gap-6 items-center">
                        <div class="md:w-1/3 md:order-2">
                            <img src="https://airpetsinternational.com/wp-content/uploads/2020/01/pet-crate-2.jpg" alt="Extra-large pet crate" class="rounded-lg w-full">
                        </div>
                        <div class="md:w-2/3 md:order-1">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Extra-Large Breed Crates</h3>
                            <p class="text-gray-700 mb-4">
                                Specially designed for large and giant breed dogs, these reinforced crates provide the space and strength needed for safe transportation of larger pets.
                            </p>
                            <ul class="list-disc pl-5 text-gray-700">
                                <li>Custom-sized for large breeds like Great Danes, Saint Bernards, and Newfoundlands</li>
                                <li>Reinforced construction with additional support for durability</li>
                                <li>Extra-secure locking mechanisms to ensure safety for stronger animals</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Crate Type 3 -->
                    <div class="flex flex-col md:flex-row gap-6 items-center">
                        <div class="md:w-1/3">
                            <img src="https://airpetsinternational.com/wp-content/uploads/2020/01/pet-crate-3.jpg" alt="Cat carrier" class="rounded-lg w-full">
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Specialized Cat Carriers</h3>
                            <p class="text-gray-700 mb-4">
                                Designed specifically for feline comfort and security, these carriers feature additional privacy options and stress-reducing design elements.
                            </p>
                            <ul class="list-disc pl-5 text-gray-700">
                                <li>Partially covered ventilation areas to provide a sense of security for anxious cats</li>
                                <li>Proper sizing to allow movement while maintaining a feeling of security</li>
                                <li>Special attachments for water and absorbent padding to ensure comfort</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Crate Selection Process Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Our Crate Selection Process</h2>
                
                <div class="space-y-6 mb-10">
                    <!-- Step 1 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">1</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Pet Measurement</h3>
                            <p class="text-gray-700">
                                We'll guide you through measuring your pet properly to ensure the correct crate size. This includes length, height, and width measurements while your pet is standing, sitting, and lying down.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">2</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Airline Requirement Review</h3>
                            <p class="text-gray-700">
                                We check the specific requirements of your chosen airline to ensure the crate meets all their specifications for pet transportation.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">3</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Crate Selection</h3>
                            <p class="text-gray-700">
                                Based on your pet's measurements and airline requirements, we select the appropriate crate type and size for your pet's journey.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">4</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Customization</h3>
                            <p class="text-gray-700">
                                We prepare the crate with appropriate bedding, absorbent materials, and secure water and food attachments as needed for your pet's journey.
                            </p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="flex items-start">
                        <div class="bg-brand-red text-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">5</span>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Acclimation Guidance</h3>
                            <p class="text-gray-700">
                                We provide guidance on how to acclimate your pet to their travel crate before the journey, helping reduce travel anxiety.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Crate Preparation Tips Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Preparing Your Pet's Travel Crate</h2>
                
                <p class="text-gray-700 mb-6 text-center">
                    Proper crate preparation is essential for your pet's comfort and safety during travel. Here are some tips to help you prepare your pet's crate for their journey:
                </p>
                
                <div class="grid md:grid-cols-2 gap-8 mb-10">
                    <!-- Tip 1 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Familiar Bedding</h3>
                        <p class="text-gray-700">
                            Place a piece of bedding or clothing with your scent in the crate to provide comfort and familiarity for your pet during travel.
                        </p>
                    </div>

                    <!-- Tip 2 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Absorbent Padding</h3>
                        <p class="text-gray-700">
                            Line the bottom of the crate with absorbent padding to keep your pet dry and comfortable throughout the journey.
                        </p>
                    </div>

                    <!-- Tip 3 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Secure Water Container</h3>
                        <p class="text-gray-700">
                            For longer journeys, attach a secure water container that won't spill during transportation.
                        </p>
                    </div>

                    <!-- Tip 4 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Proper Labeling</h3>
                        <p class="text-gray-700">
                            Ensure the crate is clearly labeled with your contact information and your pet's details, including any special care instructions.
                        </p>
                    </div>

                    <!-- Tip 5 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Check All Fasteners</h3>
                        <p class="text-gray-700">
                            Double-check that all bolts, nuts, and fasteners are securely tightened before travel to prevent any accidental openings.
                        </p>
                    </div>

                    <!-- Tip 6 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Acclimation Time</h3>
                        <p class="text-gray-700">
                            Allow your pet to spend time in their crate before travel, gradually increasing the duration to help them feel comfortable.
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
                        "I was concerned about finding the right crate for my Great Dane's international flight. Pets Travel International provided a custom-sized crate that was perfect for him. They even helped me acclimate him to the crate before travel, which made a huge difference in his comfort level during the journey."
                    </div>
                    <div class="font-bold text-right">- Robert K., Canada to Germany</div>
                </div>
                
                <div>
                    <div class="italic text-gray-700 mb-4">
                        "The specialized cat carrier provided by Pets Travel International was perfect for my anxious cat. The partial covering gave her a sense of security, and the proper sizing allowed her to move comfortably without feeling exposed. She arrived at our destination much calmer than I expected."
                    </div>
                    <div class="font-bold text-right">- Sophia L., USA to France</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-dark-blue py-12 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6">Need a Travel Crate for Your Pet?</h2>
            <p class="max-w-2xl mx-auto mb-8">
                Contact our team today to discuss your pet's crate requirements and ensure they have a safe and comfortable journey.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/contact" class="bg-brand-red hover:bg-red-700 text-white px-6 py-3 rounded-md transition duration-300 inline-flex items-center">
                    <span class="mr-2">CONTACT US</span>
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
