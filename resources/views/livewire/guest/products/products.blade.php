<div>
    <div class="relative w-full">
        @include('components.layouts.guest.slider-products', [
            'sliderId' => 'slider1',
            'images' => [
                'images/products/slider-banner1.jpg',
                'images/products/slider-banner2.jpg',
                'images/products/slider-banner3.jpg',
            ],
        ])

        @livewire('guest.products.category-list')

        @include('components.layouts.guest.slider-products', [
            'sliderId' => 'slider2',
            'images' => [
                'images/products/slider-banner4.jpg',
                'images/products/slider-banner5.jpg',
                'images/products/slider-banner6.jpg',
            ],
        ])

        @include('components.layouts.guest.brands')
    </div>
</div>
