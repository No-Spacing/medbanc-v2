<style>
    .fade {
        opacity: 0;
        transition: opacity 1s ease-in-out;
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 0; /* Ensure non-active slides are at the back */
    }

    .active {
        opacity: 1;
        z-index: 1; /* Bring the active slide to the front */
    }

    /* Ensure buttons stay on top of everything */
    .slider-button {
        z-index: 10; /* Higher than slides */
        position: absolute;
    }
</style>

<div class="relative w-full h-[800px] overflow-hidden mt-16">
    <div class="absolute inset-0 w-full h-full fade active">
        <img src="images/home/banner1.jpg" class="w-full h-full object-cover object-center" />

        <!-- Text Container -->
        <div class="absolute inset-0 flex items-center justify-start text-white px-6 sm:px-10 md:px-16 lg:px-24 xl:px-32 h-full text-left">
            <div class="max-w-lg">
                <h1 class="text-3xl text-black sm:text-6xl font-bold leading-tight">
                    Excellence Built on
                    <span class="text-Color-Logo-Green">Experience</span>
                </h1>
                <p class="text-sm sm:text-lg text-gray-800 mt-2 break-words whitespace-normal">
                    Medbanc Inc. is a leading provider of cutting-edge medical equipment, dedicated to elevating healthcare standards across the Philippines.
                </p>
                <a href="/about" class="mt-4 bg-Color-Logo-Green hover:bg-AColor-Logo-Green text-white px-4 py-2 rounded-lg font-semibold inline-block">
                    Learn More
                </a>
            </div>
        </div>
    </div>

    <div class="absolute inset-0 w-full h-full fade">
        <img src="images/home/banner2.jpg" class="w-full h-full object-cover object-center" />

        <!-- Text Container -->
        <div class="absolute inset-0 flex items-center justify-start text-white px-6 sm:px-10 md:px-16 lg:px-24 xl:px-32 h-full text-left">
            <div class="max-w-lg">
                <h1 class="text-3xl text-black sm:text-6xl font-bold leading-tight">
                    Create Growth with
                    <span class="text-Color-Logo-Green">Opportunities</span>
                </h1>
                <p class="text-sm sm:text-lg text-gray-800 mt-2 break-words whitespace-normal">
                    Create lasting growth by seizing opportunities, building pathways for success and continuous development.
                </p>
                <a href="/career" class="mt-4 bg-Color-Logo-Green hover:bg-AColor-Logo-Green text-white px-4 py-2 rounded-lg font-semibold inline-block">
                    Apply Now
                </a>
            </div>
        </div>
    </div>

    <div class="absolute inset-0 w-full h-full fade">
        <img src="images/home/banner1.jpg" class="w-full h-full object-cover object-center" />

        <!-- Text Container -->
        <div class="absolute inset-0 flex items-center justify-start text-white px-6 sm:px-10 md:px-16 lg:px-24 xl:px-32 h-full text-left">
            <div class="max-w-lg">
                <h1 class="text-3xl text-black sm:text-6xl font-bold leading-tight">
                    Excellence Built on
                    <span class="text-Color-Logo-Green">Experience</span>
                </h1>
                <p class="text-sm sm:text-lg text-gray-800 mt-2 break-words whitespace-normal">
                    Medbanc Inc. is a leading provider of cutting-edge medical equipment, dedicated to elevating healthcare standards across the Philippines.
                </p>
                <a href="/about" class="mt-4 bg-Color-Logo-Green hover:bg-AColor-Logo-Green text-white px-4 py-2 rounded-lg font-semibold inline-block">
                    Learn More
                </a>
            </div>
        </div>
    </div>

    <!-- Left Button -->
    <button class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full slider-button" onclick="prevSlide()">❮</button>

    <!-- Right Button -->
    <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full slider-button" onclick="nextSlide()">❯</button>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.fade');

    function showSlide() {
        slides.forEach((slide, index) => {
            slide.classList.remove('active');
            if (index === currentSlide) {
                slide.classList.add('active');
            }
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide();
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide();
    }

    // Ensure only the first slide is active on page load
    document.addEventListener("DOMContentLoaded", () => {
        slides.forEach((slide, index) => {
            slide.classList.remove('active');
            if (index === 0) {
                slide.classList.add('active');
            }
        });
    });

    setInterval(nextSlide, 8000);
</script>
