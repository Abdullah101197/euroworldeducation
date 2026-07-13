@extends('layouts.main')

@section('title', 'Student Success Stories & Testimonials')
@section('description', 'Read real stories from students who achieved their dreams of studying abroad through Euro World.')

@section('content')


    <!-- Stories Hero with Modern Glow -->
    <section class="relative pt-40 pb-24 bg-[#0b1b3d] font-sans overflow-hidden text-center">
        <!-- Subtle Ambient Glows -->
        <div class="absolute top-1/4 left-1/4 w-80 h-80 bg-blue-600/20 rounded-full blur-3xl pointer-events-none -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-10 right-1/4 w-72 h-72 bg-red-600/15 rounded-full blur-3xl pointer-events-none translate-x-1/2"></div>
        <div class="absolute inset-0 bg-[radial-gradient(#ffffff0a_1px,transparent_1px)] [background-size:16px_16px] opacity-40"></div>

        <div class="container mx-auto px-6 relative z-10 max-w-3xl">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 border border-white/15 text-yellow-400 text-xs font-bold uppercase tracking-widest mb-4 backdrop-blur-md">
                <i class="fa-solid fa-star text-yellow-300"></i> Verified Student Journeys
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight">Student <span class="text-[#c6181b]">Success</span></h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto font-light leading-relaxed">Real stories from students who achieved their dreams of studying abroad through Euro World.</p>
        </div>
    </section>

    <!-- Testimonials Grid -->
    <section class="py-20 bg-light">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Story 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100 relative flex flex-col justify-between">
                    <div>
                        <i class="fa-solid fa-quote-left text-4xl text-gray-100 absolute top-6 left-6"></i>
                        <div class="relative z-10">
                            <p class="text-gray-600 italic mb-6">"Euro World made the complex visa and admission process for Italy completely stress-free. Their guidance on the DSU scholarship allowed me to study fully funded. I couldn't have done it without them!"</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 pt-4 border-t border-gray-100 relative z-10">
                        <img src="https://i.pravatar.cc/150?img=11" class="w-14 h-14 rounded-full border-2 border-[#0b1b3d] object-cover">
                        <div>
                            <h4 class="font-bold text-[#0b1b3d]">Hassan Raza</h4>
                            <p class="text-xs text-gray-500">MSc Computer Science, University of Pisa</p>
                        </div>
                    </div>
                </div>
                <!-- Story 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100 relative flex flex-col justify-between">
                    <div>
                        <i class="fa-solid fa-quote-left text-4xl text-gray-100 absolute top-6 left-6"></i>
                        <div class="relative z-10">
                            <p class="text-gray-600 italic mb-6">"The SOP assistance was incredible. They helped me highlight my strengths, and I secured an admission at Politecnico di Milano. A highly professional team that truly cares about every step."</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 pt-4 border-t border-gray-100 relative z-10">
                        <img src="https://i.pravatar.cc/150?img=12" class="w-14 h-14 rounded-full border-2 border-[#0b1b3d] object-cover">
                        <div>
                            <h4 class="font-bold text-[#0b1b3d]">Muhammad Usman</h4>
                            <p class="text-xs text-gray-500">MSc Data Science, Politecnico di Milano</p>
                        </div>
                    </div>
                </div>
                <!-- Story 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100 relative flex flex-col justify-between">
                    <div>
                        <i class="fa-solid fa-quote-left text-4xl text-gray-100 absolute top-6 left-6"></i>
                        <div class="relative z-10">
                            <p class="text-gray-600 italic mb-6">"From university selection to visa interview preparation, Euro World Education Consultants guided me transparently. Securing admission at University of Milan was a dream come true!"</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 pt-4 border-t border-gray-100 relative z-10">
                        <img src="https://i.pravatar.cc/150?img=5" class="w-14 h-14 rounded-full border-2 border-[#0b1b3d] object-cover">
                        <div>
                            <h4 class="font-bold text-[#0b1b3d]">Ayesha Malik</h4>
                            <p class="text-xs text-gray-500">MSc Business Management, University of Milan</p>
                        </div>
                    </div>
                </div>
                <!-- Story 4 -->
                <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100 relative flex flex-col justify-between">
                    <div>
                        <i class="fa-solid fa-quote-left text-4xl text-gray-100 absolute top-6 left-6"></i>
                        <div class="relative z-10">
                            <p class="text-gray-600 italic mb-6">"I wanted to pursue Bioinformatics in Italy and felt overwhelmed by pre-enrollment paperwork. The team handled my documents professionally and ensured I received my visa on time."</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 pt-4 border-t border-gray-100 relative z-10">
                        <img src="https://i.pravatar.cc/150?img=60" class="w-14 h-14 rounded-full border-2 border-[#0b1b3d] object-cover">
                        <div>
                            <h4 class="font-bold text-[#0b1b3d]">Ahmed Khan</h4>
                            <p class="text-xs text-gray-500">MSc Bioinformatics, University of Pavia</p>
                        </div>
                    </div>
                </div>
                <!-- Story 5 -->
                <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100 relative flex flex-col justify-between">
                    <div>
                        <i class="fa-solid fa-quote-left text-4xl text-gray-100 absolute top-6 left-6"></i>
                        <div class="relative z-10">
                            <p class="text-gray-600 italic mb-6">"Studying Psychology at Sapienza University in Rome seemed daunting until I met Euro World's counselors. Their fast WhatsApp communication and 24/7 support made everything seamless."</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 pt-4 border-t border-gray-100 relative z-10">
                        <img src="https://i.pravatar.cc/150?img=47" class="w-14 h-14 rounded-full border-2 border-[#0b1b3d] object-cover">
                        <div>
                            <h4 class="font-bold text-[#0b1b3d]">Zainab Fatima</h4>
                            <p class="text-xs text-gray-500">MSc Psychology, Sapienza University</p>
                        </div>
                    </div>
                </div>
                <!-- Story 6 -->
                <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100 relative flex flex-col justify-between">
                    <div>
                        <i class="fa-solid fa-quote-left text-4xl text-gray-100 absolute top-6 left-6"></i>
                        <div class="relative z-10">
                            <p class="text-gray-600 italic mb-6">"My experience applying for Romania through Euro World was exceptional. They managed my admission letter from University of Bucharest and guided me step-by-step through the visa file."</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 pt-4 border-t border-gray-100 relative z-10">
                        <img src="https://i.pravatar.cc/150?img=13" class="w-14 h-14 rounded-full border-2 border-[#0b1b3d] object-cover">
                        <div>
                            <h4 class="font-bold text-[#0b1b3d]">Bilal Ahmed</h4>
                            <p class="text-xs text-gray-500">MSc Business Administration, University of Bucharest</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
