<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Favicon -->
        @php
            $faviconPath = \App\Models\Setting::where('key', 'site_favicon')->value('value') 
                ?? \App\Models\Setting::where('key', 'site_logo')->value('value');
            $finalFavicon = $faviconPath && $faviconPath !== 'images/logo.png' && $faviconPath !== 'images/logo.svg' 
                ? asset($faviconPath) 
                : (file_exists(public_path('images/logo.png')) ? asset('images/logo.png') : asset('images/logo.svg'));
        @endphp
        <link rel="icon" href="{{ $finalFavicon }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-100 overflow-hidden relative">
            <!-- Sidebar -->
            @include('layouts.navigation')

            <!-- Main Content Area -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Page Heading -->
                @isset($header)
                    <header class="bg-white shadow border-b-4 border-brand-red shrink-0 flex items-center">
                        <button @click="sidebarOpen = !sidebarOpen" class="sm:hidden p-4 text-gray-500 hover:text-gray-700 focus:outline-none">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                        <div class="max-w-7xl w-full mx-auto py-6 px-4 sm:px-6 lg:px-8 text-brand-navy">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <!-- Page Content -->
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
