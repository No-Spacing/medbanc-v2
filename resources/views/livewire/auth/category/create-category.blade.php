<div class="flex h-screen">
    @include('components.layouts.auth.navbar')

    <!-- Main Content -->
    <div class="flex-1 p-8 overflow-y-auto">
        <!-- Page Header -->
        <div class="mb-6 flex items-center justify-between">
            <!-- Left: Heading -->
            <h1 class="text-2xl font-bold text-gray-800 mb-1">Categories</h1>

            <!-- Middle: Search -->
            <div class="flex-1 max-w-md">
                <input type="text" wire:model.live="search" placeholder="Search categories..."
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <!-- Right: Button -->
            <button x-data x-on:click="$dispatch('open-create-modal')" class="bg-blue-600 text-white px-4 py-2 rounded">
                Create Category
            </button>
        </div>

        <!-- Recent Activity Table -->
        <div class="bg-white rounded-xl shadow border border-gray-100 p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left text-gray-600">
                    <thead class="bg-gray-50 text-gray-500">
                        <tr>
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Image</th>
                            <th class="px-4 py-3">Date Created</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach ($categories as $category)
                            <tr>
                                <td class="px-4 py-3">{{ $category->name }}</td>
                                <td class="px-4 py-3">
                                    <img src="{{ asset($category->image) }}" alt="Category Image" class="w-32 h-auto">
                                </td>
                                <td class="px-4 py-3">{{ $category->created_at }}</td>
                                <td class="px-4 py-3">
                                    <button 
                                        x-data 
                                        x-on:click="$dispatch('open-update-modal', { updateName: '{{ $category->name }}', updateSlug: '{{ $category->slug }}' })" 
                                        class="bg-green-600 text-white px-4 py-2 rounded"
                                    >
                                        Update
                                    </button>
                                    <button x-data x-on:click="$dispatch('open-delete-modal')" class="bg-red-600 text-white px-4 py-2 rounded">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $categories->links() }}
            </div>
        </div>

        <!-- Create Product Modal -->
        <livewire:auth.category.components.create-category-modal />

        <!-- Update Product Modal -->
        <livewire:auth.category.components.update-category-modal />

        <!-- Delete Product Modal -->
        <livewire:auth.category.components.delete-category-modal />

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
