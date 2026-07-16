@php
    $siteLogo = null;
    try { $siteLogo = \App\Models\Setting::where('key', 'site_logo')->first(); } catch (\Exception $e) { $siteLogo = null; }
@endphp

@if($siteLogo && $siteLogo->value && $siteLogo->value !== 'images/logo.png' && $siteLogo->value !== 'images/logo.svg')
    <img src="{{ asset($siteLogo->value) }}" onerror="this.onerror=null; this.src='{{ file_exists(public_path('images/logo.svg')) ? asset('images/logo.svg') : asset('images/logo.png') }}';" alt="EuroWorld Consultants Logo" {{ $attributes->merge(['class' => 'object-contain']) }}>
@else
    <img src="{{ file_exists(public_path('images/logo.svg')) ? asset('images/logo.svg') : asset('images/logo.png') }}" alt="EuroWorld Consultants Logo" {{ $attributes->merge(['class' => 'object-contain']) }}>
@endif
