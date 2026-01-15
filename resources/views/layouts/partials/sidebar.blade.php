<aside
    class="w-64 bg-white dark:bg-gray-800 border-r border-gray-100 dark:border-gray-700 h-screen fixed left-0 top-0 overflow-y-auto hidden sm:block">
    <div class="px-6 py-4">
        <!-- Logo -->
        <div class="shrink-0 flex items-center mb-6">
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
            </a>
        </div>

        <!-- Navigation Links -->
        <nav class="space-y-2">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                class="block w-full py-2 pl-3 pr-4 border-l-4 text-left text-base font-medium transition duration-150 ease-in-out {{ request()->routeIs('dashboard') ? 'border-indigo-400 text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700' : 'border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300' }}">
                {{ __('Dashboard') }}
            </x-nav-link>

            <!-- Add more links here -->
        </nav>
    </div>
</aside>