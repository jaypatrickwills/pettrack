@extends('layouts.app')

@section('title', 'Contact Us - Pets Travel International')

@section('content')
    <!-- Hero Banner Section -->
    <section class="relative min-h-[400px] flex items-end bg-cover bg-center" style="background-image: url('https://airpetsinternational.com/wp-content/uploads/2022/02/airpets-america-ban-1.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="container mx-auto px-4 py-10 relative z-10">
            <div class="text-white max-w-2xl">
                <h1 class="text-4xl md:text-5xl font-pathway-gothic mb-2">Contact Pets Travel International</h1>
                <h4 class="text-xl md:text-2xl font-pathway-gothic">We're Here to Help with All Your Pet Travel Needs</h4>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-2 gap-10">
                    <!-- Contact Details -->
                    <div>
                        <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red">Get In Touch</h2>
                        
                        <div class="mb-8">
                            <h3 class="text-2xl font-pathway-gothic mb-4">Contact Information</h3>
                            
                            <div class="flex items-start mb-4">
                                <div class="text-brand-red mr-4 mt-1">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Our Location</h4>
                                    <p class="text-gray-700">
                                        Global Reach
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start mb-4">
                                <div class="text-brand-red mr-4 mt-1">
                                    <i class="fas fa-phone text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Phone</h4>
                                    <p class="text-gray-700">
                                        <a href="tel:+16813588417" class="hover:text-brand-red">+1 (681) 358-8417</a>
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start mb-4">
                                <div class="text-brand-red mr-4 mt-1">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Email</h4>
                                    <p class="text-gray-700">
                                        <a href="mailto:info@petstravelinternational.com" class="hover:text-brand-red">info@petstravelinternational.com</a>
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="text-brand-red mr-4 mt-1">
                                    <i class="fas fa-clock text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Business Hours</h4>
                                    <p class="text-gray-700">
                                        Monday - Friday: 8:00 AM - 6:00 PM CST<br>
                                        Saturday: 9:00 AM - 2:00 PM CST<br>
                                        Sunday: Closed
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="text-2xl font-pathway-gothic mb-4">Connect With Us</h3>
                            <div class="flex space-x-4">
                                <a href="https://www.facebook.com/petstravelinternational" target="_blank" class="text-brand-red hover:text-red-700 text-2xl">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                                <a href="https://www.instagram.com/petstravelinternational" target="_blank" class="text-brand-red hover:text-red-700 text-2xl">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://twitter.com/petstravelintl" target="_blank" class="text-brand-red hover:text-red-700 text-2xl">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.linkedin.com/company/pets-travel-international" target="_blank" class="text-brand-red hover:text-red-700 text-2xl">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact Form -->
                    <div>
                        <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red">Send Us a Message</h2>
                        
                        <form action="#" method="POST" class="space-y-4">
                            <div>
                                <label for="name" class="block text-gray-700 font-bold mb-1">Name</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-red" required>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-gray-700 font-bold mb-1">Email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-red" required>
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-gray-700 font-bold mb-1">Phone</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-red">
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-gray-700 font-bold mb-1">Subject</label>
                                <select id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-red" required>
                                    <option value="">Select a subject</option>
                                    <option value="Pet Relocation">Pet Relocation</option>
                                    <option value="International Travel">International Travel</option>
                                    <option value="Domestic Travel">Domestic Travel</option>
                                    <option value="Quote Request">Quote Request</option>
                                    <option value="General Inquiry">General Inquiry</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-gray-700 font-bold mb-1">Message</label>
                                <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-red" required></textarea>
                            </div>
                            
                            <div>
                                <button type="submit" class="inline-flex items-center bg-brand-red text-white px-6 py-3 rounded-md hover:bg-red-700 transition">
                                    <span class="mr-2">SEND MESSAGE</span>
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Our Location</h2>
                
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <!-- Map Placeholder - In a real implementation, this would be replaced with an actual Google Maps embed -->
                    <div class="w-full h-96 bg-gray-200 flex items-center justify-center">
                        <p class="text-gray-600">
                            <i class="fas fa-map-marked-alt text-4xl mb-2 block text-center"></i>
                            Map would be embedded here
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Frequently Asked Questions</h2>
                
                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="border border-gray-200 rounded-md">
                        <button class="flex justify-between items-center w-full px-4 py-3 text-left font-bold" onclick="toggleFAQ(this)">
                            <span>What services does Pets Travel International offer?</span>
                            <i class="fas fa-chevron-down text-brand-red transition-transform"></i>
                        </button>
                        <div class="px-4 pb-4 hidden">
                            <p class="text-gray-700">
                                Pets Travel International offers comprehensive pet relocation services including domestic and international pet transport, door-to-door service, customs clearance, veterinary arrangements, travel crate provision, and more. Visit our <a href="/services" class="text-brand-red hover:underline">Services page</a> for detailed information.
                            </p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="border border-gray-200 rounded-md">
                        <button class="flex justify-between items-center w-full px-4 py-3 text-left font-bold" onclick="toggleFAQ(this)">
                            <span>How do I get a quote for pet transportation?</span>
                            <i class="fas fa-chevron-down text-brand-red transition-transform"></i>
                        </button>
                        <div class="px-4 pb-4 hidden">
                            <p class="text-gray-700">
                                You can request a quote by filling out our <a href="/get-an-estimate" class="text-brand-red hover:underline">Get An Estimate</a> form, calling us at +1 (888) 957-1101, or by sending an email to info@petstravelinternational.com with details about your pet and travel requirements.
                            </p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="border border-gray-200 rounded-md">
                        <button class="flex justify-between items-center w-full px-4 py-3 text-left font-bold" onclick="toggleFAQ(this)">
                            <span>What documentation is required for international pet travel?</span>
                            <i class="fas fa-chevron-down text-brand-red transition-transform"></i>
                        </button>
                        <div class="px-4 pb-4 hidden">
                            <p class="text-gray-700">
                                Documentation requirements vary by country but typically include health certificates, vaccination records, microchip information, and import permits. Our team will guide you through the specific requirements for your destination country and help ensure all paperwork is properly completed.
                            </p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 4 -->
                    <div class="border border-gray-200 rounded-md">
                        <button class="flex justify-between items-center w-full px-4 py-3 text-left font-bold" onclick="toggleFAQ(this)">
                            <span>How far in advance should I book pet transportation services?</span>
                            <i class="fas fa-chevron-down text-brand-red transition-transform"></i>
                        </button>
                        <div class="px-4 pb-4 hidden">
                            <p class="text-gray-700">
                                We recommend booking at least 2-3 months in advance for international travel and 2-4 weeks for domestic travel. Some destinations with strict entry requirements may need even more lead time. Contact us as soon as you know your travel dates for the best planning.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-8">
                    <a href="/get-an-estimate" class="inline-flex items-center bg-brand-red text-white px-6 py-3 rounded-md hover:bg-red-700 transition">
                        <span class="mr-2">GET AN ESTIMATE</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        // FAQ Toggle Functionality
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('.fas');
            
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.classList.add('transform', 'rotate-180');
            } else {
                content.classList.add('hidden');
                icon.classList.remove('transform', 'rotate-180');
            }
        }
    </script>
@endsection
