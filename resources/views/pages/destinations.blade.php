@extends('layouts.main')

@section('title', 'Study in Europe - Top Universities & Destinations')
@section('description', 'Discover top-tier educational opportunities in Italy, France, Turkey, Hungary, United Kingdom, Romania, and South Korea.')

@section('content')
    @php
        $rawWa = $global_settings['site_whatsapp'] ?? ($global_settings['site_phone'] ?? '923000000000');
        $cleanWaDest = preg_replace('/[^0-9]/', '', $rawWa);
        if (empty($cleanWaDest)) {
            $cleanWaDest = '923000000000';
        }
    @endphp
<!-- Destinations Hero -->
    <section class="relative pt-40 pb-20 bg-[#0b1b3d] font-sans overflow-hidden text-center">
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Study <span class="text-[#c6181b]">Destinations</span></h1>
            <p class="text-gray-300 max-w-2xl mx-auto">Discover top-tier educational opportunities across the world's most prestigious countries.</p>
        </div>
    </section>

    <!-- Destinations Grid -->
    <section class="py-20 bg-light font-sans">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Italy -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-gray-100 flex flex-col justify-between h-[450px]">
                    <div class="relative h-48 shrink-0 overflow-hidden group">
                        <img src="{{ asset('assets/dest_italy_1783324333447.png') }}" alt="Italy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0b1b3d]/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-5 flex items-center gap-2">
                            <div class="w-7 h-5 bg-white rounded-sm p-0.5 flex overflow-hidden shadow-sm"><div class="w-1/3 h-full bg-[#009246]"></div><div class="w-1/3 h-full bg-white"></div><div class="w-1/3 h-full bg-[#CE2B37]"></div></div>
                            <h3 class="text-2xl font-bold text-white tracking-wide">Italy</h3>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed h-14 overflow-hidden line-clamp-3 font-medium">Affordable public universities, scholarship opportunities, and student visa guidance for Pakistani students.</p>
                        <div class="mt-auto pt-4 border-t border-gray-100 flex flex-col gap-2">
                            <a href="https://wa.me/{{ $cleanWaDest }}?text=Hello%20Euro%20World%20Education,%20I%20am%20interested%20in%20studying%20in%20Italy.%20Please%20guide%20me%20on%20admissions%20and%20visa%20details." target="_blank" style="background-color: #25D366 !important;" class="hover:bg-[#1ebe5d] text-white py-2.5 px-4 rounded-xl text-xs font-bold transition-all shadow-md flex items-center justify-center gap-2">
                                <i class="fa-brands fa-whatsapp text-base"></i> Apply Now via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

                <!-- France -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-gray-100 flex flex-col justify-between h-[450px]">
                    <div class="relative h-48 shrink-0 overflow-hidden group">
                        <img src="{{ asset('assets/dest_france_1783324344345.png') }}" alt="France" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0b1b3d]/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-5 flex items-center gap-2">
                            <div class="w-7 h-5 bg-white rounded-sm p-0.5 flex overflow-hidden shadow-sm"><div class="w-1/3 h-full bg-[#002654]"></div><div class="w-1/3 h-full bg-white"></div><div class="w-1/3 h-full bg-[#ED2939]"></div></div>
                            <h3 class="text-2xl font-bold text-white tracking-wide">France</h3>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed h-14 overflow-hidden line-clamp-3 font-medium">Quality education with affordable tuition and excellent future opportunities across globally top-ranked institutions.</p>
                        <div class="mt-auto pt-4 border-t border-gray-100 flex flex-col gap-2">
                            <a href="https://wa.me/{{ $cleanWaDest }}?text=Hello%20Euro%20World%20Education,%20I%20am%20interested%20in%20studying%20in%20France.%20Please%20guide%20me%20on%20admissions%20and%20visa%20details." target="_blank" style="background-color: #25D366 !important;" class="hover:bg-[#1ebe5d] text-white py-2.5 px-4 rounded-xl text-xs font-bold transition-all shadow-md flex items-center justify-center gap-2">
                                <i class="fa-brands fa-whatsapp text-base"></i> Apply Now via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Turkey -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-gray-100 flex flex-col justify-between h-[450px]">
                    <div class="relative h-48 shrink-0 overflow-hidden group">
                        <img src="https://images.unsplash.com/photo-1527838832700-5059252407fa?w=800&q=80" alt="Turkey" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0b1b3d]/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-5 flex items-center gap-2">
                            <div class="w-7 h-5 bg-[#E30A17] rounded-sm flex items-center justify-center shadow-sm relative"><i class="fa-solid fa-moon text-white text-[10px] -rotate-45"></i><i class="fa-solid fa-star text-white text-[5px] -ml-0.5 mt-0.5"></i></div>
                            <h3 class="text-2xl font-bold text-white tracking-wide">Turkey</h3>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed h-14 overflow-hidden line-clamp-3 font-medium">Top-ranked universities, affordable tuition fees, and rich cultural heritage at the crossroads of Europe and Asia.</p>
                        <div class="mt-auto pt-4 border-t border-gray-100 flex flex-col gap-2">
                            <a href="https://wa.me/{{ $cleanWaDest }}?text=Hello%20Euro%20World%20Education,%20I%20am%20interested%20in%20studying%20in%20Turkey.%20Please%20guide%20me%20on%20admissions%20and%20visa%20details." target="_blank" style="background-color: #25D366 !important;" class="hover:bg-[#1ebe5d] text-white py-2.5 px-4 rounded-xl text-xs font-bold transition-all shadow-md flex items-center justify-center gap-2">
                                <i class="fa-brands fa-whatsapp text-base"></i> Apply Now via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Hungary -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-gray-100 flex flex-col justify-between h-[450px]">
                    <div class="relative h-48 shrink-0 overflow-hidden group">
                        <img src="https://images.unsplash.com/photo-1541432901042-2d8bd64b4a9b?w=800&q=80" alt="Hungary" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0b1b3d]/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-5 flex items-center gap-2">
                            <div class="w-7 h-5 rounded-sm overflow-hidden shadow-sm flex flex-col"><div class="h-1/3 bg-[#CE2939]"></div><div class="h-1/3 bg-white"></div><div class="h-1/3 bg-[#477050]"></div></div>
                            <h3 class="text-2xl font-bold text-white tracking-wide">Hungary</h3>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed h-14 overflow-hidden line-clamp-3 font-medium">Prestigious medical, engineering, and business universities with affordable tuition fees and European degrees.</p>
                        <div class="mt-auto pt-4 border-t border-gray-100 flex flex-col gap-2">
                            <a href="https://wa.me/{{ $cleanWaDest }}?text=Hello%20Euro%20World%20Education,%20I%20am%20interested%20in%20studying%20in%20Hungary.%20Please%20guide%20me%20on%20admissions%20and%20visa%20details." target="_blank" style="background-color: #25D366 !important;" class="hover:bg-[#1ebe5d] text-white py-2.5 px-4 rounded-xl text-xs font-bold transition-all shadow-md flex items-center justify-center gap-2">
                                <i class="fa-brands fa-whatsapp text-base"></i> Apply Now via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

                <!-- United Kingdom -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-gray-100 flex flex-col justify-between h-[450px]">
                    <div class="relative h-48 shrink-0 overflow-hidden group">
                        <img src="{{ asset('assets/dest_uk_1783324356242.png') }}" alt="United Kingdom" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0b1b3d]/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-5 flex items-center gap-2">
                            <div class="w-7 h-5 bg-[#012169] rounded-sm flex items-center justify-center shadow-sm"><i class="fa-solid fa-flag text-white text-[10px]"></i></div>
                            <h3 class="text-2xl font-bold text-white tracking-wide">United Kingdom</h3>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed h-14 overflow-hidden line-clamp-3 font-medium">World-class universities, globally recognized degrees, shorter course durations, and great post-study career pathways.</p>
                        <div class="mt-auto pt-4 border-t border-gray-100 flex flex-col gap-2">
                            <a href="https://wa.me/{{ $cleanWaDest }}?text=Hello%20Euro%20World%20Education,%20I%20am%20interested%20in%20studying%20in%20United%20Kingdom.%20Please%20guide%20me%20on%20admissions%20and%20visa%20details." target="_blank" style="background-color: #25D366 !important;" class="hover:bg-[#1ebe5d] text-white py-2.5 px-4 rounded-xl text-xs font-bold transition-all shadow-md flex items-center justify-center gap-2">
                                <i class="fa-brands fa-whatsapp text-base"></i> Apply Now via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Romania -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-gray-100 flex flex-col justify-between h-[450px]">
                    <div class="relative h-48 shrink-0 overflow-hidden group">
                        <img src="{{ asset('assets/dest_bucharest.png') }}" alt="Romania" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0b1b3d]/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-5 flex items-center gap-2">
                            <div class="w-7 h-5 rounded-sm overflow-hidden shadow-sm flex"><div class="w-1/3 bg-[#002B7F]"></div><div class="w-1/3 bg-[#FCD116]"></div><div class="w-1/3 bg-[#CE1126]"></div></div>
                            <h3 class="text-2xl font-bold text-white tracking-wide">Romania</h3>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed h-14 overflow-hidden line-clamp-3 font-medium">High quality European education, exceptionally low living costs, and globally recognized medical & technical degrees.</p>
                        <div class="mt-auto pt-4 border-t border-gray-100 flex flex-col gap-2">
                            <a href="https://wa.me/{{ $cleanWaDest }}?text=Hello%20Euro%20World%20Education,%20I%20am%20interested%20in%20studying%20in%20Romania.%20Please%20guide%20me%20on%20admissions%20and%20visa%20details." target="_blank" style="background-color: #25D366 !important;" class="hover:bg-[#1ebe5d] text-white py-2.5 px-4 rounded-xl text-xs font-bold transition-all shadow-md flex items-center justify-center gap-2">
                                <i class="fa-brands fa-whatsapp text-base"></i> Apply Now via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

                <!-- South Korea -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-gray-100 flex flex-col justify-between h-[450px]">
                    <div class="relative h-48 shrink-0 overflow-hidden group">
                        <img src="https://images.unsplash.com/photo-1517154421773-0529f29ea451?w=800&q=80" alt="South Korea" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0b1b3d]/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-5 flex items-center gap-2">
                            <div class="w-7 h-5 bg-white rounded-sm overflow-hidden shadow-sm flex items-center justify-center"><div class="w-3 h-3 rounded-full bg-gradient-to-b from-red-600 to-blue-700"></div></div>
                            <h3 class="text-2xl font-bold text-white tracking-wide">South Korea</h3>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed h-14 overflow-hidden line-clamp-3 font-medium">Cutting-edge technology, world-class research campuses, generous government scholarships, and vibrant culture.</p>
                        <div class="mt-auto pt-4 border-t border-gray-100 flex flex-col gap-2">
                            <a href="https://wa.me/{{ $cleanWaDest }}?text=Hello%20Euro%20World%20Education,%20I%20am%20interested%20in%20studying%20in%20South%20Korea.%20Please%20guide%20me%20on%20admissions%20and%20visa%20details." target="_blank" style="background-color: #25D366 !important;" class="hover:bg-[#1ebe5d] text-white py-2.5 px-4 rounded-xl text-xs font-bold transition-all shadow-md flex items-center justify-center gap-2">
                                <i class="fa-brands fa-whatsapp text-base"></i> Apply Now via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
