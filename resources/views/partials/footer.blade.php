<!-- Footer -->
<footer class="bg-gray-800 text-gray-300">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Column 1: Logo and About -->
            <div>
                <img src="{{ asset('images/logo.svg') }}" alt="Pets Travel International Logo" class="h-16 mb-4">
                <p class="text-sm font-open-sans mb-4">
                    Pets Travel International is a full-service pet transportation company specializing in domestic and international pet relocation.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h3 class="text-xl font-bold text-white mb-4 font-pathway-gothic">Quick Links</h3>
                <ul class="space-y-2 font-open-sans">
                    <li><a href="/services" class="text-gray-300 hover:text-white">Services</a></li>
                    <li><a href="/regions" class="text-gray-300 hover:text-white">Regions</a></li>
                    <li><a href="/about" class="text-gray-300 hover:text-white">About Us</a></li>
                    <li><a href="/blog" class="text-gray-300 hover:text-white">Blog</a></li>
                    <li><a href="/contact" class="text-gray-300 hover:text-white">Contact</a></li>
                    <li><a href="/track-pet" class="text-gray-300 hover:text-white">Track Pet</a></li>
                </ul>
            </div>

            <!-- Column 3: Services -->
            <div>
                <h3 class="text-xl font-bold text-white mb-4 font-pathway-gothic">Services</h3>
                <ul class="space-y-2 font-open-sans">
                    <li><a href="/domestic-relocations-services/" class="text-gray-300 hover:text-white">Domestic Relocations</a></li>
                    <li><a href="/international-relocation-services/" class="text-gray-300 hover:text-white">International Relocation</a></li>
                    <li><a href="/pet-taxi-services/" class="text-gray-300 hover:text-white">Pet Taxi Services</a></li>
                    <li><a href="/pet-nanny-services/" class="text-gray-300 hover:text-white">Pet Nanny Services</a></li>
                    <li><a href="/cat-dog-crates/" class="text-gray-300 hover:text-white">Cat & Dog Crates</a></li>
                    <li><a href="/departure-destination-services/" class="text-gray-300 hover:text-white">Departure & Destination</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact Info -->
            <div>
                <h3 class="text-xl font-bold text-white mb-4 font-pathway-gothic">Contact Us</h3>
                <ul class="space-y-2 font-open-sans">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 mr-2 text-brand-red"></i>
                        <span>Global Reach</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone-alt mr-2 text-brand-red"></i>
                        <span>+1 (681) 358-8417</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope mr-2 text-brand-red"></i>
                        <span>info@petstravelinternational.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-700 mt-8 pt-8 text-sm text-center font-open-sans">
            <p>&copy; {{ date('Y') }} Pets Travel International. All Rights Reserved.</p>
        </div>
    </div>
</footer>
