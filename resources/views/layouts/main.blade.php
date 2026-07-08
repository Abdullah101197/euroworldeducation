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
                        <span>info@euroworld.education.com</span>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <span class="mr-2">Follow Us:</span>
                    <a href="#" class="w-6 h-6 rounded-full bg-white text-[#0b1b3d] flex items-center justify-center hover:bg-gray-200"><i class="fa-brands fa-facebook-f text-[10px]"></i></a>
                    <a href="#" class="w-6 h-6 rounded-full bg-white text-[#0b1b3d] flex items-center justify-center hover:bg-gray-200"><i class="fa-brands fa-instagram text-[10px]"></i></a>
                    <a href="#" class="w-6 h-6 rounded-full bg-white text-[#0b1b3d] flex items-center justify-center hover:bg-gray-200"><i class="fa-brands fa-youtube text-[10px]"></i></a>
                    <a href="#" class="w-6 h-6 rounded-full bg-white text-[#0b1b3d] flex items-center justify-center hover:bg-gray-200"><i class="fa-brands fa-tiktok text-[10px]"></i></a>
                </div>
            </div>
        </div>

        <!-- Main Navigation Bar -->
        <div class="bg-white py-4 transition-all duration-300" id="main-nav">
            <div class="container mx-auto px-6 flex justify-between items-center">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    @if(isset($global_settings) && $logo = $global_settings->where('key', 'site_logo')->first() && $logo->value && file_exists(public_path($logo->value)) && $logo->value !== 'images/logo.png')
                        <img src="{{ asset($logo->value) }}" alt="EuroWorld Consultants" class="h-14 md:h-16 object-contain transition-all duration-300">
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

    <!-- Pre-Footer CTA Banner -->
    <section class="bg-[#c6181b] relative overflow-hidden font-sans">
        <!-- Abstract background elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -right-20 -top-40 w-96 h-96 bg-white rounded-full mix-blend-overlay blur-3xl"></div>
            <div class="absolute left-0 bottom-0 w-full h-1/2 bg-gradient-to-t from-black to-transparent"></div>
        </div>
        
        <div class="container mx-auto px-6 py-12 md:py-16 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                <!-- Text Content -->
                <div class="w-full lg:w-3/5 text-center lg:text-left">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-white leading-tight mb-4 tracking-tight">
                        Ready to Start Your Study Abroad Journey?
                    </h2>
                    <p class="text-white/80 text-lg max-w-2xl font-medium">
                        Join thousands of students who have trusted us with their global education dreams.
                    </p>
                </div>
                
                <!-- Action Buttons -->
                <div class="w-full lg:w-2/5 flex flex-col sm:flex-row items-center justify-center lg:justify-end gap-4">
                    <a href="{{ route('contact') }}" class="w-full sm:w-auto bg-yellow-400 text-[#0b1b3d] px-8 py-4 rounded-xl font-bold hover:bg-yellow-300 transition-all shadow-lg flex items-center justify-center gap-2 transform hover:-translate-y-1">
                        Book Free Consultation <i class="fa-regular fa-calendar-check"></i>
                    </a>
                    <a href="#" class="w-full sm:w-auto bg-transparent border-2 border-white/30 text-white px-8 py-4 rounded-xl font-bold hover:bg-white/10 transition-all flex items-center justify-center gap-2 transform hover:-translate-y-1">
                        Chat on WhatsApp <i class="fa-brands fa-whatsapp text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Last Section) -->
    <footer class="bg-[#0b1b3d] text-gray-300 pt-32 pb-8 border-t border-[#0b1b3d] font-sans">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12 border-b border-white/10 pb-12">
                <div class="col-span-1 md:col-span-1">
                    <div class="flex flex-col items-start gap-1 mb-6">
                        @php
                            $siteLogo = null;
                            try {
                                $siteLogo = isset($global_settings) && is_object($global_settings) && method_exists($global_settings, 'where') ? $global_settings->where('key', 'site_logo')->first() : \App\Models\Setting::where('key', 'site_logo')->first();
                            } catch (\Exception $e) {
                                $siteLogo = null;
                            }
                        @endphp
                        @if($siteLogo && $siteLogo->value && file_exists(public_path($siteLogo->value)) && $siteLogo->value !== 'images/logo.png')
                            <img src="{{ asset($siteLogo->value) }}" alt="EuroWorld Consultants Logo" class="h-14 md:h-16 object-contain bg-white rounded-xl px-4 py-2 shadow-md">
                        @else
                            <img src="{{ asset('images/logo.png') }}" alt="EuroWorld Consultants Logo" class="h-14 md:h-16 object-contain bg-white rounded-xl px-4 py-2 shadow-md">
                        @endif
                    </div>
                    <p class="text-sm text-gray-400 mb-6 leading-relaxed">Empowering students to achieve global success through quality education in Europe.</p>
                    <div class="flex space-x-4">
                        <a href="https://facebook.com/euroworld" target="_blank" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-yellow-400 hover:text-[#0b1b3d] transition-colors"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com/euroworld" target="_blank" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-yellow-400 hover:text-[#0b1b3d] transition-colors"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://instagram.com/euroworld" target="_blank" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-yellow-400 hover:text-[#0b1b3d] transition-colors"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://linkedin.com/company/euroworld" target="_blank" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-yellow-400 hover:text-[#0b1b3d] transition-colors"><i class="fa-brands fa-linkedin-in"></i></a>
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
                            <span class="text-gray-400">123 Education Boulevard,<br>City Center, 10001</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-phone text-red-600"></i>
                            <span class="text-gray-400">+1 234 567 8900</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-envelope text-red-600"></i>
                            <span class="text-gray-400">info@euroworld.edu</span>
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

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- Custom Script -->
    <script src="{{ asset('main.js') }}"></script>
</body>
</html>

