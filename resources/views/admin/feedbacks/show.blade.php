<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight flex items-center justify-between">
            <span>{{ __('Feedback Details') }}</span>
            <a href="{{ route('admin.feedbacks.index') }}" class="text-sm bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                &larr; Back to Feedbacks
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="mb-8 border-b pb-4 flex justify-between items-start">
                        <div>
                            <h3 class="text-2xl font-bold">{{ $feedback->name }}</h3>
                            <p class="text-gray-500 text-sm mt-1">Submitted on {{ $feedback->created_at->format('F j, Y, g:i a') }}</p>
                        </div>
                        <div>
                            @if($feedback->is_reviewed)
                                <span class="bg-green-200 text-green-800 py-1 px-3 rounded-full text-sm font-semibold">Reviewed</span>
                            @else
                                <span class="bg-yellow-200 text-yellow-800 py-1 px-3 rounded-full text-sm font-semibold">Pending Review</span>
                            @endif
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <h4 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-2">Student Contact Info</h4>
                            <div class="bg-gray-50 p-4 rounded-lg space-y-2">
                                <p><strong>Email:</strong> 
                                    @if($feedback->email)
                                        <a href="mailto:{{ $feedback->email }}" class="text-blue-600 hover:underline">{{ $feedback->email }}</a>
                                    @else
                                        <span class="text-gray-400 italic">Not provided</span>
                                    @endif
                                </p>
                                <p><strong>Phone:</strong> 
                                    @if($feedback->phone)
                                        <a href="tel:{{ $feedback->phone }}" class="text-blue-600 hover:underline">{{ $feedback->phone }}</a>
                                    @else
                                        <span class="text-gray-400 italic">Not provided</span>
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-2">Rating & Category</h4>
                            <div class="bg-gray-50 p-4 rounded-lg space-y-2">
                                <div class="flex items-center gap-1 text-amber-500">
                                    @for($s = 1; $s <= 5; $s++)
                                        @if($s <= $feedback->rating)
                                            <i class="fa-solid fa-star text-base"></i>
                                        @else
                                            <i class="fa-regular fa-star text-base text-gray-300"></i>
                                        @endif
                                    @endfor
                                    <span class="text-sm font-bold text-gray-800 ml-2">({{ $feedback->rating }} / 5 Stars)</span>
                                </div>
                                <p><strong>Category:</strong> <span class="inline-block px-2 py-0.5 rounded text-xs font-bold bg-blue-100 text-blue-800">{{ $feedback->category }}</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h4 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-2">Feedback & Suggestions</h4>
                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-100">
                            <div class="whitespace-pre-wrap text-gray-800 leading-relaxed">{{ $feedback->message }}</div>
                        </div>
                    </div>

                    <div class="flex justify-end space-x-4 border-t pt-6">
                        <form action="{{ route('admin.feedbacks.toggle-status', $feedback) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ $feedback->is_reviewed ? 'Mark as Pending' : 'Mark as Reviewed' }}
                            </button>
                        </form>
                        <form action="{{ route('admin.feedbacks.destroy', $feedback) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this feedback permanently?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Delete Permanently
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
