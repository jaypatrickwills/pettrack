@extends('layouts.app')

@section('title', 'Pet Transport Regions | Pets Travel International')

@section('content')
    <main>
        <!-- Hero Banner -->
        <section class="bg-gray-100 py-20">
            <div class="container mx-auto px-4">
                <div class="text-center">
                    <h1 class="text-5xl font-pathway-gothic font-bold text-dark-blue uppercase tracking-wider mb-4">Pet Transport Regions</h1>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">We provide pet transportation services to destinations around the world. Learn about specific regional requirements and our services.</p>
                </div>
            </div>
        </section>

        <!-- Regions List -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- North America -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1605649461494-14e636c5daa8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fG5vcnRoJTIwYW1lcmljYXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60" alt="North America Pet Transport" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-pathway-gothic font-bold text-brand-red uppercase mb-4">North America</h3>
                            <p class="text-gray-600 mb-6">Pet transport across the United States, Canada, and Mexico. We handle domestic relocations, cross-border requirements, and all necessary paperwork.</p>
                            <a href="/regions/north-america" class="inline-block bg-brand-red text-white font-bold py-2 px-4 uppercase hover:bg-[#c41f1e] transition-colors duration-300">Learn More</a>
                        </div>
                    </div>
                    
                    <!-- Europe -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1566698629409-787a4b62d2a0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8ZXVyb3BlfGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60" alt="Europe Pet Transport" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-pathway-gothic font-bold text-brand-red uppercase mb-4">Europe</h3>
                            <p class="text-gray-600 mb-6">Navigate EU pet import requirements with ease. Our team handles all necessary documentation, pet passports, microchipping, and vaccinations for EU entry.</p>
                            <a href="/regions/europe" class="inline-block bg-brand-red text-white font-bold py-2 px-4 uppercase hover:bg-[#c41f1e] transition-colors duration-300">Learn More</a>
                        </div>
                    </div>
                    
                    <!-- Asia -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1493780474015-ba834fd0ce2f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGFzaWF8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60" alt="Asia Pet Transport" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-pathway-gothic font-bold text-brand-red uppercase mb-4">Asia</h3>
                            <p class="text-gray-600 mb-6">Expert assistance with complex quarantine requirements for countries like Japan, Singapore, Hong Kong, and other Asian destinations.</p>
                            <a href="/regions/asia" class="inline-block bg-brand-red text-white font-bold py-2 px-4 uppercase hover:bg-[#c41f1e] transition-colors duration-300">Learn More</a>
                        </div>
                    </div>
                    
                    <!-- Middle East -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1518684079-3c830dcef090?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZHViYWl8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60" alt="Middle East Pet Transport" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-pathway-gothic font-bold text-brand-red uppercase mb-4">Middle East</h3>
                            <p class="text-gray-600 mb-6">Specialized services for UAE, Saudi Arabia, Qatar, and other Middle Eastern countries, with expertise in navigating region-specific requirements.</p>
                            <a href="/regions/middle-east" class="inline-block bg-brand-red text-white font-bold py-2 px-4 uppercase hover:bg-[#c41f1e] transition-colors duration-300">Learn More</a>
                        </div>
                    </div>
                    
                    <!-- Oceania -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YXVzdHJhbGlhfGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60" alt="Oceania Pet Transport" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-pathway-gothic font-bold text-brand-red uppercase mb-4">Oceania</h3>
                            <p class="text-gray-600 mb-6">Expert assistance with Australia and New Zealand's strict quarantine and import requirements, ensuring a smooth transition for your pet.</p>
                            <a href="/regions/oceania" class="inline-block bg-brand-red text-white font-bold py-2 px-4 uppercase hover:bg-[#c41f1e] transition-colors duration-300">Learn More</a>
                        </div>
                    </div>
                    
                    <!-- Latin America -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1483729558449-99ef09a8c325?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bGF0aW4lMjBhbWVyaWNhfGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60" alt="Latin America Pet Transport" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-pathway-gothic font-bold text-brand-red uppercase mb-4">Latin America</h3>
                            <p class="text-gray-600 mb-6">Complete pet relocation services to Mexico, Brazil, Argentina, Colombia, and other Latin American countries, handling all necessary import permits.</p>
                            <a href="/regions/latin-america" class="inline-block bg-brand-red text-white font-bold py-2 px-4 uppercase hover:bg-[#c41f1e] transition-colors duration-300">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CTA Section -->
        <section class="bg-brand-red py-12">
            <div class="container mx-auto px-4 flex flex-col md:flex-row justify-around items-center text-center md:text-left">
                <div class="mb-8 md:mb-0 w-full md:w-auto">
                    <h3 class="text-white text-2xl font-pathway-gothic font-bold mb-4">Ready to Transport Your Pet?</h3>
                    <a href="/contact" class="inline-block bg-dark-blue text-white font-bold py-3 px-6 uppercase flex items-center justify-center w-full sm:w-auto">
                        <span class="flex justify-center items-center gap-2">
                            <span>Get A Quote</span>
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
                <div class="w-full md:w-auto">
                    <h3 class="text-white text-2xl font-pathway-gothic font-bold mb-4">Need More Information?</h3>
                    <a href="/pet-relocation-guide" class="inline-block bg-dark-blue text-white font-bold py-3 px-6 uppercase flex items-center justify-center w-full sm:w-auto">
                        <span class="flex justify-center items-center gap-2">
                            <span>Download Our Guide</span>
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
