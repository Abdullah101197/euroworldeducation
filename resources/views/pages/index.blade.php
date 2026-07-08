@extends('layouts.main')

@section('title', 'Euro World Education | Top Study Abroad Consultants')
@section('description', 'Euro World Education empowers students to achieve global success through quality education in top European universities.')

@section('content')


    <!-- Hero Section -->
    <section id="hero" class="relative pt-36 lg:pt-44 pb-0 bg-[#f2f5f8] font-sans overflow-hidden">
        <!-- Dotted background pattern -->
        <div class="absolute inset-0 z-0 opacity-40 pointer-events-none" style="background-image: radial-gradient(#cbd5e1 2px, transparent 2px); background-size: 24px 24px;"></div>

        <div class="max-w-[1150px] mx-auto px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row lg:items-start items-center justify-center gap-4 lg:gap-8">
                <!-- Left Content -->
                <div class="w-full lg:w-[54%] reveal-up pt-8 lg:pt-0 text-center lg:text-left z-20 relative">
                    <div class="flex items-center justify-center lg:justify-start gap-3 mb-5">
                        <div class="h-[2px] w-8 bg-[#c6181b]"></div>
                        <span class="text-[13px] font-bold uppercase tracking-widest text-[#0b1b3d]">YOUR FUTURE. OUR GUIDANCE</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-[64px] font-extrabold leading-[1.12] mb-6 tracking-tight text-[#0b1b3d] relative inline-block">
                        Your Journey to <br>
                        <span class="text-[#c6181b] relative inline-block">
                            Global
                            <!-- Blue line under Global -->
                            <span class="absolute left-0 -bottom-1 h-[3px] w-full bg-[#3b82f6]"></span>
                        </span> Education
                    </h1>

                    <p class="text-base md:text-lg text-gray-600 mb-8 max-w-xl mx-auto lg:mx-0 leading-relaxed font-medium">
                        We make study abroad simple and successful. From university selection to visa approval, we are with you at every step of the way.
                    </p>

                    <!-- Feature Badges -->
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-3.5 mb-8">
                        <div class="flex items-center gap-3 bg-[#f8fafc] rounded-full pr-5 pl-2 py-2 shadow-sm border border-gray-100">
                            <div class="w-8 h-8 rounded-full bg-[#e2e8f0] flex items-center justify-center text-[#0b1b3d]"><i class="fa-solid fa-graduation-cap text-xs"></i></div>
                            <span class="text-[11px] font-bold text-[#0b1b3d] leading-tight text-left">Top Ranked<br>Universities</span>
                        </div>
                        <div class="flex items-center gap-3 bg-[#f8fafc] rounded-full pr-5 pl-2 py-2 shadow-sm border border-gray-100">
                            <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600"><i class="fa-solid fa-clipboard-check text-xs"></i></div>
                            <span class="text-[11px] font-bold text-[#0b1b3d] leading-tight text-left">End-to-End<br>Assistance</span>
                        </div>
                        <div class="flex items-center gap-3 bg-[#f8fafc] rounded-full pr-5 pl-2 py-2 shadow-sm border border-gray-100">
                            <div class="w-8 h-8 rounded-full bg-[#e2e8f0] flex items-center justify-center text-[#0b1b3d]"><i class="fa-solid fa-file-shield text-xs"></i></div>
                            <span class="text-[11px] font-bold text-[#0b1b3d] leading-tight text-left">High Visa<br>Success Rate</span>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="{{ route('destinations') }}" class="w-full sm:w-auto bg-[#c6181b] text-white px-8 py-3.5 rounded-lg font-bold hover:bg-red-800 transition-colors flex items-center justify-center gap-2 shadow-md">
                            Explore Destinations <i class="fa-solid fa-arrow-right text-sm"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="w-full sm:w-auto bg-[#f8fafc] border border-blue-200 text-[#0b1b3d] px-8 py-3.5 rounded-lg font-bold hover:bg-gray-100 transition-colors flex items-center justify-center gap-2 shadow-sm">
                            Book Free Consultation <i class="fa-regular fa-calendar-check text-blue-600 text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Image Section -->
                <div class="w-full lg:w-[46%] relative mt-8 lg:mt-0 flex justify-center lg:justify-center items-end z-10">
                    <!-- Hero Image (Exact 100% match from provided design) -->
                    <img src="{{ asset('images/hero.png') }}" alt="Student Global Education" class="relative z-10 w-full h-auto max-w-[550px] object-contain object-bottom">
                </div>
            </div>
        </div>

        <!-- Statistics Bar -->
        <div class="w-full max-w-[1440px] mx-auto px-4 lg:px-8 relative z-30 -mt-6 lg:-mt-8 mb-16" style="margin:0% auto;">
            <div class="bg-[#0b1b3d] rounded-[24px] shadow-2xl overflow-hidden flex flex-col md:flex-row py-4">

                <!-- Stat 1 -->
                <div class="flex-1 p-6 flex items-center justify-center gap-5 border-b md:border-b-0 md:border-r border-white/10">
                    <div class="w-16 h-16 rounded-full border border-white/20 flex items-center justify-center text-white text-2xl shrink-0">
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-white mb-1">12,000+</div>
                        <div class="text-sm font-medium text-gray-400">Successful Students</div>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="flex-1 p-6 flex items-center justify-center gap-5 border-b md:border-b-0 md:border-r border-white/10">
                    <div class="w-16 h-16 rounded-full border border-white/20 flex items-center justify-center text-white text-2xl shrink-0">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-white mb-1">500+</div>
                        <div class="text-sm font-medium text-gray-400">Partner Universities</div>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="flex-1 p-6 flex items-center justify-center gap-5 border-b md:border-b-0 md:border-r border-white/10">
                    <div class="w-16 h-16 rounded-full border border-white/20 flex items-center justify-center text-white text-2xl shrink-0">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-white mb-1">50+</div>
                        <div class="text-sm font-medium text-gray-400">Countries</div>
                    </div>
                </div>

                <!-- Stat 4 -->
                <div class="flex-1 p-6 flex items-center justify-center gap-5">
                    <div class="w-16 h-16 rounded-full border border-white/20 flex items-center justify-center text-white text-2xl shrink-0">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-white mb-1">95%</div>
                        <div class="text-sm font-medium text-gray-400">Visa Success Rate</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Countries We Cover (Section 3) -->
    <section id="countries" class="pt-12 pb-8 bg-light relative font-sans">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12 reveal-up">
                <div class="flex items-center justify-center gap-4 mb-2">
                    <div class="h-px w-16 bg-[#c6181b]"></div>
                    <h3 class="text-[#c6181b] font-bold tracking-widest uppercase text-sm">Where We Can Take You</h3>
                    <div class="h-px w-16 bg-[#c6181b]"></div>
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight mt-2"><span class="text-[#0b1b3d]">COUNTRIES</span> <span class="text-[#c6181b]">WE COVER</span></h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Explore top study destinations with world-class education and global opportunities.</p>
            </div>

            <!-- 3 Popular Countries (Large Cards - Upper Design) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <!-- Italy Large Card -->
                <div class="group relative h-[400px] rounded-xl overflow-hidden shadow-xl cursor-pointer reveal-up">
                    <img src="{{ asset('assets/dest_italy_1783324333447.png') }}" alt="Italy" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-[#0b1b3d]/70 transition-opacity group-hover:bg-[#0b1b3d]/60"></div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="absolute top-6 left-6 bg-[#c6181b] text-white text-xs font-bold px-3 py-1.5 rounded-sm flex items-center gap-1">
                            <i class="fa-solid fa-star text-[10px]"></i> MOST POPULAR
                        </div>
                        <h4 class="text-5xl font-black text-white mb-4 uppercase tracking-wide">Italy</h4>
                        <div class="w-16 h-10 bg-white rounded-md p-1 mb-6 flex overflow-hidden">
                            <div class="w-1/3 h-full bg-green-600"></div>
                            <div class="w-1/3 h-full bg-white"></div>
                            <div class="w-1/3 h-full bg-red-600"></div>
                        </div>
                        <p class="text-white text-sm mb-6 max-w-xs leading-relaxed">Affordable public universities, scholarship opportunities, and student visa guidance for Pakistani students.</p>
                        <button class="bg-[#c6181b] text-white w-max px-6 py-2.5 rounded-md font-semibold flex items-center gap-2 hover:bg-red-800 transition-colors">
                            Explore <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- France Large Card -->
                <div class="group relative h-[400px] rounded-xl overflow-hidden shadow-xl cursor-pointer reveal-up" style="transition-delay: 100ms;">
                    <img src="{{ asset('assets/dest_france_1783324344345.png') }}" alt="France" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-[#0b1b3d]/70 transition-opacity group-hover:bg-[#0b1b3d]/60"></div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <h4 class="text-5xl font-black text-white mb-4 uppercase tracking-wide">France</h4>
                        <div class="w-16 h-10 bg-white rounded-md p-1 mb-6 flex overflow-hidden">
                            <div class="w-1/3 h-full bg-blue-700"></div>
                            <div class="w-1/3 h-full bg-white"></div>
                            <div class="w-1/3 h-full bg-red-600"></div>
                        </div>
                        <p class="text-white text-sm mb-6 max-w-xs leading-relaxed">Quality education with affordable tuition and excellent future opportunities.</p>
                        <button class="bg-[#c6181b] text-white w-max px-6 py-2.5 rounded-md font-semibold flex items-center gap-2 hover:bg-red-800 transition-colors">
                            Explore <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- UK Large Card -->
                <div class="group relative h-[400px] rounded-xl overflow-hidden shadow-xl cursor-pointer reveal-up" style="transition-delay: 200ms;">
                    <img src="{{ asset('assets/dest_uk_1783324356242.png') }}" alt="UK" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-[#0b1b3d]/70 transition-opacity group-hover:bg-[#0b1b3d]/60"></div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <h4 class="text-5xl font-black text-white mb-4 uppercase tracking-wide">UK</h4>
                        <div class="w-16 h-10 bg-[#00247d] rounded-md p-1 mb-6 relative overflow-hidden flex items-center justify-center">
                            <span class="text-white font-bold text-xs">UK Flag</span>
                        </div>
                        <p class="text-white text-sm mb-6 max-w-xs leading-relaxed">World-class universities and globally recognized degrees with great career prospects.</p>
                        <button class="bg-[#c6181b] text-white w-max px-6 py-2.5 rounded-md font-semibold flex items-center gap-2 hover:bg-red-800 transition-colors">
                            Explore <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Small Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal-up">
                <!-- Germany -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md border border-gray-100 flex flex-col items-center pb-6 hover:shadow-lg transition-shadow">
                    <div class="w-full h-24 bg-gray-200 relative">
                        <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-12 h-12 rounded-full border-4 border-white bg-black flex flex-col overflow-hidden">
                            <div class="h-1/3 w-full bg-black"></div>
                            <div class="h-1/3 w-full bg-red-600"></div>
                            <div class="h-1/3 w-full bg-yellow-400"></div>
                        </div>
                    </div>
                    <h4 class="mt-8 font-bold text-[#0b1b3d] uppercase tracking-wide text-sm">Germany</h4>
                    <p class="text-center text-gray-500 text-xs px-4 mt-2 h-12">Top engineering programs and zero tuition fees.</p>
                    <button class="mt-4 border border-gray-300 text-gray-700 px-6 py-1.5 rounded-full text-xs font-semibold hover:border-red-600 hover:text-red-600 transition-colors flex items-center gap-2">
                        Explore <span class="text-red-600">&rarr;</span>
                    </button>
                </div>

                <!-- Australia -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md border border-gray-100 flex flex-col items-center pb-6 hover:shadow-lg transition-shadow">
                    <div class="w-full h-24 bg-gray-200 relative">
                        <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-12 h-12 rounded-full border-4 border-white bg-[#00008b] flex items-center justify-center text-[8px] text-white font-bold">
                            AUS
                        </div>
                    </div>
                    <h4 class="mt-8 font-bold text-[#0b1b3d] uppercase tracking-wide text-sm">Australia</h4>
                    <p class="text-center text-gray-500 text-xs px-4 mt-2 h-12">High-quality education in a safe environment.</p>
                    <button class="mt-4 border border-gray-300 text-gray-700 px-6 py-1.5 rounded-full text-xs font-semibold hover:border-red-600 hover:text-red-600 transition-colors flex items-center gap-2">
                        Explore <span class="text-red-600">&rarr;</span>
                    </button>
                </div>

                <!-- Spain -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md border border-gray-100 flex flex-col items-center pb-6 hover:shadow-lg transition-shadow">
                    <div class="w-full h-24 bg-gray-200 relative">
                        <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-12 h-12 rounded-full border-4 border-white flex flex-col overflow-hidden">
                            <div class="h-1/4 w-full bg-red-600"></div>
                            <div class="h-2/4 w-full bg-yellow-400"></div>
                            <div class="h-1/4 w-full bg-red-600"></div>
                        </div>
                    </div>
                    <h4 class="mt-8 font-bold text-[#0b1b3d] uppercase tracking-wide text-sm">Spain</h4>
                    <p class="text-center text-gray-500 text-xs px-4 mt-2 h-12">Rich culture and excellent business schools.</p>
                    <button class="mt-4 border border-gray-300 text-gray-700 px-6 py-1.5 rounded-full text-xs font-semibold hover:border-red-600 hover:text-red-600 transition-colors flex items-center gap-2">
                        Explore <span class="text-red-600">&rarr;</span>
                    </button>
                </div>

                <!-- USA -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md border border-gray-100 flex flex-col items-center pb-6 hover:shadow-lg transition-shadow">
                    <div class="w-full h-24 bg-gray-200 relative">
                        <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-12 h-12 rounded-full border-4 border-white bg-[#3c3b6e] flex items-center justify-center text-[8px] text-white font-bold">
                            USA
                        </div>
                    </div>
                    <h4 class="mt-8 font-bold text-[#0b1b3d] uppercase tracking-wide text-sm">USA</h4>
                    <p class="text-center text-gray-500 text-xs px-4 mt-2 h-12">Top universities and wide range of programs.</p>
                    <button class="mt-4 border border-gray-300 text-gray-700 px-6 py-1.5 rounded-full text-xs font-semibold hover:border-red-600 hover:text-red-600 transition-colors flex items-center gap-2">
                        Explore <span class="text-red-600">&rarr;</span>
                    </button>
                </div>
            </div>

            <div class="flex justify-center mt-12 reveal-up">
                <a href="{{ route('destinations') }}" class="inline-flex bg-[#0b1b3d] text-white px-8 py-3.5 rounded-lg font-semibold items-center gap-3 hover:bg-gray-900 transition-colors text-sm shadow-md">
                    <i class="fa-solid fa-globe"></i> Explore All Destinations <span class="text-red-600">&rarr;</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Our Services (Section 4) -->
    <section id="services" class="pt-12 pb-24 bg-white relative font-sans">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12 reveal-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-[#0b1b3d]">Our Services</h2>
                <div class="h-0.5 w-12 bg-[#0b1b3d] mx-auto mt-4"></div>
            </div>

            <!-- Services Grid (6 columns) -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-6 mb-20 reveal-up">
                <!-- Service 1 -->
                <div class="bg-white rounded-xl shadow-[0_4px_20px_rgb(0,0,0,0.06)] p-6 text-center border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 mx-auto mb-4 text-[#0b1b3d] text-4xl flex items-center justify-center relative">
                        <i class="fa-solid fa-building-columns"></i>
                        <i class="fa-solid fa-circle-check text-[#c6181b] text-sm absolute bottom-0 right-0 border-2 border-white rounded-full bg-white"></i>
                    </div>
                    <h4 class="text-sm font-bold text-[#0b1b3d] mb-3 leading-snug">University Admission Assistance</h4>
                    <p class="text-[10px] text-gray-500 leading-relaxed">We help you choose the right university and program and secure your admission.</p>
                </div>
                <!-- Service 2 -->
                <div class="bg-white rounded-xl shadow-[0_4px_20px_rgb(0,0,0,0.06)] p-6 text-center border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 mx-auto mb-4 text-[#0b1b3d] text-4xl flex items-center justify-center relative">
                        <i class="fa-solid fa-file-contract"></i>
                        <i class="fa-solid fa-circle-check text-[#c6181b] text-sm absolute bottom-0 right-0 border-2 border-white rounded-full bg-white"></i>
                    </div>
                    <h4 class="text-sm font-bold text-[#0b1b3d] mb-3 leading-snug">Student Visa Preparation</h4>
                    <p class="text-[10px] text-gray-500 leading-relaxed">Complete visa file preparation and guidance for a smooth visa process.</p>
                </div>
                <!-- Service 3 -->
                <div class="bg-white rounded-xl shadow-[0_4px_20px_rgb(0,0,0,0.06)] p-6 text-center border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 mx-auto mb-4 text-[#0b1b3d] text-4xl flex items-center justify-center relative">
                        <i class="fa-solid fa-award"></i>
                        <i class="fa-solid fa-circle-check text-[#c6181b] text-sm absolute bottom-0 right-0 border-2 border-white rounded-full bg-white"></i>
                    </div>
                    <h4 class="text-sm font-bold text-[#0b1b3d] mb-3 leading-snug">Scholarship Guidance</h4>
                    <p class="text-[10px] text-gray-500 leading-relaxed">Find and apply for the best scholarships to reduce your education cost.</p>
                </div>
                <!-- Service 4 -->
                <div class="bg-white rounded-xl shadow-[0_4px_20px_rgb(0,0,0,0.06)] p-6 text-center border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 mx-auto mb-4 text-[#0b1b3d] text-4xl flex items-center justify-center relative">
                        <i class="fa-regular fa-file-lines"></i>
                        <i class="fa-solid fa-circle-check text-[#c6181b] text-sm absolute bottom-0 right-0 border-2 border-white rounded-full bg-white"></i>
                    </div>
                    <h4 class="text-sm font-bold text-[#0b1b3d] mb-3 leading-snug">SOP / CV / Motivation Letter Support</h4>
                    <p class="text-[10px] text-gray-500 leading-relaxed">Professional SOP, CV and motivation letter writing assistance.</p>
                </div>
                <!-- Service 5 -->
                <div class="bg-white rounded-xl shadow-[0_4px_20px_rgb(0,0,0,0.06)] p-6 text-center border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 mx-auto mb-4 text-[#0b1b3d] text-4xl flex items-center justify-center relative">
                        <i class="fa-solid fa-file-signature"></i>
                        <i class="fa-solid fa-circle-check text-[#c6181b] text-sm absolute bottom-0 right-0 border-2 border-white rounded-full bg-white"></i>
                    </div>
                    <h4 class="text-sm font-bold text-[#0b1b3d] mb-3 leading-snug">Document Attestation Guidance</h4>
                    <p class="text-[10px] text-gray-500 leading-relaxed">Complete support for document attestation and legalization process.</p>
                </div>
                <!-- Service 6 -->
                <div class="bg-white rounded-xl shadow-[0_4px_20px_rgb(0,0,0,0.06)] p-6 text-center border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 mx-auto mb-4 text-[#0b1b3d] text-4xl flex items-center justify-center relative">
                        <i class="fa-solid fa-suitcase-rolling"></i>
                        <i class="fa-solid fa-circle-check text-[#c6181b] text-sm absolute bottom-0 right-0 border-2 border-white rounded-full bg-white"></i>
                    </div>
                    <h4 class="text-sm font-bold text-[#0b1b3d] mb-3 leading-snug">Pre-Departure Counselling</h4>
                    <p class="text-[10px] text-gray-500 leading-relaxed">We prepare you for your journey and stay with you every step of the way.</p>
                </div>
            </div>

            <!-- Why Choose Us Banner -->
            <div class="flex flex-col lg:flex-row rounded-lg overflow-hidden reveal-up shadow-2xl">
                <!-- Left Side (Dark Blue) -->
                <div class="lg:w-1/2 bg-[#0b1b3d] text-white p-12 lg:p-16 flex flex-col justify-center">
                    <h3 class="text-3xl font-semibold mb-1">Why Choose</h3>
                    <h3 class="text-4xl font-extrabold text-[#c6181b] mb-8 tracking-tight">Euroworld Education Consultants?</h3>

                    <ul class="space-y-5">
                        <li class="flex items-center gap-4">
                            <i class="fa-solid fa-circle-check text-[#c6181b] text-xl"></i>
                            <span class="text-[15px] font-medium text-gray-200 tracking-wide">Personalized counselling for every student</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i class="fa-solid fa-circle-check text-[#c6181b] text-xl"></i>
                            <span class="text-[15px] font-medium text-gray-200 tracking-wide">Expert team with years of experience</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i class="fa-solid fa-circle-check text-[#c6181b] text-xl"></i>
                            <span class="text-[15px] font-medium text-gray-200 tracking-wide">High visa success rate</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i class="fa-solid fa-circle-check text-[#c6181b] text-xl"></i>
                            <span class="text-[15px] font-medium text-gray-200 tracking-wide">Transparent process & fair guidance</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i class="fa-solid fa-circle-check text-[#c6181b] text-xl"></i>
                            <span class="text-[15px] font-medium text-gray-200 tracking-wide">Admission to visa - complete support</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i class="fa-solid fa-circle-check text-[#c6181b] text-xl"></i>
                            <span class="text-[15px] font-medium text-gray-200 tracking-wide">Fast response on WhatsApp</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Side (Image with badge) -->
                <div class="lg:w-1/2 relative min-h-[400px]">
                    <img src="{{ asset('assets/why_choose_students.png') }}" alt="Happy students" class="absolute inset-0 w-full h-full object-cover">
                    <!-- Floating Badge -->
                    <div class="absolute bottom-8 right-8 bg-[#c6181b] text-white px-6 py-4 rounded-xl shadow-lg">
                        <div class="text-3xl font-black">1000+</div>
                        <div class="text-[11px] font-bold uppercase tracking-wider mt-1 text-center">Successful Students</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories (Section 5) -->
    <section id="stories" class="py-24 bg-[#f8fafc] relative font-sans overflow-hidden">
        <!-- Dotted background pattern top-left and bottom-right -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-[radial-gradient(#e5e7eb_2px,transparent_2px)] [background-size:16px_16px] opacity-50"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-[radial-gradient(#e5e7eb_2px,transparent_2px)] [background-size:16px_16px] opacity-50"></div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Header -->
            <div class="text-center mb-12 reveal-up">
                <div class="flex items-center justify-center gap-4 mb-2">
                    <div class="h-px w-16 bg-[#c6181b]"></div>
                    <h3 class="text-[#c6181b] font-bold tracking-widest uppercase text-sm">Student Success</h3>
                    <div class="h-px w-16 bg-[#c6181b]"></div>
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight mt-2"><span class="text-[#0b1b3d]">RECENT</span> <span class="text-[#c6181b]">ADMISSIONS</span></h2>
                <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-sm">We are proud to have helped students secure admission in top universities around the world. Your success is our greatest achievement.</p>
            </div>

            <!-- Carousel Container -->
            <div class="relative mb-12 reveal-up">
                <!-- Left Arrow -->
                <button class="absolute -left-5 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#0b1b3d] hover:bg-[#c6181b] text-white rounded-full flex items-center justify-center z-20 shadow-lg transition-colors">
                    <i class="fa-solid fa-chevron-left text-sm"></i>
                </button>

                <!-- Cards (Horizontal Scroll) -->
                <div class="flex overflow-x-auto gap-6 pb-8 snap-x snap-mandatory scrollbar-hide px-4 xl:justify-center" style="scrollbar-width: none;">

                    <!-- Card 1 -->
                    <div class="flex-none w-[280px] bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden snap-center relative flex flex-col">
                        <div class="p-4 flex items-center gap-3 border-b border-gray-50">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-[#0b1b3d]"><i class="fa-solid fa-building-columns"></i></div>
                            <div>
                                <h5 class="font-bold text-[#0b1b3d] text-xs leading-tight">UNIVERSITY<br>OF PISA</h5>
                            </div>
                        </div>
                        <div class="px-4 py-2 flex items-center gap-2 text-[10px] font-bold">
                            <span class="w-4 h-3 bg-green-600 flex"><span class="w-1/3 bg-green-600"></span><span class="w-1/3 bg-white"></span><span class="w-1/3 bg-red-600"></span></span> ITALY
                        </div>
                        <div class="relative h-32 bg-gray-200 w-full">
                            <img src="{{ asset('assets/dest_italy_1783324333447.png') }}" class="w-full h-full object-cover">
                            <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-[#0b1b3d] text-white text-[10px] font-bold px-4 py-1 rounded-full flex items-center gap-1 shadow-md z-10 w-max">
                                <i class="fa-solid fa-circle-check text-green-400"></i> Admitted
                            </div>
                        </div>
                        <div class="relative pt-8 pb-6 px-4 flex-grow flex flex-col items-center text-center bg-gray-50/50">
                            <!-- Mock Document -->
                            <div class="absolute top-4 left-1/2 -translate-x-1/2 w-4/5 h-24 bg-white shadow-sm border border-gray-100 rounded opacity-70">
                                <div class="w-full h-1 bg-gray-200 mt-2"></div>
                                <div class="w-2/3 h-1 bg-gray-200 mt-1"></div>
                            </div>
                            <img src="https://i.pravatar.cc/150?img=11" class="w-16 h-16 rounded-full border-4 border-white shadow-md relative z-10 mb-3 object-cover">
                            <h4 class="font-bold text-[#0b1b3d] text-sm">Hassan Raza</h4>
                            <div class="flex items-center justify-center gap-1 text-[10px] text-gray-500 mt-1">
                                <i class="fa-solid fa-graduation-cap text-[#0b1b3d]"></i> MSc Computer Science
                            </div>
                            <div class="flex items-center justify-center gap-1 text-[10px] text-gray-500 mt-1">
                                <i class="fa-solid fa-location-dot text-red-600"></i> University of Pisa, Italy
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="flex-none w-[280px] bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden snap-center relative flex flex-col">
                        <div class="p-4 flex items-center gap-3 border-b border-gray-50">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-[#0b1b3d]"><i class="fa-solid fa-building-columns"></i></div>
                            <div>
                                <h5 class="font-bold text-[#0b1b3d] text-xs leading-tight">POLITECNICO<br>MILANO 1863</h5>
                            </div>
                        </div>
                        <div class="px-4 py-2 flex items-center gap-2 text-[10px] font-bold">
                            <span class="w-4 h-3 bg-green-600 flex"><span class="w-1/3 bg-green-600"></span><span class="w-1/3 bg-white"></span><span class="w-1/3 bg-red-600"></span></span> ITALY
                        </div>
                        <div class="relative h-32 bg-gray-200 w-full">
                            <img src="{{ asset('assets/dest_milan_poly.png') }}" class="w-full h-full object-cover">
                            <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-[#0b1b3d] text-white text-[10px] font-bold px-4 py-1 rounded-full flex items-center gap-1 shadow-md z-10 w-max">
                                <i class="fa-solid fa-circle-check text-green-400"></i> Admitted
                            </div>
                        </div>
                        <div class="relative pt-8 pb-6 px-4 flex-grow flex flex-col items-center text-center bg-gray-50/50">
                            <div class="absolute top-4 left-1/2 -translate-x-1/2 w-4/5 h-24 bg-white shadow-sm border border-gray-100 rounded opacity-70">
                                <div class="w-full h-1 bg-gray-200 mt-2"></div>
                                <div class="w-2/3 h-1 bg-gray-200 mt-1"></div>
                            </div>
                            <img src="https://i.pravatar.cc/150?img=12" class="w-16 h-16 rounded-full border-4 border-white shadow-md relative z-10 mb-3 object-cover">
                            <h4 class="font-bold text-[#0b1b3d] text-sm">Muhammad Usman</h4>
                            <div class="flex items-center justify-center gap-1 text-[10px] text-gray-500 mt-1">
                                <i class="fa-solid fa-graduation-cap text-[#0b1b3d]"></i> MSc Data Science
                            </div>
                            <div class="flex items-center justify-center gap-1 text-[10px] text-gray-500 mt-1">
                                <i class="fa-solid fa-location-dot text-red-600"></i> Politecnico di Milano, Italy
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="flex-none w-[280px] bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden snap-center relative flex flex-col">
                        <div class="p-4 flex items-center gap-3 border-b border-gray-50">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-[#0b1b3d]"><i class="fa-solid fa-building-columns"></i></div>
                            <div>
                                <h5 class="font-bold text-[#0b1b3d] text-xs leading-tight">UNIVERSITÃƒâ‚¬<br>DEGLI STUDI DI MILANO</h5>
                            </div>
                        </div>
                        <div class="px-4 py-2 flex items-center gap-2 text-[10px] font-bold">
                            <span class="w-4 h-3 bg-green-600 flex"><span class="w-1/3 bg-green-600"></span><span class="w-1/3 bg-white"></span><span class="w-1/3 bg-red-600"></span></span> ITALY
                        </div>
                        <div class="relative h-32 bg-gray-200 w-full">
                            <img src="{{ asset('assets/dest_milan_uni.png') }}" class="w-full h-full object-cover">
                            <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-[#0b1b3d] text-white text-[10px] font-bold px-4 py-1 rounded-full flex items-center gap-1 shadow-md z-10 w-max">
                                <i class="fa-solid fa-circle-check text-green-400"></i> Admitted
                            </div>
                        </div>
                        <div class="relative pt-8 pb-6 px-4 flex-grow flex flex-col items-center text-center bg-gray-50/50">
                            <div class="absolute top-4 left-1/2 -translate-x-1/2 w-4/5 h-24 bg-white shadow-sm border border-gray-100 rounded opacity-70"></div>
                            <img src="https://i.pravatar.cc/150?img=5" class="w-16 h-16 rounded-full border-4 border-white shadow-md relative z-10 mb-3 object-cover">
                            <h4 class="font-bold text-[#0b1b3d] text-sm">Ayesha Malik</h4>
                            <div class="flex items-center justify-center gap-1 text-[10px] text-gray-500 mt-1">
                                <i class="fa-solid fa-graduation-cap text-[#0b1b3d]"></i> MSc Business Management
                            </div>
                            <div class="flex items-center justify-center gap-1 text-[10px] text-gray-500 mt-1">
                                <i class="fa-solid fa-location-dot text-red-600"></i> University of Milan, Italy
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 (Pavia) -->
                    <div class="flex-none w-[280px] bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden snap-center relative flex flex-col">
                        <div class="p-4 flex items-center gap-3 border-b border-gray-50">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-[#0b1b3d]"><i class="fa-solid fa-building-columns"></i></div>
                            <div>
                                <h5 class="font-bold text-[#0b1b3d] text-xs leading-tight">UNIVERSITÀ<br>DI PAVIA</h5>
                            </div>
                        </div>
                        <div class="px-4 py-2 flex items-center gap-2 text-[10px] font-bold">
                            <span class="w-4 h-3 bg-green-600 flex"><span class="w-1/3 bg-green-600"></span><span class="w-1/3 bg-white"></span><span class="w-1/3 bg-red-600"></span></span> ITALY
                        </div>
                        <div class="relative h-32 bg-gray-200 w-full">
                            <img src="{{ asset('assets/dest_italy_1783324333447.png') }}" class="w-full h-full object-cover">
                            <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-[#0b1b3d] text-white text-[10px] font-bold px-4 py-1 rounded-full flex items-center gap-1 shadow-md z-10 w-max">
                                <i class="fa-solid fa-circle-check text-green-400"></i> Admitted
                            </div>
                        </div>
                        <div class="relative pt-8 pb-6 px-4 flex-grow flex flex-col items-center text-center bg-gray-50/50">
                            <div class="absolute top-4 left-1/2 -translate-x-1/2 w-4/5 h-24 bg-white shadow-sm border border-gray-100 rounded opacity-70"></div>
                            <img src="https://i.pravatar.cc/150?img=60" class="w-16 h-16 rounded-full border-4 border-white shadow-md relative z-10 mb-3 object-cover">
                            <h4 class="font-bold text-[#0b1b3d] text-sm">Ahmed Khan</h4>
                            <div class="flex items-center justify-center gap-1 text-[10px] text-gray-500 mt-1">
                                <i class="fa-solid fa-graduation-cap text-[#0b1b3d]"></i> MSc Bioinformatics
                            </div>
                            <div class="flex items-center justify-center gap-1 text-[10px] text-gray-500 mt-1">
                                <i class="fa-solid fa-location-dot text-red-600"></i> University of Pavia, Italy
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 (Rome) -->
                    <div class="flex-none w-[280px] bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden snap-center relative flex flex-col">
                        <div class="p-4 flex items-center gap-3 border-b border-gray-50">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-[#0b1b3d]"><i class="fa-solid fa-building-columns"></i></div>
                            <div>
                                <h5 class="font-bold text-[#0b1b3d] text-xs leading-tight">LA SAPIENZA<br>UNIVERSITÀ DI ROMA</h5>
                            </div>
                        </div>
                        <div class="px-4 py-2 flex items-center gap-2 text-[10px] font-bold">
                            <span class="w-4 h-3 bg-green-600 flex"><span class="w-1/3 bg-green-600"></span><span class="w-1/3 bg-white"></span><span class="w-1/3 bg-red-600"></span></span> ITALY
                        </div>
                        <div class="relative h-32 bg-gray-200 w-full">
                            <img src="{{ asset('assets/dest_italy_1783324333447.png') }}" class="w-full h-full object-cover">
                            <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-[#0b1b3d] text-white text-[10px] font-bold px-4 py-1 rounded-full flex items-center gap-1 shadow-md z-10 w-max">
                                <i class="fa-solid fa-circle-check text-green-400"></i> Admitted
                            </div>
                        </div>
                        <div class="relative pt-8 pb-6 px-4 flex-grow flex flex-col items-center text-center bg-gray-50/50">
                            <div class="absolute top-4 left-1/2 -translate-x-1/2 w-4/5 h-24 bg-white shadow-sm border border-gray-100 rounded opacity-70"></div>
                            <img src="https://i.pravatar.cc/150?img=47" class="w-16 h-16 rounded-full border-4 border-white shadow-md relative z-10 mb-3 object-cover">
                            <h4 class="font-bold text-[#0b1b3d] text-sm">Zainab Fatima</h4>
                            <div class="flex items-center justify-center gap-1 text-[10px] text-gray-500 mt-1">
                                <i class="fa-solid fa-graduation-cap text-[#0b1b3d]"></i> MSc Psychology
                            </div>
                            <div class="flex items-center justify-center gap-1 text-[10px] text-gray-500 mt-1">
                                <i class="fa-solid fa-location-dot text-red-600"></i> Sapienza University, Italy
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 (Bucharest) -->
                    <div class="flex-none w-[280px] bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden snap-center relative flex flex-col">
                        <div class="p-4 flex items-center gap-3 border-b border-gray-50">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-[#0b1b3d]"><i class="fa-solid fa-building-columns"></i></div>
                            <div>
                                <h5 class="font-bold text-[#0b1b3d] text-xs leading-tight">UNIVERSITY<br>OF BUCHAREST</h5>
                            </div>
                        </div>
                        <div class="px-4 py-2 flex items-center gap-2 text-[10px] font-bold">
                            <span class="w-4 h-3 flex"><span class="w-1/3 bg-blue-800"></span><span class="w-1/3 bg-yellow-400"></span><span class="w-1/3 bg-red-600"></span></span> ROMANIA
                        </div>
                        <div class="relative h-32 bg-gray-200 w-full">
                            <img src="{{ asset('assets/dest_bucharest.png') }}" class="w-full h-full object-cover">
                            <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-[#0b1b3d] text-white text-[10px] font-bold px-4 py-1 rounded-full flex items-center gap-1 shadow-md z-10 w-max">
                                <i class="fa-solid fa-circle-check text-green-400"></i> Admitted
                            </div>
                        </div>
                        <div class="relative pt-8 pb-6 px-4 flex-grow flex flex-col items-center text-center bg-gray-50/50">
                            <div class="absolute top-4 left-1/2 -translate-x-1/2 w-4/5 h-24 bg-white shadow-sm border border-gray-100 rounded opacity-70"></div>
                            <img src="https://i.pravatar.cc/150?img=13" class="w-16 h-16 rounded-full border-4 border-white shadow-md relative z-10 mb-3 object-cover">
                            <h4 class="font-bold text-[#0b1b3d] text-sm">Bilal Ahmed</h4>
                            <div class="flex items-center justify-center gap-1 text-[10px] text-gray-500 mt-1">
                                <i class="fa-solid fa-graduation-cap text-[#0b1b3d]"></i> MSc Business Administration
                            </div>
                            <div class="flex items-center justify-center gap-1 text-[10px] text-gray-500 mt-1">
                                <i class="fa-solid fa-location-dot text-red-600"></i> University of Bucharest, Romania
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Arrow -->
                <button class="absolute -right-5 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#0b1b3d] hover:bg-[#c6181b] text-white rounded-full flex items-center justify-center z-20 shadow-lg transition-colors">
                    <i class="fa-solid fa-chevron-right text-sm"></i>
                </button>
            </div>

            <!-- CTA Button -->
            <div class="flex justify-center mb-16 reveal-up">
                <a href="{{ route('contact') }}" class="inline-flex bg-[#0b1b3d] rounded-lg overflow-hidden shadow-lg items-center cursor-pointer hover:shadow-xl transition-shadow group">
                    <div class="px-6 py-3 flex items-center gap-3">
                        <i class="fa-solid fa-trophy text-red-600 text-xl"></i>
                        <span class="text-white font-bold text-sm tracking-wide">Your Success Story<br>Could Be Next</span>
                    </div>
                    <div class="bg-[#c6181b] text-white h-full px-6 py-4 flex items-center justify-center group-hover:bg-red-800 transition-colors">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
            </div>

            <!-- Statistics Bar -->
            <div class="bg-gray-100 rounded-xl max-w-5xl mx-auto p-6 md:p-8 flex flex-wrap justify-between items-center gap-6 shadow-sm reveal-up">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-[#0b1b3d] flex items-center justify-center text-white text-xl">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div>
                        <h4 class="text-red-600 font-bold text-xl leading-none mb-1">500+</h4>
                        <p class="text-[10px] font-bold text-gray-600 uppercase tracking-wide">Successful Admissions</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-[#0b1b3d] flex items-center justify-center text-white text-xl">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <div>
                        <h4 class="text-red-600 font-bold text-xl leading-none mb-1">10+</h4>
                        <p class="text-[10px] font-bold text-gray-600 uppercase tracking-wide">Countries</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-[#0b1b3d] flex items-center justify-center text-white text-xl">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <div>
                        <h4 class="text-red-600 font-bold text-xl leading-none mb-1">300+</h4>
                        <p class="text-[10px] font-bold text-gray-600 uppercase tracking-wide">Top Universities</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-[#0b1b3d] flex items-center justify-center text-white text-xl">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div>
                        <h4 class="text-red-600 font-bold text-xl leading-none mb-1">98%</h4>
                        <p class="text-[10px] font-bold text-gray-600 uppercase tracking-wide">Visa Success Ratio</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feedback / Mission Section -->
    <section class="bg-[#0b1b3d] py-20 font-sans">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center md:text-left flex flex-col md:flex-row items-center gap-10">
                <div class="flex-1">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">
                        Help us improve <span class="text-[#c6181b]">Euroworld Education</span>
                    </h2>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6 font-light">
                        Your feedback is incredibly valuable to us! We are constantly working to enhance our services and make your experience with Euroworld Education as smooth and rewarding as possible. Please take a moment to share your thoughts, suggestions, or any challenges you've faced. Whether it's about our counseling, visa process, or university selection, your input helps us serve you better.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-[#c6181b] text-white px-8 py-3.5 rounded-lg font-bold hover:bg-red-800 transition-colors shadow-lg">
                        Share Your Feedback <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
