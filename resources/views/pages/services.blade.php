@extends('layouts.main')

@section('title', 'Our Services - Admissions & Visa Processing | Euro World')
@section('description', 'Comprehensive study abroad services including university admissions, student visa processing, SOP writing, and test preparation.')

@section('content')
<!-- Services Hero -->
    <section class="relative pt-40 pb-20 bg-[#0b1b3d] font-sans overflow-hidden text-center">
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Our <span class="text-[#c6181b]">Services</span></h1>
            <p class="text-gray-300 max-w-2xl mx-auto">Comprehensive support for every step of your international education journey.</p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20 bg-light">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:-translate-y-2 transition-transform duration-300 border border-gray-100">
                    <div class="w-14 h-14 bg-red-50 text-red-600 rounded-lg flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0b1b3d] mb-4">Admissions Processing</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">We help you select the right course and university, and manage the entire application process to ensure the highest chance of acceptance.</p>
                </div>
                <!-- Service 2 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:-translate-y-2 transition-transform duration-300 border border-gray-100">
                    <div class="w-14 h-14 bg-red-50 text-red-600 rounded-lg flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-passport"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0b1b3d] mb-4">Visa Assistance</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Expert guidance on visa requirements, application procedures, and interview preparation for a hassle-free experience.</p>
                </div>
                <!-- Service 3 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:-translate-y-2 transition-transform duration-300 border border-gray-100">
                    <div class="w-14 h-14 bg-red-50 text-red-600 rounded-lg flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-file-pen"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0b1b3d] mb-4">SOP & Resume Writing</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Professional assistance in crafting compelling Statements of Purpose and Resumes that stand out to university admission committees.</p>
                </div>
            </div>
        </div>
    </section>
    
@endsection
