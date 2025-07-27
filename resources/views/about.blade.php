@extends('layouts.app')

@section('title', 'About Us - Pets Travel International')

@section('content')
    <!-- Hero Banner Section -->
    <section class="relative min-h-[400px] flex items-end bg-cover bg-center" style="background-image: url('https://airpetsinternational.com/wp-content/uploads/2022/02/airpets-america-ban-1.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="container mx-auto px-4 py-10 relative z-10">
            <div class="text-white max-w-2xl">
                <h1 class="text-4xl md:text-5xl font-pathway-gothic mb-2">About Pets Travel International</h1>
                <h4 class="text-xl md:text-2xl font-pathway-gothic">We Keep Your Pets Safe and Sound, Both in the Air and on the Ground</h4>
            </div>
        </div>
    </section>

    <!-- Why Travel With Us Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto mb-10 text-center">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-4 text-brand-red">Why Travel With Us?</h2>
                <p class="text-gray-700">
                    At Pets Travel International, we take the stress and difficulty out of relocating your pets so you can travel with peace of mind. 
                    Whether we transport your pets in the air or on the ground, we promise they will arrive at their destination just as happy and healthy as ever before.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 mb-10">
                <!-- Feature 1 -->
                <div class="text-center">
                    <div class="mb-4">
                        <img src="https://airpetsinternational.com/wp-content/uploads/elementor/thumbs/we-are-pet-parents-1-qs89jevso6u1zlclptqag8cymokm9s3lf059kyhak8.jpg" alt="We are pet parents" class="mx-auto rounded-lg">
                    </div>
                    <h3 class="text-2xl font-pathway-gothic mb-2">We're Pet Parents Ourselves</h3>
                    <p class="text-gray-700">
                        We are proud pet parents ourselves, and we are committed to taking care of your pets with the same level of love and care that we give our own.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center">
                    <div class="mb-4">
                        <img src="https://airpetsinternational.com/wp-content/uploads/elementor/thumbs/pexels-pixabay-247522-scaled-qs84bpi1w7vpiw02s6tc13k83nqw5px99y7miqsj3s.jpg" alt="Pet relocation" class="mx-auto rounded-lg">
                    </div>
                    <h3 class="text-2xl font-pathway-gothic mb-2">We Offer Customizable Pet Shipping Services</h3>
                    <p class="text-gray-700">
                        Our <a href="/services" class="text-brand-red hover:underline">pet relocation services</a> are customizable for pets of all breeds, sizes, and desired destinations. We work with your unique pet relocation requirements every step of the way.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-8 mb-10">
                <!-- Feature 3 -->
                <div class="text-center">
                    <div class="mb-4">
                        <img src="https://airpetsinternational.com/wp-content/uploads/elementor/thumbs/pet-experts-1-qk71onyc6t9vba44nwgs5gflrhwjqhw46umapxu3eg.jpg" alt="Pet Experts" class="mx-auto rounded-lg">
                    </div>
                    <h3 class="text-2xl font-pathway-gothic mb-2">We're Skilled and Experienced</h3>
                    <p class="text-gray-700">
                        We have over 40 years of animal care experience combined with 30+ years of pet shipping proficiency, so you could say we know a thing or two about pets. We are also airline and governmental regulation experts that keep up with country-specific rules and requirements, so you don't have to.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="text-center">
                    <div class="mb-4">
                        <img src="https://airpetsinternational.com/wp-content/uploads/elementor/thumbs/pet-travel-destination-services-1-qk71onyc6t9vba44nwgs5gflrhwjqhw46umapxu3eg.jpg" alt="Pet Traveling to Destination" class="mx-auto rounded-lg">
                    </div>
                    <h3 class="text-2xl font-pathway-gothic mb-2">We Have Strong Relationships<br>With Every Major Airline</h3>
                    <p class="text-gray-700">
                        After many years in the business, Pets Travel International has developed strong relationships with every major airline to serve virtually every country. We are the pet travel company that airlines turn to when they need relocation assistance.
                    </p>
                </div>
            </div>

            <div class="text-center">
                <a href="/get-an-estimate" class="inline-flex items-center bg-brand-red text-white px-6 py-3 rounded-md hover:bg-red-700 transition">
                    <span class="mr-2">GET AN ESTIMATE</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Qualifications Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto mb-10">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Qualifications</h2>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Qualification 1 -->
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="https://airpetsinternational.com/wp-content/uploads/2021/05/ipata-celebrating-40-years-1.png" alt="IPATA Celebrating 40 years" class="mx-auto h-40">
                        </div>
                        <h4 class="text-xl font-pathway-gothic mb-2">International Pet &amp; Animal Transportation Association Member</h4>
                    </div>

                    <!-- Qualification 2 -->
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="https://airpetsinternational.com/wp-content/uploads/2021/05/usda-1.png" alt="USDA" class="mx-auto h-40">
                        </div>
                        <h4 class="text-xl font-pathway-gothic mb-2">International Boarding &amp; Pet Services Association Member</h4>
                    </div>

                    <!-- Qualification 3 -->
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="https://airpetsinternational.com/wp-content/uploads/2021/05/ibpsa-1.png" alt="IBPSA International Boarding Pet Services Association" class="mx-auto h-40">
                        </div>
                        <h4 class="text-xl font-pathway-gothic mb-2">USDA Registered</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto mb-10">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Meet Our Team</h2>
                
                <!-- First Row -->
                <div class="grid md:grid-cols-4 gap-6 mb-8">
                    <!-- Team Member 1 -->
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="mb-4">
                            <img src="https://airpetsinternational.com/wp-content/uploads/elementor/thumbs/Stacey-768x1024-1-qs84718wp0qnkgnlnz9bm0odvvx61t34vhc1jotp54.jpg" alt="Stacey" class="mx-auto rounded-lg">
                        </div>
                        <h3 class="text-xl font-pathway-gothic mb-1 text-center">STACEY</h3>
                        <p class="text-gray-700 font-bold text-center mb-3">FOUNDER & CEO</p>
                        <div class="text-sm text-gray-700 h-24 overflow-hidden relative">
                            <p><strong>Where are you from?</strong> Born in Winchester England and relocated to Dallas Texas in December 1989.</p>
                            <div class="absolute bottom-0 left-0 right-0 h-12 bg-gradient-to-t from-gray-50"></div>
                        </div>
                        <button class="text-brand-red hover:underline text-sm mt-2 mx-auto block">Show More</button>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="mb-4">
                            <img src="https://airpetsinternational.com/wp-content/uploads/elementor/thumbs/John-768x1024-1-qs84718wp0qnkgnlnz9bm0odvvx61t34vhc1jotp54.jpg" alt="John" class="mx-auto rounded-lg">
                        </div>
                        <h3 class="text-xl font-pathway-gothic mb-1 text-center">JOHN</h3>
                        <p class="text-gray-700 font-bold text-center mb-3">FLEX-DRIVER</p>
                        <div class="text-sm text-gray-700 h-24 overflow-hidden relative">
                            <p><strong>Where are you from?</strong> Nebraska.</p>
                            <div class="absolute bottom-0 left-0 right-0 h-12 bg-gradient-to-t from-gray-50"></div>
                        </div>
                        <button class="text-brand-red hover:underline text-sm mt-2 mx-auto block">Show More</button>
                    </div>

                    <!-- Team Member 3 -->
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="mb-4">
                            <img src="https://airpetsinternational.com/wp-content/uploads/elementor/thumbs/Rebecca-r7eg6x3h4cwzndljbkmm2lnf320rmi3xr4quo762dk.png" alt="Rebecca" class="mx-auto rounded-lg">
                        </div>
                        <h3 class="text-xl font-pathway-gothic mb-1 text-center">REBECCA</h3>
                        <p class="text-gray-700 font-bold text-center mb-3">PET RELOCATION SPECIALIST</p>
                        <div class="text-sm text-gray-700 h-24 overflow-hidden relative">
                            <p><strong>Where are you from?</strong> Fort Worth, Texas.</p>
                            <div class="absolute bottom-0 left-0 right-0 h-12 bg-gradient-to-t from-gray-50"></div>
                        </div>
                        <button class="text-brand-red hover:underline text-sm mt-2 mx-auto block">Show More</button>
                    </div>

                    <!-- Team Member 4 -->
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="mb-4">
                            <img src="https://airpetsinternational.com/wp-content/uploads/elementor/thumbs/IMG_6742-scaled-r5pksvqcroegsvs2qf4fzq72gqz5q54l1p44u47pfs.jpg" alt="Rachel" class="mx-auto rounded-lg">
                        </div>
                        <h3 class="text-xl font-pathway-gothic mb-1 text-center">RACHEL</h3>
                        <p class="text-gray-700 font-bold text-center mb-3">PET TRAVEL CONSULTANT</p>
                        <div class="text-sm text-gray-700 h-24 overflow-hidden relative">
                            <p><strong>Where are you from?</strong> A far, far away land, on the other side of the seven seas. They call it the Land Downunda</p>
                            <div class="absolute bottom-0 left-0 right-0 h-12 bg-gradient-to-t from-gray-50"></div>
                        </div>
                        <button class="text-brand-red hover:underline text-sm mt-2 mx-auto block">Show More</button>
                    </div>
                </div>

                <!-- Second Row -->
                <div class="grid md:grid-cols-4 gap-6">
                    <!-- Team Member 5 -->
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="mb-4">
                            <img src="https://airpetsinternational.com/wp-content/uploads/elementor/thumbs/IMG_6698-scaled-r5pl18ipinu803n5y1525makk1sm5aaov1vientq4o.jpg" alt="Rochelle" class="mx-auto rounded-lg">
                        </div>
                        <h3 class="text-xl font-pathway-gothic mb-1 text-center">ROCHELLE</h3>
                        <p class="text-gray-700 font-bold text-center mb-3">PET RELOCATION SPECIALIST</p>
                        <div class="text-sm text-gray-700 h-24 overflow-hidden relative">
                            <p><strong>Where are you from?</strong> South Africa</p>
                            <div class="absolute bottom-0 left-0 right-0 h-12 bg-gradient-to-t from-gray-50"></div>
                        </div>
                        <button class="text-brand-red hover:underline text-sm mt-2 mx-auto block">Show More</button>
                    </div>

                    <!-- Team Member 6 -->
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="mb-4">
                            <img src="https://airpetsinternational.com/wp-content/uploads/elementor/thumbs/API-employees-june-r7egrwtpr5nixv3sqnanray0oujvj5g4n198io1jew.png" alt="Pat" class="mx-auto rounded-lg">
                        </div>
                        <h3 class="text-xl font-pathway-gothic mb-1 text-center">PAT</h3>
                        <p class="text-gray-700 font-bold text-center mb-3">FLEX DRIVER</p>
                        <div class="text-sm text-gray-700 h-24 overflow-hidden relative">
                            <p><strong>Where are you from?</strong> Choteau Montana</p>
                            <div class="absolute bottom-0 left-0 right-0 h-12 bg-gradient-to-t from-gray-50"></div>
                        </div>
                        <button class="text-brand-red hover:underline text-sm mt-2 mx-auto block">Show More</button>
                    </div>
                </div>
                
                <div class="text-center mt-8">
                    <button class="inline-flex items-center bg-brand-red text-white px-6 py-3 rounded-md hover:bg-red-700 transition">
                        Load More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-4 text-brand-red text-center">Happy Travelers</h2>
                <p class="text-gray-700 text-center mb-10">
                    Don't just take our word for it, checkout what all of these happy travelers have to say about their pet flights with Pets Travel International.
                </p>
                
                <!-- Testimonials Widget Placeholder -->
                <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Testimonial 1 -->
                        <div class="border-l-4 border-brand-red pl-4">
                            <p class="italic text-gray-600 mb-3">"Pets Travel International made the process of relocating our two cats from the US to the UK so much easier than we expected. Their team was professional, caring, and kept us updated throughout the entire journey."</p>
                            <p class="font-bold">- Sarah M.</p>
                        </div>
                        
                        <!-- Testimonial 2 -->
                        <div class="border-l-4 border-brand-red pl-4">
                            <p class="italic text-gray-600 mb-3">"I was so nervous about flying my dog internationally, but the team at AirPets took care of everything. They handled all the paperwork, arranged the perfect crate, and made sure my pup arrived safely. Worth every penny!"</p>
                            <p class="font-bold">- James T.</p>
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <a href="/get-an-estimate" class="inline-flex items-center bg-brand-red text-white px-6 py-3 rounded-md hover:bg-red-700 transition">
                        <span class="mr-2">GET STARTED</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Simple show/hide functionality for team member bios
        document.addEventListener('DOMContentLoaded', function() {
            const showMoreButtons = document.querySelectorAll('button.text-brand-red');
            
            showMoreButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const bioDiv = this.previousElementSibling;
                    
                    if (bioDiv.classList.contains('h-24')) {
                        // Show full bio
                        bioDiv.classList.remove('h-24');
                        bioDiv.querySelector('.absolute').classList.add('hidden');
                        this.textContent = 'Show Less';
                    } else {
                        // Hide bio
                        bioDiv.classList.add('h-24');
                        bioDiv.querySelector('.absolute').classList.remove('hidden');
                        this.textContent = 'Show More';
                    }
                });
            });
        });
    </script>
@endsection
