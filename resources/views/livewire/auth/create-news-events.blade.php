<div class="flex h-screen">
    @include('components.layouts.auth.navbar')

    <!-- Main Content -->
    <div class="flex-1 p-8 overflow-y-auto">
        <!-- Page Header -->
        <div class="mb-6 flex items-center justify-between">
            <!-- Left: Heading -->
            <h1 class="text-2xl font-bold text-gray-800 mb-1">News and Events</h1>

            <!-- Middle: Search -->
            <div class="flex-1 max-w-md">
                <input type="text" wire:model.live="search" placeholder="Search News or Events..."
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <!-- Right: Button -->
            <button onclick="createModal()" class="bg-blue-600 text-white px-4 py-2 rounded">
                Create News and Event
            </button>
        </div>


        <!-- Recent Activity Table -->
        <div class="bg-white rounded-xl shadow border border-gray-100 p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left text-gray-600">
                    <thead class="bg-gray-50 text-gray-500">
                        <tr>
                            <th class="px-4 py-3">Title</th>
                            <th class="px-4 py-3">Description</th>
                            <th class="px-4 py-3">Image</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Date posted</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach($news_events as $item)
                        <tr>
                            <td class="px-4 py-3">{{ $item->title }}</td>
                            <td class="px-4 py-3 max-w-sm overflow-hidden text-ellipsis whitespace-nowrap">
                                {{ $item->description }}
                            <td class="px-4 py-3">
                                <img src="{{ asset($item->description) }}" alt="Category Image"
                                    class="w-32 h-auto">
                            </td>
                            <td class="px-4 py-3">
                                <span class="inline-block px-2 py-1 text-xs font-medium text-green-600 bg-green-100 rounded">{{ $item->status }}</span>
                            </td>
                            <td class="px-4 py-3">{{ $item->date }}</td>
                            <td class="px-4 py-3">
                                <button onclick="updateModal()" class="bg-green-600 text-white px-4 py-2 rounded">
                                    Update
                                </button>
                                <button onclick="deleteModal()" class="bg-red-600 text-white px-4 py-2 rounded">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Create Product Modal -->
        <div id="addModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-lg shadow-lg p-6 w-11/12 max-w-lg">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold">Add News and Event</h2>
                    <button onclick="createModal()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                </div>

                <!-- Form -->
                <form>
                    <!-- Name -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="name">Title</label>
                        <input type="text" id="name" name="name"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="description">Description</label>
                        <textarea id="description" name="description"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            rows="4" required></textarea>
                    </div>

                    <!-- Category -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="category_id">Status</label>
                        <select id="category_id" name="category_id"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                            <option value="1">Enable</option>
                            <option value="2">Disable</option>
                        </select>
                    </div>

                    <!-- Image -->
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image</label>

                        <!-- Upload Button -->
                        <label for="image"
                            class="cursor-pointer inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow-sm hover:bg-blue-700 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1M12 12V4m0 0L8 8m4-4l4 4" />
                            </svg>
                            Upload Image
                        </label>

                        <!-- Hidden File Input -->
                        <input type="file" id="image" name="image" class="hidden"
                            onchange="previewAddImage(event)">

                        <!-- Image Preview Below Button -->
                        <div class="mt-4">
                            <img id="imageAddPreview" src="" alt=""
                                class="hidden w-auto h-64 object-cover rounded border" />
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="text-right">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Update Product Modal -->
        <div id="updateModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-lg shadow-lg p-6 w-11/12 max-w-lg">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold">Update News and Event</h2>
                    <button onclick="updateModal()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                </div>

                <!-- Form -->
                <form>
                    <!-- Name -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="name">Title</label>
                        <input type="text" id="name" name="name"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="description">Description</label>
                        <textarea id="description" name="description"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            rows="4" required></textarea>
                    </div>

                    <!-- Category -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="category_id">Status</label>
                        <select id="category_id" name="category_id"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                            <option value="1">Enable</option>
                            <option value="2">Disable</option>
                        </select>
                    </div>


                    <!-- Image -->
                    <div class="mb-4">
                        <label for="updateImage" class="block text-sm font-medium text-gray-700 mb-2">Image</label>

                        <!-- Upload Button -->
                        <label for="updateImage"
                            class="cursor-pointer inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow-sm hover:bg-blue-700 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1M12 12V4m0 0L8 8m4-4l4 4" />
                            </svg>
                            Upload Image
                        </label>

                        <!-- Hidden File Input -->
                        <input type="file" id="updateImage" name="updateImage" class="hidden"
                            onchange="previewUpdateImage(event)">

                        <!-- Image Preview Below Button -->
                        <div class="mt-4">
                            <img id="imageUpdatePreview" src="" alt=""
                                class="hidden w-auto h-64 object-cover rounded border" />
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="text-right">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Delete Product Modal -->
        <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <!-- Modal content -->
            <div class="bg-white rounded-2xl p-6 w-full max-w-md shadow-lg">
                <h2 class="text-xl font-semibold mb-4">Are you sure?</h2>
                <p class="mb-6">Do you want to proceed with this action?</p>
                <div class="flex justify-end gap-4">
                    <button onclick="handleYes()"
                        class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg">
                        Yes
                    </button>
                    <button onclick="deleteModal()"
                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">
                        No
                    </button>
                </div>
            </div>
        </div>

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
    function createModal() {
        const modal = document.getElementById('addModal');
        modal.classList.toggle('hidden');
    }

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
