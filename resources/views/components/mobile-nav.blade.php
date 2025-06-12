@props(['route'])

@php
    $classes= Request::routeIs($route) ? 'text-4xl font-bold uppercase' : 'text-4xl hover:underline hover:decoration-darkb';
@endphp

<a href="{{  route($route) }}" {{ $attributes->merge(['class' => " ". $classes]) }}
    >{{ $slot }}
</a>
