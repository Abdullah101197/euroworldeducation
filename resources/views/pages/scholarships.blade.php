@extends('layouts.main')

@section('title', 'Fully Funded European Scholarships - Euro World')
@section('description', 'Unlock financial aid and merit-based excellence awards at the world\'s best universities.')

@section('content')
<!-- Scholarships Hero with Ambient Glow -->
    <section class="relative pt-44 pb-28 bg-[#0b1b3d] font-sans overflow-hidden text-center">
        <!-- Glowing Ambient Blobs -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl pointer-events-none -translate-x-1/2 -translate-y-1/2 animate-pulse"></div>
        <div class="absolute bottom-10 right-1/4 w-80 h-80 bg-yellow-500/15 rounded-full blur-3xl pointer-events-none translate-x-1/2"></div>
        <div class="absolute inset-0 bg-[radial-gradient(#ffffff0a_1px,transparent_1px)] [background-size:16px_16px] opacity-40"></div>

        <div class="container mx-auto px-6 relative z-10 max-w-4xl">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-yellow-400 text-xs font-bold uppercase tracking-widest mb-6 backdrop-blur-md shadow-inner">
                <i class="fa-solid fa-sparkles animate-spin text-yellow-300"></i> Global Financial Aid & Awards
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight leading-tight">{!! $global_settings['scholarships_hero_title'] ?? 'Global <span class="text-[#ffc107]">Scholarships</span>' !!}</h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto font-light leading-relaxed">{{ $global_settings['scholarships_hero_subtitle'] ?? 'Unlock financial aid opportunities and fully-funded programs at the world\'s best universities.' }}</p>
        </div>
    </section>

<!-- Scholarships Cards & Offerings Section -->
    <section class="py-24 bg-gradient-to-b from-slate-50 via-white to-slate-50 relative -mt-10 rounded-t-[40px] z-20 shadow-2xl border-t border-gray-100">
        <div class="container mx-auto px-6 max-w-5xl">
            
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-xs font-extrabold text-yellow-600 uppercase tracking-widest mb-2">Tailored Funding Tracks</h2>
                <h3 class="text-3xl md:text-4xl font-extrabold text-[#0b1b3d]">Explore Your Scholarship Pathways</h3>
                <div class="w-16 h-1 bg-yellow-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <!-- Card 1: Merit Based -->
            <div class="group bg-white p-8 md:p-10 rounded-3xl shadow-xl hover:shadow-2xl border border-gray-100 hover:border-yellow-300/80 transition-all duration-300 flex flex-col md:flex-row gap-8 items-center mb-10 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-yellow-400/10 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform duration-500"></div>
                <div class="w-24 h-24 md:w-28 md:h-28 bg-gradient-to-br from-yellow-100 to-amber-50 text-amber-500 rounded-2xl flex items-center justify-center text-4xl md:text-5xl shrink-0 shadow-inner group-hover:scale-105 group-hover:rotate-3 transition-transform duration-300 border border-yellow-200/60">
                    <i class="fa-solid fa-award"></i>
                </div>
                <div class="w-full text-left">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="px-3 py-1 rounded-full bg-amber-100 text-amber-800 text-xs font-bold uppercase tracking-wider">Academic Excellence</span>
                        <span class="text-xs font-semibold text-gray-400">• Up to 50% Tuition Coverage</span>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-[#0b1b3d] mb-3 group-hover:text-blue-600 transition-colors">{{ $global_settings['scholarships_card1_title'] ?? 'Merit-Based Excellence Awards' }}</h2>
                    <div class="text-gray-600 leading-relaxed mb-6 prose max-w-none text-base font-normal">{!! $global_settings['scholarships_card1_desc'] ?? '<p>Many of our partner universities in the UK and Australia offer significant tuition fee discounts (up to 50%) for students with outstanding academic records.</p>' !!}</div>
                    <div class="flex items-center gap-4">
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-[#0b1b3d] text-white px-7 py-3.5 rounded-xl font-bold text-sm shadow-md shadow-blue-900/20 hover:bg-yellow-500 hover:text-[#0b1b3d] hover:shadow-lg transition-all duration-200">
                            <span>Check Your Eligibility</span>
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 2: Government & Regional -->
            <div class="group bg-white p-8 md:p-10 rounded-3xl shadow-xl hover:shadow-2xl border border-gray-100 hover:border-red-300/80 transition-all duration-300 flex flex-col md:flex-row gap-8 items-center relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-red-400/10 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform duration-500"></div>
                <div class="w-24 h-24 md:w-28 md:h-28 bg-gradient-to-br from-red-100 to-rose-50 text-red-600 rounded-2xl flex items-center justify-center text-4xl md:text-5xl shrink-0 shadow-inner group-hover:scale-105 group-hover:-rotate-3 transition-transform duration-300 border border-red-200/60">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <div class="w-full text-left">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="px-3 py-1 rounded-full bg-red-100 text-red-800 text-xs font-bold uppercase tracking-wider">Public & Regional Grants</span>
                        <span class="text-xs font-semibold text-gray-400">• Full Tuition + Stipend</span>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-[#0b1b3d] mb-3 group-hover:text-red-600 transition-colors">{{ $global_settings['scholarships_card2_title'] ?? 'Government & Regional Scholarships' }}</h2>
                    <div class="text-gray-600 leading-relaxed mb-6 prose max-w-none text-base font-normal">{!! $global_settings['scholarships_card2_desc'] ?? '<p>We specialize in helping students apply for regional government scholarships (such as DSU in Italy or DAAD in Germany) which can cover full tuition and provide living stipends.</p>' !!}</div>
                    <div class="flex items-center gap-4">
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-[#0b1b3d] text-white px-7 py-3.5 rounded-xl font-bold text-sm shadow-md shadow-blue-900/20 hover:bg-red-600 hover:text-white hover:shadow-lg transition-all duration-200">
                            <span>Apply For Funding Guidance</span>
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us Banner for Scholarships -->
            <div class="mt-20 bg-gradient-to-r from-[#0b1b3d] to-[#162e63] rounded-3xl p-8 md:p-12 text-white shadow-2xl border border-white/10 relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="absolute right-0 bottom-0 translate-x-12 translate-y-12 w-64 h-64 bg-yellow-500/20 rounded-full blur-2xl pointer-events-none"></div>
                <div class="max-w-xl relative z-10 text-left">
                    <span class="text-yellow-400 text-xs font-extrabold uppercase tracking-widest block mb-2">Dedicated Financial Support</span>
                    <h3 class="text-2xl md:text-3xl font-extrabold mb-3">Need Help Maximizing Your Scholarship Chances?</h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed">Our expert counselors review your academic profile, prepare compelling motivation letters, and guide you through every scholarship application deadline with zero hidden fees.</p>
                </div>
                <div class="relative z-10 shrink-0">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-3 bg-yellow-500 text-[#0b1b3d] hover:bg-yellow-400 font-extrabold px-8 py-4 rounded-2xl shadow-xl hover:scale-105 active:scale-95 transition-all duration-200">
                        <span>Book Free Consultation</span>
                        <i class="fa-solid fa-calendar-check"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>
    
@endsection
