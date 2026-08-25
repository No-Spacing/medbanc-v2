<div 
    id="createModal" 
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
    x-data="{ createModal: false }"
    x-show="createModal"
    x-on:open-create-modal.window="createModal = true"
    x-on:close-create-modal.window="createModal = false"
    x-cloak
>
    <div class="bg-white rounded-lg shadow-lg p-6 w-11/12 max-w-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Add News and Event</h2>
            <button x-on:click="createModal = false" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
        </div>

        <!-- Form -->
        <form wire:submit.prevent="save">
            <!-- Name -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1" for="name">Title</label>
                <input type="text" id="name" name="name" wire:model="title" 
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                <div>
                    @error('title') <span class="error">{{ $message }}</span> @enderror 
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1" for="description">Description</label>
                <textarea id="description" name="description" wire:model="description" 
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    rows="4"></textarea>
                <div>
                    @error('description') <span class="error">{{ $message }}</span> @enderror 
                </div>
            </div>

            <!-- Status -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1" for="category_id">Status</label>
                <select id="status" name="status" wire:model="status" 
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
                    <option value="">Select Status</option>
                    <option value="enable">Enable</option>
                    <option value="disable">Disable</option>
                </select>
            </div>

            <!-- Image -->
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image</label>

                <!-- Upload Button -->
                <label for="image"
                    class="cursor-pointer inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow-sm hover:bg-blue-700 transition">
                    Upload Image
                </label>

                <!-- Hidden File Input -->
                <input type="file" id="image" name="image" class="hidden" wire:model="image" multiple>

                <!-- Image Preview Below Button -->
                @if ($image)
                    <div class="mt-4 grid grid-cols-2 gap-4">
                        @foreach ($image as $photo)
                            <img 
                                src="{{ $photo->temporaryUrl() }}" 
                                class="w-full h-40 object-cover rounded border"
                            >
                        @endforeach
                    </div>
                @endif
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