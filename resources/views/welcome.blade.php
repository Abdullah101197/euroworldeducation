<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EuroWorld Education - Your Journey to Global Education</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800" rel="stylesheet" />

    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            'theme-blue': '#0f172a',
                            'theme-red': '#dc2626',
                            'theme-dark-blue': '#0b192c',
                        }
                    }
                }
            }
        </script>
    @endif
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            /* Dotted background pattern */
            background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
            background-size: 20px 20px;
        }
        
        .badge {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            color: #334155;
            background-color: white;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);
            transition: all 0.3s ease;
        }
        
        .badge:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1);
        }
        
        .stat-item {
            display: flex;
            align-items: center;
            gap: 1.25rem;
            transition: all 0.3s ease;
        }
        
        .stat-item:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col pt-12 lg:pt-20 px-4 sm:px-6 lg:px-8">

    <!-- Top Navigation Placeholder (Optional) -->
    <nav class="absolute top-0 w-full left-0 p-6 flex justify-between items-center z-50">
        <div class="text-2xl font-black text-theme-blue ml-4 md:ml-12">
            EUROWORLD <span class="text-theme-red font-light">EDUCATION</span>
        </div>
        <div class="hidden md:flex gap-6 mr-12 text-sm font-semibold text-slate-600">
            <a href="#" class="hover:text-theme-red transition-colors">Home</a>
            <a href="#" class="hover:text-theme-red transition-colors">Universities</a>
            <a href="#" class="hover:text-theme-red transition-colors">Services</a>
            <a href="#" class="hover:text-theme-red transition-colors">Contact</a>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto w-full relative mt-12">
        <!-- Hero Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left Side -->
            <div class="space-y-8 relative z-10">
                <!-- Eyebrow -->
                <div class="flex items-center gap-3">
                    <div class="w-8 h-0.5 bg-[#dc2626]"></div>
                    <span class="text-xs font-bold tracking-widest text-[#0f172a] uppercase">Your Future. Our Guidance</span>
                </div>
                
                <!-- Headline -->
                <h1 class="text-5xl lg:text-7xl font-extrabold text-[#0f172a] leading-tight tracking-tight">
                    Your Journey to <br />
                    <span class="text-[#dc2626]">Global</span> Education
                </h1>
                
                <!-- Subheadline -->
                <p class="text-lg text-slate-600 max-w-lg leading-relaxed font-medium">
                    We make study abroad simple and successful. From university selection to visa approval, we are with you at every step of the way.
                </p>
                
                <!-- Badges -->
                <div class="flex flex-wrap gap-4 pt-2">
                    <div class="badge">
                        <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-slate-700">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <span class="leading-tight">Top Ranked<br/>Universities</span>
                    </div>
                    <div class="badge">
                        <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-green-600">
                            <i class="fa-solid fa-clipboard-check"></i>
                        </div>
                        <span class="leading-tight">End-to-End<br/>Assistance</span>
                    </div>
                    <div class="badge">
                        <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-slate-700">
                            <i class="fa-solid fa-file-shield"></i>
                        </div>
                        <span class="leading-tight">High Visa<br/>Success Rate</span>
                    </div>
                </div>
                
                <!-- Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-6">
                    <a href="#" class="inline-flex items-center gap-2 px-8 py-4 bg-[#dc2626] text-white font-semibold rounded-lg hover:bg-red-700 transition-all shadow-lg shadow-red-500/30 hover:shadow-red-500/50 hover:-translate-y-1">
                        Explore Destinations
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="#" class="inline-flex items-center gap-2 px-8 py-4 bg-white border-2 border-slate-200 text-slate-700 font-semibold rounded-lg hover:border-blue-200 hover:text-blue-700 hover:bg-slate-50 transition-all shadow-sm hover:-translate-y-1">
                        Book Free Consultation
                        <i class="fa-regular fa-calendar-check"></i>
                    </a>
                </div>
            </div>

            <!-- Right Side Image -->
            <div class="relative flex justify-center lg:justify-end z-0 mt-16 lg:mt-0">
                <!-- Abstract curved shape behind image -->
                <div class="absolute inset-0 bg-blue-100/60 rounded-full blur-3xl transform scale-[1.2] lg:translate-x-12 z-0"></div>
                <div class="absolute inset-0 bg-red-100/40 rounded-full blur-3xl transform scale-[0.8] lg:-translate-x-12 translate-y-12 z-0"></div>
                
                <!-- Main image -->
                <img src="{{ asset('images/hero.png') }}" alt="Student traveling" class="relative z-10 w-full max-w-[550px] object-contain drop-shadow-2xl hover:scale-[1.02] transition-transform duration-700" />
                
                <!-- Floating badge (Study in 50+ Countries) -->
                <div class="absolute right-0 lg:-right-8 top-1/4 bg-white p-4 rounded-xl shadow-xl z-20 flex items-center gap-4 animate-bounce" style="animation-duration: 3s;">
                    <div class="w-12 h-12 rounded-full bg-[#0b192c] flex items-center justify-center text-white text-xl shadow-inner">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <div class="pr-2">
                        <p class="text-[11px] text-slate-500 font-semibold uppercase tracking-wider mb-0.5">Study in</p>
                        <p class="font-bold text-slate-800 text-[15px]">50+ Countries</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Stats Banner -->
        <div class="relative mt-24 mb-12">
            <div class="bg-[#0b192c] text-white rounded-[2rem] p-8 lg:p-12 shadow-2xl relative overflow-hidden border border-slate-700/50">
                <!-- Abstract shapes inside banner -->
                <div class="absolute right-0 top-0 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
                <div class="absolute left-0 bottom-0 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/4"></div>
                
                <div class="relative z-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-6 divide-y sm:divide-y-0 sm:divide-x divide-slate-700/60">
                    
                    <div class="stat-item px-4 pt-6 sm:pt-0 border-t-0 sm:border-l-0">
                        <div class="w-16 h-16 rounded-full border border-slate-600/60 bg-slate-800/30 flex items-center justify-center text-2xl flex-shrink-0 shadow-inner">
                            <i class="fa-solid fa-user-group text-blue-100"></i>
                        </div>
                        <div>
                            <h3 class="text-3xl font-extrabold tracking-tight">12,000+</h3>
                            <p class="text-slate-400 text-sm mt-1.5 font-medium">Successful Students</p>
                        </div>
                    </div>
                    
                    <div class="stat-item px-4 pt-6 sm:pt-0">
                        <div class="w-16 h-16 rounded-full border border-slate-600/60 bg-slate-800/30 flex items-center justify-center text-2xl flex-shrink-0 shadow-inner">
                            <i class="fa-solid fa-building-columns text-blue-100"></i>
                        </div>
                        <div>
                            <h3 class="text-3xl font-extrabold tracking-tight">500+</h3>
                            <p class="text-slate-400 text-sm mt-1.5 font-medium">Partner Universities</p>
                        </div>
                    </div>
                    
                    <div class="stat-item px-4 pt-6 lg:pt-0 sm:border-l-0 lg:border-l">
                        <div class="w-16 h-16 rounded-full border border-slate-600/60 bg-slate-800/30 flex items-center justify-center text-2xl flex-shrink-0 shadow-inner">
                            <i class="fa-solid fa-earth-americas text-blue-100"></i>
                        </div>
                        <div>
                            <h3 class="text-3xl font-extrabold tracking-tight">50+</h3>
                            <p class="text-slate-400 text-sm mt-1.5 font-medium">Countries</p>
                        </div>
                    </div>
                    
                    <div class="stat-item px-4 pt-6 lg:pt-0">
                        <div class="w-16 h-16 rounded-full border border-slate-600/60 bg-slate-800/30 flex items-center justify-center text-2xl flex-shrink-0 shadow-inner">
                            <i class="fa-solid fa-award text-blue-100"></i>
                        </div>
                        <div>
                            <h3 class="text-3xl font-extrabold tracking-tight">95%</h3>
                            <p class="text-slate-400 text-sm mt-1.5 font-medium">Visa Success Rate</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>

</body>
</html>
