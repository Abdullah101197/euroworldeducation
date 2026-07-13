<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Global Settings & Pages Content') }}
        </h2>
        <!-- Include Summernote Lite CSS -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    </x-slot>

    <div class="py-12" x-data="{ activeTab: 'global' }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Tabs Navigation & Save Button -->
                    <div class="border-b border-gray-200 flex justify-between items-center bg-gray-50 pr-6">
                        <nav class="-mb-px flex space-x-8 px-6" aria-label="Tabs">
                            <button type="button" @click="activeTab = 'global'" :class="{ 'border-indigo-500 text-indigo-600': activeTab === 'global', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'global' }" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                Global Settings
                            </button>
                            <button type="button" @click="activeTab = 'home'" :class="{ 'border-indigo-500 text-indigo-600': activeTab === 'home', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'home' }" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                Home Page
                            </button>
                            <button type="button" @click="activeTab = 'about'" :class="{ 'border-indigo-500 text-indigo-600': activeTab === 'about', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'about' }" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                About Page
                            </button>
                        </nav>
                        
                        <button type="submit" class="font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline shadow text-sm transition-colors" style="background-color: #2563eb; color: white; border: 1px solid #1d4ed8;">
                            Save All Changes
                        </button>
                    </div>

                    <div class="p-6 text-gray-900">
                        
                        @if(session('success'))
                            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        <!-- Global Tab -->
                        <div x-show="activeTab === 'global'">
                            <div class="mb-8">
                                <h3 class="text-lg font-medium leading-6 text-gray-900 border-b pb-2 mb-4">Contact Information</h3>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                                        <input type="text" name="site_phone" value="{{ $settings['contact']->where('key', 'site_phone')->first()->value ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Email Address</label>
                                        <input type="email" name="site_email" value="{{ $settings['contact']->where('key', 'site_email')->first()->value ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="md:col-span-2">
                                        <label class="block text-sm font-medium text-gray-700">Physical Address</label>
                                        <textarea name="site_address" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ $settings['contact']->where('key', 'site_address')->first()->value ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-8">
                                <h3 class="text-lg font-medium leading-6 text-gray-900 border-b pb-2 mb-4">Social Media Links</h3>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Facebook URL</label>
                                        <input type="url" name="social_facebook" value="{{ $settings['social']->where('key', 'social_facebook')->first()->value ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Twitter/X URL</label>
                                        <input type="url" name="social_twitter" value="{{ $settings['social']->where('key', 'social_twitter')->first()->value ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Instagram URL</label>
                                        <input type="url" name="social_instagram" value="{{ $settings['social']->where('key', 'social_instagram')->first()->value ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">LinkedIn URL</label>
                                        <input type="url" name="social_linkedin" value="{{ $settings['social']->where('key', 'social_linkedin')->first()->value ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">YouTube URL</label>
                                        <input type="url" name="social_youtube" value="{{ $settings['social']->where('key', 'social_youtube')->first()->value ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">TikTok URL</label>
                                        <input type="url" name="social_tiktok" value="{{ $settings['social']->where('key', 'social_tiktok')->first()->value ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-8">
                                <h3 class="text-lg font-medium leading-6 text-gray-900 border-b pb-2 mb-4">General Settings</h3>
                                
                                <div class="grid grid-cols-1 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Site Title / Slogan</label>
                                        <input type="text" name="site_title" value="{{ $settings['general']->where('key', 'site_title')->first()->value ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Site Logo</label>
                                        <div class="mb-2">
                                            @if(isset($settings['general']) && $logo = $settings['general']->where('key', 'site_logo')->first() && $logo->value && file_exists(public_path($logo->value)))
                                                <img src="{{ asset($logo->value) }}" alt="Site Logo" class="h-12 object-contain bg-gray-100 p-2 rounded">
                                            @else
                                                <img src="{{ asset('images/logo.png') }}" alt="Site Logo" class="h-12 object-contain bg-gray-100 p-2 rounded">
                                            @endif
                                        </div>
                                        <input type="file" name="site_logo" accept="image/*" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Home Page Tab -->
                        <div x-show="activeTab === 'home'" style="display: none;">
                            <div class="mb-8">
                                <h3 class="text-lg font-medium leading-6 text-gray-900 border-b pb-2 mb-4">Home Page Content</h3>
                                
                                <div class="grid grid-cols-1 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Hero Section Title</label>
                                        <textarea name="home_hero_title" class="richtext mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ isset($settings['home_page']) ? ($settings['home_page']->where('key', 'home_hero_title')->first()->value ?? '') : '' }}</textarea>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Hero Section Subtitle</label>
                                        <textarea name="home_hero_subtitle" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ isset($settings['home_page']) ? ($settings['home_page']->where('key', 'home_hero_subtitle')->first()->value ?? '') : '' }}</textarea>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Hero Section Image</label>
                                        @if(isset($settings['home_page']) && $settings['home_page']->where('key', 'home_hero_image')->first())
                                            <div class="mb-2 mt-2">
                                                <img src="{{ asset($settings['home_page']->where('key', 'home_hero_image')->first()->value) }}" alt="Hero Image" class="h-32 object-contain bg-gray-100 p-2 rounded border">
                                            </div>
                                        @endif
                                        <input type="file" name="home_hero_image" accept="image/*" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- About Page Tab -->
                        <div x-show="activeTab === 'about'" style="display: none;">
                            <div class="mb-8">
                                <h3 class="text-lg font-medium leading-6 text-gray-900 border-b pb-2 mb-4">About Page Content</h3>
                                
                                <div class="grid grid-cols-1 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Our Mission</label>
                                        <textarea name="about_mission" class="richtext mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ isset($settings['about_page']) ? ($settings['about_page']->where('key', 'about_mission')->first()->value ?? '') : '' }}</textarea>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Our Vision</label>
                                        <textarea name="about_vision" class="richtext mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ isset($settings['about_page']) ? ($settings['about_page']->where('key', 'about_vision')->first()->value ?? '') : '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Summernote Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.richtext').summernote({
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
</x-app-layout>
