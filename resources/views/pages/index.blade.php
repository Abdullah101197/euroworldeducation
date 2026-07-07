@extends('layouts.main')

@section('title', 'Euro World Education | Top Study Abroad Consultants')
@section('description', 'Euro World Education empowers students to achieve global success through quality education in top European universities.')

@section('content')


    <!-- Hero Section (Section 2) -->
    <section id="hero" class="relative min-h-screen flex flex-col justify-center pt-32 pb-16 bg-[#0b1b3d] font-sans overflow-hidden">
        <!-- Optional faint grid background -->
        <div class="absolute inset-0 bg-cover opacity-[0.03] pointer-events-none" style="background-image: url('https://www.transparenttextures.com/patterns/cubes.png');"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- Left Content -->
                <div class="w-full lg:w-1/2 text-white reveal-up pt-12 lg:pt-0 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 bg-white/5 border border-white/10 px-4 py-2 rounded-full mb-8">
                        <i class="fa-solid fa-medal text-yellow-400"></i>
                        <span class="text-xs font-bold uppercase tracking-wider text-gray-300">10+ Years of Excellence</span>
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-6 tracking-tight">
                        {!! $global_settings->where('key', 'home_hero_title')->first()->value ?? 'Study in Europe &<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600">Shape Your Future</span>' !!}
                    </h1>
                    
                    <p class="text-base md:text-lg text-gray-300 mb-10 max-w-xl mx-auto lg:mx-0 leading-relaxed font-light whitespace-pre-line">
                        {{ $global_settings->where('key', 'home_hero_subtitle')->first()->value ?? 'Expert guidance for university admissions, visa processing, and career counseling to help you achieve your dreams of studying abroad.' }}
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="{{ route('contact') }}" class="w-full sm:w-auto bg-[#c6181b] text-white px-8 py-3.5 rounded-sm font-bold hover:bg-red-800 transition-colors flex items-center justify-center gap-2 shadow-lg">
                            Get Started Now <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="#services" class="w-full sm:w-auto bg-transparent border border-white/30 text-white px-8 py-3.5 rounded-sm font-semibold hover:bg-white/10 transition-colors flex items-center justify-center">
                            Explore Services
                        </a>
                    </div>
                    
                    <!-- Small stats under buttons -->
                    <div class="flex items-center justify-center lg:justify-start gap-6 mt-10 text-gray-400 text-xs font-bold uppercase tracking-wide">
                        <div class="flex items-center gap-2"><i class="fa-solid fa-check text-green-400 text-sm"></i> Free Consultation</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-check text-green-400 text-sm"></i> High Visa Success</div>
                    </div>
                </div>
                
                <!-- Right Image -->
                <div class="w-full lg:w-1/2 reveal-left relative">
                    <!-- Clean, sharp edge image container -->
                    <div class="relative bg-white p-2 md:p-4 shadow-2xl rotate-2 hover:rotate-0 transition-transform duration-500">
                        <div class="relative overflow-hidden border border-gray-100">
                            <img src="{{ asset('assets/hero_corporate.png') }}" alt="Students studying abroad" class="w-full h-auto object-cover">
                            <!-- Overlay badge -->
                            <div class="absolute bottom-0 left-0 right-0 bg-[#0b1b3d]/90 backdrop-blur-sm p-4 flex justify-between items-center text-white">
                                <div>
                                    <div class="text-2xl font-black text-yellow-400">10k+</div>
                                    <div class="text-[10px] uppercase font-bold tracking-widest">Students Placed</div>
                                </div>
                                <div class="flex -space-x-2">
                                    <img src="https://i.pravatar.cc/100?img=1" class="w-8 h-8 rounded-full border-2 border-[#0b1b3d]">
                                    <img src="https://i.pravatar.cc/100?img=2" class="w-8 h-8 rounded-full border-2 border-[#0b1b3d]">
                                    <img src="https://i.pravatar.cc/100?img=3" class="w-8 h-8 rounded-full border-2 border-[#0b1b3d]">
                                    <div class="w-8 h-8 rounded-full bg-red-600 border-2 border-[#0b1b3d] flex items-center justify-center text-[8px] font-bold">+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Decorative strict geometric elements -->
                    <div class="absolute -z-10 top-10 -right-10 w-32 h-32 bg-red-600 opacity-20 hidden md:block"></div>
                    <div class="absolute -z-10 -bottom-10 -left-10 w-48 h-48 border-4 border-yellow-400 opacity-30 hidden md:block"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Countries We Cover (Section 3) -->
    <section id="countries" class="pt-12 pb-24 bg-light relative font-sans">
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
                <div class="group relative h-[500px] rounded-xl overflow-hidden shadow-xl cursor-pointer reveal-up">
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
                <div class="group relative h-[500px] rounded-xl overflow-hidden shadow-xl cursor-pointer reveal-up" style="transition-delay: 100ms;">
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
                <div class="group relative h-[500px] rounded-xl overflow-hidden shadow-xl cursor-pointer reveal-up" style="transition-delay: 200ms;">
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
    <section id="services" class="py-24 bg-white relative font-sans">
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
                        <i class="fa-solid fa-circle-check text-yellow-400 text-sm absolute bottom-0 right-0 border-2 border-white rounded-full bg-white"></i>
                    </div>
                    <h4 class="text-sm font-bold text-[#0b1b3d] mb-3 leading-snug">University Admission Assistance</h4>
                    <p class="text-[10px] text-gray-500 leading-relaxed">We help you choose the right university and program and secure your admission.</p>
                </div>
                <!-- Service 2 -->
                <div class="bg-white rounded-xl shadow-[0_4px_20px_rgb(0,0,0,0.06)] p-6 text-center border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 mx-auto mb-4 text-[#0b1b3d] text-4xl flex items-center justify-center relative">
                        <i class="fa-solid fa-file-contract"></i>
                        <i class="fa-solid fa-circle-check text-yellow-400 text-sm absolute bottom-0 right-0 border-2 border-white rounded-full bg-white"></i>
                    </div>
                    <h4 class="text-sm font-bold text-[#0b1b3d] mb-3 leading-snug">Student Visa Preparation</h4>
                    <p class="text-[10px] text-gray-500 leading-relaxed">Complete visa file preparation and guidance for a smooth visa process.</p>
                </div>
                <!-- Service 3 -->
                <div class="bg-white rounded-xl shadow-[0_4px_20px_rgb(0,0,0,0.06)] p-6 text-center border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 mx-auto mb-4 text-[#0b1b3d] text-4xl flex items-center justify-center relative">
                        <i class="fa-solid fa-award"></i>
                        <i class="fa-solid fa-circle-check text-yellow-400 text-sm absolute bottom-0 right-0 border-2 border-white rounded-full bg-white"></i>
                    </div>
                    <h4 class="text-sm font-bold text-[#0b1b3d] mb-3 leading-snug">Scholarship Guidance</h4>
                    <p class="text-[10px] text-gray-500 leading-relaxed">Find and apply for the best scholarships to reduce your education cost.</p>
                </div>
                <!-- Service 4 -->
                <div class="bg-white rounded-xl shadow-[0_4px_20px_rgb(0,0,0,0.06)] p-6 text-center border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 mx-auto mb-4 text-[#0b1b3d] text-4xl flex items-center justify-center relative">
                        <i class="fa-regular fa-file-lines"></i>
                        <i class="fa-solid fa-circle-check text-yellow-400 text-sm absolute bottom-0 right-0 border-2 border-white rounded-full bg-white"></i>
                    </div>
                    <h4 class="text-sm font-bold text-[#0b1b3d] mb-3 leading-snug">SOP / CV / Motivation Letter Support</h4>
                    <p class="text-[10px] text-gray-500 leading-relaxed">Professional SOP, CV and motivation letter writing assistance.</p>
                </div>
                <!-- Service 5 -->
                <div class="bg-white rounded-xl shadow-[0_4px_20px_rgb(0,0,0,0.06)] p-6 text-center border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 mx-auto mb-4 text-[#0b1b3d] text-4xl flex items-center justify-center relative">
                        <i class="fa-solid fa-file-signature"></i>
                        <i class="fa-solid fa-circle-check text-yellow-400 text-sm absolute bottom-0 right-0 border-2 border-white rounded-full bg-white"></i>
                    </div>
                    <h4 class="text-sm font-bold text-[#0b1b3d] mb-3 leading-snug">Document Attestation Guidance</h4>
                    <p class="text-[10px] text-gray-500 leading-relaxed">Complete support for document attestation and legalization process.</p>
                </div>
                <!-- Service 6 -->
                <div class="bg-white rounded-xl shadow-[0_4px_20px_rgb(0,0,0,0.06)] p-6 text-center border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 mx-auto mb-4 text-[#0b1b3d] text-4xl flex items-center justify-center relative">
                        <i class="fa-solid fa-suitcase-rolling"></i>
                        <i class="fa-solid fa-circle-check text-yellow-400 text-sm absolute bottom-0 right-0 border-2 border-white rounded-full bg-white"></i>
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
                    <h3 class="text-4xl font-extrabold text-yellow-400 mb-8 tracking-tight">Euroworld?</h3>
                    
                    <ul class="space-y-5">
                        <li class="flex items-center gap-4">
                            <i class="fa-solid fa-circle-check text-yellow-400 text-xl"></i>
                            <span class="text-[15px] font-medium text-gray-200 tracking-wide">Personalized counselling for every student</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i class="fa-solid fa-circle-check text-yellow-400 text-xl"></i>
                            <span class="text-[15px] font-medium text-gray-200 tracking-wide">Expert team with years of experience</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i class="fa-solid fa-circle-check text-yellow-400 text-xl"></i>
                            <span class="text-[15px] font-medium text-gray-200 tracking-wide">High visa success rate</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i class="fa-solid fa-circle-check text-yellow-400 text-xl"></i>
                            <span class="text-[15px] font-medium text-gray-200 tracking-wide">Transparent process & fair guidance</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i class="fa-solid fa-circle-check text-yellow-400 text-xl"></i>
                            <span class="text-[15px] font-medium text-gray-200 tracking-wide">Admission to visa - complete support</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i class="fa-solid fa-circle-check text-yellow-400 text-xl"></i>
                            <span class="text-[15px] font-medium text-gray-200 tracking-wide">Fast response on WhatsApp</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Right Side (Image with badge) -->
                <div class="lg:w-1/2 relative min-h-[400px]">
                    <img src="{{ asset('assets/why_choose_students.png') }}" alt="Happy students" class="absolute inset-0 w-full h-full object-cover">
                    <!-- Floating Badge -->
                    <div class="absolute bottom-8 right-8 bg-yellow-400 text-[#0b1b3d] px-6 py-4 rounded-xl shadow-lg">
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
                <button class="absolute -left-4 top-1/2 -translate-y-1/2 w-8 h-8 bg-[#0b1b3d] text-white rounded-full flex items-center justify-center z-20 shadow-md">
                    <i class="fa-solid fa-chevron-left text-xs"></i>
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

                    <!-- Card 4 -->
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
                <button class="absolute -right-4 top-1/2 -translate-y-1/2 w-8 h-8 bg-[#0b1b3d] text-white rounded-full flex items-center justify-center z-20 shadow-md">
                    <i class="fa-solid fa-chevron-right text-xs"></i>
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

    <!-- CTA Banner -->
    <section class="relative z-20 -mb-16 pointer-events-none font-sans">
        <div class="container mx-auto px-6 pointer-events-auto">
            <div class="bg-[#0b1b3d] rounded-2xl p-8 md:p-12 flex flex-col lg:flex-row items-center justify-between gap-8 shadow-[0_10px_40px_rgb(0,0,0,0.3)] relative overflow-hidden border border-white/5">
                <!-- Background Image Overlay Placeholder -->
                <div class="absolute right-0 top-0 bottom-0 w-1/2 opacity-20 bg-cover bg-left pointer-events-none mix-blend-luminosity" style="background-image: url('https://www.transparenttextures.com/patterns/stardust.png');"></div>
                
                <div class="relative z-10 text-center lg:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-3">Ready to Start Your Study Abroad Journey?</h2>
                    <p class="text-gray-300 text-sm">Book your free consultation now and take the first step towards your future.</p>
                </div>
                
                <div class="relative z-10 flex flex-col sm:flex-row gap-4 shrink-0">
                    <button class="bg-[#ffc107] text-[#0b1b3d] font-bold py-3 px-8 rounded-full hover:bg-yellow-400 transition-colors shadow-lg text-sm">
                        Book Free Consultation
                    </button>
                    <button class="bg-transparent border border-white/40 text-white font-medium py-3 px-8 rounded-full hover:bg-white/10 hover:border-white transition-colors flex items-center justify-center gap-2 text-sm">
                        <i class="fa-brands fa-whatsapp text-lg"></i> Chat on WhatsApp
                    </button>
                </div>
            </div>
        </div>
    </section>

    
@endsection
