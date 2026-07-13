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
    <section class="py-20 bg-light font-sans">
        <div class="container mx-auto px-6">
            @php
                $rawWaContact = $global_settings['site_whatsapp'] ?? ($global_settings['site_phone'] ?? '923000000000');
                $cleanWaContact = preg_replace('/[^0-9]/', '', $rawWaContact);
                if (empty($cleanWaContact)) {
                    $cleanWaContact = '923000000000';
                }
            @endphp

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <!-- Left Column: Contact Details & Info -->
                <div class="lg:col-span-5 space-y-8">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#c6181b] bg-red-50 px-3 py-1.5 rounded-full border border-red-100 inline-block mb-3">Direct Support</span>
                        <h2 class="text-3xl md:text-4xl font-black text-[#0b1b3d] tracking-tight">Get In Touch With Our Counselors</h2>
                        <p class="text-slate-600 text-sm md:text-base mt-2 leading-relaxed">Whether you want quick guidance via WhatsApp or a formal email inquiry, our team is ready 24/7 to help you secure your future in Europe.</p>
                    </div>

                    <div class="space-y-5">
                        <!-- WhatsApp Direct Card (New & Featured) -->
                        <div class="flex items-start gap-4 p-5 bg-emerald-50/80 border border-emerald-200/80 rounded-2xl shadow-sm hover:shadow-md transition-all">
                            <div class="w-12 h-12 bg-[#25D366] text-white rounded-xl flex items-center justify-center shrink-0 shadow-md">
                                <i class="fa-brands fa-whatsapp text-2xl"></i>
                            </div>
                            <div class="grow">
                                <div class="flex items-center justify-between">
                                    <h4 class="font-extrabold text-emerald-950 text-base">WhatsApp Live Chat</h4>
                                    <span class="text-[10px] font-black bg-emerald-600 text-white px-2 py-0.5 rounded-full uppercase">Fastest Response</span>
                                </div>
                                <p class="text-emerald-800 text-sm font-semibold mt-0.5">{{ $global_settings['site_whatsapp'] ?? ($global_settings['site_phone'] ?? '+92 300 000 0000') }}</p>
                                <p class="text-emerald-700/80 text-xs mt-1">Fill out the assessment form on the right for instant eligibility screening via WhatsApp.</p>
                            </div>
                        </div>

                        <!-- Head Office -->
                        <div class="flex items-start gap-4 p-5 bg-white border border-slate-200/70 rounded-2xl shadow-sm">
                            <div class="w-12 h-12 bg-red-50 text-[#c6181b] rounded-xl flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-location-dot text-lg"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#0b1b3d] text-base mb-1">Head Office</h4>
                                <p class="text-slate-500 text-sm leading-relaxed">{!! nl2br(e($global_settings['site_address'] ?? '123 Education Boulevard, City Center, Karachi 10001')) !!}</p>
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="flex items-start gap-4 p-5 bg-white border border-slate-200/70 rounded-2xl shadow-sm">
                            <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-phone text-lg"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#0b1b3d] text-base mb-1">Phone Number</h4>
                                <p class="text-slate-500 text-sm font-medium">{{ $global_settings['site_phone'] ?? '+1 234 567 8900' }}</p>
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div class="flex items-start gap-4 p-5 bg-white border border-slate-200/70 rounded-2xl shadow-sm">
                            <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-xl flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-envelope text-lg"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#0b1b3d] text-base mb-1">Email Address</h4>
                                <p class="text-slate-500 text-sm font-medium">{{ $global_settings['site_email'] ?? 'info@euroworldeducation.com' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Interactive Assessment & Contact Forms -->
                <div class="lg:col-span-7 bg-white p-6 sm:p-10 rounded-3xl shadow-2xl border border-slate-200/80 relative" x-data="{ activeForm: 'whatsapp' }">
                    <!-- Form Switcher Tabs -->
                    <div class="flex p-1.5 bg-slate-100 rounded-2xl mb-8 border border-slate-200/60">
                        <button type="button" @click="activeForm = 'whatsapp'" :class="activeForm === 'whatsapp' ? 'bg-[#25D366] text-white shadow-md font-extrabold' : 'text-slate-600 hover:text-slate-900 font-bold'" class="flex-1 py-3 px-4 rounded-xl text-xs sm:text-sm transition-all flex items-center justify-center gap-2">
                            <i class="fa-brands fa-whatsapp text-base"></i> WhatsApp Assessment Form
                            <span class="hidden sm:inline text-[10px] bg-white/20 px-2 py-0.5 rounded-full uppercase">Instant</span>
                        </button>
                        <button type="button" @click="activeForm = 'email'" :class="activeForm === 'email' ? 'bg-[#0b1b3d] text-white shadow-md font-extrabold' : 'text-slate-600 hover:text-slate-900 font-bold'" class="flex-1 py-3 px-4 rounded-xl text-xs sm:text-sm transition-all flex items-center justify-center gap-2">
                            <i class="fa-regular fa-envelope text-base"></i> Standard Email Inquiry
                        </button>
                    </div>

                    <!-- TAB 1: WhatsApp Instant Eligibility Form -->
                    <div x-show="activeForm === 'whatsapp'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                        <div class="mb-6 pb-5 border-b border-slate-100">
                            <div class="flex items-center gap-2.5 text-emerald-600 font-extrabold text-sm mb-1">
                                <i class="fa-brands fa-whatsapp text-xl"></i> Quick Student Assessment via WhatsApp
                            </div>
                            <p class="text-xs text-slate-500 leading-relaxed">Fill in your academic details below. When you click send, it will automatically format your profile and open a direct WhatsApp chat with our admissions team!</p>
                        </div>

                        <form id="whatsapp-assessment-form" onsubmit="submitWhatsAppAssessment(event, '{{ $cleanWaContact }}')" class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Full Name -->
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Full Name <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none"><i class="fa-regular fa-user text-sm"></i></span>
                                        <input type="text" id="wa_full_name" required placeholder="e.g. Abdullah Khan" class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 transition-all text-slate-800">
                                    </div>
                                </div>

                                <!-- Date of Birth -->
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Date of Birth <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none"><i class="fa-regular fa-calendar text-sm"></i></span>
                                        <input type="date" id="wa_dob" required class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 transition-all text-slate-800">
                                    </div>
                                </div>

                                <!-- Last Qualification -->
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Last Qualification / Degree <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none"><i class="fa-solid fa-graduation-cap text-sm"></i></span>
                                        <input type="text" id="wa_qualification" required placeholder="e.g. FSC / Bachelor of CS / A-Levels" class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 transition-all text-slate-800">
                                    </div>
                                </div>

                                <!-- CGPA or Marks -->
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">CGPA / Percentage Marks <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none"><i class="fa-solid fa-chart-line text-sm"></i></span>
                                        <input type="text" id="wa_cgpa" required placeholder="e.g. 3.56 / 4.00 or 84%" class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 transition-all text-slate-800">
                                    </div>
                                </div>

                                <!-- Interest to Apply (Destination / Program) -->
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Interested Country / Course <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none"><i class="fa-solid fa-globe text-sm"></i></span>
                                        <select id="wa_interest" required class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 transition-all text-slate-800">
                                            <option value="">Select Destination / Interest</option>
                                            <option value="Italy (Fully Funded DSU / Merit Scholarships)">Italy (Fully Funded DSU / Merit Scholarships)</option>
                                            <option value="France (Public / Private Universities)">France (Public / Private Universities)</option>
                                            <option value="Germany (Tuition-Free Public Universities)">Germany (Tuition-Free Public Universities)</option>
                                            <option value="United Kingdom (Russell Group & Partner Universities)">United Kingdom (Russell Group & Partner Universities)</option>
                                            <option value="Hungary / Stipendium Hungaricum">Hungary / Stipendium Hungaricum</option>
                                            <option value="Australia / Canada Study Permit">Australia / Canada Study Permit</option>
                                            <option value="General Study Abroad Inquiry">General Study Abroad Inquiry</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Intake -->
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Preferred Intake / Year <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none"><i class="fa-regular fa-clock text-sm"></i></span>
                                        <select id="wa_intake" required class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 transition-all text-slate-800">
                                            <option value="">Select Target Intake</option>
                                            <option value="September / Fall Intake 2026">September / Fall Intake 2026</option>
                                            <option value="January / February Spring Intake 2027">January / February Spring Intake 2027</option>
                                            <option value="September / Fall Intake 2027">September / Fall Intake 2027</option>
                                            <option value="Immediate / Earliest Available">Immediate / Earliest Available</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Notes / Questions -->
                            <div class="pt-2">
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Additional Notes or Questions (Optional)</label>
                                <textarea id="wa_notes" rows="3" placeholder="Mention any specific degree (e.g. Master in Data Science, MBBS) or English test score (IELTS/PTE/Duolingo if any)..." class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 transition-all text-slate-800"></textarea>
                            </div>

                            <button type="submit" class="w-full bg-[#25D366] hover:bg-[#1ebe5d] text-white font-black py-4 px-6 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 flex items-center justify-center gap-3 text-base transform hover:-translate-y-0.5 border border-white/20">
                                <i class="fa-brands fa-whatsapp text-2xl"></i> Send Assessment Request to WhatsApp
                            </button>
                        </form>

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
                                let message = `*🌟 New Student Assessment Request 🌟*\n\n` +
                                              `*👤 Full Name:* ${fullName}\n` +
                                              `*🎓 Last Qualification:* ${qualification}\n` +
                                              `*🎂 Date of Birth:* ${dob}\n` +
                                              `*📊 CGPA / Marks:* ${cgpa}\n` +
                                              `*🌍 Interested To Apply:* ${interest}\n` +
                                              `*📅 Preferred Intake:* ${intake}\n`;

                                if (notes) {
                                    message += `*💬 Additional Notes:* ${notes}\n`;
                                }

                                message += `\n_Sent via Euro World Education Website_`;

                                // Open WhatsApp chat URL
                                const waUrl = `https://wa.me/${cleanPhone}?text=${encodeURIComponent(message)}`;
                                window.open(waUrl, '_blank');
                            }
                        </script>
                    </div>

                    <!-- TAB 2: Standard Email Form -->
                    <div x-show="activeForm === 'email'" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                        <div class="mb-6 pb-5 border-b border-slate-100">
                            <h3 class="text-xl font-bold text-[#0b1b3d] mb-1">Send Formal Email Message</h3>
                            <p class="text-xs text-slate-500">Send an inquiry directly to our official head office email queue.</p>
                        </div>

                        @if (session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl relative mb-6 font-medium text-sm" role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">First Name <span class="text-red-500">*</span></label>
                                    <input type="text" name="first_name" required placeholder="First Name" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-[#0b1b3d] focus:bg-white transition-colors">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Last Name <span class="text-red-500">*</span></label>
                                    <input type="text" name="last_name" required placeholder="Last Name" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-[#0b1b3d] focus:bg-white transition-colors">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Email Address <span class="text-red-500">*</span></label>
                                <input type="email" name="email" required placeholder="your.email@example.com" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-[#0b1b3d] focus:bg-white transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Subject <span class="text-red-500">*</span></label>
                                <input type="text" name="subject" required placeholder="Inquiry Subject" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-[#0b1b3d] focus:bg-white transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Message <span class="text-red-500">*</span></label>
                                <textarea name="message" required placeholder="Write your message here..." rows="4" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-[#0b1b3d] focus:bg-white transition-colors"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-[#0b1b3d] hover:bg-blue-900 text-white font-bold py-3.5 rounded-xl shadow-lg hover:shadow-xl transition-all">Send Email Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection
