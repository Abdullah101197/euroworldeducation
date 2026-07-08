@extends('layouts.main')

@section('title', 'All News & Updates - EuroWorld Consultants')
@section('description', 'Stay informed with the latest updates on admissions, scholarships, visa policies and more.')

@section('content')
    <!-- News & Updates Top Hero Banner -->
    <section class="relative pt-40 pb-20 bg-[#0b1b3d] font-sans overflow-hidden text-left border-b border-white/10">
        <!-- Abstract world map grid / background pattern -->
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <div class="absolute -right-20 -top-40 w-96 h-96 bg-white rounded-full mix-blend-overlay blur-3xl"></div>
            <div class="absolute left-1/4 bottom-0 w-80 h-80 bg-red-600 rounded-full mix-blend-overlay blur-3xl"></div>
            <div class="absolute inset-0" style="background-image: radial-gradient(rgba(255, 255, 255, 0.15) 1px, transparent 1px); background-size: 24px 24px;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                <!-- Left Content -->
                <div class="lg:w-3/5">
                    <h1 class="text-4xl md:text-5xl font-black text-white tracking-tight mb-4 leading-tight">
                        News & <span class="text-white">Updates</span>
                    </h1>
                    <p class="text-gray-300 max-w-xl text-base md:text-lg leading-relaxed font-normal">
                        Stay informed with the latest updates on admissions, scholarships, visa policies and more.
                    </p>
                </div>

                <!-- Right Graphic / Newspaper Illustration -->
                <div class="lg:w-2/5 flex justify-center lg:justify-end">
                    <div class="relative max-w-sm w-full">
                        <div class="bg-white/10 backdrop-blur-md p-4 rounded-2xl border border-white/20 shadow-2xl relative overflow-hidden transform rotate-2 hover:rotate-0 transition-transform duration-300">
                            <div class="bg-white rounded-xl p-4 shadow-inner text-[#0b1b3d]">
                                <div class="flex items-center justify-between border-b border-gray-200 pb-2 mb-3">
                                    <span class="font-serif font-black text-2xl tracking-widest uppercase">NEWS</span>
                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">EuroWorld Gazette</span>
                                </div>
                                <div class="space-y-2">
                                    <div class="h-3 bg-gray-800 rounded w-3/4"></div>
                                    <div class="h-2 bg-gray-300 rounded w-full"></div>
                                    <div class="h-2 bg-gray-300 rounded w-5/6"></div>
                                    <div class="h-2 bg-gray-300 rounded w-4/5"></div>
                                </div>
                                <div class="mt-4 flex items-center justify-between pt-2 border-t border-gray-100 text-[10px] font-semibold text-red-600">
                                    <span>2027 Admissions Open</span>
                                    <span>Read Full Report →</span>
                                </div>
                            </div>
                            <div class="absolute -bottom-3 -right-3 w-16 h-16 bg-[#c6181b] rounded-full flex items-center justify-center text-white shadow-lg transform -rotate-12">
                                <i class="fa-solid fa-graduation-cap text-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumbs -->
    <div class="bg-white border-b border-gray-100 py-3 font-sans">
        <div class="container mx-auto px-6">
            <nav class="flex items-center gap-2 text-xs md:text-sm font-semibold">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-[#c6181b] transition-colors">Home</a>
                <span class="text-gray-300 font-normal">/</span>
                <span class="text-[#0b1b3d] font-bold">News & Updates</span>
            </nav>
        </div>
    </div>

    <!-- Main Content Section -->
    <section class="py-12 bg-[#f8fafc] font-sans">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-8">
                
                <!-- Main Column (News Grid & Controls) -->
                <div class="lg:w-2/3">
                    
                    <!-- Top Header Row with Filter & Search -->
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8 bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
                        <h2 class="text-2xl md:text-3xl font-black text-[#0b1b3d] tracking-tight">
                            All <span class="text-[#c6181b]">News & Updates</span>
                        </h2>

                        <!-- Controls -->
                        <div class="flex flex-wrap items-center gap-3">
                            <!-- Category Dropdown -->
                            <div class="relative">
                                <select class="appearance-none bg-white border border-gray-200 rounded-xl pl-4 pr-10 py-2.5 text-xs md:text-sm font-semibold text-gray-700 shadow-sm focus:outline-none focus:border-[#c6181b] cursor-pointer">
                                    <option value="">All Categories</option>
                                    <option value="italy">Italy Updates</option>
                                    <option value="france">France Updates</option>
                                    <option value="germany">Germany Updates</option>
                                    <option value="scholarships">Scholarships</option>
                                    <option value="visa">Visa News</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-red-600">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </div>
                            </div>

                            <!-- Search Input -->
                            <form action="{{ route('blog') }}" method="GET" class="flex items-center">
                                <input type="text" name="search" placeholder="Search news..." value="{{ request('search') }}" class="bg-white border border-r-0 border-gray-200 rounded-l-xl px-4 py-2.5 text-xs md:text-sm text-gray-700 w-40 md:w-48 shadow-sm focus:outline-none focus:border-[#c6181b]">
                                <button type="submit" class="bg-[#0b1b3d] hover:bg-blue-900 text-white px-4 py-2.5 rounded-r-xl transition-colors shadow-sm text-sm">
                                    <i class="fa-solid fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Articles Grid -->
                    @php
                        // Check if we have enough database posts or fill with realistic mockup cards to guarantee exact visual match
                        $displayPosts = $posts->count() > 0 ? $posts : collect([
                            (object)[
                                'title' => 'Italy Opens Admissions for 2027 Intake',
                                'category_name' => 'ITALY UPDATES',
                                'flag' => '🇮🇹',
                                'date' => '31 May 2025',
                                'excerpt' => 'Many top Italian universities have started accepting applications for the 2027 intake. Apply early to secure your seat!',
                                'image' => 'https://images.unsplash.com/photo-1552832230-c0197dd311b5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            ],
                            (object)[
                                'title' => 'France Public Universities Applications Start in October',
                                'category_name' => 'FRANCE UPDATES',
                                'flag' => '🇫🇷',
                                'date' => '29 May 2025',
                                'excerpt' => 'Public universities in France will open applications from 1st October for the 2027 intake. Tuition fees as low as 250–400 Euro per year!',
                                'image' => 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            ],
                            (object)[
                                'title' => 'Hungary Scholarships for Pakistani Students',
                                'category_name' => 'SCHOLARSHIPS',
                                'flag' => '🇭🇺',
                                'date' => '27 May 2025',
                                'excerpt' => 'Study in Hungary with fully funded and partial scholarships. Applications are now open for bachelor and master degrees!',
                                'image' => 'https://images.unsplash.com/photo-1541432901042-2d8bd64b4a9b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            ],
                            (object)[
                                'title' => 'Italy Visa Processing Time Updated',
                                'category_name' => 'VISA NEWS',
                                'flag' => '🛂',
                                'date' => '25 May 2025',
                                'excerpt' => 'Latest update on Italy student visa processing time. Check current waiting time and plan your application accordingly.',
                                'image' => 'https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            ],
                            (object)[
                                'title' => 'Sweden Universities Open Applications for 2027',
                                'category_name' => 'SWEDEN UPDATES',
                                'flag' => '🇸🇪',
                                'date' => '23 May 2025',
                                'excerpt' => 'Several top-ranked Swedish universities are now accepting applications for the 2027 intake. High visa approval rates!',
                                'image' => 'https://images.unsplash.com/photo-1509869175650-a1d97972541a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            ],
                            (object)[
                                'title' => 'Top Universities Accepting Applications for 2027 Intake',
                                'category_name' => 'UNIVERSITY ADMISSIONS',
                                'flag' => '🎓',
                                'date' => '21 May 2025',
                                'excerpt' => 'Check the list of top universities across Europe accepting applications for 2027. Secure your study visa with expert help.',
                                'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            ],
                        ]);
                    @endphp

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($displayPosts as $post)
                            @php
                                $title = is_object($post) && isset($post->title) ? $post->title : '';
                                $catName = is_object($post) && isset($post->category_name) ? $post->category_name : ($post->category ? $post->category->name : 'UPDATES');
                                $flag = is_object($post) && isset($post->flag) ? $post->flag : '🇪🇺';
                                $date = is_object($post) && isset($post->date) ? $post->date : ($post->created_at ? $post->created_at->format('d M Y') : 'Today');
                                $excerpt = is_object($post) && isset($post->excerpt) ? $post->excerpt : strip_tags($post->content ?? '');
                                $img = is_object($post) && isset($post->image) ? (str_starts_with($post->image, 'http') ? $post->image : asset($post->image)) : 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80';
                            @endphp

                            <article class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-all duration-300 flex flex-col group">
                                <!-- Image & Flag Overlay -->
                                <div class="relative h-48 overflow-hidden bg-gray-100">
                                    <img src="{{ $img }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="{{ $title }}">
                                    <div class="absolute top-3 right-3 bg-white/95 backdrop-blur-sm px-2.5 py-1 rounded-lg shadow-sm border border-gray-100 text-base font-bold flex items-center justify-center">
                                        <span>{{ $flag }}</span>
                                    </div>
                                </div>

                                <!-- Body -->
                                <div class="p-6 flex-1 flex flex-col justify-between">
                                    <div>
                                        <!-- Category Pill & Date -->
                                        <div class="flex items-center gap-3 mb-3">
                                            <span class="bg-[#0b1b3d] text-white text-[10px] font-extrabold px-2.5 py-1 rounded uppercase tracking-wider shadow-sm">
                                                {{ $catName }}
                                            </span>
                                            <span class="text-gray-400 text-xs font-semibold flex items-center gap-1">
                                                <i class="fa-regular fa-calendar text-[11px]"></i> {{ $date }}
                                            </span>
                                        </div>

                                        <!-- Title -->
                                        <h3 class="text-lg font-bold text-[#0b1b3d] group-hover:text-[#c6181b] transition-colors line-clamp-2 mb-2 leading-snug">
                                            {{ $title }}
                                        </h3>

                                        <!-- Excerpt -->
                                        <p class="text-gray-600 text-xs md:text-sm leading-relaxed line-clamp-3 mb-5">
                                            {{ $excerpt }}
                                        </p>
                                    </div>

                                    <!-- Read More Link -->
                                    <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                                        <a href="#" class="flex items-center gap-1.5 text-xs font-extrabold text-[#c6181b] group-hover:text-red-800 transition-colors uppercase tracking-wider">
                                            Read More <i class="fa-solid fa-arrow-right text-[10px] transition-transform group-hover:translate-x-1"></i>
                                        </a>
                                        <span class="text-[11px] font-bold text-gray-300 group-hover:text-gray-400 transition-colors">EuroWorld Blog</span>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <!-- Clean Numbered Pagination -->
                    <div class="flex items-center justify-center gap-2 mt-12">
                        <span class="bg-[#0b1b3d] text-white px-4 py-2 rounded-xl font-bold text-sm shadow-sm cursor-pointer">1</span>
                        <a href="#" class="bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 px-4 py-2 rounded-xl font-semibold text-sm transition-colors shadow-sm">2</a>
                        <a href="#" class="bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 px-4 py-2 rounded-xl font-semibold text-sm transition-colors shadow-sm">3</a>
                        <span class="text-gray-400 px-2 font-bold">...</span>
                        <a href="#" class="bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 px-4 py-2 rounded-xl font-semibold text-sm transition-colors shadow-sm">10</a>
                        <a href="#" class="bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 px-4 py-2 rounded-xl font-semibold text-sm transition-colors shadow-sm flex items-center gap-1">Next <i class="fa-solid fa-chevron-right text-[10px]"></i></a>
                    </div>
                </div>

                <!-- Right Sidebar Column -->
                <div class="lg:w-1/3 space-y-6">
                    
                    <!-- Categories Widget -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h3 class="text-lg font-bold text-[#0b1b3d] mb-4 pb-3 border-b border-gray-100 flex items-center justify-between">
                            <span>Categories</span>
                            <i class="fa-solid fa-list text-gray-400 text-sm"></i>
                        </h3>
                        
                        @php
                            $sidebarCategories = [
                                ['name' => 'Italy Updates', 'flag' => '🇮🇹', 'count' => '12'],
                                ['name' => 'France Updates', 'flag' => '🇫🇷', 'count' => '09'],
                                ['name' => 'Germany Updates', 'flag' => '🇩🇪', 'count' => '07'],
                                ['name' => 'Hungary Updates', 'flag' => '🇭🇺', 'count' => '06'],
                                ['name' => 'Scholarships', 'flag' => '🎓', 'count' => '10'],
                                ['name' => 'Visa News', 'flag' => '🛂', 'count' => '11'],
                                ['name' => 'Embassy Updates', 'flag' => '🏛️', 'count' => '08'],
                                ['name' => 'University Admissions', 'flag' => '🏫', 'count' => '13'],
                                ['name' => 'Student Success Stories', 'flag' => '🌟', 'count' => '15'],
                            ];
                        @endphp

                        <ul class="space-y-1">
                            @foreach($sidebarCategories as $cat)
                                <li class="border-b border-gray-50 last:border-0 py-2.5">
                                    <a href="#" class="flex items-center justify-between text-sm font-semibold text-gray-700 hover:text-[#c6181b] transition-colors group">
                                        <span class="flex items-center gap-2.5">
                                            <span class="text-base group-hover:scale-110 transition-transform">{{ $cat['flag'] }}</span>
                                            <span>{{ $cat['name'] }}</span>
                                        </span>
                                        <span class="bg-blue-50 text-blue-800 group-hover:bg-red-50 group-hover:text-red-700 font-extrabold text-xs px-2.5 py-0.5 rounded-md transition-colors">
                                            {{ $cat['count'] }}
                                        </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Popular Posts Widget -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h3 class="text-lg font-bold text-[#0b1b3d] mb-4 pb-3 border-b border-gray-100 flex items-center justify-between">
                            <span>Popular Posts</span>
                            <i class="fa-solid fa-fire text-red-500 text-sm"></i>
                        </h3>

                        @php
                            $sidebarPopular = [
                                [
                                    'title' => 'Finland Study Visa Requirements 2027',
                                    'date' => '23 May 2025',
                                    'img' => 'https://images.unsplash.com/photo-1531366936337-7c912a4589a7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
                                ],
                                [
                                    'title' => 'UK New Visa Rules for International Students',
                                    'date' => '22 May 2025',
                                    'img' => 'https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
                                ],
                                [
                                    'title' => 'Cyprus 100% Visa Ratio for Pakistani Students',
                                    'date' => '20 May 2025',
                                    'img' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
                                ],
                            ];
                        @endphp

                        <div class="space-y-4">
                            @foreach($sidebarPopular as $pop)
                                <a href="#" class="flex items-center gap-3.5 group">
                                    <div class="w-16 h-14 shrink-0 rounded-xl overflow-hidden bg-gray-100 border border-gray-100">
                                        <img src="{{ $pop['img'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" alt="{{ $pop['title'] }}">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h4 class="text-xs font-bold text-[#0b1b3d] group-hover:text-[#c6181b] transition-colors line-clamp-2 leading-snug mb-1">
                                            {{ $pop['title'] }}
                                        </h4>
                                        <span class="text-[10px] text-gray-400 font-semibold flex items-center gap-1">
                                            <i class="fa-regular fa-clock text-[9px]"></i> {{ $pop['date'] }}
                                        </span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Stay Updated Newsletter Box -->
                    <div class="bg-[#0b1b3d] p-6 rounded-2xl shadow-md border border-white/10 text-white relative overflow-hidden">
                        <div class="absolute -right-8 -top-8 w-24 h-24 bg-red-600 opacity-20 rounded-full blur-xl"></div>
                        <div class="flex items-start gap-3 mb-4 relative z-10">
                            <div class="w-11 h-11 bg-[#c6181b] rounded-xl flex items-center justify-center text-white text-lg shrink-0 shadow-md">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-base leading-tight text-white">Stay Updated!</h4>
                                <p class="text-xs text-gray-300 mt-1 leading-relaxed">Subscribe to our newsletter and get the latest updates to your inbox.</p>
                            </div>
                        </div>
                        <form class="flex gap-2 relative z-10">
                            <input type="email" placeholder="Enter your email" class="flex-1 px-3.5 py-2.5 text-xs rounded-xl text-gray-800 border-0 shadow-inner focus:outline-none focus:ring-2 focus:ring-[#c6181b]">
                            <button type="submit" class="bg-[#c6181b] hover:bg-red-800 text-white font-bold text-xs px-4 py-2.5 rounded-xl transition-colors shadow-md shrink-0">
                                Subscribe
                            </button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
@endsection
