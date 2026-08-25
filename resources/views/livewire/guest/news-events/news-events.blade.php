<div>
    <div class="mt-16">
        <div class="w-full">
            <img src="images/news-events/news-banner.jpg" alt="Full Width Image" class="w-full h-auto">
        </div>


        <!-- News Section -->
        <section class="container mx-auto my-12 px-4">
            <h2 class="text-3xl font-bold mb-8">Latest News</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($newsEvents as $news)
                    <!-- News Card -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        @if ($news->image[0] && file_exists(public_path($news->image[0])))
                            <img src="{{ asset($news->image[0]) }}" alt="{{ $news->title }}"
                                class="w-full h-[300px] object-cover rounded-t-lg">
                        @else
                            <img src="https://via.placeholder.com/900x540?text=No+Image" alt="No Image"
                                class="w-full h-[200px] object-cover rounded-t-lg">
                        @endif
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">{{ $news->title }}</h3>
                            <p class="text-gray-500 text-sm mb-4">
                                <i class="fas fa-calendar-alt"></i>
                                {{ \Carbon\Carbon::parse($news->date)->format('F d, Y') }}
                            </p>
                            <a href="{{ route('show.news.events', $news->id) }}"
                                class="px-6 py-2 rounded text-white bg-Color-Logo-Green hover:bg-AColor-Logo-Green transition duration-300">
                                Read More
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            
            @if (!$newsEvents)
                <h3 class="text-center text-xl font-medium">Coming soon...</h3>
            @endif
        </section>
    </div>

    @include('components.layouts.guest.join-team')

</div>
