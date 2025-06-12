@props(['active' => false ])

@php
 $classes = 'block text-left px-3 text-sm leading-6 hover:bg-darkerb focus:bg-darkerb hover:text-white focus:text-white';

 if ($active) $classes .= ' bg-darkerb text-white';
@endphp
<a {{ $attributes(['class' => $classes]) }}
>{{ $slot }} </a>
