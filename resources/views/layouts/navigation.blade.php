<!-- Sidebar Overlay on Mobile -->
<div x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 sm:hidden" style="display: none;"></div>

<nav :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}" class="absolute z-30 inset-y-0 left-0 bg-brand-navy border-r-2 border-brand-red flex flex-col w-64 h-full flex-shrink-0 transition-transform duration-300 transform sm:relative sm:translate-x-0">
    <!-- Logo -->
    <div class="flex items-center justify-center h-16 border-b border-gray-700 overflow-hidden shrink-0">
        <a href="{{ route('dashboard') }}" class="px-4 text-center">
            <x-application-logo class="block h-9 w-auto fill-current text-white mx-auto" />
        </a>
    </div>

    <!-- Navigation Links -->
    <div class="flex-1 overflow-y-auto py-4">
        <div class="space-y-1">
            <x-sidebar-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-sidebar-link>
            <x-sidebar-link :href="route('admin.contacts.index')" :active="request()->routeIs('admin.contacts.*')">
                {{ __('Leads') }}
            </x-sidebar-link>
            <x-sidebar-link :href="route('admin.settings.index')" :active="request()->routeIs('admin.settings.*')">
                {{ __('Settings') }}
            </x-sidebar-link>
        </div>
    </div>

    <!-- User Profile / Settings -->
    <div class="border-t border-gray-700 p-4 shrink-0">
        <div class="text-sm font-medium text-white mb-2 truncate">{{ Auth::user()->name }}</div>
        
        <a href="{{ route('profile.edit') }}" class="block text-sm text-gray-300 hover:text-white py-1">Profile</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block text-sm text-brand-red hover:text-red-400 py-1 text-left w-full">Log Out</button>
        </form>
    </div>
</nav>
