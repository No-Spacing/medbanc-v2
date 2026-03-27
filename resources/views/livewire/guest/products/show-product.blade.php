<div class="relative w-full">
    @include('components.layouts.guest.slider-products', [
        'sliderId' => 'slider1',
        'images' => [
            'images/products/slider-banner1.jpg',
            'images/products/slider-banner2.jpg',
            'images/products/slider-banner3.jpg',
        ],
    ])
    <!-- Product Details -->
    <div class="container mx-auto px-4 sm:px-8 py-8 sm:py-20">

        <div class="flex flex-col justify-between items-center mb-8">
            <h1 class="text-3xl font-bold inline-block border-b-4 border-Color-Logo-Green pb-4 mb-4 sm:mb-0">
                Product Details
            </h1>
        </div>

        <nav class="text-gray-600 text-sm mb-6">
            <ul class="flex items-center space-x-1">
                <!-- Home / Products Link -->
                <li>
                    <a href="{{ route('product-list', $category->slug) }}"
                        class="font-medium
                            {{ false ? 'text-gray-400' : 'hover:underline text-green-600 font-semibold' }}">
                        {{ $category->name ?? 'Products' }}
                    </a>
                </li>
                <li class="text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 0 1 0-1.414L10.586 10 7.293 6.707a1 1 0 1 1 1.414-1.414l4 4a1 1 0 0 1 0 1.414l-4 4a1 1 0 0 1-1.414 0z"/>
                </svg></li>

                <!-- Active Product -->
                <li class="text-green-600 font-semibold">
                    {{ $product->name }}
                </li>
            </ul>
        </nav>
        <a href="{{ url()->previous() }}" class="mb-4 px-4 py-2 bg-gray-200 rounded-lg">
            ← Back to Product List
        </a>
        <div class="p-4 bg-white shadow-lg rounded-lg">
            <!-- Centering the Images -->
            <div 
            x-data="{ image: '{{ asset($last_image->image) }}', show: false }"
            class="flex flex-col md:flex-row md:space-x-6 items-center justify-center">

                @if (count($images) > 1)
                    <div class="flex md:flex-col flex-wrap gap-2 md:gap-4 md:pr-4 items-center">
                        @foreach ($images as $image)
                            <img src="{{ asset($image->image) }}" alt="Product Name"
                                x-on:click="image = '{{ asset($image->image) }}'; show = true"
                                class="w-16 h-16 sm:w-36 sm:h-36 object-cover rounded-md shadow-md cursor-pointer
                                hover:opacity-75"
                                x-bind:class="image === '{{ asset($image->image) }}' ? 'border-4 border-Color-Logo-Green' : ''"
                            >
                        @endforeach
                    </div>
                @endif

                <!-- Large Image -->
                <div class="flex justify-center">
                    <img x-bind:src="image" onerror="this.src='{{ asset($last_image->image) }}';" alt="Product Name"
                        class="w-full md:max-w-3xl h-auto object-cover rounded-md shadow-lg">
                </div>

            </div>

            <div class="my-12 border-t border-gray-300"></div>

            <!-- Product Description (always below images) -->
            <div class="mb-12 mx-12">
                <h2 class="text-2xl font-bold">{{ $product->name }}</h2>
                <p class="text-gray-600 leading-relaxed">{!! nl2br($product->description) !!}</p>
            </div>
        </div>
    </div>
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
