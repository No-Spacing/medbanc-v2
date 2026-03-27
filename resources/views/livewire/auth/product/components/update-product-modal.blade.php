<div 
    id="updateModal" 
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
    x-data="{ updateModal: false, items: '' }"
    x-show="updateModal"
    x-on:open-update-modal.window="updateModal = true"
    x-on:close-update-modal.window="updateModal = false"
    x-cloak
    @open-update-modal.window="items = $event.detail"
    
>
    <div class="bg-white rounded-lg shadow-lg p-6 w-11/12 max-w-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Update Category</h2>
            <button x-on:click="updateModal = false;" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
        </div>

        <!-- Form -->
        <form wire:submit.prevent="update">
            
            <!-- Name -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1" for="uname">Name</label>
                <input type="text" id="uname" wire:model="updateName" x-model="items.updateName"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <!-- Category -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1" for="ucategory_id">Category</label>
                <select id="ucategory_id"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                    <option value="" selected disabled x-bind:label="items.updateCategory"></option>
                    <option value="1">Medicine</option>
                    <option value="2">Supplements</option>
                    <option value="3">Equipment</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1" for="description">Description</label>
                <textarea id="description" name="description" x-bind:value="items.updateDescription"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    rows="4" required>{{ $product_details->description ?? '' }}</textarea>
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
                @error('photos.*') <span class="error">{{ $message }}</span> @enderror
                <input type="file" id="updateImage" name="updateImage" wire:model="updatePhotos"
                    onchange="previewUpdateImage(event)" accept="image/png, image/jpg, image/jpeg" multiple>

                <!-- Image Preview Below Button -->
                {{-- <div class="mt-4" wire:ignore>
                    <img id="imageUpdatePreview" src="" alt=""
                        class="w-auto h-64 object-cover rounded border" />
                </div> --}}
            </div>

            <!-- Submit -->
            <div wire:loading wire:target="update">  
                Updating post...
            </div>
            <div class="text-right">
                <button type="submit" wire:loading.attr="disabled" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Submit
                </button>
            </div>
        </form>  
    </div>
</div>