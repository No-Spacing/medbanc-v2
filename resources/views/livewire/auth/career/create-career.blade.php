<div class="flex h-screen">
    @include('components.layouts.auth.navbar')

    <!-- Main Content -->
    <div class="flex-1 p-8 overflow-y-auto">
        <!-- Page Header -->
        <div class="mb-6 flex items-center justify-between">
            <!-- Left: Heading -->
            <h1 class="text-2xl font-bold text-gray-800 mb-1">Careers</h1>

            <!-- Middle: Search -->
            <div class="flex-1 max-w-md">
                <input type="text" wire:model.live="search" placeholder="Search Careers..."
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <!-- Right: Button -->
            <button x-data x-on:click="$dispatch('open-create-modal')" class="bg-blue-600 text-white px-4 py-2 rounded">
                Create New Career
            </button>
        </div>


        <!-- Recent Activity Table -->
        <div class="bg-white rounded-xl shadow border border-gray-100 p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left text-gray-600">
                    <thead class="bg-gray-50 text-gray-500">
                        <tr>
                            <th class="px-4 py-3">Title</th>
                            <th class="px-4 py-3">Education</th>
                            <th class="px-4 py-3">Experience</th>
                            <th class="px-4 py-3">Eligibility</th>
                            <th class="px-4 py-3">Address</th>
                            <th class="px-4 py-3">Availability</th>
                            <th class="px-4 py-3">Employment Type</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Created Date</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach($careers as $career)
                        <tr>
                            <td class="px-4 py-3">{{ $career->title }}</td>
                            <td class="px-4 py-3">{{ $career->education }}</td>
                            <td class="px-4 py-3 max-w-lg overflow-hidden text-ellipsis">
                                {{ $career->experience }}
                            </td>
                            <td class="px-4 py-3">{{ $career->eligibility }}</td>
                            <td class="px-4 py-3">{{ $career->address }}</td>
                            <td class="px-4 py-3">{{ $career->availability }}</td>
                            <td class="px-4 py-3">{{ $career->employment_type }}</td>
                            <td class="px-4 py-3">
                                <span class="inline-block px-2 py-1 text-xs font-medium text-green-600 bg-green-100 rounded">Enabled</span>
                            </td>
                            <td class="px-4 py-3">{{ $career->created_at }}</td>
                            <td class="px-4 py-3">
                                <button x-data x-on:click="$dispatch('open-update-modal', { 
                                    updateTitle: '{{ $career->title }}',
                                    updateSummary: '{{ $career->summary }}',
                                    updateResponsibility: @js($career->responsibilities),
                                    updateEducation: @js($career->education) 
                                })" class="bg-green-600 text-white px-4 py-2 rounded my-2">
                                    Update
                                </button>
                                <button x-data x-on:click="$dispatch('open-delete-modal')" class="bg-red-600 text-white px-4 py-2 my-2 rounded">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                </table>
                {{ $careers->links() }}
            </div>   
        </div>

        <!-- Create Product Modal -->
        <livewire:auth.career.components.create-career-modal />

        <!-- Update Product Modal -->
        <livewire:auth.career.components.update-career-modal />

        <!-- Delete Product Modal -->
        <livewire:auth.career.components.delete-career-modal />

    </div>
</div>

<script>
    // add product image
    function previewAddImage(event) {
        const [file] = event.target.files;
        const preview = document.getElementById('imageAddPreview');
        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.classList.remove('hidden');
        }
    }

    // update product image
    function previewUpdateImage(event) {
        const [file] = event.target.files;
        const preview = document.getElementById('imageUpdatePreview');
        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.classList.remove('hidden');
        }
    }
</script>
<script>
    function updateModal() {
        const modal = document.getElementById('updateModal');
        modal.classList.toggle('hidden');
    }

    function deleteModal() {
        const modal = document.getElementById("deleteModal");
        modal.classList.toggle("hidden");
        modal.classList.toggle("flex");
    }

    function handleYes() {
        deleteModal();
        // Add your custom action here
    }
</script>
