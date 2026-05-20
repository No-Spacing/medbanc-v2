<!-- resources/views/partials/navbar.blade.php -->

<!-- @php

// Check if the current page is 'product'
    $isProductPage = Request::is('product');

        if (Request::is('/')) {
        $bgClass = 'bg-gray-50';
        $navbarMarginBottom = '';
    } else {
        $bgClass = 'bg-gray-50';
        $navbarMarginBottom = 'static';
    }
        // Set background color based on whether it's the product page or not
    $bgClass = $isProductPage ? 'bg-transparent' : 'bg-gray-50';

    // Set text link color based on whether it's the product page or not
    // $textLinksColor = $isProductPage ? 'text-white' : 'text-black';
@endphp -->

@php

    $bgClass = 'bg-gray-50';

// Add conditional underline classes based on the current URL
    $underlineClass = 'underline decoration-Color-Logo-Green decoration-4 underline-offset-8 hover:text-AColor-Logo-Green';

    $homeLinkClass = Request::is('/') ? $underlineClass : '';
    $productLinkClass = Request::is('products') ? $underlineClass : '';
    $careerLinkClass = Request::is('career') ? $underlineClass : '';
    $solutionsLinkClass = Request::is('solutions') ? $underlineClass : '';
    $servicesLinkClass = Request::is('services') ? $underlineClass : '';
    $newsEventsLinkClass = Request::is('news-events') ? $underlineClass : '';
    $aboutLinkClass = Request::is('about') ? $underlineClass : '';
    $contactLinkClass = Request::is('contact') ? $underlineClass : '';
    $warrantLinkClass = Request::is('warranty') ? $underlineClass : '';
    // Set navbar margin bottom based on the page
    $navbarMarginBottom = Request::is('/') ? '' : 'static'; // No extra margin for home page, static for others


@endphp


<!-- Navbar -->
<!-- <nav class=" p-6 lg:px-8 {{ $bgClass }} {{ $navbarMarginBottom }}" aria-label="Global"> -->
    <!-- Wrapper to align content -->
    <!-- <div class="mx-auto max-w-7xl flex items-center justify-between">
    <div class="flex lg:flex-1 pl-8">
        <a href="/" class="-m-1.5 p-1.5">
            <span class="sr-only">Medbanc</span>
            <img class="h-8 w-auto" src="{{ asset('images/medbanc_logo.png') }}" alt="logo">
        </a>
    </div>
    <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
        <a href="/" class="text-sm font-semibold leading-6 text-black {{ $homeLinkClass }} hover:underline hover:decoration-Color-Logo-Green hover:decoration-from-font hover:underline-offset-8 transition-all duration-300 ease-in-out hover:text-Color-Logo-Green">Home</a>
        <a href="/product" class="text-sm font-semibold leading-6 text-black {{ $productLinkClass }} hover:underline hover:decoration-Color-Logo-Green hover:decoration-from-font hover:underline-offset-8 transition-all duration-300 ease-in-out hover:text-Color-Logo-Green">Products</a> -->
        <!-- <a href="/solutions" class="text-sm font-semibold leading-6 text-black {{ $solutionsLinkClass }} hover:underline hover:decoration-Color-Logo-Green hover:decoration-from-font hover:underline-offset-8 transition-all duration-300 ease-in-out hover:text-Color-Logo-Green">Solutions</a>
        <a href="/services" class="text-sm font-semibold leading-6 text-black {{ $servicesLinkClass }} hover:underline hover:decoration-Color-Logo-Green hover:decoration-from-font hover:underline-offset-8 transition-all duration-300 ease-in-out hover:text-Color-Logo-Green">Services</a> -->
        <!-- <a href="/news&events" class="text-sm font-semibold leading-6 text-black {{ $newsEventsLinkClass }} hover:underline hover:decoration-Color-Logo-Green hover:decoration-from-font hover:underline-offset-8 transition-all duration-300 ease-in-out hover:text-Color-Logo-Green">News and Events</a>
        <a href="/about" class="text-sm font-semibold leading-6 text-black {{ $aboutLinkClass }} hover:underline hover:decoration-Color-Logo-Green hover:decoration-from-font hover:underline-offset-8 transition-all duration-300 ease-in-out hover:text-Color-Logo-Green">About</a>
        <a href="/contact" class="text-sm font-semibold leading-6 text-black {{ $contactLinkClass }} hover:underline hover:decoration-Color-Logo-Green hover:decoration-from-font hover:underline-offset-8 transition-all duration-300 ease-in-out hover:text-Color-Logo-Green">Contact</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end"> -->
        <!-- <a href="#" class="text-sm font-semibold leading-6 text-white">Log in <span aria-hidden="true">&rarr;</span></a> -->
    <!-- </div>
    </div>
</nav> -->


<!-- Mobile menu, show/hide based on menu open state. -->
<!-- <div class="lg:hidden" role="dialog" aria-modal="true"> -->
<!-- Background backdrop, show/hide based on slide-over state. -->
<!-- <div class="fixed inset-0 z-50"></div>
    <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-50">Product</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-50">Features</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-50">Marketplace</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-50">Company</a>
                </div>
                <div class="py-6">
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-gray-50">Log in</a>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Navbar -->
<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-[#F9F9F9] shadow-lg fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/medbanc_logo.png') }}" alt="Logo" class="h-8 w-auto">
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex space-x-6 items-center">
                <a href="{{ route('/') }}" class="text-sm font-semibold leading-6 text-black {{ $homeLinkClass }} hover:underline hover:decoration-AColor-Logo-Green hover:decoration-from-font hover:underline-offset-8 transition-all duration-300 ease-in-out hover:text-AColor-Logo-Green">HOME</a>
                <a href="{{ route('about') }}" class="text-sm font-semibold leading-6 text-black {{ $aboutLinkClass }} hover:underline hover:decoration-AColor-Logo-Green hover:decoration-from-font hover:underline-offset-8 transition-all duration-300 ease-in-out hover:text-AColor-Logo-Green">ABOUT US</a>
                <a href="{{ route('product') }}" class="text-sm font-semibold leading-6 text-black {{ $productLinkClass }} hover:underline hover:decoration-AColor-Logo-Green hover:decoration-from-font hover:underline-offset-8 transition-all duration-300 ease-in-out hover:text-AColor-Logo-Green">PRODUCTS</a>
                <a href="{{ route('news-events') }}" class="text-sm font-semibold leading-6 text-black {{ $newsEventsLinkClass }} hover:underline hover:decoration-AColor-Logo-Green hover:decoration-from-font hover:underline-offset-8 transition-all duration-300 ease-in-out hover:text-AColor-Logo-Green">NEWS AND EVENTS</a>
                <a href="{{ route('contact') }}" class="text-sm font-semibold leading-6 text-black {{ $contactLinkClass }} hover:underline hover:decoration-AColor-Logo-Green hover:decoration-from-font hover:underline-offset-8 transition-all duration-300 ease-in-out hover:text-AColor-Logo-Green">CONTACT</a>
                <a href="{{ route('warranty') }}" class="text-sm font-semibold leading-6 text-black {{ $warrantLinkClass }} hover:underline hover:decoration-AColor-Logo-Green hover:decoration-from-font hover:underline-offset-8 transition-all duration-300 ease-in-out hover:text-AColor-Logo-Green">WARRANTY</a>
            </div>

            <!-- Explore Careers Link (Right Side) -->
            <div class="hidden md:flex">
                <a href="/careers" class="text-sm font-semibold leading-6 text-white bg-Color-Logo-Green px-4 py-2 rounded-full hover:bg-AColor-Logo-Green transition-all duration-300 ease-in-out">Explore Careers</a>
            </div>

            <!-- Hamburger Menu (Mobile) -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu (Hidden by Default) -->
    <div id="mobile-menu" class="hidden md:hidden bg-white">
        <a href="/" class="block py-2 px-4 text-sm text-gray-800 hover:bg-gray-100 nav-link active">Home</a>
        <a href="/about" class="block py-2 px-4 text-sm text-gray-800 hover:bg-gray-100 nav-link">About</a>
        <a href="/products" class="block py-2 px-4 text-sm text-gray-800 hover:bg-gray-100 nav-link">Products</a>
        <a href="/career" class="block py-2 px-4 text-sm text-gray-800 hover:bg-gray-100 nav-link">Explore Careers</a>
        <a href="/news&events" class="block py-2 px-4 text-sm text-gray-800 hover:bg-gray-100 nav-link">News and Events</a>
        <a href="/contact" class="block py-2 px-4 text-sm text-gray-800 hover:bg-gray-100 nav-link">Contact</a>
        <a href="/warranty" class="block py-2 px-4 text-sm text-gray-800 hover:bg-gray-100 nav-link">Warranty</a>
    </div>
</nav>

<script>
    // Mobile Menu Toggle
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Active Navbar Link Indicator
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            // Remove active class from all links
            navLinks.forEach(link => link.classList.remove('active'));
            // Add active class to the clicked link
            this.classList.add('active');
        });
    });

    // Highlight active section based on scroll position (optional)
    window.addEventListener('scroll', () => {
        const sections = document.querySelectorAll('section');
        let currentSection = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (window.scrollY >= sectionTop - 50) {
                currentSection = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${currentSection}`) {
                link.classList.add('active');
            }
        });
    });
</script>
