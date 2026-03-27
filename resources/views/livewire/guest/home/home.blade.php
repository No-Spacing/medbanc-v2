<div>
    <!-- Include the cookie consent banner component -->
    @include('livewire.guest.home.cookie-consent')
    
    <!-- Slider banner Start -->
    <!-- Slider Container -->
    @include('components.layouts.guest.slider')
    <!-- Slider banner End -->

      <!-- Features Start-->
      <div class="container mx-auto px-4 py-16">
        <div class="mb-12">
            <h2 class="text-1xl font-semibold text-gray-800">Discover Our Value:</h2>
            <h3 class="text-4xl font-bold inline-block border-b-4 border-Color-Logo-Green pb-4 mb-4">Healthcare
                Expertise and Career Growth</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="flex justify-center mb-4">
                    <img src="images/home/1 Values.png" alt="Healthcare Icon" class="h-auto w-48">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 pb-2">Commitment to Excellence in Healthcare</h3>
                <p class="mt-4 text-gray-600">The company is committed to delivering exceptional medical services using
                    advanced technology and top industry standards.</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="flex justify-center mb-4">
                    <img src="images/home/2 Values.png" alt="Healthcare Icon" class="h-auto w-48">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 pb-2">Diverse Career Opportunities</h3>
                <p class="mt-4 text-gray-600">It provides opportunities for career growth, continuous training, and
                    professional development tailored to employees' skills and aspirations.</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="flex justify-center mb-4">
                    <img src="images/home/3 Values.png" alt="Healthcare Icon" class="h-auto w-48">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 pb-2">Leadership and Mentorship Programs</h3>
                <p class="mt-4 text-gray-600">Promotes leadership development, creating pathways for employees to step
                    into management or specialized roles.</p>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <div class="bg-[#F9F9F9] px-6 py-24">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center">
                <!-- Image on the left -->
                <div class="w-full md:w-1/2">
                    <img src="images/home/home-about.jpg"
                        alt="About Us" class="rounded-lg shadow-lg" />
                </div>

                <!-- Content on the right -->
                <div class="w-full md:w-1/2 mt-8 md:mt-0 md:ml-8">
                    <!-- Title -->
                    <h2 class="text-3xl font-regular text-gray-800">About us</h2>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">
                        With years of experience and<br>
                        a commitment to technological<br>
                        innovation
                    </h2>

                    <!-- Paragraph -->
                    <p class="text-gray-600 mb-6">
                        We are a passionate team dedicated to delivering high-quality solutions for our clients.
                        With years of experience and a commitment to excellence, we strive to create innovative
                        and impactful results that drive success.
                    </p>

                    <!-- Learn More Button -->
                    <a href="/about"
                        class="inline-block px-6 py-3 bg-Color-Logo-Green text-white font-semibold rounded-lg hover:bg-AColor-Logo-Green transition duration-300">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('components.layouts.guest.brands')

    @include('livewire.guest.home.join-team-v2')

    
</div>

<script>
    // public/js/cookie-consent.js

    document.addEventListener('DOMContentLoaded', function() {
        if (!getCookie('cookie_consent')) {
            document.getElementById('cookie-consent').classList.remove('hidden');
            document.getElementById('cookie-consent-overlay').classList.remove('hidden');
        }
    });

    function acceptCookies() {
        setCookie('cookie_consent', 'true', 365);
        hideConsentBanner();
    }

    function declineCookies() {
        setCookie('cookie_consent', 'strict', 365);
        hideConsentBanner();
    }

    function hideConsentBanner() {
        document.getElementById('cookie-consent').classList.add('hidden');
        document.getElementById('cookie-consent-overlay').classList.add('hidden');
    }

    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        document.cookie = `${name}=${value}; expires=${date.toUTCString()}; path=/`;
    }

    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }
</script>
