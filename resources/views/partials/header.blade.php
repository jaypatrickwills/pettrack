<!-- Header -->
<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/logo.svg') }}" alt="Pets Travel International Logo" class="h-16">
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex md:items-center">
                <div class="flex items-center space-x-8">
                    <a href="/" class="text-dark-blue hover:text-brand-red font-bold py-2">Home</a>
                    <a href="/services" class="text-dark-blue hover:text-brand-red font-bold py-2">Services</a>
                    <a href="/regions" class="text-dark-blue hover:text-brand-red font-bold py-2">Regions</a>
                    <a href="/about" class="text-dark-blue hover:text-brand-red font-bold py-2">About</a>
                    <a href="/blog" class="text-dark-blue hover:text-brand-red font-bold py-2">Blog</a>
                    <a href="/contact" class="text-dark-blue hover:text-brand-red font-bold py-2">Contact</a>
                    <a href="/track-pet" class="bg-brand-red text-white px-6 py-2 rounded-full hover:bg-red-700 transition duration-300 font-bold">Track Pet</a>
                </div>
            </nav>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <a href="/" class="block py-3 text-dark-blue hover:text-brand-red font-bold border-b border-gray-100">Home</a>
            <a href="/services" class="block py-3 text-dark-blue hover:text-brand-red font-bold border-b border-gray-100">Services</a>
            <a href="/regions" class="block py-3 text-dark-blue hover:text-brand-red font-bold border-b border-gray-100">Regions</a>
            <a href="/about" class="block py-3 text-dark-blue hover:text-brand-red font-bold border-b border-gray-100">About</a>
            <a href="/blog" class="block py-3 text-dark-blue hover:text-brand-red font-bold border-b border-gray-100">Blog</a>
            <a href="/contact" class="block py-3 text-dark-blue hover:text-brand-red font-bold border-b border-gray-100">Contact</a>
            <a href="/track-pet" class="inline-block mt-4 bg-brand-red text-white px-6 py-2 rounded-full hover:bg-red-700 transition duration-300 font-bold text-center">Track Pet</a>
        </div>
    </div>
</header>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
