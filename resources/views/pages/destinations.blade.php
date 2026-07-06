@extends('layouts.main')

@section('title', 'Study in Europe - Top Universities & Destinations')
@section('description', 'Discover top-tier educational opportunities in Italy, France, the UK, Germany, and Australia.')

@section('content')
<!-- Destinations Hero -->
    <section class="relative pt-40 pb-20 bg-[#0b1b3d] font-sans overflow-hidden text-center">
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Study <span class="text-[#c6181b]">Destinations</span></h1>
            <p class="text-gray-300 max-w-2xl mx-auto">Discover top-tier educational opportunities across Europe's most prestigious countries.</p>
        </div>
    </section>

    <!-- Destinations Grid -->
    <section class="py-20 bg-light">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Italy -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:-translate-y-2 transition-transform duration-300 border border-gray-100">
                    <div class="relative h-48">
                        <img src="https://images.unsplash.com/photo-1520175480921-4edfa2983e0f?w=800&q=80" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0b1b3d]/90 to-transparent"></div>
                        <h3 class="absolute bottom-4 left-6 text-2xl font-bold text-white flex items-center gap-2"><span class="w-4 h-3 bg-green-600 flex"><span class="w-1/3 bg-green-600"></span><span class="w-1/3 bg-white"></span><span class="w-1/3 bg-red-600"></span></span> Italy</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-500 text-sm mb-4 leading-relaxed">Experience a rich blend of history, culture, and world-class public universities with highly affordable tuition fees.</p>
                        <a href="{{ route('contact') }}" class="text-[#c6181b] font-bold text-sm hover:text-red-800 flex items-center gap-1">Explore Universities <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- France -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:-translate-y-2 transition-transform duration-300 border border-gray-100">
                    <div class="relative h-48">
                        <img src="https://images.unsplash.com/photo-1502602898657-3e90760b2697?w=800&q=80" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0b1b3d]/90 to-transparent"></div>
                        <h3 class="absolute bottom-4 left-6 text-2xl font-bold text-white flex items-center gap-2"><span class="w-4 h-3 bg-blue-800 flex"><span class="w-1/3 bg-blue-800"></span><span class="w-1/3 bg-white"></span><span class="w-1/3 bg-red-600"></span></span> France</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-500 text-sm mb-4 leading-relaxed">Home to some of the world's most prestigious business schools and engineering institutions with extensive post-study work options.</p>
                        <a href="{{ route('contact') }}" class="text-[#c6181b] font-bold text-sm hover:text-red-800 flex items-center gap-1">Explore Universities <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- UK -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:-translate-y-2 transition-transform duration-300 border border-gray-100">
                    <div class="relative h-48">
                        <img src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?w=800&q=80" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0b1b3d]/90 to-transparent"></div>
                        <h3 class="absolute bottom-4 left-6 text-2xl font-bold text-white flex items-center gap-2"><i class="fa-solid fa-earth-americas text-blue-400 text-sm"></i> United Kingdom</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-500 text-sm mb-4 leading-relaxed">A globally recognized education system offering shorter duration degrees and excellent post-study career opportunities.</p>
                        <a href="{{ route('contact') }}" class="text-[#c6181b] font-bold text-sm hover:text-red-800 flex items-center gap-1">Explore Universities <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Australia -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:-translate-y-2 transition-transform duration-300 border border-gray-100">
                    <div class="relative h-48">
                        <img src="https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?w=800&q=80" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0b1b3d]/90 to-transparent"></div>
                        <h3 class="absolute bottom-4 left-6 text-2xl font-bold text-white flex items-center gap-2"><i class="fa-solid fa-earth-oceania text-blue-400 text-sm"></i> Australia</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-500 text-sm mb-4 leading-relaxed">High standard of living, diverse campuses, and leading research institutions across vibrant, student-friendly cities.</p>
                        <a href="{{ route('contact') }}" class="text-[#c6181b] font-bold text-sm hover:text-red-800 flex items-center gap-1">Explore Universities <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
