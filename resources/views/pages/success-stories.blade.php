@extends('layouts.main')

@section('title', 'Student Success Stories & Testimonials')
@section('description', 'Read real stories from students who achieved their dreams of studying abroad through Euro World.')

@section('content')


    <!-- Stories Hero -->
    <section class="relative pt-40 pb-20 bg-[#0b1b3d] font-sans overflow-hidden text-center">
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Student <span class="text-[#c6181b]">Success</span></h1>
            <p class="text-gray-300 max-w-2xl mx-auto">Real stories from students who achieved their dreams of studying abroad through Euro World.</p>
        </div>
    </section>

    <!-- Testimonials Grid -->
    <section class="py-20 bg-light">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Story 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100 relative">
                    <i class="fa-solid fa-quote-left text-4xl text-gray-100 absolute top-6 left-6"></i>
                    <div class="relative z-10">
                        <p class="text-gray-600 italic mb-6">"Euro World made the complex visa and admission process for Italy completely stress-free. Their guidance on the DSU scholarship allowed me to study fully funded. I couldn't have done it without them!"</p>
                        <div class="flex items-center gap-4">
                            <img src="https://i.pravatar.cc/150?img=11" class="w-14 h-14 rounded-full border-2 border-[#0b1b3d] object-cover">
                            <div>
                                <h4 class="font-bold text-[#0b1b3d]">Hassan Raza</h4>
                                <p class="text-xs text-gray-500">MSc Computer Science, University of Pisa</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Story 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100 relative">
                    <i class="fa-solid fa-quote-left text-4xl text-gray-100 absolute top-6 left-6"></i>
                    <div class="relative z-10">
                        <p class="text-gray-600 italic mb-6">"The SOP assistance was incredible. They helped me highlight my strengths, and I secured an admission at Politecnico di Milano. A highly professional team that truly cares."</p>
                        <div class="flex items-center gap-4">
                            <img src="https://i.pravatar.cc/150?img=12" class="w-14 h-14 rounded-full border-2 border-[#0b1b3d] object-cover">
                            <div>
                                <h4 class="font-bold text-[#0b1b3d]">Muhammad Usman</h4>
                                <p class="text-xs text-gray-500">MSc Data Science, Politecnico di Milano</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
