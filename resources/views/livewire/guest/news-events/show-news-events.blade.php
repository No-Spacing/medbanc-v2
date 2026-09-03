<div>
   {{--   <!-- News Content Section -->
        {{-- <section class="container mx-auto px-6 py-12">
        <div class="bg-white shadow-lg rounded-lg p-8">
            <h2 class="text-2xl font-bold text-Medium-Sea-Green mb-4">New Product Launch</h2>
            <p class="text-gray-700 mb-4">We are excited to announce the launch of our new product line, designed to revolutionize the industry. Our team has worked tirelessly to bring you innovative solutions that meet your needs.</p>
            <p class="text-gray-700 mb-4">Key features of the new product include:</p>
            <ul class="list-disc list-inside text-gray-700 mb-4">
                <li>Advanced technology for improved performance.</li>
                <li>User-friendly design for seamless integration.</li>
                <li>Eco-friendly materials for sustainability.</li>
            </ul>
            <p class="text-gray-700">Stay tuned for more updates and be the first to experience the future with us!</p>
        </div>
    </section> --}} 

    

<div class="mt-16">
    <div class="w-full">
        <img src="{{ asset('images/news-events/news-banner.jpg') }}" alt="Full Width Image" class="w-full h-auto">
    </div>
    <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-100 mt-10 ">
        
        <!-- Images on Top in a Horizontal Axis with Full Height Capability -->
        <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-100 ">
        @php
            $images = $newsEvent->image ?? [];
            $imageCount = is_array($images) ? count($images) : 0;
        @endphp

        @if ($imageCount > 0)
            {{-- 1 IMAGE --}}
            @if ($imageCount === 1)
                <div class="max-w-6xl mx-auto px-4 mt-6 mb-6">
                    <div class="group overflow-hidden rounded-2xl">
                        <img
                            src="{{ asset($images[0]) }}"
                            alt="{{ $newsEvent->title }}"
                            class="w-full h-[340px] md:h-[350px] object-cover transition-transform duration-500 group-hover:scale-[1.03]"
                        >
                    </div>
                </div>
            @elseif ($imageCount === 2)
            {{-- 2 IMAGES --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-6xl mx-auto mt-6 mb-6">
                    @foreach ($images as $image)
                        <div class="group overflow-hidden rounded-2xl bg-white shadow-sm">
                            <img
                                src="{{ asset($image) }}"
                                alt="{{ $newsEvent->title }}"
                                class="w-full h-[400px] md:h-[400px] object-cover transition-transform duration-500 group-hover:scale-[1.03]"
                            >
                        </div>
                    @endforeach
                </div>


            {{-- 3 IMAGES --}}
            @elseif ($imageCount === 3)

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-6xl mx-auto mt-6 mb-6">

                    {{-- Large image --}}
                    <div class="group overflow-hidden rounded-2xl bg-white shadow-sm md:row-span-2">
                        <img
                            src="{{ asset($images[0]) }}"
                            alt="{{ $newsEvent->title }}"
                            class="w-full h-[400px] md:h-[600px] object-cover transition-transform duration-500 group-hover:scale-[1.03]"
                        >
                    </div>

                    {{-- Two smaller images --}}
                    <div class="group overflow-hidden rounded-2xl bg-white shadow-sm">
                        <img
                            src="{{ asset($images[1]) }}"
                            alt="{{ $newsEvent->title }}"
                            class="w-full h-[290px] object-cover transition-transform duration-500 group-hover:scale-[1.03]"
                        >
                    </div>

                    <div class="group overflow-hidden rounded-2xl bg-white shadow-sm">
                        <img
                            src="{{ asset($images[2]) }}"
                            alt="{{ $newsEvent->title }}"
                            class="w-full h-[290px] object-cover transition-transform duration-500 group-hover:scale-[1.03]"
                        >
                    </div>

                </div>


            {{-- 4 IMAGES --}}
            @elseif ($imageCount === 4)

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-6xl mx-auto">
                    @foreach ($images as $image)
                        <div class="group overflow-hidden rounded-2xl bg-white shadow-sm">
                            <img
                                src="{{ asset($image) }}"
                                alt="{{ $newsEvent->title }}"
                                class="w-full h-[280px] md:h-[360px] object-cover transition-transform duration-500 group-hover:scale-[1.03]"
                            >
                        </div>
                    @endforeach
                </div>


            {{-- 5 IMAGES --}}
            @elseif ($imageCount === 5)

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-w-6xl mx-auto">

                {{-- Large feature --}}
                <div class="group overflow-hidden rounded-2xl bg-white shadow-sm md:row-span-2">
                    <img
                        src="{{ asset($images[0]) }}"
                        alt="{{ $newsEvent->title }}"
                        class="w-full h-[280px] md:h-[580px] object-cover transition-transform duration-500 group-hover:scale-[1.03]"
                    >
                </div>

                {{-- Images 2 - 5 --}}
                @for ($i = 1; $i < 5; $i++)
                    <div class="group overflow-hidden rounded-2xl bg-white shadow-sm">
                        <img
                            src="{{ asset($images[$i]) }}"
                            alt="{{ $newsEvent->title }}"
                            class="w-full h-[280px] md:h-[280px] object-cover transition-transform duration-500 group-hover:scale-[1.03]"
                        >
                    </div>
                @endfor

            </div>


            {{-- 6+ IMAGES --}}
            @else

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-6xl mx-auto">
                    @foreach ($images as $image)
                        <div class="group overflow-hidden rounded-2xl bg-white shadow-sm">
                            <img
                                src="{{ asset($image) }}"
                                alt="{{ $newsEvent->title }}"
                                class="w-full h-[280px] object-cover transition-transform duration-500 group-hover:scale-[1.03]"
                            >
                        </div>
                    @endforeach
                </div>

            @endif

        @else

        {{-- NO IMAGE --}}
        <div class="max-w-4xl mx-auto">
            <div class="overflow-hidden rounded-2xl bg-white shadow-sm">
                <img
                    src="https://via.placeholder.com/1200x700?text=No+Image"
                    alt="No Image"
                    class="w-full h-[400px] object-cover"
                >
            </div>
        </div>

    @endif
      <div class="max-w-6xl mx-auto mt-6 mb-6 px-6 md:p-12">
            
            <!-- Date -->
            <div class="flex items-center text-gray-500 text-sm gap-2 mb-3">
                <i class="fas fa-calendar-alt text-Color-Logo-Green"></i>
                <span>{{ \Carbon\Carbon::parse($newsEvent->date)->format('F d, Y') }}</span>
            </div>

            <!-- Title with Left Accent Border -->
            <h2 class="text-3xl font-bold text-gray-900 leading-tight border-l-4 border-Color-Logo-Green pl-4 mt-2">
                {{ $newsEvent->title }}
            </h2>

            <!-- Description / Body Text -->
            <div class="mt-6 text-gray-700 leading-relaxed space-y-4 text-base md:text-lg">
                {{-- {!! nl2br(e($newsEvent->description)) !!} --}}
                {!! $newsEvent->description !!}
            </div>

            <!-- Footer / Back Link -->
            <div class="mt-10 pt-6 border-t border-gray-100 flex items-center justify-between">
                <span class="text-xs uppercase tracking-wider text-gray-400 font-semibold">News & Events</span>
                <a href="{{ url()->previous() }}" class="text-sm font-medium text-Color-Logo-Green hover:underline inline-flex items-center">
                    &larr; Back to updates
                </a>
            </div>

        </div>

    </div>
    </div>
        <!-- Content on the Bottom -->
      
</div>

    <!-- Related Articles -->
    <div class="bg-[#F9F9F9] py-8 px-16 sm:px-8 md:px-10">
        <div class="max-w-7xl mx-auto mt-8">
            @if ($relatedArticles->isNotEmpty())
                <div class="bg-[#F9F9F9] py-8 px-6 mt-12">
                    <h3 class="text-xl font-bold mb-4">Related Articles</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach ($relatedArticles as $article)
                            <a href="{{ route('show.news.events', $article->id) }}"
                                class="hover:bg-gray-200 hover:rounded-lg">
                                <div class="rounded-lg overflow-hidden">
                                    @if ($article->image && file_exists(public_path($article->image[0])))
                                        <img src="{{ asset($article->image[0]) }}"
                                            alt="{{ $article->title }}" class="w-full h-48 object-cover">
                                    @else
                                        <img src="https://via.placeholder.com/600x400?text=No+Image" alt="No Image"
                                            class="w-full h-48 object-cover">
                                    @endif
                                    <div class="p-4">
                                        <p class="text-gray-500 text-sm">
                                            {{ \Carbon\Carbon::parse($article->date)->format('F d, Y') }}
                                        </p>
                                        <h4 class="text-lg font-bold mt-2">{{ $article->title }}</h4>
                                        <p class="mt-2 text-gray-700">
                                            {{ Str::limit($article->content, 100, '...') }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
