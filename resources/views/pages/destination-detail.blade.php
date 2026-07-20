@extends('layouts.main')

@section('title', $destination->title . ' - EuroWorld Consultants')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 bg-[#0b1b3d] overflow-hidden">
    <!-- Abstract Background -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-blue-900/40 to-transparent"></div>
        <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-[#0b1b3d] to-transparent"></div>
        
        <!-- Animated elements -->
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
        <div class="absolute top-40 right-20 w-72 h-72 bg-red-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/20 text-white text-sm font-semibold mb-6 backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                Study Destination
            </div>
            
            <h1 class="text-4xl md:text-5xl lg:text-7xl font-black text-white leading-[1.1] mb-6 tracking-tight">
                {{ $destination->title }}
            </h1>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="py-16 md:py-24 bg-white relative z-10">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            @if($destination->image)
                <div class="mb-12 rounded-3xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('storage/' . $destination->image) }}" alt="{{ $destination->title }}" class="w-full h-auto object-cover max-h-[500px]">
                </div>
            @endif

            <div class="prose prose-lg prose-blue max-w-none text-gray-700">
                {!! $destination->content !!}
            </div>
            
            <div class="mt-16 pt-8 border-t border-gray-200 text-center">
                <a href="{{ route('contact') }}?interest={{ urlencode($destination->title) }}" class="inline-flex items-center justify-center gap-2 bg-[#c6181b] text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-red-800 transition-all shadow-xl hover:shadow-red-600/30 hover:-translate-y-1">
                    Apply for {{ $destination->title }} <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
