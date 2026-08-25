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

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10" style="margin-top: 100px;">
    <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-100">
        
        <!-- Images on Top in a Horizontal Axis with Full Height Capability -->
        <div class="w-full bg-gray-50 p-6 border-b border-gray-100">
            @if (!empty($newsEvent->image) && is_array($newsEvent->image) && count($newsEvent->image) > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 items-stretch">
                    @foreach ($newsEvent->image as $image)
                        <div class="rounded-xl overflow-hidden shadow-sm bg-white border border-gray-200 flex flex-col">
                            <img src="{{ asset($image) }}" alt="{{ $newsEvent->title }}" class="w-full h-full min-h-[250px] max-h-[350px] object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                    @endforeach
                </div>
            @else
                <div class="rounded-xl overflow-hidden shadow-sm bg-white border border-gray-200 max-w-md mx-auto">
                    <img src="https://via.placeholder.com/900x540?text=No+Image" alt="No Image" class="w-full h-full min-h-[250px] object-cover">
                </div>
            @endif
        </div>

        <!-- Content on the Bottom -->
        <div class="p-8 md:p-12">
            
            <!-- Date -->
            <div class="flex items-center text-gray-500 text-sm space-x-2 mb-3">
                <i class="fas fa-calendar-alt text-Color-Logo-Green"></i>
                <span>{{ \Carbon\Carbon::parse($newsEvent->date)->format('F d, Y') }}</span>
            </div>

            <!-- Title with Left Accent Border -->
            <h2 class="text-3xl font-extrabold text-gray-900 leading-tight border-l-4 border-Color-Logo-Green pl-4">
                {{ $newsEvent->title }}
            </h2>

            <!-- Description / Body Text -->
            <div class="mt-6 text-gray-700 leading-relaxed space-y-4 text-base md:text-lg">
                {!! nl2br(e($newsEvent->description)) !!}
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
