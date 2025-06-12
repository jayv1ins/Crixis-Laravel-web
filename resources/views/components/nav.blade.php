@props(['route'])

@php
    $classes= Request::routeIs($route) ? 'text-xs font-bold uppercase' : 'hover:underline hover:decoration-darkb';
@endphp

<a href="{{  route($route) }}" {{ $attributes->merge(['class' => " ". $classes]) }}
    >{{ $slot }}
</a>
