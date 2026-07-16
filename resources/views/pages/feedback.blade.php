@extends('layouts.main')

@section('title', 'Euro World Education | Student Feedback & Reviews')
@section('description', 'We value your experience! Share your honest feedback, reviews, or suggestions regarding our counseling, visa guidance, and university admissions.')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-36 pb-16 bg-[#0b1b3d] font-sans text-center text-white border-b border-white/10">
        <div class="container mx-auto px-6 relative z-10 max-w-3xl">
            <span class="inline-block px-3.5 py-1.5 rounded-full bg-white/10 border border-white/15 text-red-400 text-xs font-bold uppercase tracking-wider mb-3">Your Voice Matters</span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-black tracking-tight mb-4">Help Us Serve You Better</h1>
            <p class="text-slate-300 text-sm sm:text-base font-normal leading-relaxed">Whether you had an amazing counseling experience or have suggestions on how we can improve our visa processing, please let us know below or call us directly.</p>
        </div>
    </section>

    <!-- Feedback Section -->
    <section class="py-16 bg-slate-50 font-sans">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto bg-white rounded-[28px] shadow-2xl border border-slate-200/80 overflow-hidden grid grid-cols-1 md:grid-cols-12 items-stretch">
                
                <!-- Left 5 Columns: Info & Direct Call -->
                <div class="md:col-span-5 bg-[#0b1b3d] text-white p-8 sm:p-10 flex flex-col justify-between relative border-r border-slate-200/10">
                    <div class="space-y-6">
                        <div>
                            <h2 class="text-2xl font-black tracking-tight text-white">Why Your Feedback Matters</h2>
                            <p class="text-slate-300 text-xs sm:text-sm mt-2 leading-relaxed">At Euro World Education, our goal is 100% student satisfaction. Every suggestion is directly reviewed by our quality control and management team.</p>
                        </div>

                        <div class="space-y-6 pt-4 border-t border-white/10">
                            <!-- Direct Call Option -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-red-500/15 text-[#c6181b] flex items-center justify-center shrink-0 border border-red-500/20 mt-0.5">
                                    <i class="fa-solid fa-phone-volume text-base"></i>
                                </div>
                                <div>
                                    <span class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider">Prefer to talk directly?</span>
                                    <span class="text-sm font-bold text-white block mt-0.5">{{ $global_settings['site_phone'] ?? '+92 300 000 0000' }}</span>
                                    <span class="text-[11px] text-slate-300 font-medium mt-0.5 block">Call us during office hours to share immediate feedback.</span>
                                </div>
                            </div>

                            <!-- WhatsApp Option -->
                            @php
                                $rawWaFeedback = $global_settings['site_whatsapp'] ?? ($global_settings['site_phone'] ?? '923000000000');
                                $cleanWaFeedback = preg_replace('/[^0-9]/', '', $rawWaFeedback);
                                if (empty($cleanWaFeedback)) {
                                    $cleanWaFeedback = '923000000000';
                                }
                            @endphp
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-emerald-500/15 text-emerald-400 flex items-center justify-center shrink-0 border border-emerald-500/20 mt-0.5">
                                    <i class="fa-brands fa-whatsapp text-lg"></i>
                                </div>
                                <div>
                                    <span class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider">WhatsApp Feedback Desk</span>
                                    <a href="https://wa.me/{{ $cleanWaFeedback }}?text=Hello%20Euro%20World%20Education,%20I%20want%20to%20share%20some%20feedback%20about%20my%20experience." target="_blank" class="text-xs font-bold text-emerald-400 hover:underline mt-0.5 inline-block">Send WhatsApp Message &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-8 mt-8 border-t border-white/10">
                        <a href="tel:{{ $global_settings['site_phone'] ?? '+923000000000' }}" class="w-full py-3.5 px-4 rounded-xl bg-[#c6181b] hover:bg-red-700 text-white font-bold text-xs sm:text-sm shadow-lg flex items-center justify-center gap-2 transition-all">
                            <i class="fa-solid fa-phone"></i> Call Us to Improve
                        </a>
                    </div>
                </div>

                <!-- Right 7 Columns: Feedback Submission Form -->
                <div class="md:col-span-7 p-8 sm:p-10 flex flex-col justify-center bg-white">
                    <h3 class="text-2xl font-black text-[#0b1b3d] mb-1">Submit Your Feedback</h3>
                    <p class="text-slate-500 text-xs sm:text-sm mb-6">Rate your overall experience and tell us how we can do better.</p>

                    @if(session('success'))
                        <div class="mb-6 p-4 rounded-2xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-800 flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-xl text-emerald-600 shrink-0"></i>
                            <div class="text-xs sm:text-sm font-semibold">{{ session('success') }}</div>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mb-6 p-4 rounded-2xl bg-red-50 border border-red-200 text-red-800 text-xs space-y-1">
                            @foreach ($errors->all() as $error)
                                <div>&bull; {{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('feedback.submit') }}" method="POST" class="space-y-4">
                        @csrf

                        <!-- Star Rating Selection -->
                        <div>
                            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Overall Satisfaction Rating <span class="text-red-600">*</span></label>
                            <div class="flex items-center gap-2" id="star-rating-container">
                                @for($i = 1; $i <= 5; $i++)
                                    <label class="cursor-pointer">
                                        <input type="radio" name="rating" value="{{ $i }}" class="hidden peer star-input" {{ $i === 5 ? 'checked' : '' }} required>
                                        <div class="w-10 h-10 rounded-xl bg-slate-100 hover:bg-amber-100 peer-checked:bg-amber-500 peer-checked:text-white text-amber-500 flex items-center justify-center text-lg font-bold transition-all shadow-sm border border-slate-200 peer-checked:border-amber-600 star-btn" data-val="{{ $i }}">
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </label>
                                @endfor
                            </div>
                        </div>

                        <!-- Category -->
                        <div>
                            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Feedback Category <span class="text-red-600">*</span></label>
                            <select name="category" required class="w-full rounded-xl border border-slate-200 bg-slate-50 focus:bg-white text-slate-800 text-xs sm:text-sm px-4 py-3 font-medium outline-none focus:border-[#0b1b3d] focus:ring-2 focus:ring-[#0b1b3d]/10 transition-all">
                                <option value="Counseling Experience">Counseling Experience</option>
                                <option value="Visa Guidance & Process">Visa Guidance & Process</option>
                                <option value="University Selection & Admissions">University Selection & Admissions</option>
                                <option value="Website & Online Support">Website & Online Support</option>
                                <option value="General Suggestion">General Suggestion</option>
                            </select>
                        </div>

                        <!-- Name & Phone -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Your Name <span class="text-red-600">*</span></label>
                                <input type="text" name="name" required placeholder="John Doe" class="w-full rounded-xl border border-slate-200 bg-slate-50 focus:bg-white text-slate-800 text-xs sm:text-sm px-4 py-3 font-medium outline-none focus:border-[#0b1b3d] focus:ring-2 focus:ring-[#0b1b3d]/10 transition-all">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Phone Number</label>
                                <input type="text" name="phone" placeholder="+92 300 0000000" class="w-full rounded-xl border border-slate-200 bg-slate-50 focus:bg-white text-slate-800 text-xs sm:text-sm px-4 py-3 font-medium outline-none focus:border-[#0b1b3d] focus:ring-2 focus:ring-[#0b1b3d]/10 transition-all">
                            </div>
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Email Address</label>
                            <input type="email" name="email" placeholder="john@example.com" class="w-full rounded-xl border border-slate-200 bg-slate-50 focus:bg-white text-slate-800 text-xs sm:text-sm px-4 py-3 font-medium outline-none focus:border-[#0b1b3d] focus:ring-2 focus:ring-[#0b1b3d]/10 transition-all">
                        </div>

                        <!-- Message -->
                        <div>
                            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Your Feedback / Suggestions <span class="text-red-600">*</span></label>
                            <textarea name="message" required rows="4" placeholder="Share your experience, thoughts, or what we can improve..." class="w-full rounded-xl border border-slate-200 bg-slate-50 focus:bg-white text-slate-800 text-xs sm:text-sm p-4 font-medium outline-none focus:border-[#0b1b3d] focus:ring-2 focus:ring-[#0b1b3d]/10 transition-all"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-2">
                            <button type="submit" class="w-full py-4 px-6 rounded-xl bg-[#0b1b3d] hover:bg-[#162e63] text-white font-bold text-sm shadow-xl flex items-center justify-center gap-2 transition-all hover:-translate-y-0.5">
                                Submit Feedback <i class="fa-solid fa-paper-plane text-xs"></i>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const starInputs = document.querySelectorAll('.star-input');
            const starBtns = document.querySelectorAll('.star-btn');

            function updateStars(val) {
                starBtns.forEach(btn => {
                    const btnVal = parseInt(btn.getAttribute('data-val'));
                    if (btnVal <= val) {
                        btn.classList.add('bg-amber-500', 'text-white', 'border-amber-600');
                        btn.classList.remove('bg-slate-100', 'text-amber-500');
                    } else {
                        btn.classList.remove('bg-amber-500', 'text-white', 'border-amber-600');
                        btn.classList.add('bg-slate-100', 'text-amber-500');
                    }
                });
            }

            starInputs.forEach(input => {
                input.addEventListener('change', function() {
                    updateStars(parseInt(this.value));
                });
            });

            // Initial trigger for checked
            const checkedInput = document.querySelector('.star-input:checked');
            if (checkedInput) {
                updateStars(parseInt(checkedInput.value));
            }
        });
    </script>
    @endpush
@endsection
