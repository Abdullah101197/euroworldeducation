@php
    $siteLogo = \App\Models\Setting::where('key', 'site_logo')->first();
@endphp

@if($siteLogo && $siteLogo->value)
    <img src="{{ asset($siteLogo->value) }}" alt="Euroworld Education Logo" {{ $attributes->merge(['class' => 'object-contain']) }}>
@else
    <div {{ $attributes->merge(['class' => 'font-bold text-2xl tracking-tighter flex items-center gap-2']) }}>
        <span><span class="text-brand-red">EURO</span><span class="text-brand-gold">WORLD</span></span>
        <span class="text-sm uppercase tracking-widest opacity-80 mt-1">Education</span>
    </div>
@endif
