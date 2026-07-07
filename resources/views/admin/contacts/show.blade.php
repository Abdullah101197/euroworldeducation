<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight flex items-center justify-between">
            <span>{{ __('Contact Lead Details') }}</span>
            <a href="{{ route('admin.contacts.index') }}" class="text-sm bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                &larr; Back to Leads
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="mb-8 border-b pb-4 flex justify-between items-start">
                        <div>
                            <h3 class="text-2xl font-bold">{{ $contact->name }}</h3>
                            <p class="text-gray-500 text-sm mt-1">Submitted on {{ $contact->created_at->format('F j, Y, g:i a') }}</p>
                        </div>
                        <div>
                            @if($contact->is_contacted)
                                <span class="bg-green-200 text-green-800 py-1 px-3 rounded-full text-sm font-semibold">Contacted</span>
                            @else
                                <span class="bg-yellow-200 text-yellow-800 py-1 px-3 rounded-full text-sm font-semibold">Pending</span>
                            @endif
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <h4 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-2">Contact Information</h4>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="mb-2"><strong>Email:</strong> <a href="mailto:{{ $contact->email }}" class="text-blue-600 hover:underline">{{ $contact->email }}</a></p>
                                @if($contact->phone)
                                    <p><strong>Phone:</strong> <a href="tel:{{ $contact->phone }}" class="text-blue-600 hover:underline">{{ $contact->phone }}</a></p>
                                @else
                                    <p><strong>Phone:</strong> <span class="text-gray-400 italic">Not provided</span></p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h4 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-2">Message Details</h4>
                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-100">
                            <h5 class="text-lg font-semibold mb-4 pb-2 border-b">Subject: {{ $contact->subject }}</h5>
                            <div class="whitespace-pre-wrap text-gray-800 leading-relaxed">{{ $contact->message }}</div>
                        </div>
                    </div>

                    <div class="flex justify-end space-x-4 border-t pt-6">
                        <form action="{{ route('admin.contacts.toggle-status', $contact) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ $contact->is_contacted ? 'Mark as Pending' : 'Mark as Contacted' }}
                            </button>
                        </form>
                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this lead permanently?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Delete Lead
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
