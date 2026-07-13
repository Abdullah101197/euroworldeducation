@extends('layouts.main')

@section('title', 'About Us - Euro World Education')
@section('description', 'Learn about our mission, vision, and 10+ years of trust in guiding students to their dream universities abroad.')

@section('content')
<!-- About Hero with Ambient Glow -->
    <section class="relative pt-44 pb-28 bg-[#0b1b3d] font-sans overflow-hidden text-center">
        <div class="absolute top-1/4 left-1/3 w-96 h-96 bg-red-600/15 rounded-full blur-3xl pointer-events-none -translate-x-1/2 -translate-y-1/2 animate-pulse"></div>
        <div class="absolute bottom-10 right-1/4 w-80 h-80 bg-blue-500/20 rounded-full blur-3xl pointer-events-none translate-x-1/2"></div>
        <div class="absolute inset-0 bg-[radial-gradient(#ffffff0a_1px,transparent_1px)] [background-size:16px_16px] opacity-40"></div>

        <div class="container mx-auto px-6 relative z-10 max-w-4xl">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-red-400 text-xs font-bold uppercase tracking-widest mb-6 backdrop-blur-md shadow-inner">
                <i class="fa-solid fa-heart animate-pulse text-red-400"></i> Who We Are & Our Legacy
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight leading-tight">About <span class="text-[#c6181b]">Euro World</span></h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto font-light leading-relaxed">Your trusted partner in navigating the journey to world-class education in Europe and beyond.</p>
        </div>
    </section>

    <!-- Mission & Vision Cards Section -->
    <section class="py-24 bg-gradient-to-b from-slate-50 via-white to-slate-50 relative -mt-10 rounded-t-[40px] z-20 shadow-2xl border-t border-gray-100">
        <div class="container mx-auto px-6 max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column: Mission & Vision Cards -->
                <div class="lg:col-span-7 space-y-8">
                    <!-- Mission Card -->
                    <div class="group bg-white p-8 md:p-10 rounded-3xl shadow-xl hover:shadow-2xl border border-gray-100 hover:border-blue-200/80 transition-all duration-300 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform duration-500"></div>
                        <div class="flex items-center gap-4 mb-5">
                            <span class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-600 to-indigo-600 text-white flex items-center justify-center text-2xl shadow-lg shadow-blue-500/30">
                                <i class="fa-solid fa-bullseye"></i>
                            </span>
                            <div>
                                <span class="text-xs font-bold uppercase tracking-widest text-blue-600 block">Our Purpose</span>
                                <h2 class="text-2xl md:text-3xl font-extrabold text-[#0b1b3d]">Our Mission</h2>
                            </div>
                        </div>
                        <div class="prose max-w-none text-gray-600 leading-relaxed text-base font-normal">
                            {!! $global_settings['about_mission'] ?? '<p>At Euro World Education, our mission is to empower students by providing transparent, ethical, and comprehensive guidance for studying abroad. We believe that global education transforms lives, and we strive to make this transformation accessible to everyone.</p>' !!}
                        </div>
                    </div>
                    
                    <!-- Vision Card -->
                    <div class="group bg-white p-8 md:p-10 rounded-3xl shadow-xl hover:shadow-2xl border border-gray-100 hover:border-purple-200/80 transition-all duration-300 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-purple-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform duration-500"></div>
                        <div class="flex items-center gap-4 mb-5">
                            <span class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-600 to-pink-600 text-white flex items-center justify-center text-2xl shadow-lg shadow-purple-500/30">
                                <i class="fa-solid fa-eye"></i>
                            </span>
                            <div>
                                <span class="text-xs font-bold uppercase tracking-widest text-purple-600 block">Our Future Goals</span>
                                <h2 class="text-2xl md:text-3xl font-extrabold text-[#0b1b3d]">Our Vision</h2>
                            </div>
                        </div>
                        <div class="prose max-w-none text-gray-600 leading-relaxed text-base font-normal">
                            {!! $global_settings['about_vision'] ?? '<p>To be the most trusted educational consultancy globally, recognized for our commitment to student success and our extensive network of top-tier university partnerships.</p>' !!}
                        </div>
                    </div>
                </div>

                <!-- Right Column: Visual Experience & Stats Badge -->
                <div class="lg:col-span-5 relative">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <div class="absolute inset-0 bg-gradient-to-tr from-[#0b1b3d] to-[#c6181b] rounded-3xl rotate-3 scale-105 opacity-15 blur-lg"></div>
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Team Consultation" class="rounded-3xl shadow-2xl relative z-10 w-full object-cover aspect-[4/5] border border-white/40">
                        
                        <!-- Floating Trust Stats Badge -->
                        <div class="absolute -bottom-8 -left-6 md:-left-8 bg-gradient-to-br from-[#c6181b] to-[#991114] text-white p-6 md:p-8 rounded-3xl shadow-2xl border border-white/20 z-20 flex items-center gap-5 backdrop-blur-xl animate-bounce-subtle">
                            <div class="w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center text-3xl font-extrabold">
                                <i class="fa-solid fa-shield-halved text-yellow-400"></i>
                            </div>
                            <div>
                                <div class="text-3xl md:text-4xl font-extrabold tracking-tight">10+ Years</div>
                                <div class="text-xs md:text-sm font-semibold text-red-100 uppercase tracking-wider mt-0.5">Of Excellence & Trust</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
@endsection
