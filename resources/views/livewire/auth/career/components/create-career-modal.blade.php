<div 
    id="createModal" 
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
    x-data="{ createModal: false }"
    x-show="createModal"
    x-on:open-create-modal.window="createModal = true"
    x-cloak
>
    <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl max-h-[90vh] overflow-y-auto p-6 relative">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Create New Career</h2>
            <button x-on:click="createModal = false" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
        </div>

        <!-- Form -->
        <form class="space-y-4">

            <!-- Title -->
            <div>
                <label class="block font-medium mb-1">Job Title</label>
                <input type="text" class="w-full border rounded px-3 py-2" name="title" required>
            </div>

            <!-- Summary -->
            <div>
                <label class="block font-medium mb-1">Summary</label>
                <textarea class="w-full border rounded px-3 py-2" rows="2" name="summary" required></textarea>
            </div>

            <!-- Responsibilities -->
            <div>
                <label class="block font-medium mb-1">Responsibilities</label>
                <textarea class="w-full border rounded px-3 py-2" rows="3" name="responsibilities" required></textarea>
            </div>

            <!-- Education -->
            <div>
                <label class="block font-medium mb-1">Education</label>
                <input type="text" class="w-full border rounded px-3 py-2" name="education" required>
            </div>

            <!-- Experience -->
            <div>
                <label class="block font-medium mb-1">Experience</label>
                <input type="text" class="w-full border rounded px-3 py-2" name="experience" required>
            </div>

            <!-- Eligibility -->
            <div>
                <label class="block font-medium mb-1">
                    Eligibility
                    <span class="text-sm text-gray-500 ml-1">(optional)</span>
                </label>
                <input type="text" class="w-full border rounded px-3 py-2" name="eligibility">
            </div>


            <!-- Competencies -->
            <div>
                <label class="block font-medium mb-1">Competencies</label>
                <textarea class="w-full border rounded px-3 py-2" rows="2" name="competencies" required></textarea>
            </div>

            <!-- Work Conditions -->
            <div>
                <label class="block font-medium mb-1">Work Conditions</label>
                <textarea class="w-full border rounded px-3 py-2" rows="2" name="work_conditions" required></textarea>
            </div>

            <!-- Address -->
            <div>
                <label class="block font-medium mb-1">Address</label>
                <input type="text" class="w-full border rounded px-3 py-2" name="address" required>
            </div>

            <!-- Availability -->
            <div>
                <label class="block font-medium mb-1">Availability</label>
                <input type="number" class="w-full border rounded px-3 py-2" name="availability" required>
            </div>

            <!-- Employment Type -->
            <div>
                <label class="block font-medium mb-1">Employment Type</label>
                <select class="w-full border rounded px-3 py-2" name="employment_type">
                    <option value="full-time">Full-time</option>
                    <option value="part-time">Part-time</option>
                    <option value="contract">Contract</option>
                </select>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end mt-6">
                <button type="button" class="px-4 py-2 mr-2 bg-gray-300 rounded" x-on:click="createModal = false">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Submit</button>
            </div>
        </form>
    </div>
</div>
