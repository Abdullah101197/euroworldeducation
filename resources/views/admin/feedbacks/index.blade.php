<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Student Feedbacks & Reviews') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    
                    @if(session('success'))
                        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="mb-4 flex justify-between items-center">
                        <form action="{{ route('admin.feedbacks.index') }}" method="GET" class="flex items-center">
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search feedbacks..." class="shadow appearance-none border rounded w-64 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-2">
                            <button type="submit" style="background-color: #0b1b3d !important; color: #ffffff !important; padding: 0.5rem 1.25rem !important; border-radius: 0.5rem !important; font-weight: 800 !important;" class="bg-[#0b1b3d] hover:bg-blue-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                <i class="fa-solid fa-magnifying-glass mr-1"></i> Search
                            </button>
                            @if(request('search'))
                                <a href="{{ route('admin.feedbacks.index') }}" class="ml-2 text-gray-500 hover:text-gray-800 text-sm">Clear</a>
                            @endif
                        </form>
                    </div>

                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Date</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Rating & Category</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Student Info</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Feedback Message</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($feedbacks as $feedback)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $feedback->created_at->format('M d, Y') }}</p>
                                        <p class="text-gray-500 whitespace-no-wrap text-xs">{{ $feedback->created_at->format('H:i') }}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center gap-0.5 text-amber-500 mb-1">
                                            @for($s = 1; $s <= 5; $s++)
                                                @if($s <= $feedback->rating)
                                                    <i class="fa-solid fa-star text-xs"></i>
                                                @else
                                                    <i class="fa-regular fa-star text-xs text-gray-300"></i>
                                                @endif
                                            @endfor
                                            <span class="text-xs font-bold text-gray-700 ml-1">({{ $feedback->rating }}/5)</span>
                                        </div>
                                        <span class="inline-block px-2 py-0.5 rounded text-[11px] font-bold bg-blue-100 text-blue-800 border border-blue-200">{{ $feedback->category }}</span>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap font-bold">{{ $feedback->name }}</p>
                                        @if($feedback->email)
                                            <p class="text-gray-600 whitespace-no-wrap text-xs"><a href="mailto:{{ $feedback->email }}" class="text-blue-600 hover:underline">{{ $feedback->email }}</a></p>
                                        @endif
                                        @if($feedback->phone)
                                            <p class="text-gray-500 whitespace-no-wrap text-xs"><a href="tel:{{ $feedback->phone }}" class="hover:underline">{{ $feedback->phone }}</a></p>
                                        @endif
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-700 text-xs sm:text-sm max-w-md leading-relaxed">{{ \Illuminate\Support\Str::limit($feedback->message, 140) }}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        @if($feedback->is_reviewed)
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                <span class="relative">Reviewed</span>
                                            </span>
                                        @else
                                            <span class="relative inline-block px-3 py-1 font-semibold text-yellow-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-yellow-200 opacity-50 rounded-full"></span>
                                                <span class="relative">New / Pending</span>
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center space-x-2">
                                            <a href="{{ route('admin.feedbacks.show', $feedback) }}" class="text-sm bg-blue-100 hover:bg-blue-200 text-blue-800 font-semibold py-1 px-3 border border-blue-400 rounded shadow">
                                                View
                                            </a>
                                            <form action="{{ route('admin.feedbacks.toggle-status', $feedback) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="text-sm bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-1 px-3 border border-gray-400 rounded shadow">
                                                    {{ $feedback->is_reviewed ? 'Mark Pending' : 'Mark Reviewed' }}
                                                </button>
                                            </form>
                                            <form action="{{ route('admin.feedbacks.destroy', $feedback) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this feedback?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-sm bg-red-100 hover:bg-red-200 text-red-800 font-semibold py-1 px-3 border border-red-400 rounded shadow">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-5 py-8 border-b border-gray-200 bg-white text-sm text-center text-gray-500 font-medium">
                                        No feedbacks submitted yet.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    
                    <div class="mt-4">
                        {{ $feedbacks->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
