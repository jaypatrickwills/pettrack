@extends('layouts.app')

@section('title', 'Pet Nanny Services - Pets Travel International')

@section('content')
    <!-- Hero Banner Section -->
    <section class="relative min-h-[400px] flex items-end bg-cover bg-center" style="background-image: url('https://airpetsinternational.com/wp-content/uploads/2020/01/pet-nanny.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="container mx-auto px-4 py-10 relative z-10">
            <div class="text-white max-w-2xl">
                <h1 class="text-4xl md:text-5xl font-pathway-gothic mb-2">Pet Nanny Services</h1>
                <h4 class="text-xl md:text-2xl font-pathway-gothic">Professional Companions for Your Pet's Journey</h4>
            </div>
        </div>
    </section>

    <!-- Service Overview Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto mb-10">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Pet Nanny Services</h2>
                
                <p class="text-gray-700 mb-6">
                    At Pets Travel International, we understand that some pets require special attention during travel. Our professional Pet Nanny service provides dedicated, one-on-one care for your pet throughout their journey, ensuring they receive personalized attention, comfort, and supervision every step of the way.
                </p>

                <p class="text-gray-700 mb-6">
                    Our Pet Nannies are experienced animal care professionals who are passionate about pets and trained to handle a variety of situations that may arise during travel. They focus exclusively on your pet's well-being, providing companionship, administering medications if needed, and ensuring your pet remains calm and comfortable throughout their journey.
                </p>
                
                <div class="mb-10">
                    <img src="https://airpetsinternational.com/wp-content/uploads/2020/01/pet-nanny.jpg" alt="Pet nanny services" class="rounded-lg w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Included Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">What Our Pet Nannies Provide</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-10">
                    <!-- Service 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-hand-holding-heart text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Constant Companionship</h3>
                        <p class="text-gray-700">
                            Your pet will never be alone during their journey. Our nannies provide continuous companionship, reducing anxiety and stress for your pet.
                        </p>
                    </div>

                    <!-- Service 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-pills text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Medication Administration</h3>
                        <p class="text-gray-700">
                            If your pet requires medication during travel, our nannies are trained to administer it according to your veterinarian's instructions.
                        </p>
                    </div>

                    <!-- Service 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-water text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Hydration & Feeding</h3>
                        <p class="text-gray-700">
                            Our nannies ensure your pet stays properly hydrated and fed throughout their journey, following your specified feeding schedule.
                        </p>
                    </div>

                    <!-- Service 4 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-walking text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Exercise & Comfort Breaks</h3>
                        <p class="text-gray-700">
                            During long journeys, our nannies provide appropriate exercise and comfort breaks to keep your pet comfortable and relaxed.
                        </p>
                    </div>

                    <!-- Service 5 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-comment-dots text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Regular Updates</h3>
                        <p class="text-gray-700">
                            Our nannies provide regular updates throughout the journey, including photos and status reports, so you're always informed about your pet's well-being.
                        </p>
                    </div>

                    <!-- Service 6 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-clipboard-list text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Documentation Handling</h3>
                        <p class="text-gray-700">
                            Our nannies manage all necessary travel documentation, ensuring smooth transitions through airports, customs, and other checkpoints.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- When to Use Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">When to Consider a Pet Nanny</h2>
                
                <div class="space-y-6 mb-10">
                    <!-- Scenario 1 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Senior or Special Needs Pets</h3>
                        <p class="text-gray-700">
                            Older pets or those with health conditions often benefit from the extra attention and care a pet nanny provides during travel.
                        </p>
                    </div>

                    <!-- Scenario 2 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Anxious or Nervous Pets</h3>
                        <p class="text-gray-700">
                            If your pet experiences travel anxiety, a nanny can provide reassurance and comfort throughout the journey.
                        </p>
                    </div>

                    <!-- Scenario 3 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Long or Complex Journeys</h3>
                        <p class="text-gray-700">
                            For international relocations or journeys with multiple connections, a pet nanny ensures continuous care and smooth transitions.
                        </p>
                    </div>

                    <!-- Scenario 4 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Pets Requiring Medication</h3>
                        <p class="text-gray-700">
                            If your pet needs regular medication, a nanny ensures it's administered correctly and on schedule during travel.
                        </p>
                    </div>

                    <!-- Scenario 5 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">First-Time Pet Travelers</h3>
                        <p class="text-gray-700">
                            For pets traveling for the first time, a nanny provides extra support and helps them adjust to the new experience.
                        </p>
                    </div>

                    <!-- Scenario 6 -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-brand-red">
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Peace of Mind for Pet Parents</h3>
                        <p class="text-gray-700">
                            Many pet owners choose a nanny simply for the peace of mind that comes with knowing their pet has dedicated, professional care throughout their journey.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Pet Nannies Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6 text-brand-red text-center">Our Professional Pet Nannies</h2>
                
                <p class="text-gray-700 mb-6 text-center">
                    All of our pet nannies are carefully selected and trained professionals who share our passion for animal welfare. They undergo rigorous screening and training to ensure they can provide the highest level of care for your pet.
                </p>
                
                <div class="grid md:grid-cols-3 gap-8 mb-10">
                    <!-- Qualification 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-certificate text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Certified Animal Handlers</h3>
                        <p class="text-gray-700">
                            Our nannies hold certifications in animal handling and pet first aid.
                        </p>
                    </div>

                    <!-- Qualification 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-heart text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Pet Lovers</h3>
                        <p class="text-gray-700">
                            All our nannies are genuine animal lovers with personal pet experience.
                        </p>
                    </div>

                    <!-- Qualification 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="text-brand-red mb-4">
                            <i class="fas fa-briefcase text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-pathway-gothic font-bold mb-2 text-dark-blue">Experienced Professionals</h3>
                        <p class="text-gray-700">
                            Our team has years of experience in pet care and transportation.
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
                        "When we had to relocate our 15-year-old cat with diabetes to another country, we were extremely worried about the journey. The pet nanny service from Pets Travel International was absolutely worth every penny. Our nanny, Lisa, was amazing with our cat, administered his insulin on schedule, and sent us updates throughout the journey. He arrived happy and healthy, and we couldn't be more grateful."
                    </div>
                    <div class="font-bold text-right">- Maria S., Spain to Canada</div>
                </div>
                
                <div>
                    <div class="italic text-gray-700 mb-4">
                        "Our dog has severe anxiety, and we were dreading the long flight for our move. The pet nanny service was a game-changer. Our nanny, John, bonded with our dog before the trip and stayed with him the entire journey. The regular photo updates gave us such peace of mind, and our dog arrived much calmer than we expected. I would recommend this service to anyone traveling with an anxious pet."
                    </div>
                    <div class="font-bold text-right">- James and Olivia T., USA to UK</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-dark-blue py-12 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-pathway-gothic mb-6">Ready to Book a Pet Nanny for Your Pet's Journey?</h2>
            <p class="max-w-2xl mx-auto mb-8">
                Contact our team today to discuss your pet's specific needs and learn more about our professional pet nanny services.
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
