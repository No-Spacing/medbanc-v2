<div class="relative w-full">
    @include('components.layouts.guest.slider-products', [
        'sliderId' => 'slider1',
        'images' => [
            'images/products/slider-banner1.jpg',
            'images/products/slider-banner2.jpg',
            'images/products/slider-banner3.jpg',
        ],
    ])
    <div class="container mx-auto px-4 sm:px-8 py-8 sm:py-20">

        <div class="flex flex-col justify-between items-center mb-8">
            <h1 class="text-3xl font-bold inline-block border-b-4 border-Color-Logo-Green pb-4 mb-4 sm:mb-0">
                Products
            </h1>
        </div>

        <nav class="text-gray-600 text-sm mb-6">
            <ul class="flex items-center space-x-1">
                <!-- Home / Products Link -->
                <li class="text-green-600 font-semibold">
                    {{ $category->name }}
                </li>
            </ul>
        </nav>

        <a href="{{ route('product') }}" class="mb-4 px-4 py-2 bg-gray-200 rounded-lg">
            ← Back to Categories
        </a>
        <h2 class="text-xl font-bold text-center mb-4">{{ $category->name }}</h2>

        @if($products->isEmpty())
            <p class="text-gray-500">No products available in this category.</p>
        @endif

        <div wire:key="product-list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($products as $product)
                <a href="{{ route('show-product', ['category_slug' => $category->slug, 'product_id' => $product->id]) }}" wire:key="product-{{ $product->id }}"
                    class="rounded-lg shadow-lg bg-white p-4 transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-xl">
                    <img src="{{ asset($product->product_image->image) }}" alt="{{ $product->name }}"
                        class="w-full h-auto object-cover rounded-md">
                    <p class="mt-4 text-lg font-semibold text-center">{{ $product->name }}</p>
                </a>
            @endforeach
        </div>

        <!-- Pagination Controls -->
        <div class="mt-6">
            {{ $products->links() }}
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