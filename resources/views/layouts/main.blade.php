<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Euro World Education')</title>
    <meta name="description" content="@yield('description', 'Study abroad with Euro World Education')">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        primary: '#1e3a8a', // dark blue
                        secondary: '#facc15', // yellow
                        accent: '#3b82f6', // blue
                        dark: '#0f172a',
                        light: '#f8fafc',
                    }
                }
            }
        }
    </script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body class="bg-light text-dark font-sans antialiased overflow-x-hidden">

    <meta name="description" content="@yield('description', 'Study abroad with Euro World Education')">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        primary: '#1e3a8a', // dark blue
                        secondary: '#facc15', // yellow
                        accent: '#3b82f6', // blue
                        dark: '#0f172a',
                        light: '#f8fafc',
                    }
                }
            }
        }
    </script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body class="bg-light text-dark font-sans antialiased overflow-x-hidden">

    <!-- Header (Section 1) -->
    <header id="header" class="fixed w-full z-50 transition-all duration-300 shadow-sm font-sans">
        <!-- Top Bar -->
        <div class="bg-[#0b1b3d] text-white text-xs py-2 hidden md:block">
            <div class="container mx-auto px-6 flex justify-between items-center">
                <div class="flex items-center gap-6">
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-location-dot text-red-600"></i>
                        <span>Head Office: Pakistan</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fa-regular fa-envelope"></i>
                        <span>{{ $global_settings['site_email'] ?? 'info@euroworld.education.com' }}</span>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <span class="mr-2">Follow Us:</span>
                    <a href="{{ $global_settings['social_facebook'] ?? '#' }}" class="w-6 h-6 rounded-full bg-white text-[#0b1b3d] flex items-center justify-center hover:bg-gray-200"><i class="fa-brands fa-facebook-f text-[10px]"></i></a>
                    <a href="{{ $global_settings['social_instagram'] ?? '#' }}" class="w-6 h-6 rounded-full bg-white text-[#0b1b3d] flex items-center justify-center hover:bg-gray-200"><i class="fa-brands fa-instagram text-[10px]"></i></a>
                    <a href="{{ $global_settings['social_youtube'] ?? '#' }}" class="w-6 h-6 rounded-full bg-white text-[#0b1b3d] flex items-center justify-center hover:bg-gray-200"><i class="fa-brands fa-youtube text-[10px]"></i></a>
                    <a href="{{ $global_settings['social_tiktok'] ?? '#' }}" class="w-6 h-6 rounded-full bg-white text-[#0b1b3d] flex items-center justify-center hover:bg-gray-200"><i class="fa-brands fa-tiktok text-[10px]"></i></a>
                </div>
            </div>
        </div>

        <!-- Main Navigation Bar -->
        <div class="bg-white py-4 transition-all duration-300" id="main-nav">
            <div class="container mx-auto px-6 flex justify-between items-center">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    @php
                        $headerLogoPath = $global_settings['site_logo'] ?? null;
                    @endphp
                    @if($headerLogoPath && $headerLogoPath !== 'images/logo.png')
                        <img src="{{ asset($headerLogoPath) }}" onerror="this.onerror=null; this.src='{{ asset('images/logo.png') }}';" alt="EuroWorld Consultants" class="h-14 md:h-16 object-contain transition-all duration-300">
                    @else
                        <img src="{{ asset('images/logo.png') }}" alt="EuroWorld Consultants" class="h-14 md:h-16 object-contain transition-all duration-300">
                    @endif
                </a>
                
                <!-- Nav Links -->
                <nav class="hidden lg:flex flex-1 justify-end mr-8 space-x-6 text-sm font-semibold text-[#0b1b3d]">
                    <a href="{{ route('home') }}" class="relative group">
                        Home
                        <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-red-600"></span>
                    </a>
                    <a href="{{ route('about') }}" class="hover:text-red-600 transition-colors">About Us</a>
                    <a href="{{ route('destinations') }}" class="hover:text-red-600 transition-colors flex items-center gap-1">Destinations <i class="fa-solid fa-chevron-down text-[10px]"></i></a>
                    <a href="{{ route('services') }}" class="hover:text-red-600 transition-colors flex items-center gap-1">Services <i class="fa-solid fa-chevron-down text-[10px]"></i></a>
                    <a href="{{ route('scholarships') }}" class="hover:text-red-600 transition-colors">Scholarships</a>
                    <a href="{{ route('success-stories') }}" class="hover:text-red-600 transition-colors">Success Stories</a>
                    <a href="{{ route('blog') }}" class="hover:text-red-600 transition-colors">News & Updates</a>
                    <a href="{{ route('contact') }}" class="hover:text-red-600 transition-colors">Contact Us</a>
                </nav>

                <!-- CTA Button -->
                <a href="{{ route('contact') }}" class="hidden md:flex items-center gap-2 bg-[#c6181b] text-white px-5 py-2.5 rounded-full font-semibold text-sm hover:bg-red-800 transition-colors shadow-md">
                    <i class="fa-regular fa-paper-plane"></i>
                    Free Consultation
                </a>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden text-2xl text-dark hover:text-red-600 transition-colors">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            
            <!-- Mobile Menu Overlay -->
            <div id="mobile-menu" class="hidden absolute top-[72px] left-0 w-full bg-[#0b1b3d] text-white shadow-xl border-t border-white/10 flex flex-col font-sans">
                <a href="{{ route('home') }}" class="mobile-link px-6 py-4 border-b border-white/10 hover:bg-white/5 transition-colors">Home</a>
                <a href="{{ route('about') }}" class="mobile-link px-6 py-4 border-b border-white/10 hover:bg-white/5 transition-colors">About Us</a>
                <a href="{{ route('destinations') }}" class="mobile-link px-6 py-4 border-b border-white/10 hover:bg-white/5 transition-colors flex justify-between items-center">Destinations <i class="fa-solid fa-chevron-down text-xs"></i></a>
                <a href="{{ route('services') }}" class="mobile-link px-6 py-4 border-b border-white/10 hover:bg-white/5 transition-colors flex justify-between items-center">Services <i class="fa-solid fa-chevron-down text-xs"></i></a>
                <a href="{{ route('scholarships') }}" class="mobile-link px-6 py-4 border-b border-white/10 hover:bg-white/5 transition-colors">Scholarships</a>
                <a href="{{ route('success-stories') }}" class="mobile-link px-6 py-4 border-b border-white/10 hover:bg-white/5 transition-colors">Success Stories</a>
                <a href="{{ route('blog') }}" class="mobile-link px-6 py-4 border-b border-white/10 hover:bg-white/5 transition-colors">News & Updates</a>
                <a href="{{ route('contact') }}" class="mobile-link px-6 py-4 border-b border-white/10 hover:bg-white/5 transition-colors">Contact Us</a>
                <div class="p-6">
                    <a href="{{ route('contact') }}" class="mobile-link flex items-center justify-center gap-2 w-full bg-[#c6181b] text-white py-3 rounded-full font-semibold hover:bg-red-800 transition-colors">
                        <i class="fa-regular fa-paper-plane"></i> Free Consultation
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Pre-Footer CTA Banner (Hidden on Contact Page to avoid visual repetition) -->
    @if(!request()->is('contact*'))
    <section class="bg-[#f2f5f8] font-sans relative z-20 py-16 md:py-20 border-t border-gray-200">
        <div class="container mx-auto px-6">
            <div class="bg-gradient-to-r from-[#0b1b3d] via-[#0f2557] to-[#0b1b3d] rounded-[28px] p-8 md:p-12 shadow-2xl border border-white/10 relative overflow-hidden">
                <!-- Abstract architecture/spire background elements -->
                <div class="absolute inset-0 opacity-15 pointer-events-none">
                    <div class="absolute right-0 top-1/2 -translate-y-1/2 w-[500px] h-full bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-blue-400 via-transparent to-transparent blur-2xl"></div>
                    <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-red-600 rounded-full mix-blend-overlay blur-3xl opacity-30"></div>
                </div>
                
                <div class="flex flex-col lg:flex-row items-center justify-between gap-8 relative z-10">
                    <!-- Text Content -->
                    <div class="w-full lg:w-3/5 text-center lg:text-left">
                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-black text-white leading-tight mb-3 tracking-tight">
                            Ready to Start Your Study Abroad Journey?
                        </h2>
                        <p class="text-gray-200 text-sm sm:text-base font-normal max-w-2xl leading-relaxed">
                            Book your free consultation now and take the first step towards your future.
                        </p>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="w-full lg:w-2/5 flex flex-col sm:flex-row items-center justify-center lg:justify-end gap-3.5 shrink-0">
                        <a href="{{ route('contact') }}" class="w-full sm:w-auto bg-[#c6181b] hover:bg-red-800 text-white px-7 py-3.5 rounded-full font-black text-sm transition-all shadow-lg flex items-center justify-center gap-2 transform hover:-translate-y-1">
                            Book Free Consultation <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                        @php
                            $rawWa = $global_settings['site_whatsapp'] ?? ($global_settings['site_phone'] ?? '923000000000');
                            $cleanWa = preg_replace('/[^0-9]/', '', $rawWa);
                            if (empty($cleanWa)) {
                                $cleanWa = '923000000000';
                            }
                            $waUrl = 'https://wa.me/' . $cleanWa . '?text=' . urlencode('Hello Euro World Education, I would like to inquire about study abroad opportunities.');
                        @endphp
                        <a href="{{ $waUrl }}" target="_blank" class="w-full sm:w-auto bg-[#25D366] hover:bg-[#1ebe5d] text-white px-7 py-3.5 rounded-full font-black text-sm transition-all shadow-lg flex items-center justify-center gap-2 transform hover:-translate-y-1 border border-white/20">
                            <i class="fa-brands fa-whatsapp text-lg"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif


    <!-- Footer (Last Section) -->
    <footer class="bg-[#0b1b3d] text-gray-300 pt-16 pb-8 border-t border-white/10 font-sans">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12 border-b border-white/10 pb-12">
                <div class="col-span-1 md:col-span-1">
                    <div class="flex flex-col items-start gap-1 mb-6">
                        @php
                            $footerLogoPath = $global_settings['site_logo'] ?? null;
                        @endphp
                        @if($footerLogoPath && $footerLogoPath !== 'images/logo.png')
                            <img src="{{ asset($footerLogoPath) }}" onerror="this.onerror=null; this.src='{{ asset('images/logo.png') }}';" alt="EuroWorld Consultants Logo" class="h-14 md:h-16 object-contain bg-white rounded-xl px-4 py-2 shadow-md">
                        @else
                            <img src="{{ asset('images/logo.png') }}" alt="EuroWorld Consultants Logo" class="h-14 md:h-16 object-contain bg-white rounded-xl px-4 py-2 shadow-md">
                        @endif
                    </div>
                    <p class="text-sm text-gray-400 mb-6 leading-relaxed">Empowering students to achieve global success through quality education in Europe.</p>
                    <div class="flex space-x-4">
                        <a href="{{ $global_settings['social_facebook'] ?? 'https://facebook.com/euroworld' }}" target="_blank" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-yellow-400 hover:text-[#0b1b3d] transition-colors"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="{{ $global_settings['social_twitter'] ?? 'https://twitter.com/euroworld' }}" target="_blank" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-yellow-400 hover:text-[#0b1b3d] transition-colors"><i class="fa-brands fa-twitter"></i></a>
                        <a href="{{ $global_settings['social_instagram'] ?? 'https://instagram.com/euroworld' }}" target="_blank" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-yellow-400 hover:text-[#0b1b3d] transition-colors"><i class="fa-brands fa-instagram"></i></a>
                        <a href="{{ $global_settings['social_linkedin'] ?? 'https://linkedin.com/company/euroworld' }}" target="_blank" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-yellow-400 hover:text-[#0b1b3d] transition-colors"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-white font-bold mb-6 text-sm">Quick Links</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-yellow-400 transition-colors">Home</a></li>
                        <li><a href="{{ route('destinations') }}" class="hover:text-yellow-400 transition-colors">Destinations</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-yellow-400 transition-colors">Our Services</a></li>
                        <li><a href="{{ route('success-stories') }}" class="hover:text-yellow-400 transition-colors">Success Stories</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 text-sm">Top Destinations</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="{{ route('destinations') }}" class="hover:text-yellow-400 transition-colors">Study in Italy</a></li>
                        <li><a href="{{ route('destinations') }}" class="hover:text-yellow-400 transition-colors">Study in France</a></li>
                        <li><a href="{{ route('destinations') }}" class="hover:text-yellow-400 transition-colors">Study in UK</a></li>
                        <li><a href="{{ route('destinations') }}" class="hover:text-yellow-400 transition-colors">Study in Germany</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 text-sm">Contact Us</h4>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot mt-1 text-red-600"></i>
                            <span class="text-gray-400">{!! $global_settings['site_address'] ?? '123 Education Boulevard,<br>City Center, 10001' !!}</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-phone text-red-600"></i>
                            <span class="text-gray-400">{{ $global_settings['site_phone'] ?? '+1 234 567 8900' }}</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-envelope text-red-600"></i>
                            <span class="text-gray-400">{{ $global_settings['site_email'] ?? 'info@euroworld.edu' }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
                <p>&copy; 2026 Euro World Education. All rights reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Live Chat Button -->
    @php
        $rawWaFloat = $global_settings['site_whatsapp'] ?? ($global_settings['site_phone'] ?? '923000000000');
        $cleanWaFloat = preg_replace('/[^0-9]/', '', $rawWaFloat);
        if (empty($cleanWaFloat)) {
            $cleanWaFloat = '923000000000';
        }
        $waUrlFloat = 'https://wa.me/' . $cleanWaFloat . '?text=' . urlencode('Hello Euro World Education, I am interested in studying abroad and would like more information.');
    @endphp
    <a href="{{ $waUrlFloat }}" target="_blank" aria-label="Chat with us on WhatsApp" class="fixed bottom-6 right-6 z-50 bg-[#25D366] hover:bg-[#1ebe5d] text-white p-4 rounded-full shadow-2xl flex items-center justify-center transform hover:scale-110 transition-all duration-300 group border-2 border-white/40">
        <span class="absolute -top-1 -right-1 flex h-3.5 w-3.5">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-green-500 border border-white"></span>
        </span>
        <i class="fa-brands fa-whatsapp text-3xl"></i>
        <span class="absolute right-full mr-3 px-3 py-1.5 bg-slate-900/90 text-white text-xs font-bold rounded-lg whitespace-nowrap shadow-md pointer-events-none opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            Chat on WhatsApp
        </span>
    </a>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- Custom Script -->
    <script src="{{ asset('main.js') }}"></script>
</body>
</html>

