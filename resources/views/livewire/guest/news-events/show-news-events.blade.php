<div>
     <!-- News Content Section -->
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

    <div class="py-24 px-16 sm:px-8 md:px-10">
        <!-- News Section -->
        <div class="max-w-8xl mx-auto rounded-lg overflow-hidden">
            <div class="md:flex">
                <!-- Image on the left -->
                <div class="md:w-2/3">
                    @if (isset($newsEvent->image))
                        @foreach ($newsEvent->image as $image)
                            <img src="{{ asset($image) }}" alt="{{ $newsEvent->title }}" class="w-full h-[400] object-cover py-[3.2rem]">
                        @endforeach
                    @else
                        <img src="https://via.placeholder.com/900x540?text=No+Image" alt="No Image"
                            class="w-full h-full object-cover">
                    @endif
                </div>

                <!-- Content on the right -->
                <div class="md:w-2/3 p-6">
                    <!-- Date -->
                    <p class="text-gray-500 text-sm">
                        <i class="fas fa-calendar-alt"></i>
                        {{ \Carbon\Carbon::parse($newsEvent->date)->format('F d, Y') }}
                    </p>

                    <!-- Title with left border -->
                    <h2 class="text-2xl font-bold mt-2 border-l-4 border-Color-Logo-Green pl-4">
                        {{ $newsEvent->title }}
                    </h2>

                    <!-- Paragraph -->
                    <p class="mt-4 text-gray-700">
                        {!! nl2br(e($newsEvent->description)) !!}
                    </p>
                </div>
            </div>
        </div>
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
