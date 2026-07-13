@extends('layouts.main')

@section('title', 'Euro World Education | Contact & Admissions Center')
@section('description', 'Get verified guidance for top European universities. Speak directly with an expert via WhatsApp or send us an email inquiry.')

@section('content')
    <!-- Contact Hero -->
    <section class="relative pt-36 pb-16 bg-[#0b1b3d] font-sans text-center text-white border-b border-white/10">
        <div class="container mx-auto px-6 relative z-10 max-w-3xl">
            <span class="inline-block px-3.5 py-1.5 rounded-full bg-white/10 border border-white/15 text-emerald-400 text-xs font-bold uppercase tracking-wider mb-3">Official Support & Advisory</span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-black tracking-tight mb-4">Contact Our Admissions Center</h1>
            <p class="text-slate-300 text-sm sm:text-base font-normal leading-relaxed">Have questions about university admissions, visas, or scholarships in Europe? Connect with our counselors instantly via WhatsApp or send us a formal message.</p>
        </div>
    </section>

    <!-- Main Contact Section (Unified Single Card) -->
    <section class="py-16 bg-slate-50 font-sans">
        <div class="container mx-auto px-6">
            @php
                $rawWaContact = $global_settings['site_whatsapp'] ?? ($global_settings['site_phone'] ?? '923000000000');
                $cleanWaContact = preg_replace('/[^0-9]/', '', $rawWaContact);
                if (empty($cleanWaContact)) {
                    $cleanWaContact = '923000000000';
                }
            @endphp

            <div class="max-w-5xl mx-auto bg-white rounded-[28px] shadow-2xl border border-slate-200/80 overflow-hidden grid grid-cols-1 md:grid-cols-12 items-stretch">
                
                <!-- Left 5 Columns: Clean Dark Contact Information Panel -->
                <div class="md:col-span-5 bg-[#0b1b3d] text-white p-8 sm:p-10 flex flex-col justify-between relative border-r border-slate-200/10">
                    <div class="space-y-6">
                        <div>
                            <h2 class="text-2xl font-black tracking-tight text-white">Direct Contact</h2>
                            <p class="text-slate-300 text-xs sm:text-sm mt-1.5 leading-relaxed">Reach out directly to our head office or talk with an evaluation specialist right now.</p>
                        </div>

                        <div class="space-y-6 pt-4">
                            <!-- WhatsApp / Phone -->
                            <div class="flex items-start gap-4 pb-5 border-b border-white/10">
                                <div class="w-10 h-10 rounded-xl bg-emerald-500/15 text-emerald-400 flex items-center justify-center shrink-0 border border-emerald-500/20 mt-0.5">
                                    <i class="fa-brands fa-whatsapp text-lg"></i>
                                </div>
                                <div>
                                    <span class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider">WhatsApp & Hotline</span>
                                    <span class="text-sm font-bold text-white block mt-0.5">{{ $global_settings['site_whatsapp'] ?? ($global_settings['site_phone'] ?? '+92 300 000 0000') }}</span>
                                    <span class="text-[11px] text-emerald-400/90 font-medium mt-0.5 block">Online • Instant response</span>
                                </div>
                            </div>

                            <!-- Head Office Address -->
                            <div class="flex items-start gap-4 pb-5 border-b border-white/10">
                                <div class="w-10 h-10 rounded-xl bg-red-500/15 text-red-400 flex items-center justify-center shrink-0 border border-red-500/20 mt-0.5">
                                    <i class="fa-solid fa-location-dot text-base"></i>
                                </div>
                                <div>
                                    <span class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider">Head Office</span>
                                    <span class="text-xs font-medium text-slate-200 leading-relaxed block mt-0.5">{!! nl2br(e($global_settings['site_address'] ?? 'Kalma Chowk, Lahore, Pakistan')) !!}</span>
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-blue-500/15 text-blue-400 flex items-center justify-center shrink-0 border border-blue-500/20 mt-0.5">
                                    <i class="fa-solid fa-envelope text-base"></i>
                                </div>
                                <div>
                                    <span class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider">Email Address</span>
                                    <span class="text-xs font-medium text-slate-200 block mt-0.5">{{ $global_settings['site_email'] ?? 'info@euroworldeducation.com' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-8 mt-8 border-t border-white/10 flex items-center gap-3 text-slate-400 text-xs font-medium">
                        <i class="fa-solid fa-shield-halved text-emerald-400 text-sm"></i>
                        <span>Verified European Education Counselors</span>
                    </div>
                </div>

                <!-- Right 7 Columns: Ultra-Clean 4-Step Assessment & Contact Form -->
                <div class="md:col-span-7 p-8 sm:p-12 bg-white flex flex-col justify-center" x-data="{ mode: 'whatsapp' }">
                    
                    <!-- Form Switcher Pill -->
                    <div class="flex p-1 bg-slate-100 rounded-xl mb-8 border border-slate-200/60 w-fit sm:w-full max-w-md mx-auto sm:mx-0">
                        <button type="button" @click="mode = 'whatsapp'" :class="mode === 'whatsapp' ? 'bg-[#25D366] text-white shadow font-bold' : 'text-slate-600 hover:text-slate-900 font-semibold'" class="flex-1 py-2.5 px-4 rounded-lg text-xs sm:text-sm transition-all flex items-center justify-center gap-2 whitespace-nowrap">
                            <i class="fa-brands fa-whatsapp text-base"></i> WhatsApp Evaluation
                        </button>
                        <button type="button" @click="mode = 'email'" :class="mode === 'email' ? 'bg-[#0b1b3d] text-white shadow font-bold' : 'text-slate-600 hover:text-slate-900 font-semibold'" class="flex-1 py-2.5 px-4 rounded-lg text-xs sm:text-sm transition-all flex items-center justify-center gap-2 whitespace-nowrap">
                            <i class="fa-regular fa-envelope text-base"></i> Standard Email
                        </button>
                    </div>

                    <!-- MODE 1: SIMPLE WHATSAPP EVALUATION -->
                    <div x-show="mode === 'whatsapp'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0">
                        <div class="mb-6">
                            <h3 class="text-2xl font-black text-[#0b1b3d] tracking-tight">Quick Eligibility Check</h3>
                            <p class="text-slate-500 text-xs sm:text-sm mt-1">Fill in 4 simple details below to start an instant evaluation chat on WhatsApp.</p>
                        </div>

                        <form id="whatsapp-assessment-form" onsubmit="submitWhatsAppAssessment(event, '{{ $cleanWaContact }}')" class="space-y-4">
                            <!-- Full Name & DOB -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Full Name <span class="text-red-500">*</span></label>
                                    <input type="text" id="wa_full_name" required placeholder="Enter your full name" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] transition-all text-slate-800 placeholder:text-slate-400">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Date of Birth <span class="text-red-500">*</span></label>
                                    <input type="date" id="wa_dob" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] transition-all text-slate-800">
                                </div>
                            </div>

                            <!-- Combined Qualification & Marks (Simple & Human-friendly) -->
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">Last Degree & CGPA / Marks <span class="text-red-500">*</span></label>
                                <input type="text" id="wa_qualification_marks" required placeholder="e.g. FSC Pre-Engineering (85%) or BSCS (3.4 CGPA)" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] transition-all text-slate-800 placeholder:text-slate-400">
                            </div>

                            <!-- Target Country & Intake -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Interested Country <span class="text-red-500">*</span></label>
                                    <select id="wa_interest" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] transition-all text-slate-800">
                                        <option value="">Select Destination</option>
                                        <option value="Italy (Fully Funded DSU Scholarships)">Italy (Fully Funded DSU Scholarships)</option>
                                        <option value="Germany (Tuition-Free Public Univ.)">Germany (Tuition-Free Public Univ.)</option>
                                        <option value="United Kingdom (Russell Group)">United Kingdom (Russell Group)</option>
                                        <option value="France (Public / Private Univ.)">France (Public / Private Univ.)</option>
                                        <option value="Hungary (Stipendium Hungaricum)">Hungary (Stipendium Hungaricum)</option>
                                        <option value="Other / General Study Advice">Other / General Study Advice</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Preferred Intake <span class="text-red-500">*</span></label>
                                    <select id="wa_intake" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] transition-all text-slate-800">
                                        <option value="">Select Target Intake</option>
                                        <option value="Fall 2026 (September / October)">Fall 2026 (September / October)</option>
                                        <option value="Spring 2027 (January / February)">Spring 2027 (January / February)</option>
                                        <option value="Fall 2027 (September / October)">Fall 2027 (September / October)</option>
                                        <option value="Earliest Possible Available">Earliest Possible Available</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-3">
                                <button type="submit" class="w-full bg-[#25D366] hover:bg-[#1ebe5d] text-white font-bold py-3.5 px-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center gap-2.5 text-base transform hover:-translate-y-0.5">
                                    <i class="fa-brands fa-whatsapp text-2xl"></i> Start WhatsApp Evaluation
                                </button>
                                <p class="text-center text-[11px] text-slate-400 mt-2 font-medium">
                                    🔒 Pre-fills your structured profile directly into WhatsApp. Fast and secure.
                                </p>
                            </div>
                        </form>

                        <script>
                            function submitWhatsAppAssessment(event, cleanPhone) {
                                event.preventDefault();
                                
                                const fullName = document.getElementById('wa_full_name').value.trim();
                                const dob = document.getElementById('wa_dob').value.trim();
                                const qualMarks = document.getElementById('wa_qualification_marks').value.trim();
                                const interest = document.getElementById('wa_interest').value;
                                const intake = document.getElementById('wa_intake').value;

                                if (!fullName || !dob || !qualMarks || !interest || !intake) {
                                    alert('Please fill in all required fields to proceed.');
                                    return;
                                }

                                let message = `*🌟 New Student Profile Assessment 🌟*\n\n` +
                                              `*👤 Full Name:* ${fullName}\n` +
                                              `*🎂 Date of Birth:* ${dob}\n` +
                                              `*🎓 Qualification & Marks:* ${qualMarks}\n` +
                                              `*🌍 Interested Country:* ${interest}\n` +
                                              `*📅 Preferred Intake:* ${intake}\n\n` +
                                              `_Sent via Euro World Education Website_`;

                                const waUrl = `https://wa.me/${cleanPhone}?text=${encodeURIComponent(message)}`;
                                window.open(waUrl, '_blank');
                            }
                        </script>
                    </div>

                    <!-- MODE 2: STANDARD EMAIL FORM -->
                    <div x-show="mode === 'email'" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0">
                        <div class="mb-6">
                            <h3 class="text-2xl font-black text-[#0b1b3d] tracking-tight">Send an Email Message</h3>
                            <p class="text-slate-500 text-xs sm:text-sm mt-1">Prefer traditional email? Send your query directly to our admissions team.</p>
                        </div>

                        @if (session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl relative mb-6 font-medium text-sm" role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">First Name <span class="text-red-500">*</span></label>
                                    <input type="text" name="first_name" required placeholder="First Name" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-[#0b1b3d] focus:bg-white transition-colors">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Last Name <span class="text-red-500">*</span></label>
                                    <input type="text" name="last_name" required placeholder="Last Name" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-[#0b1b3d] focus:bg-white transition-colors">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Email Address <span class="text-red-500">*</span></label>
                                <input type="email" name="email" required placeholder="your.email@example.com" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-[#0b1b3d] focus:bg-white transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Subject <span class="text-red-500">*</span></label>
                                <input type="text" name="subject" required placeholder="Inquiry Subject" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-[#0b1b3d] focus:bg-white transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Message <span class="text-red-500">*</span></label>
                                <textarea name="message" required placeholder="Write your message here..." rows="4" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-[#0b1b3d] focus:bg-white transition-colors"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-[#0b1b3d] hover:bg-blue-900 text-white font-bold py-3.5 rounded-xl shadow-md hover:shadow-lg transition-all">Send Email Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection      </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection
