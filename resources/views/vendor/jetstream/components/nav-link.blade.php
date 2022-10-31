@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-0 py-3 lg:py-7 lg:px-4 hover:text-gray-300 color_nav_fuente bg-blue-100 rounded-2xl'
            : 'block px-0 py-3 lg:py-7 lg:px-4 hover:text-gray-300 color_nav_fuente';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
