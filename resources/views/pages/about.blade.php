@extends('layouts.main')

@section('title', 'About Us - Euro World Education')
@section('description', 'Learn about our mission, vision, and 10+ years of trust in guiding students to their dream universities abroad.')

@section('content')
<!-- About Hero -->
    <section class="relative pt-40 pb-20 bg-[#0b1b3d] font-sans overflow-hidden text-center">
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">About <span class="text-[#c6181b]">Euro World</span></h1>
            <p class="text-gray-300 max-w-2xl mx-auto">Your trusted partner in navigating the journey to world-class education in Europe and beyond.</p>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-[#0b1b3d] mb-6">Our Mission</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">At Euro World Education, our mission is to empower students by providing transparent, ethical, and comprehensive guidance for studying abroad. We believe that global education transforms lives, and we strive to make this transformation accessible to everyone.</p>
                    <h2 class="text-3xl font-bold text-[#0b1b3d] mb-6">Our Vision</h2>
                    <p class="text-gray-600 leading-relaxed">To be the most trusted educational consultancy globally, recognized for our commitment to student success and our extensive network of top-tier university partnerships.</p>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Team" class="rounded-xl shadow-2xl">
                    <div class="absolute -bottom-6 -left-6 bg-[#c6181b] text-white p-6 rounded-xl shadow-xl">
                        <div class="text-3xl font-bold mb-1">10+</div>
                        <div class="text-sm font-semibold">Years of Trust</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
