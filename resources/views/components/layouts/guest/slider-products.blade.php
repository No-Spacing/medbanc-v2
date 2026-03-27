<div class="slider w-full overflow-hidden relative {{ $sliderId === 'slider1' ? 'pt-16' : '' }}"  id="{{ $sliderId }}">
    <div class="slides flex transition-transform duration-500 ease-in-out">
        @foreach ($images as $image)
            <div class="slide min-w-full">
                <img src="{{ asset($image) }}" alt="Product Slider" class="w-full h-auto object-cover">
            </div>
        @endforeach
    </div>
</div>

<script>
    function initSlider(sliderId) {
        const slider = document.querySelector(`#${sliderId}`);
        if (!slider) return;

        const slides = slider.querySelector('.slides');
        const totalSlides = slides.children.length;
        let currentIndex = 0;

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        setInterval(nextSlide, 5000);
    }

    document.addEventListener("DOMContentLoaded", function() {
        initSlider("slider1");
        initSlider("slider2");
    });
</script>
