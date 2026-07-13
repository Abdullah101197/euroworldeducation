<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
            <div>
                <div class="flex items-center gap-3">
                    <span class="w-11 h-11 rounded-2xl bg-gradient-to-br from-blue-600 to-indigo-600 text-white flex items-center justify-center text-xl shadow-lg shadow-blue-500/30 border border-blue-400/30">
                        <i class="fa-solid fa-sliders"></i>
                    </span>
                    <div>
                        <h2 class="font-extrabold text-2xl text-gray-900 tracking-tight leading-tight">
                            {{ __('Portal Settings & Live Content Manager') }}
                        </h2>
                        <div class="flex items-center gap-2 mt-0.5">
                            <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                Live Sync Active
                            </span>
                            <span class="text-xs text-gray-400">•</span>
                            <p class="text-xs text-gray-500">All saved changes reflect instantly on public web pages</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ url('/') }}" target="_blank" class="inline-flex items-center gap-2 bg-white text-gray-700 hover:text-blue-600 hover:border-blue-200 border border-gray-200 px-4 py-2.5 rounded-xl font-semibold text-sm shadow-sm transition-all duration-200">
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                    Preview Live Site
                </a>
                <button type="submit" form="settings-form" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-700 text-white px-6 py-2.5 rounded-xl font-bold text-sm shadow-xl shadow-blue-500/30 hover:shadow-blue-500/50 hover:scale-[1.02] active:scale-[0.98] transition-all duration-200 cursor-pointer">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    Save All Changes
                </button>
            </div>
        </div>
        <!-- Include Summernote Lite CSS & FontAwesome -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </x-slot>

    <div class="py-10 bg-slate-100/60 min-h-screen" x-data="{ activeTab: 'global' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="mb-8 bg-gradient-to-r from-emerald-500 to-teal-600 text-white px-6 py-4 rounded-2xl shadow-lg shadow-emerald-500/20 flex items-center justify-between transition-all duration-300 animate-fade-in" role="alert">
                    <div class="flex items-center gap-3.5">
                        <span class="w-9 h-9 rounded-xl bg-white/20 backdrop-blur-md flex items-center justify-center font-extrabold text-lg shadow-inner">✓</span>
                        <div>
                            <p class="font-bold text-base">{{ session('success') }}</p>
                            <p class="text-xs text-emerald-100 mt-0.5">Your updates have been published to the live database.</p>
                        </div>
                    </div>
                    <button type="button" onclick="this.parentElement.remove()" class="text-white/80 hover:text-white font-bold text-xl p-1">&times;</button>
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Left Sidebar Navigation Card -->
                <div class="lg:col-span-3 bg-white/90 backdrop-blur-xl rounded-2xl shadow-xl shadow-slate-200/60 border border-slate-200/80 p-4 sticky top-6">
                    <div class="px-3.5 py-2.5 mb-2 border-b border-slate-100 flex items-center justify-between">
                        <span class="text-xs font-extrabold uppercase tracking-widest text-slate-400">Sections</span>
                        <span class="text-[11px] font-semibold text-slate-400 bg-slate-100 px-2 py-0.5 rounded-full">4 Tabs</span>
                    </div>
                    
                    <nav class="space-y-2" aria-label="Tabs">
                        <button type="button" @click="activeTab = 'global'" 
                                :class="{ 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg shadow-blue-500/30 font-bold translate-x-1': activeTab === 'global', 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium': activeTab !== 'global' }" 
                                class="w-full flex items-center justify-between px-4 py-3.5 rounded-xl text-sm transition-all duration-200 text-left group">
                            <div class="flex items-center gap-3.5">
                                <span class="w-8 h-8 rounded-lg flex items-center justify-center transition-colors" :class="{ 'bg-white/20 text-white': activeTab === 'global', 'bg-blue-50 text-blue-600 group-hover:bg-blue-100': activeTab !== 'global' }">
                                    <i class="fa-solid fa-globe text-sm"></i>
                                </span>
                                <span>Global Settings</span>
                            </div>
                            <i class="fa-solid fa-chevron-right text-xs transition-transform duration-200" :class="{ 'opacity-100 translate-x-0.5': activeTab === 'global', 'opacity-0 -translate-x-2': activeTab !== 'global' }"></i>
                        </button>

                        <button type="button" @click="activeTab = 'home'" 
                                :class="{ 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg shadow-blue-500/30 font-bold translate-x-1': activeTab === 'home', 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium': activeTab !== 'home' }" 
                                class="w-full flex items-center justify-between px-4 py-3.5 rounded-xl text-sm transition-all duration-200 text-left group">
                            <div class="flex items-center gap-3.5">
                                <span class="w-8 h-8 rounded-lg flex items-center justify-center transition-colors" :class="{ 'bg-white/20 text-white': activeTab === 'home', 'bg-indigo-50 text-indigo-600 group-hover:bg-indigo-100': activeTab !== 'home' }">
                                    <i class="fa-solid fa-house text-sm"></i>
                                </span>
                                <span>Home Page</span>
                            </div>
                            <i class="fa-solid fa-chevron-right text-xs transition-transform duration-200" :class="{ 'opacity-100 translate-x-0.5': activeTab === 'home', 'opacity-0 -translate-x-2': activeTab !== 'home' }"></i>
                        </button>

                        <button type="button" @click="activeTab = 'about'" 
                                :class="{ 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg shadow-blue-500/30 font-bold translate-x-1': activeTab === 'about', 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium': activeTab !== 'about' }" 
                                class="w-full flex items-center justify-between px-4 py-3.5 rounded-xl text-sm transition-all duration-200 text-left group">
                            <div class="flex items-center gap-3.5">
                                <span class="w-8 h-8 rounded-lg flex items-center justify-center transition-colors" :class="{ 'bg-white/20 text-white': activeTab === 'about', 'bg-purple-50 text-purple-600 group-hover:bg-purple-100': activeTab !== 'about' }">
                                    <i class="fa-solid fa-building text-sm"></i>
                                </span>
                                <span>About Page</span>
                            </div>
                            <i class="fa-solid fa-chevron-right text-xs transition-transform duration-200" :class="{ 'opacity-100 translate-x-0.5': activeTab === 'about', 'opacity-0 -translate-x-2': activeTab !== 'about' }"></i>
                        </button>

                        <button type="button" @click="activeTab = 'scholarships'" 
                                :class="{ 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg shadow-blue-500/30 font-bold translate-x-1': activeTab === 'scholarships', 'text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium': activeTab !== 'scholarships' }" 
                                class="w-full flex items-center justify-between px-4 py-3.5 rounded-xl text-sm transition-all duration-200 text-left group">
                            <div class="flex items-center gap-3.5">
                                <span class="w-8 h-8 rounded-lg flex items-center justify-center transition-colors" :class="{ 'bg-white/20 text-white': activeTab === 'scholarships', 'bg-amber-50 text-amber-600 group-hover:bg-amber-100': activeTab !== 'scholarships' }">
                                    <i class="fa-solid fa-graduation-cap text-sm"></i>
                                </span>
                                <span>Scholarships Page</span>
                            </div>
                            <i class="fa-solid fa-chevron-right text-xs transition-transform duration-200" :class="{ 'opacity-100 translate-x-0.5': activeTab === 'scholarships', 'opacity-0 -translate-x-2': activeTab !== 'scholarships' }"></i>
                        </button>
                    </nav>

                    <div class="mt-6 pt-4 border-t border-slate-100 bg-slate-50/80 -mx-4 -mb-4 p-4 rounded-b-2xl">
                        <button type="submit" form="settings-form" class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-3.5 rounded-xl font-bold text-sm shadow-md shadow-blue-500/25 hover:from-blue-700 hover:to-indigo-700 hover:shadow-lg transition-all cursor-pointer">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                            Save All Changes
                        </button>
                        <p class="text-[11px] text-center text-slate-400 mt-2">Applies to all active tabs immediately</p>
                    </div>
                </div>

                <!-- Right Form Content Area -->
                <div class="lg:col-span-9 bg-white rounded-3xl shadow-xl shadow-slate-200/70 border border-slate-200/80 overflow-hidden">
                    <form id="settings-form" action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="p-6 md:p-8">
                        @csrf
                        
                        <!-- Global Settings Tab -->
                        <div x-show="activeTab === 'global'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0">
                            <div class="mb-8 pb-5 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                <div>
                                    <h3 class="text-2xl font-extrabold text-slate-900 tracking-tight">Global Contact & Brand Identity</h3>
                                    <p class="text-sm text-slate-500 mt-1">Manage core contact details, social media handles, office address, and primary logo.</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="px-3.5 py-1.5 bg-blue-50 border border-blue-100 text-blue-700 text-xs font-extrabold rounded-full uppercase tracking-wide">
                                        <i class="fa-solid fa-globe mr-1"></i> Global Scope
                                    </span>
                                </div>
                            </div>
                            
                            <div class="space-y-8">
                                <!-- Contact Details Group -->
                                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200/70 shadow-sm">
                                    <h4 class="text-sm font-extrabold text-slate-800 uppercase tracking-wider mb-5 flex items-center gap-2.5">
                                        <span class="w-7 h-7 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-xs"><i class="fa-solid fa-address-book"></i></span>
                                        Contact Information
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Phone Number</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-blue-500"><i class="fa-solid fa-phone text-xs"></i></span>
                                                <input type="text" name="site_phone" value="{{ $flatSettings['site_phone'] ?? '' }}" placeholder="+1 (234) 567-8900" class="pl-10 w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm py-2.5 font-medium transition-all">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Email Address</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-blue-500"><i class="fa-solid fa-envelope text-xs"></i></span>
                                                <input type="email" name="site_email" value="{{ $flatSettings['site_email'] ?? '' }}" placeholder="info@euroworldeducation.com" class="pl-10 w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm py-2.5 font-medium transition-all">
                                            </div>
                                        </div>
                                        <div class="md:col-span-2">
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Physical Office Address</label>
                                            <textarea name="site_address" rows="3" placeholder="123 Education Boulevard..." class="w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm p-3.5 font-medium transition-all">{{ $flatSettings['site_address'] ?? '' }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Social Links Group -->
                                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200/70 shadow-sm">
                                    <h4 class="text-sm font-extrabold text-slate-800 uppercase tracking-wider mb-5 flex items-center gap-2.5">
                                        <span class="w-7 h-7 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-xs"><i class="fa-solid fa-share-nodes"></i></span>
                                        Social Media Links
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-xs font-bold text-slate-600 uppercase tracking-wider mb-1.5">Facebook URL</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-blue-600"><i class="fa-brands fa-facebook text-base"></i></span>
                                                <input type="url" name="social_facebook" value="{{ $flatSettings['social_facebook'] ?? '' }}" placeholder="https://facebook.com/yourpage" class="pl-10 w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm py-2.5 font-medium transition-all">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-slate-600 uppercase tracking-wider mb-1.5">Twitter / X URL</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-900"><i class="fa-brands fa-x-twitter text-base"></i></span>
                                                <input type="url" name="social_twitter" value="{{ $flatSettings['social_twitter'] ?? '' }}" placeholder="https://x.com/yourhandle" class="pl-10 w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm py-2.5 font-medium transition-all">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-slate-600 uppercase tracking-wider mb-1.5">Instagram URL</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-pink-600"><i class="fa-brands fa-instagram text-base"></i></span>
                                                <input type="url" name="social_instagram" value="{{ $flatSettings['social_instagram'] ?? '' }}" placeholder="https://instagram.com/yourhandle" class="pl-10 w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm py-2.5 font-medium transition-all">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-slate-600 uppercase tracking-wider mb-1.5">LinkedIn URL</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-blue-700"><i class="fa-brands fa-linkedin text-base"></i></span>
                                                <input type="url" name="social_linkedin" value="{{ $flatSettings['social_linkedin'] ?? '' }}" placeholder="https://linkedin.com/company/yourpage" class="pl-10 w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm py-2.5 font-medium transition-all">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-slate-600 uppercase tracking-wider mb-1.5">YouTube URL</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-red-600"><i class="fa-brands fa-youtube text-base"></i></span>
                                                <input type="url" name="social_youtube" value="{{ $flatSettings['social_youtube'] ?? '' }}" placeholder="https://youtube.com/@yourchannel" class="pl-10 w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm py-2.5 font-medium transition-all">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-slate-600 uppercase tracking-wider mb-1.5">TikTok URL</label>
                                            <div class="relative">
                                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-900"><i class="fa-brands fa-tiktok text-base"></i></span>
                                                <input type="url" name="social_tiktok" value="{{ $flatSettings['social_tiktok'] ?? '' }}" placeholder="https://tiktok.com/@yourhandle" class="pl-10 w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm py-2.5 font-medium transition-all">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Identity & Logo Group -->
                                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200/70 shadow-sm">
                                    <h4 class="text-sm font-extrabold text-slate-800 uppercase tracking-wider mb-5 flex items-center gap-2.5">
                                        <span class="w-7 h-7 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-xs"><i class="fa-solid fa-image"></i></span>
                                        Website Branding & Primary Logo
                                    </h4>
                                    <div class="grid grid-cols-1 gap-6">
                                        <div>
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Site Title / Slogan</label>
                                            <input type="text" name="site_title" value="{{ $flatSettings['site_title'] ?? '' }}" placeholder="EuroWorld Education" class="w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm py-2.5 font-medium transition-all">
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">Active Logo Preview & Replacement</label>
                                            <div class="flex flex-col sm:flex-row items-center gap-6 bg-gradient-to-br from-slate-900 to-slate-800 p-5 rounded-2xl border border-slate-700 shadow-md text-white">
                                                <div class="h-20 w-48 flex flex-col items-center justify-center bg-white/95 rounded-xl p-3 shrink-0 shadow-inner">
                                                    @php
                                                        $logoPath = $flatSettings['site_logo'] ?? null;
                                                    @endphp
                                                    @if($logoPath && $logoPath !== 'images/logo.png')
                                                        <img src="{{ asset($logoPath) }}" alt="Site Logo" class="max-h-12 max-w-full object-contain">
                                                    @else
                                                        <img src="{{ asset('images/logo.png') }}" alt="Site Logo" class="max-h-12 max-w-full object-contain">
                                                    @endif
                                                    <span class="text-[9px] font-bold text-slate-400 mt-1 uppercase tracking-tighter">Current Live Logo</span>
                                                </div>
                                                <div class="flex-1 w-full">
                                                    <label class="block text-xs font-bold text-blue-300 uppercase tracking-wide mb-2 flex items-center gap-1.5">
                                                        <i class="fa-solid fa-cloud-arrow-up"></i> Upload New Replacement Logo (PNG / JPG / SVG)
                                                    </label>
                                                    <input type="file" name="site_logo" accept="image/*" class="block w-full text-xs text-slate-300 file:mr-4 file:py-2.5 file:px-5 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-blue-600 file:text-white hover:file:bg-blue-500 cursor-pointer bg-white/5 rounded-xl border border-white/10 p-1">
                                                    <p class="text-[11px] text-slate-400 mt-2 flex items-center gap-1.5">
                                                        <i class="fa-solid fa-circle-info text-blue-400"></i> Recommended: 250x60px Transparent PNG. Changes apply instantly after saving.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Home Page Tab -->
                        <div x-show="activeTab === 'home'" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0">
                            <div class="mb-8 pb-5 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                <div>
                                    <h3 class="text-2xl font-extrabold text-slate-900 tracking-tight">Home Page Hero Banner</h3>
                                    <p class="text-sm text-slate-500 mt-1">Customize the main headline, subtitle, and primary illustration seen by visitors on arrival.</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="{{ url('/') }}" target="_blank" class="text-xs font-bold text-indigo-600 bg-indigo-50 border border-indigo-100 hover:bg-indigo-100 px-3 py-1.5 rounded-full flex items-center gap-1.5 transition-colors">
                                        <i class="fa-solid fa-external-link-alt text-[10px]"></i> View Live Home
                                    </a>
                                </div>
                            </div>
                            
                            <div class="space-y-6">
                                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200/70 shadow-sm">
                                    <label class="block text-sm font-extrabold text-slate-800 mb-2 flex items-center justify-between">
                                        <span>Hero Section Headline (Rich Text & Color Gradients Allowed)</span>
                                        <span class="text-[11px] font-normal text-slate-400">HTML tags allowed</span>
                                    </label>
                                    <textarea name="home_hero_title" class="richtext block w-full rounded-xl border-slate-200 shadow-sm">{{ $flatSettings['home_hero_title'] ?? '' }}</textarea>
                                </div>

                                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200/70 shadow-sm">
                                    <label class="block text-sm font-extrabold text-slate-800 mb-2">Hero Section Subtitle / Introduction Text</label>
                                    <textarea name="home_hero_subtitle" rows="3" placeholder="Expert guidance for university admissions..." class="w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm p-3.5 font-medium transition-all">{{ $flatSettings['home_hero_subtitle'] ?? '' }}</textarea>
                                </div>

                                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200/70 shadow-sm">
                                    <label class="block text-sm font-extrabold text-slate-800 mb-3">Hero Banner Graphic / Illustration</label>
                                    <div class="flex flex-col sm:flex-row items-center gap-6 bg-gradient-to-br from-slate-900 to-slate-800 p-5 rounded-2xl border border-slate-700 shadow-md text-white">
                                        @if(isset($flatSettings['home_hero_image']) && $flatSettings['home_hero_image'])
                                            <div class="h-24 w-40 flex flex-col items-center justify-center bg-white/95 rounded-xl p-2 shrink-0 shadow-inner">
                                                <img src="{{ asset($flatSettings['home_hero_image']) }}" alt="Hero Image" class="max-h-16 max-w-full object-contain">
                                                <span class="text-[9px] font-bold text-slate-500 mt-1 uppercase tracking-tighter">Current Graphic</span>
                                            </div>
                                        @endif
                                        <div class="flex-1 w-full">
                                            <label class="block text-xs font-bold text-indigo-300 uppercase tracking-wide mb-2 flex items-center gap-1.5">
                                                <i class="fa-solid fa-cloud-arrow-up"></i> Upload New Hero Illustration (PNG / WebP / SVG)
                                            </label>
                                            <input type="file" name="home_hero_image" accept="image/*" class="block w-full text-xs text-slate-300 file:mr-4 file:py-2.5 file:px-5 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-indigo-600 file:text-white hover:file:bg-indigo-500 cursor-pointer bg-white/5 rounded-xl border border-white/10 p-1">
                                            <p class="text-[11px] text-slate-400 mt-2">Upload a high-resolution transparent PNG graphic to elevate your home page presentation.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- About Page Tab -->
                        <div x-show="activeTab === 'about'" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0">
                            <div class="mb-8 pb-5 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                <div>
                                    <h3 class="text-2xl font-extrabold text-slate-900 tracking-tight">About Us Page Content</h3>
                                    <p class="text-sm text-slate-500 mt-1">Define your core mission, company vision, and educational consultancy ethos.</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="{{ url('/about') }}" target="_blank" class="text-xs font-bold text-purple-600 bg-purple-50 border border-purple-100 hover:bg-purple-100 px-3 py-1.5 rounded-full flex items-center gap-1.5 transition-colors">
                                        <i class="fa-solid fa-external-link-alt text-[10px]"></i> View Live About Page
                                    </a>
                                </div>
                            </div>
                            
                            <div class="space-y-6">
                                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200/70 shadow-sm">
                                    <label class="block text-sm font-extrabold text-slate-800 mb-2 flex items-center justify-between">
                                        <span>Our Mission Statement</span>
                                        <span class="text-xs text-purple-600 font-bold bg-purple-100/60 px-2 py-0.5 rounded">Rich Text Active</span>
                                    </label>
                                    <textarea name="about_mission" class="richtext block w-full rounded-xl border-slate-200 shadow-sm">{{ $flatSettings['about_mission'] ?? '' }}</textarea>
                                </div>

                                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200/70 shadow-sm">
                                    <label class="block text-sm font-extrabold text-slate-800 mb-2 flex items-center justify-between">
                                        <span>Our Vision Statement</span>
                                        <span class="text-xs text-purple-600 font-bold bg-purple-100/60 px-2 py-0.5 rounded">Rich Text Active</span>
                                    </label>
                                    <textarea name="about_vision" class="richtext block w-full rounded-xl border-slate-200 shadow-sm">{{ $flatSettings['about_vision'] ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Scholarships Page Tab -->
                        <div x-show="activeTab === 'scholarships'" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0">
                            <div class="mb-8 pb-5 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                <div>
                                    <h3 class="text-2xl font-extrabold text-slate-900 tracking-tight">Scholarships Page Content</h3>
                                    <p class="text-sm text-slate-500 mt-1">Customize scholarship awards, eligibility notes, and regional funding opportunities.</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="{{ url('/scholarships') }}" target="_blank" class="text-xs font-bold text-amber-600 bg-amber-50 border border-amber-100 hover:bg-amber-100 px-3 py-1.5 rounded-full flex items-center gap-1.5 transition-colors">
                                        <i class="fa-solid fa-external-link-alt text-[10px]"></i> View Live Scholarships
                                    </a>
                                </div>
                            </div>
                            
                            <div class="space-y-8">
                                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200/70 shadow-sm space-y-4">
                                    <h4 class="text-sm font-extrabold text-slate-800 uppercase tracking-wider flex items-center gap-2 border-b border-slate-200/70 pb-3">
                                        <span class="w-7 h-7 rounded-lg bg-amber-100 text-amber-600 flex items-center justify-center text-xs"><i class="fa-solid fa-bookmark"></i></span>
                                        Page Hero Title & Subtitle
                                    </h4>
                                    <div class="grid grid-cols-1 gap-5">
                                        <div>
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Hero Section Headline</label>
                                            <input type="text" name="scholarships_hero_title" value="{{ $flatSettings['scholarships_hero_title'] ?? 'Global <span class=\"text-[#ffc107]\">Scholarships</span>' }}" class="w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm py-2.5 font-medium transition-all">
                                            <p class="text-[11px] text-slate-400 mt-1.5 flex items-center gap-1">
                                                <i class="fa-solid fa-lightbulb text-amber-500"></i> Tip: Use HTML span tag <code class="bg-slate-200 px-1.5 py-0.5 rounded text-slate-700 font-mono">&lt;span class="text-[#ffc107]"&gt;Scholarships&lt;/span&gt;</code> to highlight words in bright yellow.
                                            </p>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Hero Subtitle</label>
                                            <textarea name="scholarships_hero_subtitle" rows="2" class="w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm p-3.5 font-medium transition-all">{{ $flatSettings['scholarships_hero_subtitle'] ?? 'Unlock financial aid opportunities and fully-funded programs at the world\'s best universities.' }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200/70 shadow-sm space-y-4">
                                    <h4 class="text-sm font-extrabold text-slate-800 uppercase tracking-wider flex items-center gap-2 border-b border-slate-200/70 pb-3">
                                        <span class="w-7 h-7 rounded-lg bg-amber-100 text-amber-600 flex items-center justify-center text-xs"><i class="fa-solid fa-award"></i></span>
                                        Scholarship Box 1: Merit-Based Excellence Awards
                                    </h4>
                                    <div class="grid grid-cols-1 gap-5">
                                        <div>
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Box 1 Title</label>
                                            <input type="text" name="scholarships_card1_title" value="{{ $flatSettings['scholarships_card1_title'] ?? 'Merit-Based Excellence Awards' }}" class="w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm py-2.5 font-medium transition-all">
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2 flex items-center justify-between">
                                                <span>Box 1 Description (Rich Text)</span>
                                                <span class="text-xs text-amber-600 font-bold bg-amber-100/60 px-2 py-0.5 rounded">Summernote Active</span>
                                            </label>
                                            <textarea name="scholarships_card1_desc" class="richtext block w-full rounded-xl border-slate-200 shadow-sm">{{ $flatSettings['scholarships_card1_desc'] ?? '<p>Many of our partner universities in the UK and Australia offer significant tuition fee discounts (up to 50%) for students with outstanding academic records.</p>' }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200/70 shadow-sm space-y-4">
                                    <h4 class="text-sm font-extrabold text-slate-800 uppercase tracking-wider flex items-center gap-2 border-b border-slate-200/70 pb-3">
                                        <span class="w-7 h-7 rounded-lg bg-amber-100 text-amber-600 flex items-center justify-center text-xs"><i class="fa-solid fa-landmark"></i></span>
                                        Scholarship Box 2: Government & Regional Scholarships
                                    </h4>
                                    <div class="grid grid-cols-1 gap-5">
                                        <div>
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Box 2 Title</label>
                                            <input type="text" name="scholarships_card2_title" value="{{ $flatSettings['scholarships_card2_title'] ?? 'Government & Regional Scholarships' }}" class="w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm py-2.5 font-medium transition-all">
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2 flex items-center justify-between">
                                                <span>Box 2 Description (Rich Text)</span>
                                                <span class="text-xs text-amber-600 font-bold bg-amber-100/60 px-2 py-0.5 rounded">Summernote Active</span>
                                            </label>
                                            <textarea name="scholarships_card2_desc" class="richtext block w-full rounded-xl border-slate-200 shadow-sm">{{ $flatSettings['scholarships_card2_desc'] ?? '<p>We specialize in helping students apply for regional government scholarships (such as DSU in Italy or DAAD in Germany) which can cover full tuition and provide living stipends.</p>' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bottom Sticky Save Bar on Mobile -->
                        <div class="mt-8 pt-6 border-t border-slate-100 flex items-center justify-end lg:hidden">
                            <button type="submit" class="w-full sm:w-auto flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-8 py-3.5 rounded-xl font-bold text-sm shadow-xl shadow-blue-500/30 hover:from-blue-700 hover:to-indigo-700 transition-all cursor-pointer">
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
