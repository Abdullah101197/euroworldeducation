<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
            <div>
                <h2 class="font-bold text-2xl text-gray-800 leading-tight flex items-center gap-3">
                    <span class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-lg shadow-sm border border-blue-100/50">
                        <i class="fa-solid fa-sliders"></i>
                    </span>
                    {{ __('Website Settings & Dynamic Pages') }}
                </h2>
                <p class="text-sm text-gray-500 mt-1 ml-13">Easily manage contact info, social links, logos, and page content across your portal.</p>
            </div>
            <button type="submit" form="settings-form" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-3 rounded-xl font-bold text-sm shadow-lg shadow-blue-500/25 hover:from-blue-700 hover:to-indigo-700 hover:shadow-blue-500/40 transition-all duration-200 cursor-pointer">
                <i class="fa-solid fa-check"></i>
                Save All Changes
            </button>
        </div>
        <!-- Include Summernote Lite CSS & FontAwesome -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </x-slot>

    <div class="py-8 bg-gray-50/50 min-h-screen" x-data="{ activeTab: 'global' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-800 px-5 py-4 rounded-2xl shadow-sm flex items-center justify-between" role="alert">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold">✓</span>
                        <span class="font-semibold">{{ session('success') }}</span>
                    </div>
                    <button type="button" onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-700 font-bold">&times;</button>
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Left Sidebar Navigation -->
                <div class="lg:col-span-3 bg-white rounded-2xl shadow-xl shadow-gray-200/50 border border-gray-100 p-4 sticky top-6">
                    <div class="px-3 py-2 mb-2 border-b border-gray-100">
                        <span class="text-xs font-bold uppercase tracking-wider text-gray-400">Navigation</span>
                    </div>
                    
                    <nav class="space-y-1.5" aria-label="Tabs">
                        <button type="button" @click="activeTab = 'global'" 
                                :class="{ 'bg-blue-600 text-white shadow-md shadow-blue-500/20 font-bold': activeTab === 'global', 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 font-medium': activeTab !== 'global' }" 
                                class="w-full flex items-center gap-3.5 px-4 py-3.5 rounded-xl text-sm transition-all duration-200 text-left">
                            <i class="fa-solid fa-globe w-5 text-center text-base" :class="{ 'text-white': activeTab === 'global', 'text-gray-400': activeTab !== 'global' }"></i>
                            <span>Global Settings</span>
                        </button>

                        <button type="button" @click="activeTab = 'home'" 
                                :class="{ 'bg-blue-600 text-white shadow-md shadow-blue-500/20 font-bold': activeTab === 'home', 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 font-medium': activeTab !== 'home' }" 
                                class="w-full flex items-center gap-3.5 px-4 py-3.5 rounded-xl text-sm transition-all duration-200 text-left">
                            <i class="fa-solid fa-house w-5 text-center text-base" :class="{ 'text-white': activeTab === 'home', 'text-gray-400': activeTab !== 'home' }"></i>
                            <span>Home Page</span>
                        </button>

                        <button type="button" @click="activeTab = 'about'" 
                                :class="{ 'bg-blue-600 text-white shadow-md shadow-blue-500/20 font-bold': activeTab === 'about', 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 font-medium': activeTab !== 'about' }" 
                                class="w-full flex items-center gap-3.5 px-4 py-3.5 rounded-xl text-sm transition-all duration-200 text-left">
                            <i class="fa-solid fa-building w-5 text-center text-base" :class="{ 'text-white': activeTab === 'about', 'text-gray-400': activeTab !== 'about' }"></i>
                            <span>About Page</span>
                        </button>

                        <button type="button" @click="activeTab = 'scholarships'" 
                                :class="{ 'bg-blue-600 text-white shadow-md shadow-blue-500/20 font-bold': activeTab === 'scholarships', 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 font-medium': activeTab !== 'scholarships' }" 
                                class="w-full flex items-center gap-3.5 px-4 py-3.5 rounded-xl text-sm transition-all duration-200 text-left">
                            <i class="fa-solid fa-graduation-cap w-5 text-center text-base" :class="{ 'text-white': activeTab === 'scholarships', 'text-gray-400': activeTab !== 'scholarships' }"></i>
                            <span>Scholarships Page</span>
                        </button>
                    </nav>

                    <div class="mt-6 pt-4 border-t border-gray-100">
                        <button type="submit" form="settings-form" class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-3 rounded-xl font-bold text-sm shadow-md shadow-blue-500/20 hover:from-blue-700 hover:to-indigo-700 transition-all cursor-pointer">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                            Save All Changes
                        </button>
                    </div>
                </div>

                <!-- Right Form Content Area -->
                <div class="lg:col-span-9 bg-white rounded-2xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                    <form id="settings-form" action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="p-6 md:p-8">
                        @csrf
                        
                        <!-- Global Settings Tab -->
                        <div x-show="activeTab === 'global'" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                            <div class="mb-8 pb-4 border-b border-gray-100 flex items-center justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Global Contact & Identity</h3>
                                    <p class="text-sm text-gray-500 mt-0.5">Manage your phone number, email address, physical location, and company logo.</p>
                                </div>
                                <span class="px-3 py-1 bg-blue-50 text-blue-600 text-xs font-bold rounded-full uppercase tracking-wide">Global</span>
                            </div>
                            
                            <div class="space-y-8">
                                <!-- Contact Details Group -->
                                <div class="bg-gray-50/70 p-6 rounded-2xl border border-gray-100">
                                    <h4 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-4 flex items-center gap-2">
                                        <i class="fa-solid fa-address-book text-blue-500"></i> Contact Information
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-sm font-semibold text-gray-700 mb-1">Phone Number</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-gray-400"><i class="fa-solid fa-phone text-xs"></i></span>
                                                <input type="text" name="site_phone" value="{{ $flatSettings['site_phone'] ?? '' }}" placeholder="+1 (234) 567-8900" class="pl-10 w-full rounded-xl border-gray-200 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm py-2.5">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-semibold text-gray-700 mb-1">Email Address</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-gray-400"><i class="fa-solid fa-envelope text-xs"></i></span>
                                                <input type="email" name="site_email" value="{{ $flatSettings['site_email'] ?? '' }}" placeholder="info@euroworldeducation.com" class="pl-10 w-full rounded-xl border-gray-200 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm py-2.5">
                                            </div>
                                        </div>
                                        <div class="md:col-span-2">
                                            <label class="block text-sm font-semibold text-gray-700 mb-1">Physical Office Address</label>
                                            <textarea name="site_address" rows="3" placeholder="123 Education Boulevard..." class="w-full rounded-xl border-gray-200 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm p-3">{{ $flatSettings['site_address'] ?? '' }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Social Links Group -->
                                <div class="bg-gray-50/70 p-6 rounded-2xl border border-gray-100">
                                    <h4 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-4 flex items-center gap-2">
                                        <i class="fa-solid fa-share-nodes text-blue-500"></i> Social Media Profiles
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-xs font-bold text-gray-600 uppercase mb-1">Facebook URL</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-blue-600"><i class="fa-brands fa-facebook"></i></span>
                                                <input type="url" name="social_facebook" value="{{ $flatSettings['social_facebook'] ?? '' }}" placeholder="https://facebook.com/yourpage" class="pl-10 w-full rounded-xl border-gray-200 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm py-2">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-gray-600 uppercase mb-1">Twitter / X URL</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-gray-800"><i class="fa-brands fa-x-twitter"></i></span>
                                                <input type="url" name="social_twitter" value="{{ $flatSettings['social_twitter'] ?? '' }}" placeholder="https://x.com/yourhandle" class="pl-10 w-full rounded-xl border-gray-200 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm py-2">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-gray-600 uppercase mb-1">Instagram URL</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-pink-600"><i class="fa-brands fa-instagram"></i></span>
                                                <input type="url" name="social_instagram" value="{{ $flatSettings['social_instagram'] ?? '' }}" placeholder="https://instagram.com/yourhandle" class="pl-10 w-full rounded-xl border-gray-200 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm py-2">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-gray-600 uppercase mb-1">LinkedIn URL</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-blue-700"><i class="fa-brands fa-linkedin"></i></span>
                                                <input type="url" name="social_linkedin" value="{{ $flatSettings['social_linkedin'] ?? '' }}" placeholder="https://linkedin.com/company/yourpage" class="pl-10 w-full rounded-xl border-gray-200 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm py-2">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-gray-600 uppercase mb-1">YouTube URL</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-red-600"><i class="fa-brands fa-youtube"></i></span>
                                                <input type="url" name="social_youtube" value="{{ $flatSettings['social_youtube'] ?? '' }}" placeholder="https://youtube.com/@yourchannel" class="pl-10 w-full rounded-xl border-gray-200 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm py-2">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-gray-600 uppercase mb-1">TikTok URL</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-gray-900"><i class="fa-brands fa-tiktok"></i></span>
                                                <input type="url" name="social_tiktok" value="{{ $flatSettings['social_tiktok'] ?? '' }}" placeholder="https://tiktok.com/@yourhandle" class="pl-10 w-full rounded-xl border-gray-200 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm py-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Identity & Logo Group -->
                                <div class="bg-gray-50/70 p-6 rounded-2xl border border-gray-100">
                                    <h4 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-4 flex items-center gap-2">
                                        <i class="fa-solid fa-image text-blue-500"></i> Website Branding & Logo
                                    </h4>
                                    <div class="grid grid-cols-1 gap-6">
                                        <div>
                                            <label class="block text-sm font-semibold text-gray-700 mb-1">Site Title / Slogan</label>
                                            <input type="text" name="site_title" value="{{ $flatSettings['site_title'] ?? '' }}" placeholder="EuroWorld Education" class="w-full rounded-xl border-gray-200 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm py-2.5">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-semibold text-gray-700 mb-2">Primary Website Logo</label>
                                            <div class="flex items-center gap-6 bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                                                <div class="h-16 w-44 flex items-center justify-center bg-gray-50 border border-gray-100 rounded-lg p-2 shrink-0">
                                                    @php
                                                        $logoPath = $flatSettings['site_logo'] ?? null;
                                                    @endphp
                                                    @if($logoPath && $logoPath !== 'images/logo.png')
                                                        <img src="{{ asset($logoPath) }}" alt="Site Logo" class="max-h-12 max-w-full object-contain">
                                                    @else
                                                        <img src="{{ asset('images/logo.png') }}" alt="Site Logo" class="max-h-12 max-w-full object-contain">
                                                    @endif
                                                </div>
                                                <div class="flex-1">
                                                    <label class="block text-xs font-bold text-gray-600 uppercase mb-1">Upload New Logo (PNG, JPG, SVG)</label>
                                                    <input type="file" name="site_logo" accept="image/*" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-blue-50 file:text-blue-600 hover:file:bg-blue-100 cursor-pointer">
                                                    <p class="text-xs text-gray-400 mt-1">Recommended size: 250px x 60px transparent PNG</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Home Page Tab -->
                        <div x-show="activeTab === 'home'" style="display: none;" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                            <div class="mb-8 pb-4 border-b border-gray-100 flex items-center justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Home Page Hero Banner</h3>
                                    <p class="text-sm text-gray-500 mt-0.5">Customize the main headline, subtitle, and background/side hero image seen by visitors.</p>
                                </div>
                                <span class="px-3 py-1 bg-indigo-50 text-indigo-600 text-xs font-bold rounded-full uppercase tracking-wide">Home</span>
                            </div>
                            
                            <div class="space-y-6">
                                <div class="bg-gray-50/70 p-6 rounded-2xl border border-gray-100">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Hero Section Headline (Rich Text & Color Gradients Allowed)</label>
                                    <textarea name="home_hero_title" class="richtext block w-full rounded-xl border-gray-200 shadow-sm">{{ $flatSettings['home_hero_title'] ?? '' }}</textarea>
                                </div>

                                <div class="bg-gray-50/70 p-6 rounded-2xl border border-gray-100">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Hero Section Subtitle</label>
                                    <textarea name="home_hero_subtitle" rows="3" placeholder="Expert guidance for university admissions..." class="w-full rounded-xl border-gray-200 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm p-3">{{ $flatSettings['home_hero_subtitle'] ?? '' }}</textarea>
                                </div>

                                <div class="bg-gray-50/70 p-6 rounded-2xl border border-gray-100">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Hero Banner Graphic / Illustration</label>
                                    <div class="flex items-center gap-6 bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                                        @if(isset($flatSettings['home_hero_image']) && $flatSettings['home_hero_image'])
                                            <div class="h-20 w-32 flex items-center justify-center bg-gray-50 border border-gray-100 rounded-lg p-2 shrink-0">
                                                <img src="{{ asset($flatSettings['home_hero_image']) }}" alt="Hero Image" class="max-h-16 max-w-full object-contain">
                                            </div>
                                        @endif
                                        <div class="flex-1">
                                            <input type="file" name="home_hero_image" accept="image/*" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-blue-50 file:text-blue-600 hover:file:bg-blue-100 cursor-pointer">
                                            <p class="text-xs text-gray-400 mt-1">Upload a high-resolution PNG or WebP illustration for the home page header.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- About Page Tab -->
                        <div x-show="activeTab === 'about'" style="display: none;" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                            <div class="mb-8 pb-4 border-b border-gray-100 flex items-center justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">About Us Page Content</h3>
                                    <p class="text-sm text-gray-500 mt-0.5">Define your core mission, company vision, and educational consultancy ethos.</p>
                                </div>
                                <span class="px-3 py-1 bg-purple-50 text-purple-600 text-xs font-bold rounded-full uppercase tracking-wide">About</span>
                            </div>
                            
                            <div class="space-y-6">
                                <div class="bg-gray-50/70 p-6 rounded-2xl border border-gray-100">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Our Mission Statement</label>
                                    <textarea name="about_mission" class="richtext block w-full rounded-xl border-gray-200 shadow-sm">{{ $flatSettings['about_mission'] ?? '' }}</textarea>
                                </div>

                                <div class="bg-gray-50/70 p-6 rounded-2xl border border-gray-100">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Our Vision Statement</label>
                                    <textarea name="about_vision" class="richtext block w-full rounded-xl border-gray-200 shadow-sm">{{ $flatSettings['about_vision'] ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Scholarships Page Tab -->
                        <div x-show="activeTab === 'scholarships'" style="display: none;" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                            <div class="mb-8 pb-4 border-b border-gray-100 flex items-center justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Scholarships Page Content</h3>
                                    <p class="text-sm text-gray-500 mt-0.5">Customize scholarship awards, eligibility notes, and regional funding opportunities.</p>
                                </div>
                                <span class="px-3 py-1 bg-amber-50 text-amber-600 text-xs font-bold rounded-full uppercase tracking-wide">Scholarships</span>
                            </div>
                            
                            <div class="space-y-8">
                                <div class="bg-gray-50/70 p-6 rounded-2xl border border-gray-100 space-y-4">
                                    <h4 class="text-sm font-bold text-gray-700 uppercase tracking-wider flex items-center gap-2 border-b border-gray-200/60 pb-2">
                                        <i class="fa-solid fa-bookmark text-amber-500"></i> Page Hero Title & Subtitle
                                    </h4>
                                    <div class="grid grid-cols-1 gap-4">
                                        <div>
                                            <label class="block text-sm font-semibold text-gray-700 mb-1">Hero Section Title</label>
                                            <input type="text" name="scholarships_hero_title" value="{{ $flatSettings['scholarships_hero_title'] ?? 'Global <span class=\"text-[#ffc107]\">Scholarships</span>' }}" class="w-full rounded-xl border-gray-200 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm py-2.5">
                                            <p class="text-xs text-gray-400 mt-1">Tip: Use HTML spans like <code class="bg-gray-200 px-1 py-0.5 rounded text-gray-700">&lt;span class="text-[#ffc107]"&gt;Scholarships&lt;/span&gt;</code> to highlight words in yellow.</p>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-semibold text-gray-700 mb-1">Hero Subtitle</label>
                                            <textarea name="scholarships_hero_subtitle" rows="2" class="w-full rounded-xl border-gray-200 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm p-3">{{ $flatSettings['scholarships_hero_subtitle'] ?? 'Unlock financial aid opportunities and fully-funded programs at the world\'s best universities.' }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-gray-50/70 p-6 rounded-2xl border border-gray-100 space-y-4">
                                    <h4 class="text-sm font-bold text-gray-700 uppercase tracking-wider flex items-center gap-2 border-b border-gray-200/60 pb-2">
                                        <i class="fa-solid fa-award text-amber-500"></i> Scholarship Box 1: Merit-Based Excellence Awards
                                    </h4>
                                    <div class="grid grid-cols-1 gap-4">
                                        <div>
                                            <label class="block text-sm font-semibold text-gray-700 mb-1">Box 1 Title</label>
                                            <input type="text" name="scholarships_card1_title" value="{{ $flatSettings['scholarships_card1_title'] ?? 'Merit-Based Excellence Awards' }}" class="w-full rounded-xl border-gray-200 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm py-2.5">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-semibold text-gray-700 mb-1">Box 1 Description (Rich Text)</label>
                                            <textarea name="scholarships_card1_desc" class="richtext block w-full rounded-xl border-gray-200 shadow-sm">{{ $flatSettings['scholarships_card1_desc'] ?? '<p>Many of our partner universities in the UK and Australia offer significant tuition fee discounts (up to 50%) for students with outstanding academic records.</p>' }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-gray-50/70 p-6 rounded-2xl border border-gray-100 space-y-4">
                                    <h4 class="text-sm font-bold text-gray-700 uppercase tracking-wider flex items-center gap-2 border-b border-gray-200/60 pb-2">
                                        <i class="fa-solid fa-landmark text-amber-500"></i> Scholarship Box 2: Government & Regional Scholarships
                                    </h4>
                                    <div class="grid grid-cols-1 gap-4">
                                        <div>
                                            <label class="block text-sm font-semibold text-gray-700 mb-1">Box 2 Title</label>
                                            <input type="text" name="scholarships_card2_title" value="{{ $flatSettings['scholarships_card2_title'] ?? 'Government & Regional Scholarships' }}" class="w-full rounded-xl border-gray-200 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm py-2.5">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-semibold text-gray-700 mb-1">Box 2 Description (Rich Text)</label>
                                            <textarea name="scholarships_card2_desc" class="richtext block w-full rounded-xl border-gray-200 shadow-sm">{{ $flatSettings['scholarships_card2_desc'] ?? '<p>We specialize in helping students apply for regional government scholarships (such as DSU in Italy or DAAD in Germany) which can cover full tuition and provide living stipends.</p>' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bottom Sticky Save Bar on Mobile -->
                        <div class="mt-8 pt-6 border-t border-gray-100 flex items-center justify-end lg:hidden">
                            <button type="submit" class="w-full sm:w-auto flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-8 py-3 rounded-xl font-bold text-sm shadow-lg shadow-blue-500/25 hover:from-blue-700 hover:to-indigo-700 transition-all cursor-pointer">
                                <i class="fa-solid fa-check"></i>
                                Save All Changes
                            </button>
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
                height: 180,
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
