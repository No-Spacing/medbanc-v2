<div class="container mx-auto px-4 sm:px-8 py-8 sm:py-20">
    <div>
        <div class="flex flex-col justify-between items-center mb-8">
            <h1 class="text-3xl font-bold inline-block border-b-4 border-Color-Logo-Green pb-4 mb-4 sm:mb-0">
                Product Categories
            </h1>
        </div>
        <!-- Category Selection -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 p-4">
            @foreach ($categories as $category)
                <a href="{{ route('product-list', $category->slug ?? '') }}" class="rounded-lg shadow-lg bg-white p-4 transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-xl">
                    <img src="{{ $category->image }}" alt="{{ $category->name }}"
                        class="w-full h-auto object-cover rounded-md">
                    <p class="mt-4 text-lg font-semibold text-center">{{ $category->name }}</p>
                </a>
            @endforeach
        </div>
    </div>
</div>