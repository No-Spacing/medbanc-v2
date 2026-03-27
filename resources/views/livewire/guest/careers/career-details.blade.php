<div
    x-data="{ careerDetails: false, items: '',}"
    x-on:open-career-details.window="careerDetails = true"
    @open-career-details.window="items = $event.detail"
    x-cloak
>
    <div x-show="!careerDetails">
        <h2 class="text-2xl font-semibold mb-2">Select a job</h2>
        <p class="text-gray-700">Click on a job from the list.</p>
    </div>
    <div x-show="careerDetails">
        <div x-show="careerDetails">
            <!-- Flex container for title and date -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold" x-text="items.title"></h2>
                <p class="text-sm text-gray-600" x-text="items.created_at"></p>
            </div>
            <p class="text-sm text-gray-600 mb-2" x-text="items.address"></p>
            <p class="text-sm text-gray-600 mb-4" x-text="items.employment_type"></p>
            <button onclick="openModal()"
                class="bg-Color-Logo-Green text-white px-6 py-2 rounded-lg hover:bg-AColor-Logo-Green transition duration-300">
                Apply Now
            </button>
            <div class="border-t border-gray-300 my-4"></div>
            <!-- Job Description Section -->
            <section class="container mx-auto">

                <!-- Job Description -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold mb-2">About the Role</h3>
                    <p class="text-gray-700 leading-relaxed" x-text="items.summary"></p>
                </div>

                <!-- Responsibilities -->
                <div class="mb-8" >
                    <h3 class="text-xl font-semibold mb-2">Key Responsibilities</h3>
                    <ul class="list-disc list-inside text-gray-700 leading-relaxed">
                        <template x-for="(line, index) in items.responsibilities?.split('<br />')" :key="index">
                            <li x-html="line.trim()"></li>
                        </template>
                    </ul>
                </div>

                <!-- Requirements -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold mb-2">Requirements</h3>
                    <ul class="list-disc list-inside text-gray-700 leading-relaxed">
                        <li x-text="items.education"></li>

                        <template x-for="(line, index) in items.experience?.split('<br />')" :key="index">
                            <li x-html="line.trim()"></li>
                        </template>

                        <template x-for="(line, index) in items.competencies?.split('<br />')" :key="index">
                            <li x-html="line.trim()"></li>
                        </template>

                        {{-- {!! $career['eligibility'] ? "" : '' !!} --}}

                </div>

                <!-- Work Condition -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold mb-2">Work Conditions</h3>
                    <ul class="list-disc list-inside text-gray-700 leading-relaxed">
                        <template x-for="(line, index) in items.work_conditions?.split('<br />')" :key="index">
                            <li x-html="line.trim()"></li>
                        </template>
                        {{-- @foreach (explode("\n", $career['work_conditions']) as $responsibility)
                            <li>{{ trim($responsibility, '• ') }}</li>
                        @endforeach --}}
                </div>
            </section>
        </div> 
    </div>
</div>

<script>
    function lines(text) {
        const line = text.split("<br />");
        let lines = "";
        for (let i = 0; i < line.length; i++) {
            lines += '<li x-text="`' + line[i] + '`"></li>';
        }
        return lines;
    }
</script>

