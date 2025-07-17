@php
    $logoType = $attributes->get('type', 'default');
    $logoSrc = match($logoType) {
        'icon' => asset('images/logos/logo-icon.svg'),
        'large' => asset('images/logos/logo-large.svg'),
        default => asset('images/logos/logo.svg'),
    };
    
    // Default classes for responsive behavior
    $defaultClasses = 'h-auto max-w-full';
@endphp

<img 
    src="{{ $logoSrc }}" 
    alt="{{ config('app.name') }} Logo" 
    {{ $attributes->merge(['class' => $defaultClasses]) }}
    loading="lazy"
/>
