@extends('layouts.app')

@section('title', 'Pet Relocation Guide - How Pet Relocation Works')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[60vh] flex items-center justify-center">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://airpetsinternational.com/wp-content/uploads/2020/01/italy-1.jpg');"></div>
        <div class="absolute inset-0 bg-dark-blue bg-opacity-70"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl text-white font-pathway-gothic font-bold uppercase mb-6">Pet Relocation Guide</h1>
            <p class="text-xl md:text-2xl text-white max-w-3xl mx-auto">Everything You Need to Know About Moving Your Pet</p>
            <div class="mt-8">
                <a href="#guide-content" class="bg-brand-red text-white px-8 py-3 rounded-md font-bold inline-flex items-center hover:bg-opacity-90 transition-all duration-300">
                    <span>Read the Guide</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section id="guide-content" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Table of Contents -->
                <div class="mb-12 p-6 bg-gray-50 rounded-lg shadow-sm">
                    <h3 class="text-xl font-bold text-dark-blue mb-4">In This Guide:</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <ul class="space-y-2">
                                <li>
                                    <a href="#overview" class="text-brand-red hover:underline flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                        Quick Overview
                                    </a>
                                </li>
                                <li>
                                    <a href="#step1" class="text-brand-red hover:underline flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                        Research Destination Requirements
                                    </a>
                                </li>
                                <li>
                                    <a href="#step2" class="text-brand-red hover:underline flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                        Veterinary Preparation
                                    </a>
                                </li>
                                <li>
                                    <a href="#step3" class="text-brand-red hover:underline flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                        Travel Crate Selection
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul class="space-y-2">
                                <li>
                                    <a href="#step4" class="text-brand-red hover:underline flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                        Transportation Options
                                    </a>
                                </li>
                                <li>
                                    <a href="#step5" class="text-brand-red hover:underline flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                        Preparing for Travel Day
                                    </a>
                                </li>
                                <li>
                                    <a href="#step6" class="text-brand-red hover:underline flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                        Arrival and Settlement
                                    </a>
                                </li>
                                <li>
                                    <a href="#professional" class="text-brand-red hover:underline flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                        Professional Services
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="prose prose-lg max-w-none space-y-12">
                    <div class="flex items-center mb-6">
                        <div class="bg-brand-red rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-dark-blue">Understanding Pet Relocation</h2>
                    </div>
                    <p class="text-lg text-gray-700 leading-relaxed">Moving with pets involves much more than simply booking them a ticket on your flight. Pet relocation is a complex process that requires careful planning, understanding of regulations, and attention to your pet's specific needs. This guide will walk you through everything you need to know about relocating your pet safely and legally.</p>
                    
                    <div class="my-12 border-l-4 border-brand-red pl-6 py-2">
                        <p class="text-lg italic text-gray-600">"Proper preparation is the key to a stress-free pet relocation experience - for both you and your furry family member."</p>
                    </div>

                    <div id="overview" class="bg-gray-50 p-8 my-12 rounded-lg shadow-sm border border-gray-100">
                        <div class="flex items-center mb-6">
                            <div class="bg-brand-red rounded-full h-10 w-10 flex items-center justify-center mr-4">
                                <span class="text-white font-bold">1</span>
                            </div>
                            <h3 class="text-2xl font-bold text-brand-red">Quick Overview: The Pet Relocation Process</h3>
                        </div>
                        <div class="pl-14">
                            <ol class="list-decimal space-y-3 text-gray-700">
                                <li><span class="font-semibold">Research destination requirements</span> (3-6 months before travel)</li>
                                <li><span class="font-semibold">Visit your veterinarian</span> for health checks and documentation (1-3 months before)</li>
                                <li><span class="font-semibold">Arrange appropriate travel crate</span> and acclimate your pet (1-2 months before)</li>
                                <li><span class="font-semibold">Book pet-friendly transportation</span> (1-2 months before)</li>
                                <li><span class="font-semibold">Complete final veterinary visits</span> and paperwork (days to weeks before)</li>
                                <li><span class="font-semibold">Prepare your pet for travel day</span> (days before)</li>
                                <li><span class="font-semibold">Transport your pet</span> safely to your new home</li>
                                <li><span class="font-semibold">Help your pet settle</span> into their new environment</li>
                            </ol>
                        </div>
                    </div>

                    <div id="step1" class="pt-6 mt-12 border-t border-gray-200">
                        <div class="flex items-center mb-6">
                            <div class="bg-brand-red rounded-full h-10 w-10 flex items-center justify-center mr-4">
                                <span class="text-white font-bold">2</span>
                            </div>
                            <h2 class="text-3xl font-bold text-dark-blue">Research Your Destination's Requirements</h2>
                        </div>
                        
                        <div class="flex flex-col md:flex-row gap-8 mb-8">
                            <div class="md:w-2/3">
                                <p class="text-lg text-gray-700 leading-relaxed mb-6">Every country—and even different states within countries—has unique requirements for importing pets. Understanding these requirements early is crucial for a smooth relocation process.</p>
                                
                                <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-100">
                                    <h4 class="font-bold text-xl mb-4 text-dark-blue">Common Requirements Include:</h4>
                                    <ul class="space-y-3 text-gray-700">
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red mr-2 mt-1" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <div>
                                                <span class="font-bold">Vaccinations:</span> Most commonly rabies, but potentially others depending on the destination
                                            </div>
                                        </li>
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red mr-2 mt-1" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <div>
                                                <span class="font-bold">Microchipping:</span> Many countries require ISO-standard microchips
                                            </div>
                                        </li>
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red mr-2 mt-1" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <div>
                                                <span class="font-bold">Blood tests:</span> Some countries require rabies titer tests to prove vaccine efficacy
                                            </div>
                                        </li>
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red mr-2 mt-1" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <div>
                                                <span class="font-bold">Parasite treatments:</span> Specific treatments for ticks, tapeworms, etc.
                                            </div>
                                        </li>
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red mr-2 mt-1" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <div>
                                                <span class="font-bold">Health certificates:</span> Official documentation of your pet's health status
                                            </div>
                                        </li>
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red mr-2 mt-1" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <div>
                                                <span class="font-bold">Import permits:</span> Pre-approval to bring your pet into the country
                                            </div>
                                        </li>
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red mr-2 mt-1" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <div>
                                                <span class="font-bold">Quarantine requirements:</span> Some destinations require mandatory quarantine periods
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="md:w-1/3">
                                <div class="bg-brand-red bg-opacity-10 p-6 rounded-lg">
                                    <h4 class="font-bold text-xl mb-4 text-brand-red">Timing Is Critical</h4>
                                    <p class="text-gray-700">Start researching these requirements at least <span class="font-bold">3-6 months</span> before your planned move.</p>
                                    <p class="text-gray-700 mt-4">Some procedures (like rabies titer tests) can take months to complete and process.</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-100 mt-8">
                            <h4 class="font-bold text-xl mb-4 text-dark-blue">Resources for Destination Requirements:</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <ul class="space-y-2">
                                    <li class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        Official government websites for your destination country
                                    </li>
                                    <li class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        Consulates and embassies
                                    </li>
                                </ul>
                                <ul class="space-y-2">
                                    <li class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        USDA APHIS Pet Travel website (for US travelers)
                                    </li>
                                    <li class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        International Air Transport Association (IATA) regulations
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <h2>Step 2: Veterinary Preparation</h2>
                    <p>Your veterinarian is a crucial partner in preparing your pet for relocation:</p>

                    <h3>Initial Consultation (3-6 months before travel)</h3>
                    <ul>
                        <li>Discuss your travel plans with your vet</li>
                        <li>Review your pet's health and assess travel readiness</li>
                        <li>Create a timeline for required vaccinations and treatments</li>
                        <li>Address any health concerns that might affect travel</li>
                        <li>Discuss stress management strategies for your specific pet</li>
                    </ul>

                    <h3>Required Procedures (timeline varies by destination)</h3>
                    <ul>
                        <li>Update all vaccinations according to destination requirements</li>
                        <li>Microchipping (if not already done)</li>
                        <li>Blood tests as required</li>
                        <li>Parasite treatments</li>
                        <li>General health examination</li>
                    </ul>

                    <h3>Final Health Certificate (timing varies by destination)</h3>
                    <p>Most countries require a health certificate issued within a specific timeframe before travel (often 10 days). This document must be completed by a licensed veterinarian and, in many cases, endorsed by the relevant government authority (such as USDA-APHIS in the United States).</p>

                    <div class="bg-gray-100 p-6 my-8 rounded-lg">
                        <h3 class="text-xl font-bold text-brand-red mb-4">Important Timing Consideration</h3>
                        <p class="mb-0">Health certificate timing is critical. If issued too early, it may expire before your pet arrives at the destination. If issued too late, you may not have time to get necessary government endorsements. Work backwards from your travel date and mark all deadlines on your calendar.</p>
                    </div>

                    <h2>Step 3: Travel Crate Selection and Preparation</h2>
                    <p>The right travel crate is essential for your pet's safety and comfort:</p>

                    <h3>IATA-Compliant Crates</h3>
                    <p>For air travel, your pet's crate must comply with International Air Transport Association (IATA) standards, which specify:</p>
                    <ul>
                        <li>Appropriate size (pet must be able to stand, turn around, and lie down comfortably)</li>
                        <li>Secure, escape-proof construction</li>
                        <li>Adequate ventilation</li>
                        <li>Leak-proof bottom with absorbent material</li>
                        <li>Secure, accessible food and water containers</li>
                        <li>Proper labeling and documentation</li>
                    </ul>

                    <h3>Crate Acclimation</h3>
                    <p>Help your pet become comfortable with their travel crate well before the journey:</p>
                    <ul>
                        <li>Introduce the crate gradually, using positive reinforcement</li>
                        <li>Place familiar bedding and toys inside</li>
                        <li>Feed meals in the crate</li>
                        <li>Practice short periods with the door closed</li>
                        <li>Gradually increase time spent in the crate</li>
                        <li>Practice moving the crate with your pet inside</li>
                    </ul>

                    <h2>Step 4: Transportation Options</h2>
                    <p>Depending on your destination and pet's needs, you have several transportation options:</p>

                    <h3>Air Travel</h3>
                    <ul>
                        <li><strong>In-cabin:</strong> Small pets may travel in the cabin with you (size and weight restrictions apply)</li>
                        <li><strong>Checked baggage:</strong> Medium-sized pets travel in the temperature-controlled cargo hold of your flight</li>
                        <li><strong>Air cargo:</strong> Larger pets or those traveling to destinations with specific requirements</li>
                        <li><strong>Pet-only airlines:</strong> Specialized services that exclusively transport animals</li>
                    </ul>

                    <h3>Ground Transportation</h3>
                    <ul>
                        <li><strong>Personal vehicle:</strong> Often the least stressful option for shorter moves</li>
                        <li><strong>Pet transport services:</strong> Professional ground transportation with specialized vehicles</li>
                        <li><strong>Pet-friendly trains:</strong> Available in some regions with specific policies</li>
                    </ul>

                    <h3>Sea Travel</h3>
                    <ul>
                        <li>Some cruise lines and cargo ships accommodate pets for international moves</li>
                        <li>Typically requires more time but may be less stressful for pets that don't travel well by air</li>
                    </ul>

                    <h3>Booking Considerations</h3>
                    <ul>
                        <li>Book direct flights whenever possible to minimize transit time</li>
                        <li>Avoid extreme weather seasons that might cause travel restrictions</li>
                        <li>Consider morning or evening flights in warm weather to avoid peak temperatures</li>
                        <li>Verify the carrier's pet policies, which can change frequently</li>
                        <li>Understand the carrier's liability policies and consider additional insurance</li>
                    </ul>

                    <h2>Step 5: Preparing for Travel Day</h2>
                    <p>As your travel date approaches, take these steps to ensure a smooth journey:</p>

                    <h3>1-2 Weeks Before</h3>
                    <ul>
                        <li>Confirm all bookings and arrangements</li>
                        <li>Double-check that all documentation is complete and organized</li>
                        <li>Purchase any supplies needed for travel day</li>
                        <li>Continue crate acclimation</li>
                    </ul>

                    <h3>Days Before</h3>
                    <ul>
                        <li>Adjust feeding schedule as recommended (typically reduced or skipped meals before travel)</li>
                        <li>Ensure your pet gets plenty of exercise</li>
                        <li>Prepare a travel kit with essentials (food, medications, comfort items, cleaning supplies)</li>
                        <li>Attach proper identification to your pet's collar and crate</li>
                        <li>If prescribed by your vet, prepare any calming supplements or medications</li>
                    </ul>

                    <h3>Travel Day</h3>
                    <ul>
                        <li>Allow extra time for all processes</li>
                        <li>Exercise your pet before departure</li>
                        <li>Limit food and water as advised by your vet</li>
                        <li>Remain calm—pets sense your anxiety</li>
                        <li>Follow all check-in procedures carefully</li>
                        <li>Provide comfort items that smell familiar in the crate</li>
                    </ul>

                    <div class="bg-gray-100 p-6 my-8 rounded-lg">
                        <h3 class="text-xl font-bold text-brand-red mb-4">A Note on Sedation</h3>
                        <p class="mb-0">Most veterinarians and airlines strongly discourage sedating pets for travel. Sedatives can affect your pet's ability to balance and regulate body temperature, potentially creating health risks at altitude. Always consult with your veterinarian about the safest stress-reduction options for your specific pet.</p>
                    </div>

                    <h2>Step 6: Arrival and Settlement</h2>
                    <p>Once you reach your destination:</p>

                    <h3>Immediate Steps</h3>
                    <ul>
                        <li>Clear customs and immigration with your pet and documentation</li>
                        <li>Complete any required on-arrival inspections or quarantine procedures</li>
                        <li>Check your pet for any signs of distress or health concerns</li>
                        <li>Offer water and, when appropriate, a small meal</li>
                        <li>Allow time for bathroom breaks and gentle exercise</li>
                    </ul>

                    <h3>Settling In</h3>
                    <ul>
                        <li>Create a safe, quiet space in your new home</li>
                        <li>Maintain familiar routines as much as possible</li>
                        <li>Introduce your pet gradually to new spaces</li>
                        <li>Find a local veterinarian and schedule a check-up</li>
                        <li>Update microchip registration with your new address</li>
                        <li>Research local pet laws and licensing requirements</li>
                    </ul>

                    <h2>When to Consider Professional Pet Relocation Services</h2>
                    <p>While many pet owners successfully manage relocations themselves, professional services can be invaluable in certain situations:</p>
                    <ul>
                        <li>Complex international moves with multiple regulatory requirements</li>
                        <li>Destinations with strict quarantine or import procedures</li>
                        <li>Multiple pets or special-needs animals</li>
                        <li>When your own travel schedule doesn't align with pet transport options</li>
                        <li>If you're relocating during extreme weather seasons</li>
                        <li>When you need door-to-door service rather than just airport-to-airport</li>
                    </ul>

                    <h3>What Professional Pet Relocators Provide</h3>
                    <ul>
                        <li>Expert guidance on destination requirements</li>
                        <li>Documentation preparation and verification</li>
                        <li>Custom travel crates and equipment</li>
                        <li>Booking and coordination of all transportation</li>
                        <li>Customs clearance assistance</li>
                        <li>Quarantine arrangements when required</li>
                        <li>Ground transportation at origin and destination</li>
                        <li>Regular updates throughout the journey</li>
                        <li>Peace of mind knowing experts are handling every detail</li>
                    </ul>

                    <h2>Conclusion: Your Pet's Journey Matters</h2>
                    <p>Pet relocation requires careful planning, attention to detail, and patience. Whether you manage the process yourself or work with professionals like Pets Travel International, understanding the fundamentals of pet relocation helps ensure a safe, low-stress journey for your beloved companion.</p>

                    <p>Remember that each pet is unique, and what works for one may not work for another. Always consider your individual pet's temperament, health needs, and stress tolerance when making relocation plans.</p>

                    <p>At Pets Travel International, we've been helping pets and their families relocate safely for over 30 years. Our experienced team handles every detail with care and compassion, treating your pets as if they were our own. Whether you're moving across the country or around the world, we're here to make your pet's journey as safe and stress-free as possible.</p>
                </div>

                <!-- Download Section -->
                <div class="mt-16 bg-gradient-to-r from-dark-blue to-brand-red p-1 rounded-lg shadow-lg">
                    <div class="bg-white p-8 rounded-lg flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-2/3">
                            <h3 class="text-2xl font-bold text-dark-blue mb-4">Download This Guide as a PDF</h3>
                            <p class="text-gray-600 mb-6">Want to keep this information handy? Download our complete pet relocation guide to reference offline or share with family members involved in your pet's move.</p>
                            <ul class="mb-6">
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Printable checklist for your pet's journey</span>
                                </li>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Country-specific requirement summaries</span>
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Detailed timeline for planning your pet's move</span>
                                </li>
                            </ul>
                            <a href="#" class="inline-block bg-brand-red text-white font-bold py-3 px-8 rounded-md hover:bg-opacity-90 transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Download PDF Guide
                            </a>
                        </div>
                        <div class="md:w-1/3 flex justify-center">
                            <div class="relative">
                                <div class="absolute -top-4 -left-4 w-24 h-24 bg-brand-red rounded-full flex items-center justify-center transform rotate-12 shadow-lg">
                                    <span class="text-white font-bold text-lg">FREE</span>
                                </div>
                                <img src="https://airpetsinternational.com/wp-content/uploads/2020/01/pet-guide-cover.jpg" alt="Pet Relocation Guide" class="w-48 h-64 object-cover rounded-lg shadow-lg">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Author Info -->
                <div class="mt-12 border-t border-gray-200 pt-8">
                    <div class="flex items-center">
                        <img src="https://airpetsinternational.com/wp-content/uploads/2020/01/pet-relocation-specialist.jpg" alt="Pet Relocation Specialist" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-lg">Written by Pet Travel Experts</h4>
                            <p class="text-gray-600">Our team of pet relocation specialists has over 30 years of experience moving pets worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Articles -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-pathway-gothic font-bold text-center mb-12">Related Articles</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <a href="/what-do-pet-movers-do" class="bg-white shadow-lg overflow-hidden group">
                    <div class="relative">
                        <img src="https://airpetsinternational.com/wp-content/uploads/2025/04/june-blog-1-1024x683.png" alt="What Do Pet Movers Do" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 right-4 bg-brand-red text-white text-xs font-bold uppercase px-2 py-1">International Pet Shipping</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark-blue mb-2 font-pathway-gothic">What Do Pet Movers Do? A Guide to Stress-Free Pet Relocation</h3>
                        <p class="text-gray-600 text-sm mb-4">Relocating with pets can feel overwhelming. Between paperwork, transportation logistics, health requirements, and your pet's well-being, it's a lot to manage alone.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-brand-red font-bold hover:underline">Read More »</span>
                            <span class="text-gray-500 text-xs">June 19, 2025</span>
                        </div>
                    </div>
                </a>
                
                <a href="/ship-reptiles-safely" class="bg-white shadow-lg overflow-hidden group">
                    <div class="relative">
                        <img src="https://airpetsinternational.com/wp-content/uploads/2025/03/Navigating-Customs-Regulations-When-Flying-With-a-Dog-2-1024x1024.png" alt="Shipping Reptiles Safely" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 right-4 bg-brand-red text-white text-xs font-bold uppercase px-2 py-1">International Pet Shipping</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark-blue mb-2 font-pathway-gothic">The Best Ways to Ship Your Reptiles Safely and Legally</h3>
                        <p class="text-gray-600 text-sm mb-4">Shipping reptiles safely requires more than just a box and a label—it demands planning, precision, and a deep understanding of your scaly companion's unique needs.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-brand-red font-bold hover:underline">Read More »</span>
                            <span class="text-gray-500 text-xs">May 8, 2025</span>
                        </div>
                    </div>
                </a>
                
                <a href="/choosing-pet-transport-service" class="bg-white shadow-lg overflow-hidden group">
                    <div class="relative">
                        <img src="https://airpetsinternational.com/wp-content/uploads/2016/12/Pet-Transport-Service-1024x685.jpg" alt="Pet Transport Service" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 right-4 bg-brand-red text-white text-xs font-bold uppercase px-2 py-1">Animal Crates Info & Posts</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark-blue mb-2 font-pathway-gothic">How to Choose the Right Pet Transport Service</h3>
                        <p class="text-gray-600 text-sm mb-4">Whether you're relocating across the country or moving overseas, finding a reliable pet transport service is crucial to ensuring your pet's comfort, safety, and well-being.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-brand-red font-bold hover:underline">Read More »</span>
                            <span class="text-gray-500 text-xs">May 6, 2025</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-dark-blue to-brand-red py-16 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <img src="https://airpetsinternational.com/wp-content/uploads/2020/01/pet-pattern.png" alt="" class="w-full h-full object-cover">
        </div>
        
        <!-- Floating Paw Icons -->
        <div class="absolute top-10 left-10 text-white opacity-20">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 512 512">
                <path fill="currentColor" d="M256 224c-79.41 0-192 122.76-192 200.25 0 34.9 26.81 55.75 71.74 55.75 48.84 0 81.09-25.08 120.26-25.08 39.51 0 71.85 25.08 120.26 25.08 44.93 0 71.74-20.85 71.74-55.75C448 346.76 335.41 224 256 224zm-147.28-12.61c-10.4-34.65-42.44-57.09-71.56-50.13-29.12 6.96-44.29 40.69-33.89 75.34 10.4 34.65 42.44 57.09 71.56 50.13 29.12-6.96 44.29-40.69 33.89-75.34zm84.72-20.78c30.94-8.14 46.42-49.94 34.58-93.36s-46.52-72.01-77.46-63.87-46.42 49.94-34.58 93.36c11.84 43.42 46.53 72.02 77.46 63.87zm281.39-29.34c-29.12-6.96-61.15 15.48-71.56 50.13-10.4 34.65 4.77 68.38 33.89 75.34 29.12 6.96 61.15-15.48 71.56-50.13 10.4-34.65-4.77-68.38-33.89-75.34zm-156.27 29.34c30.94 8.14 65.62-20.45 77.46-63.87 11.84-43.42-3.64-85.21-34.58-93.36s-65.62 20.45-77.46 63.87c-11.84 43.42 3.64 85.22 34.58 93.36z"/>
            </svg>
        </div>
        <div class="absolute bottom-10 right-10 text-white opacity-20">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 512 512">
                <path fill="currentColor" d="M256 224c-79.41 0-192 122.76-192 200.25 0 34.9 26.81 55.75 71.74 55.75 48.84 0 81.09-25.08 120.26-25.08 39.51 0 71.85 25.08 120.26 25.08 44.93 0 71.74-20.85 71.74-55.75C448 346.76 335.41 224 256 224zm-147.28-12.61c-10.4-34.65-42.44-57.09-71.56-50.13-29.12 6.96-44.29 40.69-33.89 75.34 10.4 34.65 42.44 57.09 71.56 50.13 29.12-6.96 44.29-40.69 33.89-75.34zm84.72-20.78c30.94-8.14 46.42-49.94 34.58-93.36s-46.52-72.01-77.46-63.87-46.42 49.94-34.58 93.36c11.84 43.42 46.53 72.02 77.46 63.87zm281.39-29.34c-29.12-6.96-61.15 15.48-71.56 50.13-10.4 34.65 4.77 68.38 33.89 75.34 29.12 6.96 61.15-15.48 71.56-50.13 10.4-34.65-4.77-68.38-33.89-75.34zm-156.27 29.34c30.94 8.14 65.62-20.45 77.46-63.87 11.84-43.42-3.64-85.21-34.58-93.36s-65.62 20.45-77.46 63.87c-11.84 43.42 3.64 85.22 34.58 93.36z"/>
            </svg>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto bg-white bg-opacity-10 backdrop-filter backdrop-blur-sm p-10 rounded-xl shadow-xl">
                <h2 class="text-4xl text-white font-pathway-gothic font-bold mb-6 text-center">Ready to Plan Your Pet's Journey?</h2>
                <p class="text-white text-lg mb-8 max-w-2xl mx-auto text-center">Let our experienced team handle every detail of your pet's relocation. Contact us today for a personalized consultation.</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white bg-opacity-20 p-6 rounded-lg text-center">
                        <div class="bg-white rounded-full h-16 w-16 flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-brand-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-white font-bold text-xl mb-2">30+ Years Experience</h3>
                        <p class="text-white text-opacity-80">Trusted by thousands of pet owners worldwide</p>
                    </div>
                    
                    <div class="bg-white bg-opacity-20 p-6 rounded-lg text-center">
                        <div class="bg-white rounded-full h-16 w-16 flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-brand-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <h3 class="text-white font-bold text-xl mb-2">Door-to-Door Service</h3>
                        <p class="text-white text-opacity-80">Complete transportation from your home to destination</p>
                    </div>
                    
                    <div class="bg-white bg-opacity-20 p-6 rounded-lg text-center">
                        <div class="bg-white rounded-full h-16 w-16 flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-brand-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-white font-bold text-xl mb-2">24/7 Support</h3>
                        <p class="text-white text-opacity-80">Always available to assist with your pet's journey</p>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/contact" class="bg-white text-brand-red font-bold py-3 px-8 rounded-md hover:bg-gray-100 transition-all duration-300 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Contact Us
                    </a>
                    <a href="/services" class="bg-dark-blue text-white font-bold py-3 px-8 rounded-md hover:bg-opacity-90 transition-all duration-300 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
