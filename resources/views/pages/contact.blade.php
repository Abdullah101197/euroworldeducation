@extends('layouts.main')

@section('title', 'Euro World Education | Top Study Abroad Consultants')
@section('description', 'Euro World Education empowers students to achieve global success through quality education in top European universities.')

@section('content')
<!-- Contact Hero -->
    <section class="relative pt-40 pb-20 bg-[#0b1b3d] font-sans overflow-hidden text-center">
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Contact <span class="text-[#c6181b]">Us</span></h1>
            <p class="text-gray-300 max-w-2xl mx-auto">Get in touch with our experts today and start your journey towards studying abroad.</p>
        </div>
    </section>

    <!-- Contact Form & Details -->
    <section class="py-20 bg-light">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <!-- Contact Details -->
                <div>
                    <h2 class="text-3xl font-bold text-[#0b1b3d] mb-8">Get In Touch</h2>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-red-50 text-red-600 rounded-full flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#0b1b3d] mb-1">Head Office</h4>
                                <p class="text-gray-500 text-sm">{!! nl2br(e($global_settings['site_address'] ?? '123 Education Boulevard, City Center, Karachi 10001')) !!}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-red-50 text-red-600 rounded-full flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#0b1b3d] mb-1">Phone</h4>
                                <p class="text-gray-500 text-sm">{{ $global_settings['site_phone'] ?? '+1 234 567 8900' }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-red-50 text-red-600 rounded-full flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#0b1b3d] mb-1">Email</h4>
                                <p class="text-gray-500 text-sm">{{ $global_settings['site_email'] ?? 'info@euroworld.edu' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-xl shadow-xl border border-gray-100">
                    <h3 class="text-2xl font-bold text-[#0b1b3d] mb-6">Send us a message</h3>
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="text" name="first_name" required placeholder="First Name" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-red-600 transition-colors">
                            <input type="text" name="last_name" required placeholder="Last Name" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-red-600 transition-colors">
                        </div>
                        <input type="email" name="email" required placeholder="Email Address" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-red-600 transition-colors">
                        <input type="text" name="subject" required placeholder="Subject" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-red-600 transition-colors">
                        <textarea name="message" required placeholder="Your Message" rows="4" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-red-600 transition-colors"></textarea>
                        <button type="submit" class="w-full bg-[#c6181b] text-white font-bold py-3 rounded-lg hover:bg-red-800 transition-colors shadow-md">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
@endsection
