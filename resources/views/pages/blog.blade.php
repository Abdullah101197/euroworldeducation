@extends('layouts.main')

@section('title', 'Study Abroad Blog - Visas, Admissions & Tips')
@section('description', 'Stay updated with the latest news on admissions, visas, scholarships, and university life abroad.')

@section('content')
<!-- Blog Hero -->
    <section class="relative pt-40 pb-20 bg-[#0b1b3d] font-sans overflow-hidden text-center">
<!-- Blog Hero -->
    <section class="relative pt-40 pb-20 bg-[#0b1b3d] font-sans overflow-hidden text-center">
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Latest <span class="text-[#c6181b]">Insights</span></h1>
            <p class="text-gray-300 max-w-2xl mx-auto">Stay updated with the latest news on admissions, visas, and university life abroad.</p>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="py-16 bg-light font-sans">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-10">
                
                <!-- Main Content (Articles Grid) -->
                <div class="lg:w-2/3">
                    @if($posts->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            @foreach($posts as $post)
                                <article class="bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100 hover:shadow-md transition-shadow">
                                    <div class="h-48 bg-gray-200">
                                        @if($post->image)
                                            <img src="{{ asset($post->image) }}" class="w-full h-full object-cover" alt="{{ $post->title }}">
                                        @else
                                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover" alt="Blog Post">
                                        @endif
                                    </div>
                                    <div class="p-6">
                                        @if($post->category)
                                            <div class="text-xs text-red-600 font-bold uppercase tracking-wider mb-2">{{ $post->category->name }}</div>
                                        @endif
                                        <h3 class="text-xl font-bold text-[#0b1b3d] mb-3 leading-tight">{{ $post->title }}</h3>
                                        <p class="text-gray-500 text-sm mb-4 leading-relaxed line-clamp-3">{{ strip_tags($post->content) }}</p>
                                        <span class="text-xs text-gray-400 font-medium">{{ $post->created_at->format('M d, Y') }}</span>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                        
                        <!-- Pagination -->
                        <div class="mt-12">
                            {{ $posts->links() }}
                        </div>
                    @else
                        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 text-center">
                            <h3 class="text-xl font-bold text-[#0b1b3d] mb-2">No Articles Found</h3>
                            <p class="text-gray-500">Check back later for new updates and insights.</p>
                        </div>
                    @endif
                </div>
                
                <!-- Sidebar -->
                <div class="lg:w-1/3 space-y-8">
                    
                    <!-- Search -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h4 class="text-lg font-bold text-[#0b1b3d] mb-4">Search</h4>
                        <div class="relative">
                            <input type="text" placeholder="Search articles..." class="w-full pl-4 pr-10 py-3 rounded-lg border border-gray-200 focus:outline-none focus:border-[#c6181b] focus:ring-1 focus:ring-[#c6181b] transition-colors">
                            <button class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-[#c6181b]">
                                <i class="fa-solid fa-search"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Categories -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h4 class="text-lg font-bold text-[#0b1b3d] mb-4">Categories</h4>
                        <ul class="space-y-2">
                            @foreach($categories as $category)
                                <li>
                                    <a href="#" class="flex items-center justify-between py-2 text-gray-600 hover:text-[#c6181b] transition-colors border-b border-gray-50 last:border-0">
                                        <span>{{ $category->name }}</span>
                                        <span class="text-xs font-semibold bg-gray-100 px-2 py-1 rounded-full text-gray-500">{{ $category->posts()->count() }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <!-- Popular Posts -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h4 class="text-lg font-bold text-[#0b1b3d] mb-4">Popular Posts</h4>
                        <div class="space-y-4">
                            @foreach($popularPosts as $post)
                                <a href="#" class="flex gap-4 group">
                                    <div class="w-20 h-20 shrink-0 rounded-lg overflow-hidden bg-gray-200">
                                        @if($post->image)
                                            <img src="{{ asset($post->image) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                        @else
                                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                        @endif
                                    </div>
                                    <div>
                                        <h5 class="text-sm font-bold text-[#0b1b3d] group-hover:text-[#c6181b] transition-colors leading-tight mb-1 line-clamp-2">{{ $post->title }}</h5>
                                        <span class="text-[10px] text-gray-400 font-medium uppercase">{{ $post->created_at->format('M d, Y') }}</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Newsletter -->
                    <div class="bg-[#0b1b3d] p-6 rounded-2xl shadow-sm relative overflow-hidden">
                        <div class="absolute -right-10 -top-10 w-32 h-32 bg-white opacity-5 rounded-full blur-2xl"></div>
                        <h4 class="text-lg font-bold text-white mb-2 relative z-10">Subscribe to our Newsletter</h4>
                        <p class="text-gray-300 text-sm mb-4 relative z-10">Get the latest updates and offers directly to your inbox.</p>
                        <form class="relative z-10">
                            <input type="email" placeholder="Your email address" class="w-full px-4 py-3 rounded-lg border-0 mb-3 focus:outline-none focus:ring-2 focus:ring-[#c6181b]">
                            <button type="button" class="w-full bg-[#c6181b] text-white font-bold py-3 rounded-lg hover:bg-red-800 transition-colors shadow-md">Subscribe Now</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
@endsection
