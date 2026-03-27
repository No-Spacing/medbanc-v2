<div 
    id="deleteModal" 
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
    x-data="{ deleteModal: false }"
    x-show="deleteModal"
    x-on:open-delete-modal.window="deleteModal = true"
    x-cloak
>
    <!-- Modal content -->
    <div class="bg-white rounded-2xl p-6 w-full max-w-md shadow-lg">
        <h2 class="text-xl font-semibold mb-4">Are you sure?</h2>
        <p class="mb-6">Do you want to proceed with this action?</p>
        <div class="flex justify-end gap-4">
            <button
                class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg">
                Yes
            </button>
            <button 
                x-on:click="deleteModal = false"
                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg"
            >
                No
            </button>
        </div>
    </div>
</div>