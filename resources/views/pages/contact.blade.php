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

            <!-- TOP SECTION: Clean Eligibility Check & Evaluation Form -->
            <div class="max-w-4xl mx-auto bg-white rounded-[28px] shadow-2xl border border-slate-200/80 p-8 sm:p-12 mb-10" id="eligibility-form-container">
                <div class="mb-6">
                    <h3 class="text-2xl sm:text-3xl font-black text-[#0b1b3d] tracking-tight">Check your Eligibility</h3>
                    <p class="text-slate-500 text-xs sm:text-sm mt-1">kindly share the following details to start evaluation on whatsapp</p>
                </div>

                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl relative mb-6 font-medium text-sm" role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <div id="ajax-success-alert" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl relative mb-6 font-medium text-sm" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span id="ajax-success-message">Your profile has been successfully recorded in our Admin Panel.</span>
                </div>

                <form id="eligibility-assessment-form" action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="hidden" name="lead_type" id="form_lead_type" value="admin_form">
                    
                    <!-- Row 1: Full Name & Phone -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Full Name <span class="text-red-500">*</span></label>
                            <input type="text" id="wa_full_name" name="wa_full_name" required placeholder="Enter your full name" class="w-full px-4 py-3 sm:py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] transition-all text-slate-800 placeholder:text-slate-400">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Phone Number <span class="text-red-500">*</span></label>
                            <input type="text" id="wa_phone" name="wa_phone" required placeholder="Enter your Phone number" class="w-full px-4 py-3 sm:py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] transition-all text-slate-800 placeholder:text-slate-400">
                        </div>
                    </div>

                    <!-- Row 2: Email & City Name -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Email Address (Optional)</label>
                            <input type="email" id="wa_email" name="wa_email" placeholder="Enter your Email" class="w-full px-4 py-3 sm:py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] transition-all text-slate-800 placeholder:text-slate-400">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">City Name <span class="text-red-500">*</span></label>
                            <input type="text" id="wa_city" name="wa_city" required placeholder="Enter your city name" class="w-full px-4 py-3 sm:py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] transition-all text-slate-800 placeholder:text-slate-400">
                        </div>
                    </div>

                    <!-- Row 3: Age & Last Degree / Passing Year -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Age <span class="text-red-500">*</span></label>
                            <input type="number" id="wa_age" name="wa_age" required min="14" max="65" placeholder="e.g. 21" class="w-full px-4 py-3 sm:py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] transition-all text-slate-800 placeholder:text-slate-400">
                        </div>
                        <div class="sm:col-span-2">
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Last Degree, CGPA / Marks & Passing Year <span class="text-red-500">*</span></label>
                            <input type="text" id="wa_qualification_marks" name="wa_qualification_marks" required placeholder="e.g. FSC (85%) 2023 or BSCS (3.4 CGPA) 2024" class="w-full px-4 py-3 sm:py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] transition-all text-slate-800 placeholder:text-slate-400">
                        </div>
                    </div>

                    <!-- Row 4: Interested Country -->
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Interested Country <span class="text-red-500">*</span></label>
                            <select id="wa_interest" name="wa_interest" required class="w-full px-4 py-3 sm:py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium focus:bg-white focus:outline-none focus:border-[#25D366] transition-all text-slate-800">
                                <option value="">Select Destination</option>
                                <option value="Italy">Italy</option>
                                <option value="Germany">Germany</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="France">France</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Romania">Romania</option>
                                <option value="South Korea">South Korea</option>
                            </select>
                        </div>
                    </div>

                    <!-- Action Buttons: Admin Form Submit & WhatsApp Evaluation -->
                    <div class="pt-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Button 1: Submit Form directly to Admin Panel -->
                        <button type="button" onclick="submitToAdminPanel(event)" class="w-full bg-[#0b1b3d] hover:bg-[#15326d] text-white font-bold py-4 px-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center gap-2 text-base sm:text-lg transform hover:-translate-y-0.5">
                            <i class="fa-solid fa-paper-plane text-xl"></i> Submit Form
                        </button>

                        <!-- Button 2: Start Evaluation on WhatsApp (also records to Admin Panel) -->
                        <button type="button" onclick="submitToWhatsApp(event, '{{ $cleanWaContact }}')" class="w-full bg-[#25D366] hover:bg-[#1ebe5d] text-white font-bold py-4 px-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center gap-2 text-base sm:text-lg transform hover:-translate-y-0.5">
                            <i class="fa-brands fa-whatsapp text-2xl"></i> Start WhatsApp Evaluation
                        </button>
                    </div>
                    <p class="text-center text-[11px] text-slate-400 mt-2 font-medium">
                        🔒 Submitting instantly saves your profile securely in our Admin Panel.
                    </p>
                </form>

                <script>
                    function validateFormFields() {
                        const fullName = document.getElementById('wa_full_name').value.trim();
                        const phone = document.getElementById('wa_phone').value.trim();
                        const email = document.getElementById('wa_email').value.trim();
                        const city = document.getElementById('wa_city').value.trim();
                        const age = document.getElementById('wa_age').value.trim();
                        const qualMarks = document.getElementById('wa_qualification_marks').value.trim();
                        const interest = document.getElementById('wa_interest').value;

                        if (!fullName || !phone || !city || !age || !qualMarks || !interest) {
                            alert('Please fill in all mandatory fields before submitting.');
                            return false;
                        }
                        return { fullName, phone, email, city, age, qualMarks, interest };
                    }

                    function submitToAdminPanel(event) {
                        event.preventDefault();
                        const fields = validateFormFields();
                        if (!fields) return;

                        const alertBox = document.getElementById('ajax-success-alert');
                        const alertMsg = document.getElementById('ajax-success-message');

                        fetch("{{ route('contact.submit') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({
                                wa_full_name: fields.fullName,
                                wa_phone: fields.phone,
                                wa_email: fields.email,
                                wa_city: fields.city,
                                wa_age: fields.age,
                                wa_qualification_marks: fields.qualMarks,
                                wa_interest: fields.interest,
                                lead_type: 'admin_form'
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            alertBox.classList.remove('hidden');
                            alertMsg.textContent = 'Thank you, ' + fields.fullName + '! Your eligibility details have been successfully saved in our Admin Panel.';
                            document.getElementById('eligibility-assessment-form').reset();
                            window.scrollTo({ top: document.getElementById('eligibility-form-container').offsetTop - 100, behavior: 'smooth' });
                        })
                        .catch(err => {
                            // Fallback standard submit if AJAX fails
                            document.getElementById('eligibility-assessment-form').submit();
                        });
                    }

                    function submitToWhatsApp(event, cleanPhone) {
                        event.preventDefault();
                        const fields = validateFormFields();
                        if (!fields) return;

                        // First save contact lead to Admin Panel right before opening WhatsApp
                        fetch("{{ route('contact.submit') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({
                                wa_full_name: fields.fullName,
                                wa_phone: fields.phone,
                                wa_email: fields.email,
                                wa_city: fields.city,
                                wa_age: fields.age,
                                wa_qualification_marks: fields.qualMarks,
                                wa_interest: fields.interest,
                                lead_type: 'whatsapp'
                            })
                        }).catch(err => console.log('Lead recording status:', err));

                        let message = `*🌟 New Student Eligibility Evaluation 🌟*\n\n` +
                                      `*👤 Full Name:* ${fields.fullName}\n` +
                                      `*📞 Phone:* ${fields.phone}\n` +
                                      `*✉️ Email:* ${fields.email}\n` +
                                      `*🏙️ City Name:* ${fields.city}\n` +
                                      `*🎂 Age:* ${fields.age} Years\n` +
                                      `*🎓 Qualification, Marks & Passing Year:* ${fields.qualMarks}\n` +
                                      `*🌍 Target Destination:* ${fields.interest}\n\n` +
                                      `_Sent via Euro World Education Website_`;

                        const waUrl = `https://wa.me/${cleanPhone}?text=${encodeURIComponent(message)}`;
                        window.open(waUrl, '_blank');
                    }
                </script>
            </div>

            <!-- BOTTOM SECTION: Dynamic Direct Contact Panel -->
            <div class="max-w-4xl mx-auto mt-8 bg-gradient-to-br from-[#0b1b3d] via-[#102754] to-[#071129] text-white p-8 sm:p-12 rounded-[32px] shadow-[0_20px_50px_-12px_rgba(11,27,61,0.5)] relative overflow-hidden ring-1 ring-white/10">
                <!-- Abstract Glow -->
                <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500/20 rounded-full blur-[100px] transform translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 bg-emerald-500/10 rounded-full blur-[100px] transform -translate-x-1/2 translate-y-1/2 pointer-events-none"></div>

                <div class="relative z-10">
                    <div class="mb-10 text-center sm:text-left flex flex-col sm:flex-row sm:items-end justify-between gap-6 border-b border-white/10 pb-8">
                        <div>
                            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs font-semibold tracking-wide text-blue-300 mb-4">
                                <i class="fa-solid fa-headset text-blue-400"></i> Official Support
                            </div>
                            <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-white mb-3">Direct Contact Desk</h2>
                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-2xl">Connect instantly with our verified education counselors. Choose any desk below for immediate application assistance or general inquiries.</p>
                        </div>
                    </div>

                    <!-- Dynamic Contacts Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 mb-10">
                        @if(isset($global_contact_numbers) && $global_contact_numbers->count() > 0)
                            @foreach($global_contact_numbers as $contact)
                                @php
                                    $isWa = $contact->type === 'whatsapp';
                                    $cleanPhone = preg_replace('/[^0-9+]/', '', $contact->number);
                                    $waCleanPhone = preg_replace('/[^0-9]/', '', $contact->number);
                                    $href = $isWa ? "https://wa.me/{$waCleanPhone}" : "tel:{$cleanPhone}";
                                    $icon = $isWa ? 'fa-brands fa-whatsapp' : 'fa-solid fa-phone';
                                    
                                    $borderHoverClass = $isWa ? 'hover:border-emerald-500/50' : 'hover:border-blue-500/50';
                                    $shadowHoverClass = $isWa ? 'hover:shadow-emerald-500/20' : 'hover:shadow-blue-500/20';
                                    $gradientClass = $isWa ? 'from-emerald-500/5' : 'from-blue-500/5';
                                    $iconBgClass = $isWa ? 'bg-emerald-500/20' : 'bg-blue-500/20';
                                    $iconTextClass = $isWa ? 'text-emerald-400' : 'text-blue-400';
                                    $iconBorderClass = $isWa ? 'border-emerald-500/30' : 'border-blue-500/30';
                                    $iconHoverBgClass = $isWa ? 'group-hover:bg-emerald-500' : 'group-hover:bg-blue-500';
                                    $badgeHoverBgClass = $isWa ? 'group-hover:bg-emerald-500/20' : 'group-hover:bg-blue-500/20';
                                    $badgeHoverTextClass = $isWa ? 'group-hover:text-emerald-300' : 'group-hover:text-blue-300';
                                @endphp
                                <a href="{{ $href }}" target="_blank" class="group relative p-6 rounded-2xl bg-white/[0.03] hover:bg-white/[0.08] border border-white/10 {{ $borderHoverClass }} transition-all duration-300 shadow-lg {{ $shadowHoverClass }} overflow-hidden flex flex-col justify-between h-full transform hover:-translate-y-1.5">
                                    <div class="absolute inset-0 bg-gradient-to-br {{ $gradientClass }} to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                    <div class="relative z-10">
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="w-12 h-12 rounded-xl {{ $iconBgClass }} {{ $iconTextClass }} flex items-center justify-center shrink-0 border {{ $iconBorderClass }} group-hover:scale-110 {{ $iconHoverBgClass }} group-hover:text-white transition-all duration-300">
                                                <i class="{{ $icon }} text-2xl"></i>
                                            </div>
                                            <span class="text-[10px] bg-white/10 text-slate-200 px-3 py-1 rounded-full font-bold border border-white/10 {{ $badgeHoverBgClass }} {{ $badgeHoverTextClass }} transition-colors uppercase tracking-wider">{{ $isWa ? 'Online' : 'Direct Call' }}</span>
                                        </div>
                                        <div>
                                            <span class="text-[11px] font-bold text-slate-400 uppercase tracking-widest block mb-1">{{ $contact->label }}</span>
                                            <span class="text-lg font-black text-white block">{{ $contact->number }}</span>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <!-- Fallback cards if no contacts in DB -->
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $global_settings['site_whatsapp'] ?? '+923273333046') }}" target="_blank" class="group relative p-6 rounded-2xl bg-white/[0.03] hover:bg-white/[0.08] border border-white/10 hover:border-emerald-500/50 transition-all duration-300 shadow-lg hover:shadow-emerald-500/20 overflow-hidden flex flex-col justify-between h-full transform hover:-translate-y-1.5">
                                <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative z-10">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="w-12 h-12 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0 border border-emerald-500/30 group-hover:scale-110 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                                            <i class="fa-brands fa-whatsapp text-2xl"></i>
                                        </div>
                                        <span class="text-[10px] bg-white/10 text-slate-200 px-3 py-1 rounded-full font-bold border border-white/10 group-hover:bg-emerald-500/20 group-hover:text-emerald-300 transition-colors uppercase tracking-wider">Online</span>
                                    </div>
                                    <div>
                                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-widest block mb-1">Primary WhatsApp</span>
                                        <span class="text-lg font-black text-white block">{{ $global_settings['site_whatsapp'] ?? '+92 327 3333046' }}</span>
                                    </div>
                                </div>
                            </a>
                        @endif
                    </div>

                    <!-- Head Office & Email Block -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-8 border-t border-white/10 bg-white/[0.02] -mx-8 sm:-mx-12 -mb-8 sm:-mb-12 px-8 sm:px-12 pb-8 sm:pb-12">
                        <div class="flex items-start gap-4 group">
                            <div class="w-12 h-12 rounded-2xl bg-blue-500/10 text-blue-400 flex items-center justify-center shrink-0 border border-blue-500/20 group-hover:bg-blue-500 group-hover:text-white transition-all shadow-inner">
                                <i class="fa-solid fa-map-location-dot text-xl"></i>
                            </div>
                            <div>
                                <span class="block text-[11px] font-bold text-blue-300 uppercase tracking-widest mb-1.5">Head Office</span>
                                <span class="text-sm font-semibold text-slate-200 leading-relaxed block">{!! nl2br(e($global_settings['site_address'] ?? 'Kalma Chowk, Lahore, Pakistan')) !!}</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 group">
                            <div class="w-12 h-12 rounded-2xl bg-indigo-500/10 text-indigo-400 flex items-center justify-center shrink-0 border border-indigo-500/20 group-hover:bg-indigo-500 group-hover:text-white transition-all shadow-inner">
                                <i class="fa-solid fa-envelope-open-text text-xl"></i>
                            </div>
                            <div>
                                <span class="block text-[11px] font-bold text-indigo-300 uppercase tracking-widest mb-1.5">Official Email</span>
                                <a href="mailto:{{ $global_settings['site_email'] ?? 'info@euroworldeducation.com' }}" class="text-sm font-semibold text-slate-200 block hover:text-white transition-colors">{{ $global_settings['site_email'] ?? 'info@euroworldeducation.com' }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
