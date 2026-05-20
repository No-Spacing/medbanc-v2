<div class="mt-[72px]">
  <!-- Web Banner -->
  <div class="bg-Color-Logo-Green text-white text-center py-5 text-2xl font-bold">
    Warranty
  </div>

  <!-- Main Container -->
    <div class="container mx-auto p-4 py-8">
        <div class="space-y-2">
            <span class="text-4xl font-bold text-Color-Logo-Green">
                Warranty Form
            </span>
            <p class="text-gray-500">
                Please double check the required fields *
            </p>
        </div>

        {{-- CONTACT INFORMATION FORM --}}
        <form>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
            <div class="col-span-1 md:col-span-2">
                <span class="text-2xl font-bold text-gray-500">
                Contact Information
                </span>
            </div>

                <!-- First Name -->
            <div class="space-y-2">
                <label>First Name *</label>
                <input type="text"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
            </div>

            <!-- Last Name -->
            <div class="space-y-2">
                <label>Last Name *</label>
                <input type="text"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
            </div>

            <!-- Email -->
            <div class="space-y-2">
                <label>Email *</label>
                <input type="text" placeholder="Your Email"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
            </div>

            <!-- Complete Address -->
            <div class="space-y-2 col-span-1 md:col-span-2">
                <label>Complete Address *</label>
                <input type=text rows="5" placeholder="Your Address"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                required />
            </div>

            {{-- Country --}}
            <div class="space-y-2">
                <label class="">Country *</label>
                <select
                    class="w-full  p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                    required
                >
                    <option value="" class="">Select Country</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select>
            </div>

            {{-- Mobile Number --}}
            <div class="space-y-2">
                <label>Mobile Number *</label>
                <input type="text" placeholder="+63-000-000"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
            </div>

            {{-- Phone Number --}}
            <div class="space-y-2">
                <label>Phone Number *</label>
                <input type="text" placeholder="+63-000-000"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
            </div>
        </div>

        {{-- PRODUCT INFORMATION FORM --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-10">
        <!-- Contact Information header -->
            <div class="col-span-1 md:col-span-2">
                <span class="text-2xl font-bold text-gray-500">
                Product Information
                </span>
            </div>

            <div class="space-y-2">
                <label>Product/Item *</label>
                <select
                    class="w-full  p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                    required
                >
                    <option value="" class="">Select item</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->name }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="space-y-2">
                <label>Purchased From *</label>
                <input type="text"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
            </div>

            <div class="space-y-2">
                <label>Purchased Price*</label>
                <input type="text"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
            </div>

            <div class="space-y-2">
                <label>Date Purchased *</label>
                <input type="date" 
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
            </div>

            <div class="space-y-2">
                <label>Serial Number *</label>
                <input type="text" placeholder="Serial Number"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
            </div>

            <div class="space-y-2">
                <label class="">Customer's age bracket *</label>
                <select
                    class="w-full  p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                    required
                >
                    <option value="" class="">Select age bracket</option>
                    <option value="under 18">Under 18</option>
                    <option value="18-25">18-25</option>
                    <option value="26-35">26-35  </option>
                    <option value="36-50">36-50</option>
                    <option value="51 and above">51 and above</option>
                </select>
            </div>

            {{-- How did you first become aware of Medbanc Products? --}}
            <div class="space-y-2">
                <label class="">How did you first become aware of Medbanc Products? *</label>
                <select
                    class="w-full  p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                    required
                >
                    <option value="" class="">Choose</option>
                    <option value="under 18">Mall / Store</option>
                    <option value="18-25">Friend / Relative</option>
                    <option value="26-35">Magazine / Newspaper</option>
                    <option value="36-50">Website</option>
                </select>
            </div>

            {{-- What Factor(s) Influenced you to purchase Medbanc Products?* --}}
             <div class="space-y-2">
                <label class="">What Factor(s) Influenced you to purchase Medbanc Products?*</label>
                <select
                    class="w-full  p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                    required
                >
                    <option value="" class="">Choose</option>
                    <option value="under 18">Flyers</option>
                    <option value="18-25">Brochure</option>
                    <option value="26-35">Internet</option>
                    <option value="36-50">Low price / On sale</option>
                    <option value="36-50">Bonus item / Offer with product</option>
                    <option value="36-50">Style appearance</option>
                    <option value="36-50">Previous consumer of Medbanc products</option>
                    <option value="36-50">Features of Medbanc products</option>
                </select>
            </div>

            {{-- How would you rate the packaging --}}
            <div class="space-y-2">
                <label class="">How would you rate the packaging? *</label>
                <select
                    class="w-full  p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                    required
                >
                    <option value="" class="">Choose</option>
                    <option value="under 18">Execellent</option>
                    <option value="18-25">Good</option>
                    <option value="26-35">Average</option>
                    <option value="36-50">Poor</option>
                </select>
            </div>

            
            {{-- Overall Satisfaction --}}
            <div class="space-y-2">
                <label class="">Overall Satisfaction *</label>
                <select
                    class="w-full  p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                    required
                >
                    <option value="" class="">Choose</option>
                    <option value="under 18">Very Satisfied</option>
                    <option value="18-25">Satisfied</option>
                    <option value="26-35">Neutral</option>
                    <option value="36-50">Dissatisfied</option>
                    <option value="36-50">Very Dissatisfied</option>
                </select>
            </div>

            <!-- Comments -->
            <div class="space-y-2 col-span-1 md:col-span-2">
                <label>Comments *</label>
                <textarea rows="5" placeholder="Comment here.."
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                required></textarea>
            </div>
        </div>

        {{-- Submit Button --}}
        <div class="mt-6 flex justify-end">
            <button type="submit" class="text-lg font-semibold leading-6 text-white bg-Color-Logo-Green px-6 py-3 rounded-full hover:bg-AColor-Logo-Green transition-all duration-300 ease-in-out"  >
                Submit Warranty
            </button>
        </div>
    </form> 
    </div>
    <!-- Full Width Banner with Image on Left and Content on Right -->
<div class="w-full bg-Color-Logo-Green">
        <div class="flex flex-col md:flex-row">
            <!-- Image on the Left with No Margin or Padding -->
            <div class="w-full md:w-1/2">
                <img src="images/home/home-career.jpg" alt="Banner Image" class="w-full h-auto object-cover">
            </div>

            <!-- Content on the Right -->
            <div class="w-full md:w-1/2 p-8 flex items-center">
                <div>
                    <h1 class="text-4xl font-bold text-white">Explore Exciting Career Opportunities</h1>
                    <p class="mt-4 text-lg text-white">We offer growth, flexibility, and a culture that values you.</p>
                    <a href="/careers" class="mt-8 inline-block bg-white text-Color-Logo-MDGrey px-6 py-3 rounded-lg font-semibold hover:bg-AColor-Logo-Green hover:text-white">Join Our Team</a>
                </div>
            </div>
        </div>
</div>
</div>