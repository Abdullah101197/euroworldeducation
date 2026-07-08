@php
    $siteLogo = \App\Models\Setting::where('key', 'site_logo')->first();
@endphp

@if($siteLogo && $siteLogo->value && file_exists(public_path($siteLogo->value)) && $siteLogo->value !== 'images/logo.png')
    <img src="{{ asset($siteLogo->value) }}" alt="EuroWorld Consultants Logo" {{ $attributes->merge(['class' => 'object-contain']) }}>
@else
    <img src="{{ asset('images/logo.png') }}" alt="EuroWorld Consultants Logo" {{ $attributes->merge(['class' => 'object-contain']) }}>
@endif
