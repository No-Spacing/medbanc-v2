<div 
    id="createModal"
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
    x-data="{ createModal: false }" 
    x-show="createModal" 
    x-on:open-create-modal.window="createModal = true"
    x-cloak
>
            <div class="bg-white rounded-lg shadow-lg p-6 w-11/12 max-w-lg">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold">Add Category</h2>
                    <button x-on:click="createModal = false" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                </div>

                <!-- Form -->
                <form wire:submit="save">
                    <!-- Name -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="name">Category Name</label>
                        <input type="text" id="name" name="name"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>

                    {{-- Slug --}}
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="name">Slug</label>
                        <input type="text" id="slug" name="slug"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>

                    <!-- Category -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="category_id">Category</label>
                        <select id="category_id" name="category_id"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                            <option value="">Select category</option>
                            <option value="1">Medicine</option>
                            <option value="2">Supplements</option>
                            <option value="3">Equipment</option>
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
                                class="hidden w-full h-auto object-cover rounded border" />
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