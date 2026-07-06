@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center px-4 py-2 bg-gray-800 border-l-4 border-brand-gold text-white text-sm font-medium transition duration-150 ease-in-out'
            : 'flex items-center px-4 py-2 border-l-4 border-transparent text-gray-300 hover:bg-gray-700 hover:text-white text-sm font-medium transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
