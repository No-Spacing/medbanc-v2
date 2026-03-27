<div class="flex h-screen">
    @include('components.layouts.auth.navbar')

    <!-- Main Content -->
    <div class="flex-1 p-8 overflow-y-auto">
        <!-- Page Header -->
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-1">Dashboard</h1>
            <p class="text-sm text-gray-500">Welcome back, {{ $admin }} 👋</p>
        </div>

        <!-- Stat Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-5 rounded-xl shadow border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Users</p>
                        <h2 class="text-2xl font-semibold text-gray-800">{{ count($users) }}</h2>
                    </div>
                    <i data-lucide="users" class="w-6 h-6 text-blue-600"></i>
                </div>
            </div>
            <div class="bg-white p-5 rounded-xl shadow border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Products</p>
                        <h2 class="text-2xl font-semibold text-gray-800">{{ count($products) }}</h2>
                    </div>
                    <i data-lucide="box" class="w-6 h-6 text-green-600"></i>
                </div>
            </div>
            <div class="bg-white p-5 rounded-xl shadow border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Careers</p>
                        <h2 class="text-2xl font-semibold text-gray-800">{{ count($careers) }}</h2>
                    </div>
                    <i data-lucide="briefcase" class="w-6 h-6 text-yellow-500"></i>
                </div>
            </div>
            <div class="bg-white p-5 rounded-xl shadow border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">News & Events</p>
                        <h2 class="text-2xl font-semibold text-gray-800">{{ count($news_events) }}</h2>
                    </div>
                    <i data-lucide="newspaper" class="w-6 h-6 text-purple-600"></i>
                </div>
            </div>
        </div>

        <!-- Recent Activity Table -->
        <div class="bg-white rounded-xl shadow border border-gray-100 p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">User</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left text-gray-600">
                    <thead class="bg-gray-50 text-gray-500">
                        <tr>
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Date Created</th>
                            <th class="px-4 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-4 py-3">{{ $user->user_role->name }}</td>
                                <td class="px-4 py-3">{{ $user->user_role->email }}</td>
                                <td class="px-4 py-3">{{ $user->user_role->created_at }}</td>
                                <td class="px-4 py-3">
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-medium text-blue-600 bg-blue-50 rounded">{{ $user->role }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
