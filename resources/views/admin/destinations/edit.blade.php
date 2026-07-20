<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('admin.settings.index', ['tab' => 'destinations']) }}" class="text-slate-500 hover:text-blue-600 transition-colors">
                <i class="fa-solid fa-arrow-left text-lg"></i>
            </a>
            <div>
                <h2 class="font-extrabold text-2xl text-gray-900 tracking-tight">
                    {{ __('Edit Destination: ') }} {{ $destination->title }}
                </h2>
            </div>
        </div>
        <!-- Include Summernote Lite CSS & FontAwesome -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </x-slot>

    <div class="py-10 bg-slate-100/60 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-3xl shadow-xl border border-slate-200 overflow-hidden">
                <div class="px-6 py-5 bg-gradient-to-r from-teal-600 to-emerald-600 text-white flex items-center gap-3">
                    <span class="w-10 h-10 rounded-xl bg-white/20 text-white flex items-center justify-center text-lg"><i class="fa-solid fa-pen-to-square"></i></span>
                    <div>
                        <h4 class="font-extrabold text-lg">Update Destination Information</h4>
                        <p class="text-xs text-teal-100">Make changes to the destination page content.</p>
                    </div>
                </div>

                <form method="POST" action="{{ route('admin.destinations.update', $destination->id) }}" enctype="multipart/form-data" class="p-8 space-y-6">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Destination Name (Country) <span class="text-red-500">*</span></label>
                            <input type="text" name="title" value="{{ old('title', $destination->title) }}" required class="w-full rounded-xl border-slate-200 bg-white shadow-sm text-sm py-3 font-medium text-slate-800 focus:border-teal-500 focus:ring-teal-500">
                        </div>
                        
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Slug (URL endpoint)</label>
                            <input type="text" name="slug" value="{{ old('slug', $destination->slug) }}" class="w-full rounded-xl border-slate-200 bg-white shadow-sm text-sm py-3 font-medium text-slate-800 focus:border-teal-500 focus:ring-teal-500">
                            <p class="text-[10px] text-slate-500 mt-1">Leave blank to auto-generate from title.</p>
                        </div>
                        
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Feature Image</label>
                            <input type="file" name="image" accept="image/*" class="w-full rounded-xl border border-slate-200 bg-white shadow-sm text-sm py-2 px-3 focus:border-teal-500 focus:ring-teal-500">
                            @if($destination->image)
                                <div class="mt-2 flex items-center gap-3">
                                    <img src="{{ asset('storage/' . $destination->image) }}" class="w-12 h-12 rounded object-cover border border-slate-200">
                                    <span class="text-xs text-slate-500">Current Image</span>
                                </div>
                            @endif
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Page Content (Rich Text) <span class="text-red-500">*</span></label>
                            <textarea name="content" rows="12" required class="richtext block w-full rounded-xl border-slate-200 shadow-sm text-sm p-3 font-normal text-slate-800 focus:border-teal-500 focus:ring-teal-500">{{ old('content', $destination->content) }}</textarea>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-100 flex items-center justify-end gap-3">
                        <a href="{{ route('admin.settings.index', ['tab' => 'destinations']) }}" class="px-6 py-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-sm transition-colors">Cancel</a>
                        <button type="submit" style="background-color: #0d9488 !important; color: #ffffff !important;" class="px-8 py-3 rounded-xl bg-teal-600 hover:bg-teal-700 text-white font-bold text-sm shadow-md transition-all">
                            <i class="fa-solid fa-check mr-1.5"></i> Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Summernote Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.richtext').summernote({
                height: 400,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
</x-app-layout>
