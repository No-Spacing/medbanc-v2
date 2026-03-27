<div>
    <!-- Search Input -->
    <div class="mb-4">
        <input type="text" wire:model.live="search" placeholder="Search by job title"
            class="mt-1 block w-full p-2 border border-gray-300 rounded-lg">
    </div>

    <!-- Job Listings -->
    @if ($careers->count() > 0)
        @foreach ($careers as $career)
            <button 
                {{-- wire:click="selectCareer({{ $career->id }})" --}}
                x-data x-on:click="$dispatch('open-career-details', 
                { 
                    title: '{{ $career->title }}', 
                    created_at: '{{ $career->created_at->format('F d Y') }}' ,
                    address: '{{ $career->address }}',
                    employment_type: '{{ $career->employment_type }}',
                    summary: '{{ $career->summary }}',
                    education: @js($career->education),
                    responsibilities: @js(nl2br($career->responsibilities)),
                    experience: @js(nl2br($career->experience)),
                    eligibility: @js($career->eligibility),
                    competencies: @js(nl2br($career->competencies)),
                    work_conditions: @js(nl2br($career->work_conditions))
                })"
                class="career-item text-left p-4 hover:bg-gray-200 cursor-pointer border-b border-gray-300 last:border-b-0"
                wire:key="career-{{ $career->id }}">
                <h3 class="font-semibold">{{ $career->title }}</h3>
                <p class="text-sm text-gray-600 mb-2">{{ $career->address }}</p>
                <p class="text-sm text-gray-600 mb-2">{{ $career->employment_type }}</p>
                <span class="text-xs bg-Color-Logo-Green text-white px-2 py-1 rounded-full">
                    {{ $career->availability }} Available
                </span>
            </button>
        @endforeach
    @else
        <p class="text-gray-600 text-center py-4">No positions available...</p>
    @endif

    <!-- Pagination -->
    <div class="mt-3">
        {{ $careers->links() }}
    </div>
</div>
