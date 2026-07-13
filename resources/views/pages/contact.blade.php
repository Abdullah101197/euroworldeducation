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
    <section class="py-20 bg-slate-50 font-sans">
        <div class="container mx-auto px-6">
            @php
                $rawWaContact = $global_settings['site_whatsapp'] ?? ($global_settings['site_phone'] ?? '923000000000');
                $cleanWaContact = preg_replace('/[^0-9]/', '', $rawWaContact);
                if (empty($cleanWaContact)) {
                    $cleanWaContact = '923000000000';
                }
            @endphp

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-stretch max-w-6xl mx-auto">
                <!-- Left Column: Premium Dark Advisory Card -->
                <div class="lg:col-span-5 bg-gradient-to-br from-[#0b1b3d] via-[#0f2452] to-[#142e6b] text-white p-8 sm:p-10 rounded-[32px] shadow-xl relative overflow-hidden flex flex-col justify-between border border-white/10">
                    <!-- Decorative background blur -->
                    <div class="absolute -right-16 -top-16 w-64 h-64 bg-red-600/15 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="absolute -left-16 -bottom-16 w-64 h-64 bg-emerald-500/15 rounded-full blur-3xl pointer-events-none"></div>

                    <div class="relative z-10 space-y-6">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 border border-white/15 text-emerald-400 text-xs font-bold backdrop-blur-md">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            Admissions Team Online
                        </div>
                        <h2 class="text-3xl sm:text-4xl font-black tracking-tight leading-tight">
                            Start Your European Journey Today.
                        </h2>
                        <p class="text-slate-300 text-sm leading-relaxed font-normal">
                            Skip the waiting room! Use our 30-second eligibility check on the right to get evaluated by a senior counselor instantly via WhatsApp.
                        </p>
                    </div>

                    <!-- Contact Details Info Below -->
                    <div class="relative z-10 space-y-5 pt-10 border-t border-white/10 mt-8">
                        <div class="flex items-center gap-4">
                            <div class="w-11 h-11 rounded-2xl bg-white/10 flex items-center justify-center text-emerald-400 shrink-0 backdrop-blur-sm border border-white/10">
                                <i class="fa-brands fa-whatsapp text-xl"></i>
                            </div>
                            <div>
                                <span class="block text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Direct WhatsApp</span>
                                <span class="text-sm font-bold text-white">{{ $global_settings['site_whatsapp'] ?? ($global_settings['site_phone'] ?? '+92 300 000 0000') }}</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-11 h-11 rounded-2xl bg-white/10 flex items-center justify-center text-blue-300 shrink-0 backdrop-blur-sm border border-white/10">
                                <i class="fa-solid fa-phone text-base"></i>
                            </div>
                            <div>
                                <span class="block text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Phone Hotline</span>
                                <span class="text-sm font-bold text-white">{{ $global_settings['site_phone'] ?? '+1 234 567 8900' }}</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-11 h-11 rounded-2xl bg-white/10 flex items-center justify-center text-amber-300 shrink-0 backdrop-blur-sm border border-white/10">
                                <i class="fa-solid fa-envelope text-base"></i>
                            </div>
                            <div>
                                <span class="block text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Email Support</span>
                                <span class="text-sm font-bold text-white">{{ $global_settings['site_email'] ?? 'info@euroworldeducation.com' }}</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 pt-1">
                            <div class="w-11 h-11 rounded-2xl bg-white/10 flex items-center justify-center text-red-400 shrink-0 backdrop-blur-sm border border-white/10 mt-0.5">
                                <i class="fa-solid fa-location-dot text-base"></i>
                            </div>
                            <div>
                                <span class="block text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Office Location</span>
                                <span class="text-xs font-medium text-slate-300 leading-snug block mt-0.5">{!! nl2br(e($global_settings['site_address'] ?? '123 Education Boulevard, City Center, Karachi 10001')) !!}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Ultra-Clean & Simple 30-Sec Assessment Form -->
                <div class="lg:col-span-7 bg-white p-8 sm:p-12 rounded-[32px] shadow-xl border border-slate-200/70 relative" x-data="{ mode: 'whatsapp' }">
                    
                    <!-- MODE 1: SIMPLE WHATSAPP ASSESSMENT -->
                    <div x-show="mode === 'whatsapp'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                        <!-- Friendly Form Header -->
                        <div class="flex items-start justify-between gap-4 mb-8">
                            <div>
                                <div class="inline-flex items-center gap-2 text-[#25D366] font-extrabold text-xs uppercase tracking-wider bg-emerald-50 px-3 py-1 rounded-full mb-2">
                                    <i class="fa-brands fa-whatsapp text-sm"></i> Quick Eligibility Check
                                </div>
                                <h3 class="text-2xl sm:text-3xl font-black text-[#0b1b3d] tracking-tight">Tell us about your profile</h3>
                                <p class="text-slate-500 text-xs sm:text-sm mt-1 font-normal">We’ll format your details automatically and open WhatsApp ready to send.</p>
                            </div>
                        </div>

                        <form id="whatsapp-assessment-form" onsubmit="submitWhatsAppAssessment(event, '{{ $cleanWaContact }}')" class="space-y-4 sm:space-y-5">
                            
                            <!-- Row 1: Full Name & DOB -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-600 mb-1.5 flex items-center gap-1.5">
                                        <i class="fa-regular fa-user text-slate-400"></i> Full Name <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="wa_full_name" required placeholder="e.g. Abdullah Khan" class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200/80 rounded-2xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] focus:ring-4 focus:ring-[#25D366]/10 transition-all text-slate-800 placeholder:text-slate-400">
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-600 mb-1.5 flex items-center gap-1.5">
                                        <i class="fa-regular fa-calendar text-slate-400"></i> Date of Birth <span class="text-red-500">*</span>
                                    </label>
                                    <input type="date" id="wa_dob" required class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200/80 rounded-2xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] focus:ring-4 focus:ring-[#25D366]/10 transition-all text-slate-800">
                                </div>
                            </div>

                            <!-- Row 2: Qualification & CGPA/Marks -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-600 mb-1.5 flex items-center gap-1.5">
                                        <i class="fa-solid fa-graduation-cap text-slate-400"></i> Last Qualification / Degree <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="wa_qualification" required placeholder="e.g. BSCS / FSC Pre-Engineering" class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200/80 rounded-2xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] focus:ring-4 focus:ring-[#25D366]/10 transition-all text-slate-800 placeholder:text-slate-400">
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-600 mb-1.5 flex items-center gap-1.5">
                                        <i class="fa-solid fa-chart-pie text-slate-400"></i> CGPA / Percentage Marks <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="wa_cgpa" required placeholder="e.g. 3.4 / 4.0 or 85%" class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200/80 rounded-2xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] focus:ring-4 focus:ring-[#25D366]/10 transition-all text-slate-800 placeholder:text-slate-400">
                                </div>
                            </div>

                            <!-- Row 3: Interested Country & Intake -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-600 mb-1.5 flex items-center gap-1.5">
                                        <i class="fa-solid fa-globe text-slate-400"></i> Interested Country <span class="text-red-500">*</span>
                                    </label>
                                    <select id="wa_interest" required class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200/80 rounded-2xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] focus:ring-4 focus:ring-[#25D366]/10 transition-all text-slate-800">
                                        <option value="">Select Destination</option>
                                        <option value="Italy 🇮🇹 (DSU / Merit Scholarships)">Italy 🇮🇹 (DSU / Merit Scholarships)</option>
                                        <option value="Germany 🇩🇪 (Tuition-Free Public Univ.)">Germany 🇩🇪 (Tuition-Free Public Univ.)</option>
                                        <option value="United Kingdom 🇬🇧 (Russell Group)">United Kingdom 🇬🇧 (Russell Group)</option>
                                        <option value="France 🇫🇷 (Public & Private Univ.)">France 🇫🇷 (Public & Private Univ.)</option>
                                        <option value="Hungary 🇭🇺 (Stipendium Hungaricum)">Hungary 🇭🇺 (Stipendium Hungaricum)</option>
                                        <option value="Other / General Study Advice ✨">Other / General Study Advice ✨</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-600 mb-1.5 flex items-center gap-1.5">
                                        <i class="fa-regular fa-clock text-slate-400"></i> Target Intake <span class="text-red-500">*</span>
                                    </label>
                                    <select id="wa_intake" required class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200/80 rounded-2xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] focus:ring-4 focus:ring-[#25D366]/10 transition-all text-slate-800">
                                        <option value="">Select Target Year/Intake</option>
                                        <option value="Fall 2026 (September / October)">Fall 2026 (September / October)</option>
                                        <option value="Spring 2027 (January / February)">Spring 2027 (January / February)</option>
                                        <option value="Fall 2027 (September / October)">Fall 2027 (September / October)</option>
                                        <option value="As soon as possible 🚀">As soon as possible 🚀</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Row 4: Any Specific Note / IELTS (Optional, clean single/two line) -->
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-1.5 flex items-center gap-1.5">
                                    <i class="fa-regular fa-message text-slate-400"></i> Any questions or IELTS/PTE score? <span class="text-slate-400 font-normal">(Optional)</span>
                                </label>
                                <input type="text" id="wa_notes" placeholder="e.g. IELTS 6.5, interested in Master in Data Science..." class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200/80 rounded-2xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] focus:ring-4 focus:ring-[#25D366]/10 transition-all text-slate-800 placeholder:text-slate-400">
                            </div>

                            <!-- Big Vibrant Submit Button -->
                            <div class="pt-3">
                                <button type="submit" class="w-full bg-[#25D366] hover:bg-[#1ebe5d] text-white font-black py-4 px-6 rounded-2xl shadow-xl hover:shadow-2xl hover:shadow-[#25D366]/30 transition-all duration-300 flex items-center justify-center gap-3 text-base sm:text-lg transform hover:-translate-y-0.5 group">
                                    <i class="fa-brands fa-whatsapp text-2xl group-hover:scale-110 transition-transform"></i>
                                    <span>Send Details to WhatsApp</span>
                                </button>
                                <p class="text-center text-[11px] text-slate-400 mt-2.5 font-medium">
                                    🔒 Your profile opens directly in your WhatsApp app or browser. No spam.
                                </p>
                            </div>
                        </form>

                        <!-- Switch to Email link -->
                        <div class="mt-8 pt-6 border-t border-slate-100 text-center">
                            <button type="button" @click="mode = 'email'" class="text-xs font-bold text-slate-500 hover:text-[#0b1b3d] transition-colors inline-flex items-center gap-1.5">
                                <i class="fa-regular fa-envelope"></i> Prefer sending an email message instead? <span class="underline">Click here</span>
                            </button>
                        </div>

                        <!-- JavaScript for WhatsApp Auto-Form Submitting -->
                        <script>
                            function submitWhatsAppAssessment(event, cleanPhone) {
                                event.preventDefault();
                                
                                const fullName = document.getElementById('wa_full_name').value.trim();
                                const dob = document.getElementById('wa_dob').value.trim();
                                const qualification = document.getElementById('wa_qualification').value.trim();
                                const cgpa = document.getElementById('wa_cgpa').value.trim();
                                const interest = document.getElementById('wa_interest').value;
                                const intake = document.getElementById('wa_intake').value;
                                const notes = document.getElementById('wa_notes').value.trim();

                                if (!fullName || !dob || !qualification || !cgpa || !interest || !intake) {
                                    alert('Please fill in all required fields so our counselors can assess your profile correctly!');
                                    return;
                                }

                                // Construct formatted WhatsApp message with neat emojis and line breaks
                                let message = `*🌟 New Student Profile Assessment 🌟*\n\n` +
                                              `*👤 Full Name:* ${fullName}\n` +
                                              `*🎓 Last Degree:* ${qualification}\n` +
                                              `*🎂 Date of Birth:* ${dob}\n` +
                                              `*📊 CGPA / Marks:* ${cgpa}\n` +
                                              `*🌍 Interested Country:* ${interest}\n` +
                                              `*📅 Preferred Intake:* ${intake}\n`;

                                if (notes) {
                                    message += `*💬 Notes / IELTS:* ${notes}\n`;
                                }

                                message += `\n_Sent via Euro World Education Website_`;

                                // Open WhatsApp chat URL
                                const waUrl = `https://wa.me/${cleanPhone}?text=${encodeURIComponent(message)}`;
                                window.open(waUrl, '_blank');
                            }
                        </script>
                    </div>

                    <!-- MODE 2: STANDARD EMAIL FORM -->
                    <div x-show="mode === 'email'" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                        <!-- Header with back button -->
                        <div class="flex items-center justify-between gap-4 mb-6 pb-5 border-b border-slate-100">
                            <div>
                                <h3 class="text-2xl font-black text-[#0b1b3d] tracking-tight">Send Email Message</h3>
                                <p class="text-xs sm:text-sm text-slate-500 mt-0.5">We typically reply to email inquiries within 24 hours.</p>
                            </div>
                            <button type="button" @click="mode = 'whatsapp'" class="px-3 py-1.5 bg-emerald-50 text-[#25D366] hover:bg-emerald-100 font-bold text-xs rounded-xl transition-all shrink-0 flex items-center gap-1.5">
                                <i class="fa-brands fa-whatsapp"></i> Switch to WhatsApp
                            </button>
                        </div>

                        @if (session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-2xl relative mb-6 font-medium text-sm" role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-600 mb-1">First Name <span class="text-red-500">*</span></label>
                                    <input type="text" name="first_name" required placeholder="First Name" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-[#0b1b3d] focus:bg-white transition-colors">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-600 mb-1">Last Name <span class="text-red-500">*</span></label>
                                    <input type="text" name="last_name" required placeholder="Last Name" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-[#0b1b3d] focus:bg-white transition-colors">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-1">Email Address <span class="text-red-500">*</span></label>
                                <input type="email" name="email" required placeholder="your.email@example.com" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-[#0b1b3d] focus:bg-white transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-1">Subject <span class="text-red-500">*</span></label>
                                <input type="text" name="subject" required placeholder="Inquiry Subject" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-[#0b1b3d] focus:bg-white transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-1">Message <span class="text-red-500">*</span></label>
                                <textarea name="message" required placeholder="Write your message here..." rows="4" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-[#0b1b3d] focus:bg-white transition-colors"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-[#0b1b3d] hover:bg-blue-900 text-white font-bold py-3.5 rounded-2xl shadow-lg hover:shadow-xl transition-all">Send Email Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection
