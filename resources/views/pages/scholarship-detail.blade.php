@extends('layouts.main')

@section('title', $scholarship->title . ' - EuroWorld Consultants')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 bg-[#0b1b3d] overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-blue-900/40 to-transparent"></div>
        <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-[#0b1b3d] to-transparent"></div>
        
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
        <div class="absolute top-40 right-20 w-72 h-72 bg-yellow-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl">
            @if($scholarship->badge)
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/20 text-white text-sm font-semibold mb-6 backdrop-blur-md">
                <i class="fa-solid {{ $scholarship->icon ?? 'fa-award' }} text-yellow-400"></i>
                {{ $scholarship->badge }}
            </div>
            @endif
            
            <h1 class="text-4xl md:text-5xl lg:text-7xl font-black text-white leading-[1.1] mb-6 tracking-tight">
                {{ $scholarship->title }}
            </h1>

            @if($scholarship->highlight)
            <p class="text-xl md:text-2xl text-blue-200 font-medium max-w-2xl">
                {{ $scholarship->highlight }}
            </p>
            @endif
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="py-16 md:py-24 bg-white relative z-10">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="prose prose-lg prose-blue max-w-none text-gray-700">
                {!! $scholarship->description !!}
            </div>
            
            <div class="mt-16 pt-8 border-t border-gray-200 text-center">
                <a href="{{ $scholarship->button_link ?? route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-[#c6181b] text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-red-800 transition-all shadow-xl hover:shadow-red-600/30 hover:-translate-y-1">
                    {{ $scholarship->button_text ?? 'Apply Now' }} <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
