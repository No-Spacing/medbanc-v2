<div>
    <div class="mt-[65px]">
        <!-- Hero Section -->
        <div
            class="bg-gradient-to-r from-Color-Logo-Green via-Lighter-Green to-Medium-Sea-Green text-white py-20 animate-gradient-x bg-[length:200%_200%]">
            <div class="container mx-auto text-center px-4">
                <h1 class="text-5xl font-bold mb-4">Join Medbanc Team</h1>
                <p class="text-xl mb-4">We're looking for talented individuals to help us build the future.<br>Find out
                    more about our open roles below.</p>
            </div>
        </div>

        <!-- Job Listings Section -->
        
        <!-- Job Listings Section -->
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Left Sidebar -->
                <div class="md:col-span-1 bg-white p-6 rounded-lg shadow-md">
                    @livewire('guest.careers.career-lists')
                </div>

                <!-- Right Column -->
                <div class="md:col-span-2 bg-white p-6 rounded-lg shadow-md">
                    @livewire('guest.careers.career-details')
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="applyModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-10">
        <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-2xl mx-4">
            <h2 class="text-2xl font-bold text-Medium-Sea-Green mb-6">Application Form</h2>

            <!-- Application Form -->
            <form action="#" method="POST" class="space-y-6">
                <!-- Full Name -->
                <div>
                    <label for="fullName" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="fullName" name="fullName" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>

                <!-- Resume Upload -->
                <div>
                    <label for="resume" class="block text-sm font-medium text-gray-700">Upload Resume</label>
                    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
                    <p class="text-sm text-gray-500 mt-2">Accepted file types: PDF, DOC, DOCX.</p>
                </div>

                <!-- Cover Letter -->
                <div>
                    <label for="coverLetter" class="block text-sm font-medium text-gray-700">Cover Letter</label>
                    <textarea id="coverLetter" name="coverLetter" rows="5" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600"
                        placeholder="Tell us why you're a great fit for this role..."></textarea>
                </div>

                <!-- Submit and Close Buttons -->
                <div class="flex justify-end space-x-4">
                    <button type="button" onclick="closeModal()"
                        class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition duration-300">
                        Close
                    </button>
                    <button type="submit"
                        class="bg-Color-Logo-Green text-white px-6 py-2 rounded-lg hover:bg-AColor-Logo-Green transition duration-300">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Full Width Banner -->
    <div class="relative w-full h-96 bg-cover bg-center" style="background-image: url('images/career/banner1.jpg');">
        <!-- Overlay to darken the background image -->
        {{-- <div class="absolute inset-0 bg-black bg-opacity-50"></div> --}}

        <!-- Text Overlay on the Left -->
        <div class="absolute inset-y-0 left-0 sm:left-36 flex items-center p-8">
            <div class="text-left">
                <h1 class="text-5xl font-bold">Grow . Innovate . Succeed!</h1>
                <p class="text-2xl font-regular">Be part of a team that drives progress and excellence.</p>
            </div>
        </div>
    </div>

    <!-- JavaScript to Handle Modal -->
</div>
<script>
    function openModal() {
        document.getElementById('applyModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('applyModal').classList.add('hidden');
    }

    // Close modal when clicking outside of it
    window.onclick = function(event) {
        const modal = document.getElementById('applyModal');
        if (event.target === modal) {
            closeModal();
        }
    };
</script>
