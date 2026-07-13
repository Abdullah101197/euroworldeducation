<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <span class="text-xs font-bold uppercase tracking-widest text-indigo-600 bg-indigo-50 px-2.5 py-1 rounded-full border border-indigo-100">Publishing Studio</span>
                <h2 class="font-extrabold text-2xl text-slate-800 leading-tight mt-1">
                    {{ __('Create New Blog Post') }}
                </h2>
            </div>
            <a href="{{ route('admin.posts.index') }}" class="inline-flex items-center gap-2 bg-slate-100 hover:bg-slate-200 text-slate-700 text-sm font-bold px-4 py-2 rounded-xl transition-all">
                <i class="fa-solid fa-arrow-left"></i> Back to All Posts
            </a>
        </div>
    </x-slot>

    <!-- Quill Editor & FontAwesome CDN -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <div class="py-10 bg-slate-50 min-h-screen">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            
            @if($errors->any())
                <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-6 py-4 rounded-2xl shadow-sm">
                    <p class="font-bold mb-1"><i class="fa-solid fa-triangle-exclamation mr-2"></i>Please check the following errors:</p>
                    <ul class="list-disc list-inside text-sm space-y-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" id="post-create-form" class="space-y-8">
                @csrf
                
                <div class="bg-white rounded-3xl shadow-xl border border-slate-100 p-8 md:p-10 space-y-6">
                    
                    <!-- Post Title -->
                    <div>
                        <label class="block text-sm font-extrabold text-slate-800 mb-2">Article Title <span class="text-red-500">*</span></label>
                        <input type="text" name="title" required value="{{ old('title') }}" placeholder="e.g. Top 10 Fully Funded Scholarships in Europe for 2026/2027" class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-slate-800 font-semibold text-base focus:bg-white focus:outline-none focus:border-[#0b1b3d] focus:ring-2 focus:ring-[#0b1b3d]/10 transition-all shadow-inner">
                    </div>

                    <!-- Category & Image Upload Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                        <!-- Category Selection -->
                        <div>
                            <label class="block text-sm font-extrabold text-slate-800 mb-2">Category / Topic <span class="text-red-500">*</span></label>
                            <select name="category_id" required class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-slate-800 font-semibold text-sm focus:bg-white focus:outline-none focus:border-[#0b1b3d] focus:ring-2 focus:ring-[#0b1b3d]/10 transition-all shadow-inner">
                                <option value="">-- Choose Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Banner Image with Live Preview -->
                        <div>
                            <label class="block text-sm font-extrabold text-slate-800 mb-2">Hero Banner Image <span class="text-red-500">*</span></label>
                            <div class="relative border-2 border-dashed border-slate-200 rounded-2xl p-4 bg-slate-50 hover:bg-slate-100/60 transition-colors text-center cursor-pointer" onclick="document.getElementById('post_image_input').click()">
                                <input type="file" name="image" id="post_image_input" accept="image/*" class="hidden" onchange="previewPostImage(event)">
                                <div id="image_placeholder" class="py-4">
                                    <i class="fa-solid fa-cloud-arrow-up text-3xl text-indigo-500 mb-2"></i>
                                    <p class="text-xs font-bold text-slate-700">Click to Browse or Drag Image Here</p>
                                    <p class="text-[11px] text-slate-400 mt-0.5">Supports JPG, PNG, WEBP (Max 4MB)</p>
                                </div>
                                <div id="image_preview_box" class="hidden relative py-1">
                                    <img id="image_preview_img" src="" class="h-28 mx-auto rounded-xl object-cover shadow-md border">
                                    <p class="text-[11px] text-emerald-600 font-bold mt-2 flex items-center justify-center gap-1">
                                        <i class="fa-solid fa-check-circle"></i> Image Selected (Click to change)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rich Text Editor Section -->
                    <div class="pt-4">
                        <div class="flex items-center justify-between mb-2">
                            <label class="block text-sm font-extrabold text-slate-800">Article Content <span class="text-red-500">*</span></label>
                            <span class="text-xs text-slate-400 font-medium">Use toolbar above to format headings, bold text, or lists</span>
                        </div>
                        <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-inner bg-white">
                            <!-- Quill Toolbar Container -->
                            <div id="quill_editor_container" style="min-height: 320px; font-size: 15px; font-family: inherit;" class="p-4 text-slate-800"></div>
                        </div>
                        <!-- Hidden textarea where Quill outputs clean HTML for Laravel -->
                        <textarea name="content" id="hidden_content_textarea" class="hidden" required>{{ old('content') }}</textarea>
                    </div>

                    <!-- Action Bar -->
                    <div class="pt-6 border-t border-slate-100 flex items-center justify-end gap-4">
                        <a href="{{ route('admin.posts.index') }}" class="px-6 py-3.5 rounded-xl border border-slate-200 text-slate-600 font-bold text-sm hover:bg-slate-100 transition-all">
                            Cancel
                        </a>
                        <button type="submit" onclick="syncQuillContent()" class="bg-gradient-to-r from-[#0b1b3d] to-blue-800 hover:from-blue-900 hover:to-[#0b1b3d] text-white font-extrabold py-3.5 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 flex items-center gap-2 transform hover:-translate-y-0.5 text-sm">
                            <i class="fa-solid fa-paper-plane"></i> Publish Blog Post
                        </button>
                    </div>

                </div>
            </form>
            
        </div>
    </div>

    <script>
        // Initialize Quill Rich Text Editor
        var quill = new Quill('#quill_editor_container', {
            theme: 'snow',
            placeholder: 'Write your inspiring study abroad article or news update here...',
            modules: {
                toolbar: [
                    [{ 'header': [1, 2, 3, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    [{ 'color': [] }, { 'background': [] }],
                    ['blockquote', 'link'],
                    ['clean']
                ]
            }
        });

        // Load existing old content if validation failed previously
        const hiddenArea = document.getElementById('hidden_content_textarea');
        if (hiddenArea.value.trim() !== '') {
            quill.root.innerHTML = hiddenArea.value;
        }

        // Sync Quill HTML content back to hidden textarea before form submission
        function syncQuillContent() {
            if (quill.getText().trim().length === 0 && quill.root.innerHTML === '<p><br></p>') {
                hiddenArea.value = '';
            } else {
                hiddenArea.value = quill.root.innerHTML;
            }
        }

        // Also bind to form submit event to guarantee sync
        document.getElementById('post-create-form').addEventListener('submit', function() {
            syncQuillContent();
        });

        // Instant Image Live Preview
        function previewPostImage(event) {
            const input = event.target;
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('image_preview_img').src = e.target.result;
                    document.getElementById('image_placeholder').classList.add('hidden');
                    document.getElementById('image_preview_box').classList.remove('hidden');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</x-app-layout>
