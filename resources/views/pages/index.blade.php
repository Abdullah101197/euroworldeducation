@extends('layouts.main')

@section('title', 'Euro World Education | Top Study Abroad Consultants')
@section('description', 'Euro World Education empowers students to achieve global success through quality education in top European universities.')

@section('content')


    <style>
        @keyframes gentle-float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        .animate-gentle-float {
            animation: gentle-float 6s ease-in-out infinite;
        }
    </style>
    <!-- Hero Section (Classic Dark Premium with Background Video) -->
    <section id="hero" class="relative pt-36 lg:pt-44 pb-16 bg-[#040d27]/90 font-sans overflow-hidden">
        
        <!-- Background Video (Backend playing) -->
        <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover -z-20 mix-blend-overlay opacity-60">
            <!-- Placeholder video URL (Replace with your actual video link or local file) -->
            <source src="https://assets.mixkit.co/videos/preview/mixkit-students-walking-in-a-university-campus-4253-large.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Abstract dark background overlay elements -->
        <div class="absolute inset-0 z-0 opacity-30 bg-[#040d27]/70 pointer-events-none"></div>
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#040d27] via-[#040d27]/80 to-transparent -z-10"></div>
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-[#c6181b]/10 rounded-full blur-[100px] pointer-events-none -z-10"></div>

        <div class="max-w-[1280px] mx-auto px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-8">
                <!-- Left Content Area -->
                <div class="w-full lg:w-[50%] reveal-up pt-4 lg:pt-0 text-center lg:text-left z-20">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded bg-amber-500/10 border border-amber-500/20 mb-6">
                        <i class="fa-solid fa-medal text-amber-400 text-sm"></i>
                        <span class="text-[12px] font-bold text-amber-400 tracking-wider">10+ YEARS OF EXCELLENCE</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-[60px] font-black leading-[1.15] mb-6 tracking-tight text-white">
                        Study in Europe & <br>
                        <span class="text-[#c6181b]">Shape Your Future</span>
                    </h1>

                    <p class="text-base sm:text-lg text-gray-300 mb-10 max-w-xl mx-auto lg:mx-0 leading-relaxed font-medium">
                        Expert guidance for university admissions, visa processing, and career counseling to help you achieve your dreams of studying abroad.
                    </p>

                    <!-- Buttons -->
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-5 mb-10">
                        <a href="{{ route('destinations') }}" style="background-color: #c6181b !important; color: #ffffff !important;" class="w-full sm:w-auto px-8 py-3.5 rounded font-extrabold hover:bg-red-800 transition-all text-sm tracking-wide">
                            Get Started Now <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                        <a href="{{ route('services') }}" class="w-full sm:w-auto px-8 py-3.5 rounded font-bold border border-white/20 text-white hover:bg-white/5 transition-all text-sm tracking-wide">
                            Explore Services
                        </a>
                    </div>

                    <!-- Trust Checkmarks -->
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-6">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-check text-green-400 text-sm"></i>
                            <span class="text-xs font-bold text-gray-300 uppercase tracking-wider">FREE CONSULTATION</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-check text-green-400 text-sm"></i>
                            <span class="text-xs font-bold text-gray-300 uppercase tracking-wider">HIGH VISA SUCCESS</span>
                        </div>
                    </div>
                </div>

                <!-- Right Framed Image Section -->
                <div class="w-full lg:w-[48%] relative mt-10 lg:mt-0 flex justify-end items-center z-10">
                    <!-- Clean White Frame (Polaroid Style) -->
                    <div class="bg-white p-3 shadow-2xl transform rotate-1 hover:rotate-0 transition-transform duration-500 w-full max-w-[580px]">
                        <img src="{{ asset('assets/hero_corporate.png') }}" alt="Study in Europe" class="w-full h-auto object-cover border border-gray-100">
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Bar -->
        <div class="w-full max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 relative z-30 -mt-6 lg:-mt-8 mb-16">
            <div class="bg-[#0b1b3d] rounded-[24px] shadow-2xl overflow-hidden py-4 sm:py-6 border border-white/10">
                <div class="grid grid-cols-2 lg:grid-cols-4 divide-y lg:divide-y-0 divide-white/10">
                    <!-- Stat 1 -->
                    <div class="p-4 sm:p-6 flex flex-col items-center justify-center text-center lg:border-r border-white/10">
                        <div class="w-12 h-12 sm:w-16 sm:h-16 rounded-2xl bg-white/5 border border-white/15 flex items-center justify-center text-white text-lg sm:text-2xl mb-2.5 sm:mb-3.5 shrink-0 shadow-inner">
                            <i class="fa-solid fa-user-group text-red-500"></i>
                        </div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight mb-1"><span class="count-up" data-target="12000">0</span>+</div>
                        <div class="text-[11px] sm:text-sm font-semibold text-gray-300 uppercase tracking-wider">Successful Students</div>
                    </div>

                    <!-- Stat 2 -->
                    <div class="p-4 sm:p-6 flex flex-col items-center justify-center text-center lg:border-r border-white/10">
                        <div class="w-12 h-12 sm:w-16 sm:h-16 rounded-2xl bg-white/5 border border-white/15 flex items-center justify-center text-white text-lg sm:text-2xl mb-2.5 sm:mb-3.5 shrink-0 shadow-inner">
                            <i class="fa-solid fa-building-columns text-red-500"></i>
                        </div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight mb-1"><span class="count-up" data-target="500">0</span>+</div>
                        <div class="text-[11px] sm:text-sm font-semibold text-gray-300 uppercase tracking-wider">Partner Universities</div>
                    </div>

                    <!-- Stat 3 -->
                    <div class="p-4 sm:p-6 flex flex-col items-center justify-center text-center border-t border-white/10 lg:border-t-0 lg:border-r border-white/10">
                        <div class="w-12 h-12 sm:w-16 sm:h-16 rounded-2xl bg-white/5 border border-white/15 flex items-center justify-center text-white text-lg sm:text-2xl mb-2.5 sm:mb-3.5 shrink-0 shadow-inner">
                            <i class="fa-solid fa-globe text-red-500"></i>
                        </div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight mb-1"><span class="count-up" data-target="50">0</span>+</div>
                        <div class="text-[11px] sm:text-sm font-semibold text-gray-300 uppercase tracking-wider">Countries</div>
                    </div>

                    <!-- Stat 4 -->
                    <div class="p-4 sm:p-6 flex flex-col items-center justify-center text-center border-t border-white/10 lg:border-t-0">
                        <div class="w-12 h-12 sm:w-16 sm:h-16 rounded-2xl bg-white/5 border border-white/15 flex items-center justify-center text-white text-lg sm:text-2xl mb-2.5 sm:mb-3.5 shrink-0 shadow-inner">
                            <i class="fa-solid fa-award text-red-500"></i>
                        </div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight mb-1"><span class="count-up" data-target="95">0</span>%</div>
                        <div class="text-[11px] sm:text-sm font-semibold text-gray-300 uppercase tracking-wider">Visa Success Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Countries We Cover (Section 3) -->
    <section id="countries" class="pt-12 pb-8 bg-light relative font-sans">
        @php
            $rawWa = $global_settings['site_whatsapp'] ?? ($global_settings['site_phone'] ?? '923000000000');
            $cleanWaCountry = preg_replace('/[^0-9]/', '', $rawWa);
            if (empty($cleanWaCountry)) {
                $cleanWaCountry = '923000000000';
            }
        @endphp
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
                <div class="group relative h-[440px] rounded-2xl overflow-hidden shadow-2xl cursor-pointer reveal-up flex flex-col justify-between p-8">
                    <img src="{{ asset('assets/dest_italy_1783324333447.png') }}" alt="Italy" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-[#0b1b3d]/75 transition-opacity group-hover:bg-[#0b1b3d]/65"></div>
                    
                    <!-- Top Badge Area (Fixed height for exact alignment) -->
                    <div class="relative z-10 h-8 flex items-center justify-start shrink-0">
                        <div class="bg-[#c6181b] text-white text-xs font-bold px-3 py-1.5 rounded-md flex items-center gap-1.5 shadow-lg tracking-wider">
                            <i class="fa-solid fa-star text-[10px]"></i> MOST POPULAR
                        </div>
                    </div>

                    <!-- Bottom Content Area (Fixed structure so titles align exactly) -->
                    <div class="relative z-10 mt-auto flex flex-col">
                        <h4 class="text-4xl lg:text-5xl font-black text-white mb-3 uppercase tracking-wide drop-shadow-md">Italy</h4>
                        
                        <!-- Flag Badge -->
                        <div class="w-14 h-9 bg-white rounded-md p-0.5 mb-4 flex overflow-hidden shadow-md shrink-0 border border-white/25">
                            <div class="w-1/3 h-full bg-[#009246] rounded-l-sm"></div>
                            <div class="w-1/3 h-full bg-white"></div>
                            <div class="w-1/3 h-full bg-[#CE2B37] rounded-r-sm"></div>
                        </div>
                        
                        <p class="text-white/90 text-xs sm:text-sm mb-6 h-12 overflow-hidden leading-relaxed font-medium line-clamp-2">Affordable public universities, scholarship opportunities, and student visa guidance for Pakistani students.</p>
                        
                        <!-- Buttons Row -->
                        <div class="flex items-center gap-3 pt-2">
                            <a href="{{ route('destinations') }}" class="bg-[#c6181b] hover:bg-red-800 text-white px-5 py-2.5 rounded-lg font-bold text-xs sm:text-sm flex items-center gap-2 transition-all shadow-lg hover:-translate-y-0.5 shrink-0">
                                Explore <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="https://wa.me/{{ $cleanWaCountry }}?text=Hello%20Euro%20World%20Education,%20I%20am%20interested%20in%20studying%20in%20Italy.%20Please%20guide%20me%20on%20admissions%20and%20visa%20details." target="_blank" style="background-color: #25D366 !important;" class="hover:bg-[#1ebe5d] text-white px-5 py-2.5 rounded-lg font-bold text-xs sm:text-sm flex items-center justify-center gap-2 transition-all shadow-lg hover:-translate-y-0.5 flex-1 text-center">
                                <i class="fa-brands fa-whatsapp text-base"></i> Apply Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- France Large Card -->
                <div class="group relative h-[440px] rounded-2xl overflow-hidden shadow-2xl cursor-pointer reveal-up flex flex-col justify-between p-8" style="transition-delay: 100ms;">
                    <img src="{{ asset('assets/dest_france_1783324344345.png') }}" alt="France" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-[#0b1b3d]/75 transition-opacity group-hover:bg-[#0b1b3d]/65"></div>
                    
                    <!-- Top Spacer for exact alignment -->
                    <div class="relative z-10 h-8 shrink-0"></div>

                    <!-- Bottom Content Area -->
                    <div class="relative z-10 mt-auto flex flex-col">
                        <h4 class="text-4xl lg:text-5xl font-black text-white mb-3 uppercase tracking-wide drop-shadow-md">France</h4>
                        
                        <!-- Flag Badge -->
                        <div class="w-14 h-9 bg-white rounded-md p-0.5 mb-4 flex overflow-hidden shadow-md shrink-0 border border-white/25">
                            <div class="w-1/3 h-full bg-[#002654] rounded-l-sm"></div>
                            <div class="w-1/3 h-full bg-white"></div>
                            <div class="w-1/3 h-full bg-[#ED2939] rounded-r-sm"></div>
                        </div>
                        
                        <p class="text-white/90 text-xs sm:text-sm mb-6 h-12 overflow-hidden leading-relaxed font-medium line-clamp-2">Quality education with affordable tuition and excellent future opportunities across globally top-ranked institutions.</p>
                        
                        <!-- Buttons Row -->
                        <div class="flex items-center gap-3 pt-2">
                            <a href="{{ route('destinations') }}" class="bg-[#c6181b] hover:bg-red-800 text-white px-5 py-2.5 rounded-lg font-bold text-xs sm:text-sm flex items-center gap-2 transition-all shadow-lg hover:-translate-y-0.5 shrink-0">
                                Explore <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="https://wa.me/{{ $cleanWaCountry }}?text=Hello%20Euro%20World%20Education,%20I%20am%20interested%20in%20studying%20in%20France.%20Please%20guide%20me%20on%20admissions%20and%20visa%20details." target="_blank" style="background-color: #25D366 !important;" class="hover:bg-[#1ebe5d] text-white px-5 py-2.5 rounded-lg font-bold text-xs sm:text-sm flex items-center justify-center gap-2 transition-all shadow-lg hover:-translate-y-0.5 flex-1 text-center">
                                <i class="fa-brands fa-whatsapp text-base"></i> Apply Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Turkey Large Card (Replaced UK) -->
                <div class="group relative h-[440px] rounded-2xl overflow-hidden shadow-2xl cursor-pointer reveal-up flex flex-col justify-between p-8" style="transition-delay: 200ms;">
                    <img src="https://images.unsplash.com/photo-1527838832700-5059252407fa?w=800&q=80" alt="Turkey" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-[#0b1b3d]/75 transition-opacity group-hover:bg-[#0b1b3d]/65"></div>
                    
                    <!-- Top Spacer for exact alignment -->
                    <div class="relative z-10 h-8 shrink-0"></div>

                    <!-- Bottom Content Area -->
                    <div class="relative z-10 mt-auto flex flex-col">
                        <h4 class="text-4xl lg:text-5xl font-black text-white mb-3 uppercase tracking-wide drop-shadow-md">Turkey</h4>
                        
                        <!-- Turkey Flag Badge -->
                        <div class="w-14 h-9 bg-[#E30A17] rounded-md p-1 mb-4 flex items-center justify-center overflow-hidden shadow-md shrink-0 border border-white/25 relative">
                            <i class="fa-solid fa-moon text-white text-base -rotate-45"></i>
                            <i class="fa-solid fa-star text-white text-[7px] -ml-1 mt-0.5"></i>
                        </div>
                        
                        <p class="text-white/90 text-xs sm:text-sm mb-6 h-12 overflow-hidden leading-relaxed font-medium line-clamp-2">Top-ranked universities, affordable tuition fees, and rich cultural heritage at the crossroads of Europe and Asia.</p>
                        
                        <!-- Buttons Row -->
                        <div class="flex items-center gap-3 pt-2">
                            <a href="{{ route('destinations') }}" class="bg-[#c6181b] hover:bg-red-800 text-white px-5 py-2.5 rounded-lg font-bold text-xs sm:text-sm flex items-center gap-2 transition-all shadow-lg hover:-translate-y-0.5 shrink-0">
                                Explore <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="https://wa.me/{{ $cleanWaCountry }}?text=Hello%20Euro%20World%20Education,%20I%20am%20interested%20in%20studying%20in%20Turkey.%20Please%20guide%20me%20on%20admissions%20and%20visa%20details." target="_blank" style="background-color: #25D366 !important;" class="hover:bg-[#1ebe5d] text-white px-5 py-2.5 rounded-lg font-bold text-xs sm:text-sm flex items-center justify-center gap-2 transition-all shadow-lg hover:-translate-y-0.5 flex-1 text-center">
                                <i class="fa-brands fa-whatsapp text-base"></i> Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Attractive Modern Small/Medium Cards (Hungary, United Kingdom, Romania, South Korea) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal-up">
                <!-- Hungary Card -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 flex flex-col justify-between hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 h-[430px]">
                    <div class="h-44 relative overflow-hidden group/img shrink-0">
                        <img src="https://images.unsplash.com/photo-1541432901042-2d8bd64b4a9b?w=700&q=80" alt="Hungary" class="w-full h-full object-cover transition-transform duration-500 group-hover/img:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <!-- Flag Badge -->
                        <div class="absolute bottom-3 left-4 z-10 w-11 h-7 rounded shadow-md border border-white/40 overflow-hidden bg-white shrink-0">
                            <div class="w-full h-full flex flex-col"><div class="h-1/3 bg-[#CE2939]"></div><div class="h-1/3 bg-white"></div><div class="h-1/3 bg-[#477050]"></div></div>
                        </div>
                    </div>
                    <div class="p-5 flex flex-col flex-1 justify-between">
                        <div>
                            <h4 class="text-xl font-extrabold text-[#0b1b3d] uppercase tracking-wide mb-2">Hungary</h4>
                            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed h-12 overflow-hidden mb-4 font-medium line-clamp-2">Prestigious medical, engineering, and business universities with affordable tuition fees and European degrees.</p>
                        </div>
                        <div class="mt-auto flex flex-col sm:flex-row items-center gap-2 pt-3 border-t border-gray-100">
                            <a href="{{ route('destinations') }}" class="w-full sm:w-auto text-center bg-[#0b1b3d] hover:bg-slate-800 text-white px-3.5 py-2 rounded-lg text-xs font-bold transition-all shadow-sm flex items-center justify-center gap-1 shrink-0">
                                Explore <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                            <a href="https://wa.me/{{ $cleanWaCountry }}?text=Hello%20Euro%20World%20Education,%20I%20am%20interested%20in%20studying%20in%20Hungary.%20Please%20guide%20me%20on%20admissions%20and%20visa%20details." target="_blank" style="background-color: #25D366 !important;" class="w-full flex-1 text-center hover:bg-[#1ebe5d] text-white px-3 py-2 rounded-lg text-xs font-bold transition-all shadow-sm flex items-center justify-center gap-1.5">
                                <i class="fa-brands fa-whatsapp text-sm"></i> Apply Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- United Kingdom Card -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 flex flex-col justify-between hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 h-[430px]">
                    <div class="h-44 relative overflow-hidden group/img shrink-0">
                        <img src="{{ asset('assets/dest_uk_1783324356242.png') }}" alt="United Kingdom" class="w-full h-full object-cover transition-transform duration-500 group-hover/img:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <!-- Flag Badge -->
                        <div class="absolute bottom-3 left-4 z-10 w-11 h-7 rounded shadow-md border border-white/40 overflow-hidden bg-[#012169] flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-flag text-white text-xs"></i><span class="text-[9px] font-black text-white ml-1">UK</span>
                        </div>
                    </div>
                    <div class="p-5 flex flex-col flex-1 justify-between">
                        <div>
                            <h4 class="text-xl font-extrabold text-[#0b1b3d] uppercase tracking-wide mb-2">United Kingdom</h4>
                            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed h-12 overflow-hidden mb-4 font-medium line-clamp-2">World-class universities, globally recognized degrees, shorter course durations, and great post-study career pathways.</p>
                        </div>
                        <div class="mt-auto flex flex-col sm:flex-row items-center gap-2 pt-3 border-t border-gray-100">
                            <a href="{{ route('destinations') }}" class="w-full sm:w-auto text-center bg-[#0b1b3d] hover:bg-slate-800 text-white px-3.5 py-2 rounded-lg text-xs font-bold transition-all shadow-sm flex items-center justify-center gap-1 shrink-0">
                                Explore <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                            <a href="https://wa.me/{{ $cleanWaCountry }}?text=Hello%20Euro%20World%20Education,%20I%20am%20interested%20in%20studying%20in%20United%20Kingdom.%20Please%20guide%20me%20on%20admissions%20and%20visa%20details." target="_blank" style="background-color: #25D366 !important;" class="w-full flex-1 text-center hover:bg-[#1ebe5d] text-white px-3 py-2 rounded-lg text-xs font-bold transition-all shadow-sm flex items-center justify-center gap-1.5">
                                <i class="fa-brands fa-whatsapp text-sm"></i> Apply Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Romania Card -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 flex flex-col justify-between hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 h-[430px]">
                    <div class="h-44 relative overflow-hidden group/img shrink-0">
                        <img src="{{ asset('assets/dest_bucharest.png') }}" alt="Romania" class="w-full h-full object-cover transition-transform duration-500 group-hover/img:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <!-- Flag Badge -->
                        <div class="absolute bottom-3 left-4 z-10 w-11 h-7 rounded shadow-md border border-white/40 overflow-hidden shrink-0">
                            <div class="w-full h-full flex"><div class="w-1/3 bg-[#002B7F]"></div><div class="w-1/3 bg-[#FCD116]"></div><div class="w-1/3 bg-[#CE1126]"></div></div>
                        </div>
                    </div>
                    <div class="p-5 flex flex-col flex-1 justify-between">
                        <div>
                            <h4 class="text-xl font-extrabold text-[#0b1b3d] uppercase tracking-wide mb-2">Romania</h4>
                            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed h-12 overflow-hidden mb-4 font-medium line-clamp-2">High quality European education, exceptionally low living costs, and globally recognized medical & technical degrees.</p>
                        </div>
                        <div class="mt-auto flex flex-col sm:flex-row items-center gap-2 pt-3 border-t border-gray-100">
                            <a href="{{ route('destinations') }}" class="w-full sm:w-auto text-center bg-[#0b1b3d] hover:bg-slate-800 text-white px-3.5 py-2 rounded-lg text-xs font-bold transition-all shadow-sm flex items-center justify-center gap-1 shrink-0">
                                Explore <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                            <a href="https://wa.me/{{ $cleanWaCountry }}?text=Hello%20Euro%20World%20Education,%20I%20am%20interested%20in%20studying%20in%20Romania.%20Please%20guide%20me%20on%20admissions%20and%20visa%20details." target="_blank" style="background-color: #25D366 !important;" class="w-full flex-1 text-center hover:bg-[#1ebe5d] text-white px-3 py-2 rounded-lg text-xs font-bold transition-all shadow-sm flex items-center justify-center gap-1.5">
                                <i class="fa-brands fa-whatsapp text-sm"></i> Apply Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- South Korea Card -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 flex flex-col justify-between hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 h-[430px]">
                    <div class="h-44 relative overflow-hidden group/img shrink-0">
                        <img src="https://images.unsplash.com/photo-1517154421773-0529f29ea451?w=700&q=80" alt="South Korea" class="w-full h-full object-cover transition-transform duration-500 group-hover/img:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <!-- Flag Badge -->
                        <div class="absolute bottom-3 left-4 z-10 w-11 h-7 rounded shadow-md border border-white/40 overflow-hidden bg-white flex items-center justify-center shrink-0">
                            <div class="w-4 h-4 rounded-full bg-gradient-to-b from-red-600 to-blue-700"></div>
                        </div>
                    </div>
                    <div class="p-5 flex flex-col flex-1 justify-between">
                        <div>
                            <h4 class="text-xl font-extrabold text-[#0b1b3d] uppercase tracking-wide mb-2">South Korea</h4>
                            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed h-12 overflow-hidden mb-4 font-medium line-clamp-2">Cutting-edge technology, world-class research campuses, generous government scholarships, and vibrant culture.</p>
                        </div>
                        <div class="mt-auto flex flex-col sm:flex-row items-center gap-2 pt-3 border-t border-gray-100">
                            <a href="{{ route('destinations') }}" class="w-full sm:w-auto text-center bg-[#0b1b3d] hover:bg-slate-800 text-white px-3.5 py-2 rounded-lg text-xs font-bold transition-all shadow-sm flex items-center justify-center gap-1 shrink-0">
                                Explore <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                            <a href="https://wa.me/{{ $cleanWaCountry }}?text=Hello%20Euro%20World%20Education,%20I%20am%20interested%20in%20studying%20in%20South%20Korea.%20Please%20guide%20me%20on%20admissions%20and%20visa%20details." target="_blank" style="background-color: #25D366 !important;" class="w-full flex-1 text-center hover:bg-[#1ebe5d] text-white px-3 py-2 rounded-lg text-xs font-bold transition-all shadow-sm flex items-center justify-center gap-1.5">
                                <i class="fa-brands fa-whatsapp text-sm"></i> Apply Now
                            </a>
                        </div>
                    </div>
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
                <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight mt-2"><span class="text-[#0b1b3d]">SUCCESS</span> <span class="text-[#c6181b]">STORIES</span></h2>
                <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-sm">We are proud to have helped students secure admission in top universities around the world. Your success is our greatest achievement.</p>
            </div>

            <!-- Carousel Container -->
            <div class="relative mb-12 reveal-up px-6 md:px-12">
                <!-- Left Arrow -->
                <button type="button" onclick="document.getElementById('admissions-carousel').scrollBy({ left: -320, behavior: 'smooth' })" class="absolute left-0 top-1/2 -translate-y-1/2 w-12 h-12 bg-[#0b1b3d] hover:bg-[#c6181b] text-white rounded-full flex items-center justify-center z-30 shadow-xl transition-all cursor-pointer border border-white/10 active:scale-95">
                    <i class="fa-solid fa-chevron-left text-base"></i>
                </button>

                <!-- Cards (Horizontal Scroll) -->
                <div id="admissions-carousel" class="flex overflow-x-auto gap-6 pb-8 snap-x snap-mandatory scrollbar-hide px-2 scroll-smooth" style="scrollbar-width: none;">

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
                        <div class="relative pt-4 pb-6 px-4 flex-grow flex flex-col items-center text-center bg-gray-50/50">
                            <!-- Authentic Admission Letter Background (Card 1) -->
                            <div class="w-full bg-white border border-gray-200/80 rounded-lg shadow-sm pt-3 pb-8 px-3 text-left relative z-0 mb-[-32px]">
                                <div class="flex items-center gap-1.5 border-b border-gray-100 pb-1.5 mb-1.5">
                                    <div class="w-5 h-5 rounded-full bg-[#0b1b3d]/10 flex items-center justify-center text-[#0b1b3d] text-[9px]"><i class="fa-solid fa-building-columns"></i></div>
                                    <span class="text-[8.5px] font-extrabold text-[#0b1b3d] uppercase tracking-wider leading-none">UNIVERSITÀ DI PISA</span>
                                </div>
                                <div class="text-[8.5px] font-bold text-gray-700 leading-tight">Pre-enrolment summary</div>
                                <div class="text-[8.5px] font-black text-[#0b1b3d] mb-1 leading-tight">Congratulations!</div>
                                <p class="text-[6.5px] text-gray-400 leading-[1.3] line-clamp-3">Department: Computer Science & Engineering • Eligibility: Approved. Your academic evaluation has completed successfully and you are invited to proceed with enrolment.</p>
                            </div>
                            <img src="https://i.pravatar.cc/150?img=11" class="w-16 h-16 rounded-full border-4 border-white shadow-lg relative z-10 mb-2 object-cover">
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
                        <div class="relative pt-4 pb-6 px-4 flex-grow flex flex-col items-center text-center bg-gray-50/50">
                            <!-- Authentic Admission Letter Background (Card 2) -->
                            <div class="w-full bg-white border border-gray-200/80 rounded-lg shadow-sm pt-3 pb-8 px-3 text-left relative z-0 mb-[-32px]">
                                <div class="flex items-center gap-1.5 border-b border-gray-100 pb-1.5 mb-1.5">
                                    <div class="w-5 h-5 rounded-full bg-[#0b1b3d]/10 flex items-center justify-center text-[#0b1b3d] text-[9px]"><i class="fa-solid fa-building-columns"></i></div>
                                    <span class="text-[8.5px] font-extrabold text-[#0b1b3d] uppercase tracking-wider leading-none">POLITECNICO DI MILANO</span>
                                </div>
                                <div class="text-[8.5px] font-bold text-gray-700 leading-tight">Pre-enrolment summary</div>
                                <div class="text-[8.5px] font-black text-[#0b1b3d] mb-1 leading-tight">Congratulations!</div>
                                <p class="text-[6.5px] text-gray-400 leading-[1.3] line-clamp-3">Department: Data Science & Analytics • Eligibility: Approved. Your qualifications have met all institutional criteria for the Master of Science degree program.</p>
                            </div>
                            <img src="https://i.pravatar.cc/150?img=12" class="w-16 h-16 rounded-full border-4 border-white shadow-lg relative z-10 mb-2 object-cover">
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
                                <h5 class="font-bold text-[#0b1b3d] text-xs leading-tight">UNIVERSITÀ<br>DEGLI STUDI DI MILANO</h5>
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
                        <div class="relative pt-4 pb-6 px-4 flex-grow flex flex-col items-center text-center bg-gray-50/50">
                            <!-- Authentic Admission Letter Background (Card 3) -->
                            <div class="w-full bg-white border border-gray-200/80 rounded-lg shadow-sm pt-3 pb-8 px-3 text-left relative z-0 mb-[-32px]">
                                <div class="flex items-center gap-1.5 border-b border-gray-100 pb-1.5 mb-1.5">
                                    <div class="w-5 h-5 rounded-full bg-[#0b1b3d]/10 flex items-center justify-center text-[#0b1b3d] text-[9px]"><i class="fa-solid fa-building-columns"></i></div>
                                    <span class="text-[8.5px] font-extrabold text-[#0b1b3d] uppercase tracking-wider leading-none">UNIVERSITÀ DI MILANO</span>
                                </div>
                                <div class="text-[8.5px] font-bold text-gray-700 leading-tight">Pre-enrolment summary</div>
                                <div class="text-[8.5px] font-black text-[#0b1b3d] mb-1 leading-tight">Congratulations!</div>
                                <p class="text-[6.5px] text-gray-400 leading-[1.3] line-clamp-3">Department: Business & Management • Eligibility: Approved. Your pre-enrolment summary verifies compliance with international student admission criteria.</p>
                            </div>
                            <img src="https://i.pravatar.cc/150?img=5" class="w-16 h-16 rounded-full border-4 border-white shadow-lg relative z-10 mb-2 object-cover">
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
                        <div class="relative pt-4 pb-6 px-4 flex-grow flex flex-col items-center text-center bg-gray-50/50">
                            <!-- Authentic Admission Letter Background (Card 4 - Ahmed Khan) -->
                            <div class="w-full bg-white border border-gray-200/80 rounded-lg shadow-sm pt-3 pb-8 px-3 text-left relative z-0 mb-[-32px]">
                                <div class="flex items-center gap-1.5 border-b border-gray-100 pb-1.5 mb-1.5">
                                    <div class="w-5 h-5 rounded-full bg-[#0b1b3d]/10 flex items-center justify-center text-[#0b1b3d] text-[9px]"><i class="fa-solid fa-building-columns"></i></div>
                                    <span class="text-[8.5px] font-extrabold text-[#0b1b3d] uppercase tracking-wider leading-none">UNIVERSITÀ DI PAVIA</span>
                                </div>
                                <div class="text-[8.5px] font-bold text-gray-700 leading-tight">Pre-enrolment summary</div>
                                <div class="text-[8.5px] font-black text-[#0b1b3d] mb-1 leading-tight">Congratulations!</div>
                                <p class="text-[6.5px] text-gray-400 leading-[1.3] line-clamp-3">Department: Bioinformatics & Life Sciences • Eligibility: Approved. Your pre-enrolment documentation has been verified and you are authorized for visa application.</p>
                            </div>
                            <img src="https://i.pravatar.cc/150?img=60" class="w-16 h-16 rounded-full border-4 border-white shadow-lg relative z-10 mb-2 object-cover">
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
                        <div class="relative pt-4 pb-6 px-4 flex-grow flex flex-col items-center text-center bg-gray-50/50">
                            <!-- Authentic Admission Letter Background (Card 5) -->
                            <div class="w-full bg-white border border-gray-200/80 rounded-lg shadow-sm pt-3 pb-8 px-3 text-left relative z-0 mb-[-32px]">
                                <div class="flex items-center gap-1.5 border-b border-gray-100 pb-1.5 mb-1.5">
                                    <div class="w-5 h-5 rounded-full bg-[#0b1b3d]/10 flex items-center justify-center text-[#0b1b3d] text-[9px]"><i class="fa-solid fa-building-columns"></i></div>
                                    <span class="text-[8.5px] font-extrabold text-[#0b1b3d] uppercase tracking-wider leading-none">SAPIENZA ROMA</span>
                                </div>
                                <div class="text-[8.5px] font-bold text-gray-700 leading-tight">Pre-enrolment summary</div>
                                <div class="text-[8.5px] font-black text-[#0b1b3d] mb-1 leading-tight">Congratulations!</div>
                                <p class="text-[6.5px] text-gray-400 leading-[1.3] line-clamp-3">Department: Psychology & Cognitive Science • Eligibility: Approved. Your formal admission letter has been issued by the international registry.</p>
                            </div>
                            <img src="https://i.pravatar.cc/150?img=47" class="w-16 h-16 rounded-full border-4 border-white shadow-lg relative z-10 mb-2 object-cover">
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
                        <div class="relative pt-4 pb-6 px-4 flex-grow flex flex-col items-center text-center bg-gray-50/50">
                            <!-- Authentic Admission Letter Background (Card 6) -->
                            <div class="w-full bg-white border border-gray-200/80 rounded-lg shadow-sm pt-3 pb-8 px-3 text-left relative z-0 mb-[-32px]">
                                <div class="flex items-center gap-1.5 border-b border-gray-100 pb-1.5 mb-1.5">
                                    <div class="w-5 h-5 rounded-full bg-[#0b1b3d]/10 flex items-center justify-center text-[#0b1b3d] text-[9px]"><i class="fa-solid fa-building-columns"></i></div>
                                    <span class="text-[8.5px] font-extrabold text-[#0b1b3d] uppercase tracking-wider leading-none">UNI OF BUCHAREST</span>
                                </div>
                                <div class="text-[8.5px] font-bold text-gray-700 leading-tight">Pre-enrolment summary</div>
                                <div class="text-[8.5px] font-black text-[#0b1b3d] mb-1 leading-tight">Congratulations!</div>
                                <p class="text-[6.5px] text-gray-400 leading-[1.3] line-clamp-3">Department: Business Administration • Eligibility: Approved. Your official acceptance letter and visa support documentation have been completed.</p>
                            </div>
                            <img src="https://i.pravatar.cc/150?img=13" class="w-16 h-16 rounded-full border-4 border-white shadow-lg relative z-10 mb-2 object-cover">
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
                <button type="button" onclick="document.getElementById('admissions-carousel').scrollBy({ left: 320, behavior: 'smooth' })" class="absolute right-0 top-1/2 -translate-y-1/2 w-12 h-12 bg-[#0b1b3d] hover:bg-[#c6181b] text-white rounded-full flex items-center justify-center z-30 shadow-xl transition-all cursor-pointer border border-white/10 active:scale-95">
                    <i class="fa-solid fa-chevron-right text-base"></i>
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
            <div class="bg-white border border-slate-200/80 rounded-[24px] max-w-5xl mx-auto p-6 md:p-8 shadow-md reveal-up grid grid-cols-2 lg:grid-cols-4 gap-6 items-center text-center">
                <div class="flex flex-col items-center justify-center">
                    <div class="w-12 h-12 rounded-2xl bg-[#0b1b3d] flex items-center justify-center text-white text-lg mb-2 shadow-sm">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h4 class="text-red-600 font-extrabold text-2xl leading-none mb-1"><span class="count-up" data-target="500">0</span>+</h4>
                    <p class="text-[11px] font-bold text-gray-600 uppercase tracking-wide">Successful Admissions</p>
                </div>

                <div class="flex flex-col items-center justify-center">
                    <div class="w-12 h-12 rounded-2xl bg-[#0b1b3d] flex items-center justify-center text-white text-lg mb-2 shadow-sm">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <h4 class="text-red-600 font-extrabold text-2xl leading-none mb-1"><span class="count-up" data-target="10">0</span>+</h4>
                    <p class="text-[11px] font-bold text-gray-600 uppercase tracking-wide">Countries</p>
                </div>

                <div class="flex flex-col items-center justify-center">
                    <div class="w-12 h-12 rounded-2xl bg-[#0b1b3d] flex items-center justify-center text-white text-lg mb-2 shadow-sm">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <h4 class="text-red-600 font-extrabold text-2xl leading-none mb-1"><span class="count-up" data-target="300">0</span>+</h4>
                    <p class="text-[11px] font-bold text-gray-600 uppercase tracking-wide">Top Universities</p>
                </div>

                <div class="flex flex-col items-center justify-center">
                    <div class="w-12 h-12 rounded-2xl bg-[#0b1b3d] flex items-center justify-center text-white text-lg mb-2 shadow-sm">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h4 class="text-red-600 font-extrabold text-2xl leading-none mb-1"><span class="count-up" data-target="98">0</span>%</h4>
                    <p class="text-[11px] font-bold text-gray-600 uppercase tracking-wide">Visa Success Ratio</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Feedback / Mission Section -->
    <section class="bg-[#0b1b3d] py-10 font-sans border-t border-white/10">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">
                <div class="flex-1">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-white mb-2 tracking-tight">
                        Help us improve <span class="text-[#c6181b]">Euroworld Education</span>
                    </h2>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed font-light line-clamp-2">
                        Your feedback is incredibly valuable to us! Whether it's about our counseling, visa guidance, or university selection, please share your thoughts or call us directly to help us serve you better.
                    </p>
                </div>
                <div class="shrink-0 flex flex-wrap items-center justify-center gap-3">
                    <a href="{{ route('feedback') }}" class="inline-flex items-center gap-2 bg-[#c6181b] text-white px-5 py-3 rounded-xl font-bold text-xs sm:text-sm hover:bg-red-800 transition-all shadow-lg hover:-translate-y-0.5">
                        Share Your Feedback <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                    <a href="tel:{{ $global_settings['site_phone'] ?? '+923000000000' }}" class="inline-flex items-center gap-2 bg-white/10 text-white px-5 py-3 rounded-xl font-bold text-xs sm:text-sm hover:bg-white/20 border border-white/20 transition-all shadow-lg hover:-translate-y-0.5">
                        <i class="fa-solid fa-phone text-red-400"></i> Call Us to Improve
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
