@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-0 py-3 lg:py-7 lg:px-4 text-orange-400 font-bold hover:-translate-y-1'
            : 'block px-0 py-3 lg:py-7 lg:px-4 text-blue-600 hover:-translate-y-1';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
