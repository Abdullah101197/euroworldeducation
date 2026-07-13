@extends('layouts.main')

@section('title', 'Fully Funded European Scholarships - Euro World')
@section('description', 'Unlock financial aid and merit-based excellence awards at the world\'s best universities.')

@section('content')
<!-- Scholarships Hero -->
    <section class="relative pt-40 pb-20 bg-[#0b1b3d] font-sans overflow-hidden text-center">
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">{!! $global_settings['scholarships_hero_title'] ?? 'Global <span class="text-[#ffc107]">Scholarships</span>' !!}</h1>
            <p class="text-gray-300 max-w-2xl mx-auto">{{ $global_settings['scholarships_hero_subtitle'] ?? 'Unlock financial aid opportunities and fully-funded programs at the world\'s best universities.' }}</p>
        </div>
    </section>

    <section class="py-20 bg-light">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100 flex flex-col md:flex-row gap-8 items-center mb-12">
                <div class="w-24 h-24 bg-yellow-50 text-yellow-500 rounded-full flex items-center justify-center text-4xl shrink-0">
                    <i class="fa-solid fa-award"></i>
                </div>
                <div class="w-full">
                    <h2 class="text-2xl font-bold text-[#0b1b3d] mb-2">{{ $global_settings['scholarships_card1_title'] ?? 'Merit-Based Excellence Awards' }}</h2>
                    <div class="text-gray-600 mb-4 prose max-w-none">{!! $global_settings['scholarships_card1_desc'] ?? '<p>Many of our partner universities in the UK and Australia offer significant tuition fee discounts (up to 50%) for students with outstanding academic records.</p>' !!}</div>
                    <a href="{{ route('contact') }}" class="inline-block bg-[#0b1b3d] text-white px-6 py-2 rounded-full font-bold text-sm hover:bg-gray-800 transition-colors">Check Eligibility</a>
                </div>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100 flex flex-col md:flex-row gap-8 items-center">
                <div class="w-24 h-24 bg-red-50 text-red-600 rounded-full flex items-center justify-center text-4xl shrink-0">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <div class="w-full">
                    <h2 class="text-2xl font-bold text-[#0b1b3d] mb-2">{{ $global_settings['scholarships_card2_title'] ?? 'Government & Regional Scholarships' }}</h2>
                    <div class="text-gray-600 mb-4 prose max-w-none">{!! $global_settings['scholarships_card2_desc'] ?? '<p>We specialize in helping students apply for regional government scholarships (such as DSU in Italy or DAAD in Germany) which can cover full tuition and provide living stipends.</p>' !!}</div>
                    <a href="{{ route('contact') }}" class="inline-block bg-[#0b1b3d] text-white px-6 py-2 rounded-full font-bold text-sm hover:bg-gray-800 transition-colors">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    
@endsection
