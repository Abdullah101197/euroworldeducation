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
                <button type="submit" form="settings-form" style="background-color: #2563eb !important; color: #ffffff !important;" class="inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-xl font-bold text-sm shadow-xl shadow-blue-500/30 hover:scale-[1.02] active:scale-[0.98] transition-all duration-200 cursor-pointer">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    Save All Changes
                </button>
            </div>
        </div>
        <!-- Include Summernote Lite CSS & FontAwesome -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </x-slot>

    <div class="py-10 bg-slate-100/60 min-h-screen" x-data="{ activeTab: {{ json_encode($defaultTab ?? 'global') }}, showAddModal: false, showEditModal: false, editItem: { id: '', title: '', badge: '', highlight: '', icon: 'fa-award', color_theme: 'yellow', description: '', button_text: 'Check Your Eligibility', button_link: '/contact' } }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div style="background-color: #059669 !important; color: #ffffff !important;" class="mb-8 bg-emerald-600 text-white px-6 py-4 rounded-2xl shadow-lg shadow-emerald-500/20 flex items-center justify-between transition-all duration-300 animate-fade-in" role="alert">
                    <div class="flex items-center gap-3.5">
                        <span class="w-9 h-9 rounded-xl bg-white/20 backdrop-blur-md flex items-center justify-center font-extrabold text-lg shadow-inner text-white">✓</span>
                        <div>
                            <p class="font-bold text-base text-white">{{ session('success') }}</p>
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
                                :style="activeTab === 'global' ? 'background-color: #2563eb !important; color: #ffffff !important;' : ''"
                                :class="{ 'bg-blue-600 text-white shadow-lg shadow-blue-500/30 font-bold translate-x-1': activeTab === 'global', 'text-slate-700 hover:bg-slate-100 hover:text-slate-900 font-semibold bg-white': activeTab !== 'global' }" 
                                class="w-full flex items-center justify-between px-4 py-3.5 rounded-xl text-sm transition-all duration-200 text-left group border border-slate-200/60">
                            <div class="flex items-center gap-3.5">
                                <span class="w-8 h-8 rounded-lg flex items-center justify-center transition-colors" :class="{ 'bg-white/20 text-white': activeTab === 'global', 'bg-blue-50 text-blue-600 group-hover:bg-blue-100': activeTab !== 'global' }">
                                    <i class="fa-solid fa-globe text-sm"></i>
                                </span>
                                <span>Global Settings</span>
                            </div>
                            <i class="fa-solid fa-chevron-right text-xs transition-transform duration-200" :class="{ 'opacity-100 translate-x-0.5': activeTab === 'global', 'opacity-0 -translate-x-2': activeTab !== 'global' }"></i>
                        </button>

                        <button type="button" @click="activeTab = 'home'" 
                                :style="activeTab === 'home' ? 'background-color: #2563eb !important; color: #ffffff !important;' : ''"
                                :class="{ 'bg-blue-600 text-white shadow-lg shadow-blue-500/30 font-bold translate-x-1': activeTab === 'home', 'text-slate-700 hover:bg-slate-100 hover:text-slate-900 font-semibold bg-white': activeTab !== 'home' }" 
                                class="w-full flex items-center justify-between px-4 py-3.5 rounded-xl text-sm transition-all duration-200 text-left group border border-slate-200/60">
                            <div class="flex items-center gap-3.5">
                                <span class="w-8 h-8 rounded-lg flex items-center justify-center transition-colors" :class="{ 'bg-white/20 text-white': activeTab === 'home', 'bg-indigo-50 text-indigo-600 group-hover:bg-indigo-100': activeTab !== 'home' }">
                                    <i class="fa-solid fa-house text-sm"></i>
                                </span>
                                <span>Home Page</span>
                            </div>
                            <i class="fa-solid fa-chevron-right text-xs transition-transform duration-200" :class="{ 'opacity-100 translate-x-0.5': activeTab === 'home', 'opacity-0 -translate-x-2': activeTab !== 'home' }"></i>
                        </button>

                        <button type="button" @click="activeTab = 'about'" 
                                :style="activeTab === 'about' ? 'background-color: #2563eb !important; color: #ffffff !important;' : ''"
                                :class="{ 'bg-blue-600 text-white shadow-lg shadow-blue-500/30 font-bold translate-x-1': activeTab === 'about', 'text-slate-700 hover:bg-slate-100 hover:text-slate-900 font-semibold bg-white': activeTab !== 'about' }" 
                                class="w-full flex items-center justify-between px-4 py-3.5 rounded-xl text-sm transition-all duration-200 text-left group border border-slate-200/60">
                            <div class="flex items-center gap-3.5">
                                <span class="w-8 h-8 rounded-lg flex items-center justify-center transition-colors" :class="{ 'bg-white/20 text-white': activeTab === 'about', 'bg-purple-50 text-purple-600 group-hover:bg-purple-100': activeTab !== 'about' }">
                                    <i class="fa-solid fa-building text-sm"></i>
                                </span>
                                <span>About Page</span>
                            </div>
                            <i class="fa-solid fa-chevron-right text-xs transition-transform duration-200" :class="{ 'opacity-100 translate-x-0.5': activeTab === 'about', 'opacity-0 -translate-x-2': activeTab !== 'about' }"></i>
                        </button>

                        <button type="button" @click="activeTab = 'scholarships'" 
                                :style="activeTab === 'scholarships' ? 'background-color: #2563eb !important; color: #ffffff !important;' : ''"
                                :class="{ 'bg-blue-600 text-white shadow-lg shadow-blue-500/30 font-bold translate-x-1': activeTab === 'scholarships', 'text-slate-700 hover:bg-slate-100 hover:text-slate-900 font-semibold bg-white': activeTab !== 'scholarships' }" 
                                class="w-full flex items-center justify-between px-4 py-3.5 rounded-xl text-sm transition-all duration-200 text-left group border border-slate-200/60">
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
                        <button type="submit" form="settings-form" style="background-color: #2563eb !important; color: #ffffff !important;" class="w-full flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-3.5 rounded-xl font-bold text-sm shadow-md shadow-blue-500/25 transition-all cursor-pointer">
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
                                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200/70 shadow-s                                     <h4 class="text-sm font-extrabold text-slate-800 uppercase tracking-wider mb-5 flex items-center gap-2.5">
                                        <span class="w-7 h-7 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-xs"><i class="fa-solid fa-address-book"></i></span>
                                        Contact Information
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Phone Number</label>
                                            <div class="flex rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-500/20 transition-all">
                                                <span class="bg-slate-100/80 px-3.5 py-2.5 border-r border-slate-200/80 flex items-center justify-center text-blue-600 shrink-0 select-none">
                                                    <i class="fa-solid fa-phone text-xs"></i>
                                                </span>
                                                <input type="text" name="site_phone" value="{{ $flatSettings['site_phone'] ?? '' }}" placeholder="+1 (234) 567-8900" style="border: none !important; box-shadow: none !important; outline: none !important; background: transparent !important; width: 100% !important;" class="flex-1 w-full border-0 focus:ring-0 focus:outline-none text-sm py-2.5 px-3.5 font-medium bg-transparent text-slate-800">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Email Address</label>
                                            <div class="flex rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-500/20 transition-all">
                                                <span class="bg-slate-100/80 px-3.5 py-2.5 border-r border-slate-200/80 flex items-center justify-center text-blue-600 shrink-0 select-none">
                                                    <i class="fa-solid fa-envelope text-xs"></i>
                                                </span>
                                                <input type="email" name="site_email" value="{{ $flatSettings['site_email'] ?? '' }}" placeholder="info@euroworldeducation.com" style="border: none !important; box-shadow: none !important; outline: none !important; background: transparent !important; width: 100% !important;" class="flex-1 w-full border-0 focus:ring-0 focus:outline-none text-sm py-2.5 px-3.5 font-medium bg-transparent text-slate-800">
                                            </div>
                                        </div>
                                        <div class="md:col-span-2">
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Physical Office Address</label>
                                            <textarea name="site_address" rows="3" placeholder="123 Education Boulevard..." class="w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm p-3.5 font-medium transition-all text-slate-800">{{ $flatSettings['site_address'] ?? '' }}</textarea>
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
                                            <div class="flex rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-500/20 transition-all">
                                                <span class="bg-slate-100/80 px-3.5 py-2.5 border-r border-slate-200/80 flex items-center justify-center text-blue-600 shrink-0 select-none w-11">
                                                    <i class="fa-brands fa-facebook text-base"></i>
                                                </span>
                                                <input type="url" name="social_facebook" value="{{ $flatSettings['social_facebook'] ?? '' }}" placeholder="https://facebook.com/yourpage" style="border: none !important; box-shadow: none !important; outline: none !important; background: transparent !important; width: 100% !important;" class="flex-1 w-full border-0 focus:ring-0 focus:outline-none text-sm py-2.5 px-3.5 font-medium bg-transparent text-slate-800">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-slate-600 uppercase tracking-wider mb-1.5">Twitter / X URL</label>
                                            <div class="flex rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-500/20 transition-all">
                                                <span class="bg-slate-100/80 px-3.5 py-2.5 border-r border-slate-200/80 flex items-center justify-center text-slate-900 shrink-0 select-none w-11">
                                                    <i class="fa-brands fa-x-twitter text-base"></i>
                                                </span>
                                                <input type="url" name="social_twitter" value="{{ $flatSettings['social_twitter'] ?? '' }}" placeholder="https://x.com/yourhandle" style="border: none !important; box-shadow: none !important; outline: none !important; background: transparent !important; width: 100% !important;" class="flex-1 w-full border-0 focus:ring-0 focus:outline-none text-sm py-2.5 px-3.5 font-medium bg-transparent text-slate-800">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-slate-600 uppercase tracking-wider mb-1.5">Instagram URL</label>
                                            <div class="flex rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-500/20 transition-all">
                                                <span class="bg-slate-100/80 px-3.5 py-2.5 border-r border-slate-200/80 flex items-center justify-center text-pink-600 shrink-0 select-none w-11">
                                                    <i class="fa-brands fa-instagram text-base"></i>
                                                </span>
                                                <input type="url" name="social_instagram" value="{{ $flatSettings['social_instagram'] ?? '' }}" placeholder="https://instagram.com/yourhandle" style="border: none !important; box-shadow: none !important; outline: none !important; background: transparent !important; width: 100% !important;" class="flex-1 w-full border-0 focus:ring-0 focus:outline-none text-sm py-2.5 px-3.5 font-medium bg-transparent text-slate-800">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-slate-600 uppercase tracking-wider mb-1.5">LinkedIn URL</label>
                                            <div class="flex rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-500/20 transition-all">
                                                <span class="bg-slate-100/80 px-3.5 py-2.5 border-r border-slate-200/80 flex items-center justify-center text-blue-700 shrink-0 select-none w-11">
                                                    <i class="fa-brands fa-linkedin text-base"></i>
                                                </span>
                                                <input type="url" name="social_linkedin" value="{{ $flatSettings['social_linkedin'] ?? '' }}" placeholder="https://linkedin.com/company/yourpage" style="border: none !important; box-shadow: none !important; outline: none !important; background: transparent !important; width: 100% !important;" class="flex-1 w-full border-0 focus:ring-0 focus:outline-none text-sm py-2.5 px-3.5 font-medium bg-transparent text-slate-800">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-slate-600 uppercase tracking-wider mb-1.5">YouTube URL</label>
                                            <div class="flex rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-500/20 transition-all">
                                                <span class="bg-slate-100/80 px-3.5 py-2.5 border-r border-slate-200/80 flex items-center justify-center text-red-600 shrink-0 select-none w-11">
                                                    <i class="fa-brands fa-youtube text-base"></i>
                                                </span>
                                                <input type="url" name="social_youtube" value="{{ $flatSettings['social_youtube'] ?? '' }}" placeholder="https://youtube.com/@yourchannel" style="border: none !important; box-shadow: none !important; outline: none !important; background: transparent !important; width: 100% !important;" class="flex-1 w-full border-0 focus:ring-0 focus:outline-none text-sm py-2.5 px-3.5 font-medium bg-transparent text-slate-800">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-slate-600 uppercase tracking-wider mb-1.5">TikTok URL</label>
                                            <div class="flex rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-500/20 transition-all">
                                                <span class="bg-slate-100/80 px-3.5 py-2.5 border-r border-slate-200/80 flex items-center justify-center text-slate-900 shrink-0 select-none w-11">
                                                    <i class="fa-brands fa-tiktok text-base"></i>
                                                </span>
                                                <input type="url" name="social_tiktok" value="{{ $flatSettings['social_tiktok'] ?? '' }}" placeholder="https://tiktok.com/@yourhandle" style="border: none !important; box-shadow: none !important; outline: none !important; background: transparent !important; width: 100% !important;" class="flex-1 w-full border-0 focus:ring-0 focus:outline-none text-sm py-2.5 px-3.5 font-medium bg-transparent text-slate-800">
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
                                            <input type="text" name="site_title" value="{{ $flatSettings['site_title'] ?? '' }}" placeholder="EuroWorld Education" class="w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm py-2.5 font-medium transition-all text-slate-800">
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">Active Logo Preview & Replacement</label>
                                            <div class="flex flex-col sm:flex-row items-center gap-6 bg-slate-900 p-6 rounded-2xl border border-slate-800 shadow-lg text-white">
                                                <div class="h-20 w-48 flex flex-col items-center justify-center bg-white rounded-xl p-3 shrink-0 shadow-md">
                                                    @php
                                                        $logoPath = $flatSettings['site_logo'] ?? null;
                                                    @endphp
                                                    @if($logoPath && $logoPath !== 'images/logo.png')
                                                        <img src="{{ asset($logoPath) }}" onerror="this.onerror=null; this.src='{{ asset('images/logo.png') }}';" alt="Site Logo" class="max-h-12 max-w-full object-contain">
                                                    @else
                                                        <img src="{{ asset('images/logo.png') }}" alt="Site Logo" class="max-h-12 max-w-full object-contain">
                                                    @endif
                                                    <span class="text-[9px] font-bold text-slate-500 mt-1 uppercase tracking-tighter">Current Live Logo</span>
                                                </div>
                                                <div class="flex-1 w-full">
                                                    <label class="block text-xs font-bold text-blue-300 uppercase tracking-wide mb-2 flex items-center gap-1.5">
                                                        <i class="fa-solid fa-cloud-arrow-up text-sm"></i> Upload Replacement Logo (PNG / JPG / SVG)
                                                    </label>
                                                    <div class="relative border-2 border-dashed border-slate-700 hover:border-blue-500 bg-slate-800/80 rounded-xl p-3 transition-all">
                                                        <input type="file" name="site_logo" accept="image/*" class="block w-full text-xs text-slate-300 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-blue-600 file:text-white hover:file:bg-blue-500 cursor-pointer">
                                                    </div>
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
                                    <textarea name="home_hero_subtitle" rows="3" placeholder="Expert guidance for university admissions..." class="w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm p-3.5 font-medium transition-all text-slate-800">{{ $flatSettings['home_hero_subtitle'] ?? '' }}</textarea>
                                </div>

                                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200/70 shadow-sm">
                                    <label class="block text-sm font-extrabold text-slate-800 mb-3">Hero Banner Graphic / Illustration</label>
                                    <div class="flex flex-col sm:flex-row items-center gap-6 bg-slate-900 p-6 rounded-2xl border border-slate-800 shadow-lg text-white">
                                        @if(isset($flatSettings['home_hero_image']) && $flatSettings['home_hero_image'])
                                            <div class="h-24 w-40 flex flex-col items-center justify-center bg-white rounded-xl p-2 shrink-0 shadow-md">
                                                <img src="{{ asset($flatSettings['home_hero_image']) }}" onerror="this.onerror=null; this.src='{{ asset('images/hero.png') }}';" alt="Hero Image" class="max-h-16 max-w-full object-contain">
                                                <span class="text-[9px] font-bold text-slate-500 mt-1 uppercase tracking-tighter">Current Graphic</span>
                                            </div>
                                        @endif
                                        <div class="flex-1 w-full">
                                            <label class="block text-xs font-bold text-indigo-300 uppercase tracking-wide mb-2 flex items-center gap-1.5">
                                                <i class="fa-solid fa-cloud-arrow-up text-sm"></i> Upload Hero Illustration (PNG / WebP / SVG)
                                            </label>
                                            <div class="relative border-2 border-dashed border-slate-700 hover:border-indigo-500 bg-slate-800/80 rounded-xl p-3 transition-all">
                                                <input type="file" name="home_hero_image" accept="image/*" class="block w-full text-xs text-slate-300 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-indigo-600 file:text-white hover:file:bg-indigo-500 cursor-pointer">
                                            </div>
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
                                    <h3 class="text-2xl font-extrabold text-slate-900 tracking-tight">Scholarships Page & Box Manager</h3>
                                    <p class="text-sm text-slate-500 mt-1">Easily manage your top header and add, edit, or delete dynamic scholarship boxes.</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <button type="button" @click="showAddModal = true" style="background-color: #059669 !important; color: #ffffff !important;" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white px-5 py-2.5 rounded-xl font-bold text-sm shadow-lg shadow-emerald-500/20 transition-all">
                                        <i class="fa-solid fa-plus"></i> + Add New Scholarship Box
                                    </button>
                                    <a href="{{ url('/scholarships') }}" target="_blank" class="text-xs font-bold text-amber-600 bg-amber-50 border border-amber-100 hover:bg-amber-100 px-3 py-2 rounded-xl flex items-center gap-1.5 transition-colors">
                                        <i class="fa-solid fa-external-link-alt text-[10px]"></i> View Live Page
                                    </a>
                                </div>
                            </div>
                            
                            <div class="space-y-8">
                                <!-- Easy Hero Setup (No HTML Required) -->
                                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200/70 shadow-sm space-y-4">
                                    <h4 class="text-sm font-extrabold text-slate-800 uppercase tracking-wider flex items-center gap-2 border-b border-slate-200/70 pb-3">
                                        <span class="w-7 h-7 rounded-lg bg-amber-100 text-amber-600 flex items-center justify-center text-xs"><i class="fa-solid fa-bookmark"></i></span>
                                        Page Top Header Banner Setup (Simple Text)
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                        <div>
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Main Title Text</label>
                                            <input type="text" name="scholarships_hero_title" value="{{ $flatSettings['scholarships_hero_title'] ?? 'Global' }}" placeholder="e.g. Global" class="w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm py-2.5 font-medium transition-all text-slate-800">
                                            <p class="text-[11px] text-slate-400 mt-1">Normal text before the highlighted word.</p>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Highlighted Word (Auto-Colored Yellow)</label>
                                            <input type="text" name="scholarships_hero_highlight" value="{{ $flatSettings['scholarships_hero_highlight'] ?? 'Scholarships' }}" placeholder="e.g. Scholarships" class="w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm py-2.5 font-bold text-amber-600 transition-all">
                                            <p class="text-[11px] text-slate-400 mt-1">No HTML tags needed! This word will automatically glow bright yellow.</p>
                                        </div>
                                        <div class="md:col-span-2">
                                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Hero Subtitle / Short Description</label>
                                            <textarea name="scholarships_hero_subtitle" rows="2" class="w-full rounded-xl border-slate-200 bg-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 text-sm p-3.5 font-medium transition-all text-slate-800">{{ $flatSettings['scholarships_hero_subtitle'] ?? 'Unlock financial aid opportunities and fully-funded programs at the world\'s best universities.' }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Dynamic Scholarship Boxes List -->
                                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm space-y-6">
                                    <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                                        <div>
                                            <h4 class="text-base font-extrabold text-slate-900 flex items-center gap-2">
                                                <i class="fa-solid fa-award text-amber-500"></i> Active Scholarship Boxes on Public Site
                                            </h4>
                                            <p class="text-xs text-slate-500 mt-0.5">Click "Edit Box" to modify title, text, icon & color, or "Delete Box" to remove an old scholarship.</p>
                                        </div>
                                        <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-800 text-xs font-extrabold">{{ isset($scholarships) ? $scholarships->count() : 0 }} Boxes Live</span>
                                    </div>

                                    @if(isset($scholarships) && $scholarships->count() > 0)
                                        <div class="grid grid-cols-1 gap-4">
                                            @foreach($scholarships as $item)
                                                @php
                                                    $pillColors = [
                                                        'yellow' => 'bg-amber-100 text-amber-800 border-amber-200',
                                                        'red' => 'bg-rose-100 text-rose-800 border-rose-200',
                                                        'blue' => 'bg-blue-100 text-blue-800 border-blue-200',
                                                        'emerald' => 'bg-emerald-100 text-emerald-800 border-emerald-200',
                                                        'purple' => 'bg-purple-100 text-purple-800 border-purple-200',
                                                    ][$item->color_theme] ?? 'bg-amber-100 text-amber-800 border-amber-200';
                                                @endphp
                                                <div class="p-5 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-slate-50 transition-all flex flex-col md:flex-row md:items-center justify-between gap-6">
                                                    <div class="flex items-start gap-4">
                                                        <div class="w-14 h-14 rounded-2xl bg-white border border-slate-200 shadow-sm flex items-center justify-center text-2xl text-slate-700 shrink-0 mt-0.5">
                                                            <i class="fa-solid {{ $item->icon ?: 'fa-award' }}"></i>
                                                        </div>
                                                        <div>
                                                            <div class="flex flex-wrap items-center gap-2 mb-1">
                                                                @if($item->badge)
                                                                    <span class="px-2.5 py-0.5 rounded-full text-[11px] font-bold border uppercase tracking-wider {{ $pillColors }}">{{ $item->badge }}</span>
                                                                @endif
                                                                @if($item->highlight)
                                                                    <span class="text-xs font-semibold text-slate-500">{{ $item->highlight }}</span>
                                                                @endif
                                                            </div>
                                                            <h5 class="text-lg font-extrabold text-slate-900">{{ $item->title }}</h5>
                                                            <div class="text-xs text-slate-500 mt-1.5 line-clamp-2 max-w-2xl prose prose-sm">{!! strip_tags($item->description) !!}</div>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center gap-2.5 shrink-0 border-t md:border-t-0 pt-3 md:pt-0 border-slate-200">
                                                        <button type="button" 
                                                                @click="editItem = {{ $item->toJson() }}; showEditModal = true; setTimeout(() => { $('#edit_description').summernote('code', editItem.description); }, 100);" 
                                                                style="background-color: #2563eb !important; color: #ffffff !important;" 
                                                                class="px-4 py-2 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs flex items-center gap-1.5 shadow-sm transition-all">
                                                            <i class="fa-solid fa-pen-to-square"></i> Edit Box
                                                        </button>
                                                        <button type="submit" form="delete-scholarship-form-{{ $item->id }}" onclick="return confirm('Are you sure you want to delete this scholarship box?')" style="background-color: #dc2626 !important; color: #ffffff !important;" class="px-4 py-2 rounded-xl bg-red-600 hover:bg-red-700 text-white font-bold text-xs flex items-center gap-1.5 shadow-sm transition-all">
                                                            <i class="fa-solid fa-trash"></i> Delete Box
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="text-center py-12 bg-slate-50 rounded-2xl border border-dashed border-slate-300">
                                            <i class="fa-solid fa-award text-4xl text-slate-300 mb-3"></i>
                                            <h5 class="font-bold text-slate-700">No Scholarship Boxes Found</h5>
                                            <p class="text-xs text-slate-500 mt-1 max-w-sm mx-auto">Click the "+ Add New Scholarship Box" button above to create your first dynamic scholarship program.</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Bottom Sticky Save Bar on Mobile -->
                        <div class="mt-8 pt-6 border-t border-slate-100 flex items-center justify-end lg:hidden">
                            <button type="submit" style="background-color: #2563eb !important; color: #ffffff !important;" class="w-full sm:w-auto flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-8 py-3.5 rounded-xl font-bold text-sm shadow-xl shadow-blue-500/30 transition-all cursor-pointer">
                                <i class="fa-solid fa-check"></i>
                                Save All Changes
                            </button>
                        </div>

                    </form>

                    <!-- Standalone Delete Forms for Scholarship Boxes -->
                    @if(isset($scholarships))
                        @foreach($scholarships as $item)
                            <form id="delete-scholarship-form-{{ $item->id }}" method="POST" action="{{ route('scholarships.destroy', $item->id) }}" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        @endforeach
                    @endif

                    <!-- Modal: Add New Scholarship Box -->
                    <div x-show="showAddModal" style="display: none;" class="fixed inset-0 z-50 overflow-y-auto bg-slate-900/60 backdrop-blur-sm flex items-center justify-center p-4" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                        <div @click.away="showAddModal = false" class="bg-white rounded-3xl shadow-2xl border border-slate-200 max-w-2xl w-full overflow-hidden transform transition-all max-h-[90vh] flex flex-col">
                            <div class="px-6 py-5 bg-gradient-to-r from-[#0b1b3d] to-[#162e63] text-white flex items-center justify-between shrink-0">
                                <div class="flex items-center gap-3">
                                    <span class="w-10 h-10 rounded-xl bg-yellow-500/20 text-yellow-400 flex items-center justify-center text-lg"><i class="fa-solid fa-plus"></i></span>
                                    <div>
                                        <h4 class="font-extrabold text-lg">Add New Scholarship Box</h4>
                                        <p class="text-xs text-slate-300">Create a dynamic funding program for the live website.</p>
                                    </div>
                                </div>
                                <button type="button" @click="showAddModal = false" class="text-white/70 hover:text-white text-2xl font-bold">&times;</button>
                            </div>

                            <form method="POST" action="{{ route('scholarships.store') }}" class="p-6 space-y-5 overflow-y-auto grow">
                                @csrf
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Box Title <span class="text-red-500">*</span></label>
                                        <input type="text" name="title" required placeholder="e.g. Merit-Based Excellence Awards" class="w-full rounded-xl border-slate-200 bg-white shadow-sm text-sm py-2.5 font-medium text-slate-800">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Badge Tag</label>
                                        <input type="text" name="badge" placeholder="e.g. Academic Excellence" class="w-full rounded-xl border-slate-200 bg-white shadow-sm text-sm py-2.5 font-medium text-slate-800">
                                    </div>
                                    <div class="md:col-span-2">
                                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Highlight Note / Perk</label>
                                        <input type="text" name="highlight" placeholder="e.g. • Up to 50% Tuition Coverage" class="w-full rounded-xl border-slate-200 bg-white shadow-sm text-sm py-2.5 font-medium text-slate-800">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Choose Icon</label>
                                        <select name="icon" class="w-full rounded-xl border-slate-200 bg-white shadow-sm text-sm py-2.5 font-bold text-slate-800">
                                            <option value="fa-award">🏆 Medal / Award (fa-award)</option>
                                            <option value="fa-landmark">🏛️ Government / Regional (fa-landmark)</option>
                                            <option value="fa-graduation-cap">🎓 Graduation Cap (fa-graduation-cap)</option>
                                            <option value="fa-globe-europe">🌍 Global / Abroad (fa-globe-europe)</option>
                                            <option value="fa-hand-holding-dollar">💰 Financial Aid (fa-hand-holding-dollar)</option>
                                            <option value="fa-book-open">📚 Study & Research (fa-book-open)</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Choose Color Theme</label>
                                        <select name="color_theme" class="w-full rounded-xl border-slate-200 bg-white shadow-sm text-sm py-2.5 font-bold text-slate-800">
                                            <option value="yellow">🟡 Gold / Amber Theme</option>
                                            <option value="red">🔴 Rose / Red Theme</option>
                                            <option value="blue">🔵 Royal Blue Theme</option>
                                            <option value="emerald">🟢 Emerald Green Theme</option>
                                            <option value="purple">🟣 Royal Purple Theme</option>
                                        </select>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Description (Rich Text or Normal Text) <span class="text-red-500">*</span></label>
                                        <textarea name="description" rows="4" required placeholder="Describe eligibility criteria, benefits, and how to apply..." class="richtext block w-full rounded-xl border-slate-200 shadow-sm text-sm p-3 font-normal text-slate-800"></textarea>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Button Text</label>
                                        <input type="text" name="button_text" value="Check Your Eligibility" class="w-full rounded-xl border-slate-200 bg-white shadow-sm text-sm py-2.5 font-medium text-slate-800">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Button Link</label>
                                        <input type="text" name="button_link" value="/contact" class="w-full rounded-xl border-slate-200 bg-white shadow-sm text-sm py-2.5 font-medium text-slate-800">
                                    </div>
                                </div>

                                <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3 shrink-0">
                                    <button type="button" @click="showAddModal = false" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-sm">Cancel</button>
                                    <button type="submit" style="background-color: #059669 !important; color: #ffffff !important;" class="px-6 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm shadow-md">
                                        <i class="fa-solid fa-check mr-1.5"></i> Save Scholarship Box
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Modal: Edit Scholarship Box -->
                    <div x-show="showEditModal" style="display: none;" class="fixed inset-0 z-50 overflow-y-auto bg-slate-900/60 backdrop-blur-sm flex items-center justify-center p-4" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                        <div @click.away="showEditModal = false" class="bg-white rounded-3xl shadow-2xl border border-slate-200 max-w-2xl w-full overflow-hidden transform transition-all max-h-[90vh] flex flex-col">
                            <div class="px-6 py-5 bg-gradient-to-r from-blue-600 to-indigo-600 text-white flex items-center justify-between shrink-0">
                                <div class="flex items-center gap-3">
                                    <span class="w-10 h-10 rounded-xl bg-white/20 text-white flex items-center justify-center text-lg"><i class="fa-solid fa-pen-to-square"></i></span>
                                    <div>
                                        <h4 class="font-extrabold text-lg">Edit Scholarship Box</h4>
                                        <p class="text-xs text-blue-100">Update details for <span x-text="editItem.title" class="font-bold underline"></span></p>
                                    </div>
                                </div>
                                <button type="button" @click="showEditModal = false" class="text-white/70 hover:text-white text-2xl font-bold">&times;</button>
                            </div>

                            <form :action="`/admin/scholarships/${editItem.id}`" method="POST" class="p-6 space-y-5 overflow-y-auto grow">
                                @csrf
                                @method('PUT')
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Box Title <span class="text-red-500">*</span></label>
                                        <input type="text" name="title" x-model="editItem.title" required class="w-full rounded-xl border-slate-200 bg-white shadow-sm text-sm py-2.5 font-medium text-slate-800">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Badge Tag</label>
                                        <input type="text" name="badge" x-model="editItem.badge" class="w-full rounded-xl border-slate-200 bg-white shadow-sm text-sm py-2.5 font-medium text-slate-800">
                                    </div>
                                    <div class="md:col-span-2">
                                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Highlight Note / Perk</label>
                                        <input type="text" name="highlight" x-model="editItem.highlight" class="w-full rounded-xl border-slate-200 bg-white shadow-sm text-sm py-2.5 font-medium text-slate-800">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Choose Icon</label>
                                        <select name="icon" x-model="editItem.icon" class="w-full rounded-xl border-slate-200 bg-white shadow-sm text-sm py-2.5 font-bold text-slate-800">
                                            <option value="fa-award">🏆 Medal / Award (fa-award)</option>
                                            <option value="fa-landmark">🏛️ Government / Regional (fa-landmark)</option>
                                            <option value="fa-graduation-cap">🎓 Graduation Cap (fa-graduation-cap)</option>
                                            <option value="fa-globe-europe">🌍 Global / Abroad (fa-globe-europe)</option>
                                            <option value="fa-hand-holding-dollar">💰 Financial Aid (fa-hand-holding-dollar)</option>
                                            <option value="fa-book-open">📚 Study & Research (fa-book-open)</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Choose Color Theme</label>
                                        <select name="color_theme" x-model="editItem.color_theme" class="w-full rounded-xl border-slate-200 bg-white shadow-sm text-sm py-2.5 font-bold text-slate-800">
                                            <option value="yellow">🟡 Gold / Amber Theme</option>
                                            <option value="red">🔴 Rose / Red Theme</option>
                                            <option value="blue">🔵 Royal Blue Theme</option>
                                            <option value="emerald">🟢 Emerald Green Theme</option>
                                            <option value="purple">🟣 Royal Purple Theme</option>
                                        </select>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Description (Rich Text or Normal Text) <span class="text-red-500">*</span></label>
                                        <textarea id="edit_description" name="description" rows="4" required class="richtext block w-full rounded-xl border-slate-200 shadow-sm text-sm p-3 font-normal text-slate-800"></textarea>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Button Text</label>
                                        <input type="text" name="button_text" x-model="editItem.button_text" class="w-full rounded-xl border-slate-200 bg-white shadow-sm text-sm py-2.5 font-medium text-slate-800">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Button Link</label>
                                        <input type="text" name="button_link" x-model="editItem.button_link" class="w-full rounded-xl border-slate-200 bg-white shadow-sm text-sm py-2.5 font-medium text-slate-800">
                                    </div>
                                </div>

                                <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3 shrink-0">
                                    <button type="button" @click="showEditModal = false" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-sm">Cancel</button>
                                    <button type="submit" style="background-color: #2563eb !important; color: #ffffff !important;" class="px-6 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm shadow-md">
                                        <i class="fa-solid fa-check mr-1.5"></i> Update Scholarship Box
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

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
