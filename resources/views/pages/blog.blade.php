@extends('layouts.main')

@section('title', 'Study Abroad Blog - Visas, Admissions & Tips')
@section('description', 'Stay updated with the latest news on admissions, visas, scholarships, and university life abroad.')

@section('content')
<!-- Blog Hero -->
    <section class="relative pt-40 pb-20 bg-[#0b1b3d] font-sans overflow-hidden text-center">
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Latest <span class="text-[#c6181b]">Insights</span></h1>
            <p class="text-gray-300 max-w-2xl mx-auto">Stay updated with the latest news on admissions, visas, and university life abroad.</p>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="py-20 bg-light">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover" alt="Blog Post">
                    </div>
                    <div class="p-6">
                        <div class="text-xs text-red-600 font-bold uppercase tracking-wider mb-2">Visas & Policies</div>
                        <h3 class="text-xl font-bold text-[#0b1b3d] mb-3 leading-tight">Navigating the new UK Graduate Route Visa rules in 2026</h3>
                        <p class="text-gray-500 text-sm mb-4 leading-relaxed">Everything you need to know about post-study work opportunities and the latest immigration updates for international students.</p>
                        <span class="text-xs text-gray-400 font-medium">May 15, 2026 • 5 min read</span>
                    </div>
                </article>
                <!-- Article 2 -->
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover" alt="Blog Post">
                    </div>
                    <div class="p-6">
                        <div class="text-xs text-red-600 font-bold uppercase tracking-wider mb-2">Application Tips</div>
                        <h3 class="text-xl font-bold text-[#0b1b3d] mb-3 leading-tight">How to write a winning Statement of Purpose</h3>
                        <p class="text-gray-500 text-sm mb-4 leading-relaxed">Learn the key structural elements and strategies that top university admission committees look for in an SOP.</p>
                        <span class="text-xs text-gray-400 font-medium">May 02, 2026 • 8 min read</span>
                    </div>
                </article>
                <!-- Article 3 -->
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover" alt="Blog Post">
                    </div>
                    <div class="p-6">
                        <div class="text-xs text-red-600 font-bold uppercase tracking-wider mb-2">Scholarships</div>
                        <h3 class="text-xl font-bold text-[#0b1b3d] mb-3 leading-tight">Top 5 Fully Funded European Scholarships for 2027 Intake</h3>
                        <p class="text-gray-500 text-sm mb-4 leading-relaxed">A comprehensive guide to finding and securing the best financial aid packages across public European universities.</p>
                        <span class="text-xs text-gray-400 font-medium">April 28, 2026 • 6 min read</span>
                    </div>
                </article>
            </div>
        </div>
    </section>
    
@endsection
