<aside class="w-64 bg-white shadow-lg flex flex-col border-r border-gray-200">

    <!-- Logo -->
    <div class="px-6 py-5 flex items-center gap-2 text-2xl font-semibold text-gray-800 border-b border-gray-200">
        <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/medbanc_logo.png') }}" class="h-8" alt="Flowbite Logo" />
        </a>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 overflow-y-auto px-4 py-6">
      <ul class="space-y-2">
        <li>
          <a href="{{ route('dashboard') }}" class="flex items-center px-3 py-2 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
            <x-lucide-home class="w-5 h-5 mr-3"/>
            Dashboard
          </a>
        </li>
        <li>
          <a href="{{ route('create-category') }}" class="flex items-center px-3 py-2 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
            <x-lucide-box class="w-5 h-5 mr-3"/>
            Categories
          </a>
        </li>
        <li>
          <a href="{{ route('create-product') }}" class="flex items-center px-3 py-2 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
            <x-lucide-package class="w-5 h-5 mr-3"/>
            Products
          </a>
        </li>
        <li>
          <a href="{{ route('create-career') }}" class="flex items-center px-3 py-2 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
            <x-lucide-briefcase class="w-5 h-5 mr-3"/>
            Careers
          </a>
        </li>
        <li>
          <a href="{{ route('create-news-events') }}" class="flex items-center px-3 py-2 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
            <x-lucide-newspaper class="w-5 h-5 mr-3"/>
            News and Events
          </a>
        </li>
      </ul>
    </nav>

    <!-- Footer -->
    <div class="px-6 py-4 border-t border-gray-200">
      <a href="/logout" class="w-full flex items-center px-3 py-2 rounded-lg text-gray-600 hover:bg-red-50 hover:text-red-600 transition">
        <x-lucide-log-out class="w-5 h-5 mr-3"/>
        Logout
      </a>
    </div>
  </aside>

